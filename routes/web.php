<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return view('auth.Login');
});

//Registro
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

//Dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');


//Login
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/login',[LoginController::class,'index']);

Route::get('/logout',[LogoutController::class,'logout'])->name('logout');


