<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
    
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::resource('users', Admin\UserController::class);
    Route::resource('events', Admin\EventController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/events', [User\EventController::class, 'index'])->name('user.events.index');
});

    

require __DIR__.'/auth.php';