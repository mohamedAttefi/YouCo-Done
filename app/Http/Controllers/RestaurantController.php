<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Restaurateur;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = request('q');

        $restaurants = Restaurant::where('is_deleted', false)
            ->where(function ($query) use ($search) {
                $query->where('city', 'like', "%{$search}%")
                    ->orWhere('name', 'like', "%{$search}%")
                    ->orWhere('cuisine_type', 'like', "%{$search}%");
            })
            ->get();

        return view('Restaurants', ['restaurants' => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AddRestaurant');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'cuisine_type'     => 'required|string|max:100',
            'description'     => 'nullable|string|max:255',
            'city'        => 'required|string|max:100',
            'address'     => 'required|string',
            'capacity'    => 'required|integer|min:1',
            'images.*'    => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ]);

        // dd($request->opening_time);

        $restaurateur = Auth::user()->asRestaurateur();

        $restaurant = $restaurateur->restaurants()->create(
            collect($request)->except('images')->toArray()
        );


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {

                $path = $image->store('restaurants', 'public');

                $restaurant->photos()->create([
                    'filename' => $image->getClientOriginalName(),
                    'url'      => $path,
                    'type'     => 'gallery',
                ]);
            }
        }

        return redirect()
            ->route('restaurateur.dashboard')
            ->with('success', 'Restaurant added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        $menuItems = $restaurant->menus;
        return view('restaurant', ['restaurant' => $restaurant, 'menuItems' => $menuItems]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        return view('EditRestaurant', ['restaurant' => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $restaurant = Restaurateur::find(Auth::id())->restaurants()->find($id);
        $request->validate([
            'name'          => 'required|string|max:255',
            'cuisine_type'  => 'required|string|max:100',
            'description'   => 'nullable|string|max:255',
            'city'          => 'required|string|max:100',
            'address'       => 'required|string',
            'capacity'      => 'required|integer|min:1',
            'images.*' => 'nullable|string|url|max:2048',
        ]);

        $restaurant->update(collect($request)->except('images')->toArray());

        if ($request->images) {
            foreach ($request->images as $image) {

                $restaurant->photos()->create([
                    'url'      => $image,
                    'type'     => 'gallery',
                ]);
            }
        }

        return redirect()
            ->route('restaurateur.dashboard')
            ->with('success', 'Restaurant updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->update([
            'is_deleted' => true,
        ]);

        return redirect()->back();
    }
}
