<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('user', UserController::class);

Route::get('/contacts', [userController::class, 'index']);
Route::get('/contact/{id}', [userController::class, 'show']);
Route::post('/contact', [userController::class, 'store']);
Route::put('/contacts/{id}', [userController::class, 'update']);
Route::delete('/contact/{id}', [userController::class, 'destroy']);
