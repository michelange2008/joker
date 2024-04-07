<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Cartes;
use App\Livewire\Jeux;
use App\Livewire\Partie;
use App\Models\Jeu;
use Illuminate\Support\Facades\Route;

Route::get('/', Jeux::class)->name('jeux');
// Route::middleware(['auth', 'verified'])->get('/', Jeux::class)->name('jeux');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
