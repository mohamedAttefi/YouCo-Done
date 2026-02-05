<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Restaurateur;
use Illuminate\Support\Facades\Auth;


class RestaurantPhotoController extends Controller
{

    public function create()
    {
        return view('AddRestaurant');
    }
}
