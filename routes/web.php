<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/test', function () {
    dd(env('DB_DATABASE')); // Dump 'db' variable value one by one
});

Route::get('/about', [Controller::class, 'showAbout'])->name('show.about');

//Middleware
Route::middleware('auth')->group(function () {

    Route::get('/contact', function () {
        return view('contact'); 
    })->name('contact')->middleware('auth');

});

//Auth Controller

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function () {
Route::get('/signup',  'showSignup')->name('show.signup');
Route::get('/login',  'showLogin')->name('show.login');
Route::post('/signup',  'signup')->name('signup');
Route::post('/login',  'login')->name('login');
});


