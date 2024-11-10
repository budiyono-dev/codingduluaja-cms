<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

/**
 * route for authentication
 */
Route::group([
    'middleware' => ['guest'],
    'controller' => AuthController::class
], function () {
    Route::get('/login', 'loginPage')->name('auth.login.page');
    Route::get('/register', 'registerPage')->name('auth.register.page');
    Route::post('/register', 'register')->name('auth.register.action');
    Route::post('/login', 'login')->name('auth.login.action');
});

Route::group([
    'middleware' => ['auth'],
    'controller' => AuthController::class
], function () {
    Route::post('/logout', 'logout')->name('auth.logout.action');
});

