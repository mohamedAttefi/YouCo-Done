<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Register', function(){
    return view('Auth.Register');
})->name('register.form');

Route::get('/Login', function(){
    return view('Auth.Login');
})->name('login.form');

Route::get('/show/restaurants', function(){
    return view('Restaurants');
})->name('show.restaurants');
