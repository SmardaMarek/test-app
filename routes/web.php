<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task1', function () {
    return view('/task1/index');
})->name('task1');

//Task 2 routes 
Route::get('/task2', [ServiceController::class, 'showServices'])->name('task2');
Route::get('task2/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('task2/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service.show');
Route::get('/dashboard', [ContactController::class, 'showContacts'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

//auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
