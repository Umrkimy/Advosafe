<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {return view('home');})->name('home');

Route::post('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/success', [StripeController::class, 'success'])->name('success');

Route::get('/about', [Controller::class, 'showAbout'])->name('show.about');
Route::get('/contact', function () {return view('contact'); })->name('contact');

//Middleware auth
Route::middleware('auth')->group(function () {
});

//Middleware guest
Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/signup',  'showSignup')->name('show.signup');
    Route::get('/login',  'showLogin')->name('show.login');
    Route::post('/signup',  'signup')->name('signup');
    Route::post('/login',  'login')->name('login');
    });

//Auth Controller
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




