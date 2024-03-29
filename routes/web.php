<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
use App\Http\Middleware\verifySessionMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  if (session()->exists('loginSession')) {
    $userSession = session()->get('loginSession');
  }

  return view(
    'index'
  );
})->name('home');

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'login']);

Route::get('/register', [userController::class, 'index'])->name('register');
Route::post('/register', [userController::class, 'store']);

Route::get('/password-recovering', function () {
  return view('forgot-password');
})->name('password-recovering');

Route::get('/about', function () {
  return view('about');
})
  ->name('about')
  ->middleware(verifySessionMiddleware::class);

Route::resource('user', UserController::class);
Route::resource('contact', contactController::class)
  ->middleware(verifySessionMiddleware::class);
