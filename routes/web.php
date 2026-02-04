<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilePhotoController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RestaurateurController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Register', [RegisteredUserController::class, 'create'])->name('register.form');
Route::post('/Register', [RegisteredUserController::class, 'store'])->name('register');


Route::get('/Login', [AuthenticatedSessionController::class, 'create'])->name('login.form');
Route::post('/Login', [AuthenticatedSessionController::class, 'store'])->name('login');

Route::get('/profile', [UserController::class, 'profile'])->name('client.profile');


Route::patch('/profile/avatar', [ProfilePhotoController::class, 'update'])->middleware(['auth', 'role:client'])->name('profile.avatar.update');

Route::get('/Explore', [RestaurantController::class, 'index'])->name('show.restaurants');
Route::get('/Explore/{id}', [RestaurantController::class, 'show'])->name('show.restaurant');

Route::get('/Restaurateur/Dashboard', [RestaurateurController::class, 'index'])->name('restaurateur.dashboard');
Route::get('/Restaurateur/Add/Restaurant', [RestaurateurController::class, 'addRestaurant'])->name('restaurant.add');
