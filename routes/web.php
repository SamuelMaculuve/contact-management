<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    // Show the form for creating a new contact
    Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');

    // Store a newly created contact in storage
    Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

    // Display the specified contact
    Route::get('/contact/{contact}', [ContactController::class, 'show'])->name('contact.show');

    // Show the form for editing the specified contact
    Route::get('/contact/{contact}/edit', [ContactController::class, 'edit'])->name('contact.edit');

    // Update the specified contact in storage
    Route::put('/contact/{contact}', [ContactController::class, 'update'])->name('contact.update');

    // Remove the specified contact from storage
    Route::delete('/contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');

});

Auth::routes();


// Display the contact list
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

