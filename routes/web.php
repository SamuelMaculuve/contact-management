<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

//dashboard
Route::get('dashboard-page', [DashboardController::class, 'index'])->name('dashboard');

//contact crud
Route::resource('contact', ContactController::class);
