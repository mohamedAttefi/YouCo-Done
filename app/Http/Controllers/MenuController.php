<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    protected $fillable = ['restaurant_id', 'title', 'description', 'price'];
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $menu = Restaurant::find($id)->menus;
        return view('CreateMenu', ['id' => $id, 'menu' => $menu]);
    }
    public function store(Request $request, $restaurantId)
    {
        $request->validate([
            'name.*' => 'required|string|max:255',
            'price.*' => 'required|numeric|min:0',
            'description.*' => 'nullable|string'
        ]);

        // Save items
        foreach ($request->name as $index => $name) {
            Menu::create([
                'restaurant_id' => $restaurantId,
                'title' => $name,
                'price' => $request->price[$index],
                'description' => $request->description[$index] ?? null,
            ]);
        }

        return redirect()->route('restaurateur.dashboard')->with('success', 'Menu created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
