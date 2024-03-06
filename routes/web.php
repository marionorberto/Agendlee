<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('index');
});
Route::get('/login', [loginController::class, 'index']);
Route::get('/register', [userController::class, 'create']);

Route::get('/about', function () {
  return view('about');
});

Route::resource('user', UserController::class);
Route::resource('contact', contactController::class);
