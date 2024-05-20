<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConsultaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/consulta', [ConsultaController::class, 'index'])->name('consulta.index');
Route::get('/consulta', [ConsultaController::class, 'create'])->name('consulta.create');
Route::post('/consulta', [ConsultaController::class, 'store'])->name('consulta.store');

require __DIR__.'/auth.php';
