<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Admin;
use App\Livewire\Cartes;
use App\Livewire\Jeux;
use App\Livewire\Joueur;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->get('/jeux', Jeux::class)->name('jeux');
Route::get('/cartes', Cartes::class)->name('cartes');
Route::get('/jeu/{jeu_id}', Admin::class)->name('jeu');
Route::get('/', Joueur::class)->name('joueur');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
