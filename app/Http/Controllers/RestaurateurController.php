<?php

namespace App\Http\Controllers;

use App\Models\Restaurateur;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RestaurateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurateur::with('restaurants')->find(Auth::user()->id)->restaurants->where('is_deleted', false);
        return view('restaurateurDashboard', ['restaurants' => $restaurants]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurateur $restaurateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurateur $restaurateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurateur $restaurateur)
    {
        //
    }
}
