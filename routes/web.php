<?php

use App\Http\Controllers\NarrationController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::middleware('auth')->group(function () {
    Route::get('/home', [NarrationController::class, 'home'])->name('home');
    Route::get('/narrations', [NarrationController::class, 'narrations'])->name('narrations');
});
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
