<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;

Route::middleware(['auth'])->group(function () {

    // Show the form for creating a new contact
    Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');

    // Store a newly created contact in storage
    Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

    // Display the specified contact
    Route::get('/contact/show/{contact}', [ContactController::class, 'show'])->name('contact.show');

    // Show the form for editing the specified contact
    Route::get('/contact/{contact}/edit', [ContactController::class, 'edit'])->name('contact.edit');

    // Update the specified contact in storage
    Route::put('/contact/{contact}', [ContactController::class, 'update'])->name('contact.update');

    // Remove the specified contact from storage
    Route::delete('/contact/destroy/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');

});

Auth::routes();

Route::get('/', [ContactController::class, 'index'])->name('contact.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

