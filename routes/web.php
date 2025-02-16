<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('teams', \App\Livewire\Team\Index::class)
    ->middleware(['auth', 'verified'])
    ->name('team.index');

Route::get('teams/{team:uuid}', \App\Livewire\Team\Show::class)
    ->middleware(['auth', 'verified'])
    ->name('team.show');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
