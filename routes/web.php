<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Cartes;
use App\Livewire\JokerAdmin;
use App\Livewire\Spores;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->get('/admin', JokerAdmin::class)->name('admin');
Route::get('/cartes', Cartes::class)->name('cartes');
Route::get('/spores', Spores::class)->name('spores');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
