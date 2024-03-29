<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Livewire\Welcome::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', \App\Livewire\Dashboard::class)->name('dashboard');
    Route::get('godfather-lottery', \App\Livewire\GodfatherLottery::class)->name('godfather-lottery');
    Route::get('games', \App\Livewire\Games::class)->name('games');
    Route::get('dino-memory', \App\Livewire\DinoMemory::class)->name('games.dino-memory');
});
