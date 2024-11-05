<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * route for authentication
 */
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginPage')->name('auth.login.page');
    Route::get('/register', 'registerPage')->name('auth.register.page');
    Route::post('/register', 'register')->name('auth.register.action');
    Route::post('/login', 'login')->name('auth.login.action');
})->middleware('guest');

