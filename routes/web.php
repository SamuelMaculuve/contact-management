<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    //contact crud
    Route::resource('contact', ContactController::class);
});

//login
Auth::routes();

//home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
