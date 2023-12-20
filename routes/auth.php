<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;


    Route::controller(RegisteredUserController::class)->group(function(){
        Route::get('/register' , 'UserRegisterForm')->name('register.form');
        Route::post('/register' , 'UserRegister')->name('register');
    });

    Route::controller(LoginController::class)->group(function(){
        Route::get('/login' , 'LoginForm')->name('login.form');
        Route::post('/login' , 'Login')->name('login');
    });


Route::middleware('auth')->group(function () {
    Route::controller(LogoutController::class)->group(function(){
        Route::get('/logout' , 'Logout')->name('logout');
    });
});
