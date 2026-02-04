<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function profile(){
        $user = User::find(Auth::user()->id);
        return view('profile.profile', ['user' => $user]);
    }
}
