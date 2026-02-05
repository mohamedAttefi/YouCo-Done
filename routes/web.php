<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilePhotoController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RestaurateurController;
use App\Http\Controllers\MenuController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Register', [RegisteredUserController::class, 'create'])->name('register.form');
Route::post('/Register', [RegisteredUserController::class, 'store'])->name('register');


Route::get('/Login', [AuthenticatedSessionController::class, 'create'])->name('login.form');
Route::post('/Login', [AuthenticatedSessionController::class, 'store'])->name('login');

Route::get('/profile', [UserController::class, 'profile'])->name('client.profile');


Route::patch('/profile/avatar', [ProfilePhotoController::class, 'update'])->middleware(['auth'])->name('profile.avatar.update');

Route::any('/Explore', [RestaurantController::class, 'index'])->name('show.restaurants');
Route::get('/Explore/{id}', [RestaurantController::class, 'show'])->name('show.restaurant');

Route::get('/Restaurateur/Dashboard', [RestaurateurController::class, 'index'])->name('restaurateur.dashboard')->middleware(['auth', 'role:restaurateur']);
Route::get('/Restaurateur/Add/Restaurant', [RestaurantController::class, 'create'])->name('restaurant.add')->middleware(['auth', 'role:restaurateur']);
Route::post('/Restaurateur/Add/Restaurant', [RestaurantController::class, 'store'])->name('restaurant.create')->middleware(['auth', 'role:restaurateur']);
Route::get('/Restaurateur/Edit/Restaurant/{id}', [RestaurantController::class, 'edit'])->name('restaurant.edit')->middleware(['auth', 'role:restaurateur']);
Route::post('/Restaurateur/Edit/Restaurant/{id}', [RestaurantController::class, 'update'])->name('restaurant.update')->middleware(['auth', 'role:restaurateur']);
Route::get('/Restaurateur/delete/Restaurant/{id}', [RestaurantController::class, 'destroy'])->name('restaurant.delete')->middleware(['auth', 'role:restaurateur']);
Route::get('/Restaurateur/add/menu', [MenuController::class, 'create'])->name('menu.create')->middleware(['auth', 'role:restaurateur']);

Route::get('/Logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
