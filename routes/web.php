<?php

use App\Livewire\Team\Index;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('teams', Index::class)
    ->middleware(['auth', 'verified'])
    ->name('team.index');

Route::get('teams/create', \App\Livewire\Team\Create::class)
    ->middleware(['auth', 'verified'])
    ->name('team.create');

Route::get('teams/{team}', \App\Livewire\Team\Show::class)
    ->middleware(['auth', 'verified'])
    ->name('team.show');

Route::get('teams/{team}/create-game', \App\Livewire\Team\CreateGame::class)
    ->middleware(['auth', 'verified'])
    ->name('team.create-game');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';
