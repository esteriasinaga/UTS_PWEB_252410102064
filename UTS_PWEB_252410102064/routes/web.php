<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('login');

// Dashboard
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::post('/dashboard', [PageController::class, 'dashboard'])->name('dashboard.submit');

// Profile
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// Pengelolaan Buku
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');