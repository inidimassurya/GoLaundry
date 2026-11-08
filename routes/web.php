<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Halaman utama GoLaundry
Route::get('/', function () {
    return view('index');
});

// Dashboard Admin
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Pengaturan profil Admin
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

// Route autentikasi Laravel Breeze
require __DIR__.'/auth.php';