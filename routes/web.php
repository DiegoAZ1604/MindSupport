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

Route::prefix('consulta')->group(function () {
    Route::get('/', [ConsultaController::class, 'index'])->name('consulta.index');
    Route::get('/create', [ConsultaController::class, 'create'])->name('consulta.create');
    Route::post('/', [ConsultaController::class, 'store'])->name('consulta.store');
    Route::get('/{id}', [ConsultaController::class, 'show'])->name('consulta.show');
    Route::get('/{id}/edit', [ConsultaController::class, 'edit'])->name('consulta.edit');
    Route::put('/{id}', [ConsultaController::class, 'update'])->name('consulta.update');
    Route::delete('/{id}', [ConsultaController::class, 'destroy'])->name('consulta.destroy');
});

require __DIR__.'/auth.php';

