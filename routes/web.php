<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['info'],
    'controller' => DashboardController::class
], function(){
    Route::get('/','dashboardPage')->name('dashboard');
    Route::get('/info','index');
});

/**
 * route for authentication
 */
Route::group([
    'middleware' => ['guest', 'info'],
    'controller' => AuthController::class
], function () {
    Route::get('/login', 'loginPage')->name('auth.login.page');
    Route::get('/register', 'registerPage')->name('auth.register.page');
    Route::post('/register', 'register')->name('auth.register.action');
    Route::post('/login', 'login')->name('auth.login.action');
});

Route::group([
    'middleware' => ['auth', 'info'],
    'controller' => AuthController::class
], function () {
    Route::get('/get', function (){
        return 'hai';
    });
    Route::post('/logout', 'logout')->name('auth.logout.action');
});

