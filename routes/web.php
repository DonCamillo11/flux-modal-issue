<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ModalTest;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('modal', ModalTest::class)
    ->middleware(['auth', 'verified'])
    ->name('modal');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
