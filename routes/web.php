<?php

use App\Livewire\Dashboard;
use App\Livewire\DinoMemory;
use App\Livewire\Games;
use App\Livewire\GodfatherLottery;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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

Route::get('/', Welcome::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('godfather-lottery', GodfatherLottery::class)->name('godfather-lottery');
    Route::get('games', Games::class)->name('games');
    Route::get('dino-memory', DinoMemory::class)->name('games.dino-memory');
});
