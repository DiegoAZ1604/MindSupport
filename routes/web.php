<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\ContenidoEduController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CalificacionController;
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

//Rutas para Consulta
Route::prefix('consulta')->group(function () {
    Route::get('/', [ConsultaController::class, 'index'])->name('consulta.index');
    Route::get('/create', [ConsultaController::class, 'create'])->name('consulta.create');
    Route::post('/', [ConsultaController::class, 'store'])->name('consulta.store');
    Route::get('/{id}', [ConsultaController::class, 'show'])->name('consulta.show');
    Route::get('/{id}/edit', [ConsultaController::class, 'edit'])->name('consulta.edit');
    Route::put('/{id}', [ConsultaController::class, 'update'])->name('consulta.update');
    Route::delete('/{id}', [ConsultaController::class, 'destroy'])->name('consulta.destroy');
});

//Rutas para Contenido Educativo
Route::prefix('contenidoEdu')->group(function (){
    Route::get('/', [ContenidoEduController::class, 'index'])->name('contenido-edu.index');
    Route::get('/create', [ContenidoEduController::class, 'create'])->name('contenido-edu.create');
    Route::post('/', [ContenidoEduController::class, 'store'])->name('contenido-edu.store');
    Route::get('/{id}', [ContenidoEduController::class, 'show'])->name('contenido-edu.show');
    Route::get('/{id}/edit', [ContenidoEduController::class, 'edit'])->name('contenido-edu.edit');
    Route::put('/{id}', [ContenidoEduController::class, 'update'])->name('contenido-edu.update');
    Route::delete('/{id}', [ContenidoEduController::class, 'destroy'])->name('contenido-edu.destroy');

});

//Rutas para Servicio
Route::prefix('servicio')->group(function (){
    Route::get('/', [ServicioController::class, 'index'])->name('servicio.index');
    Route::get('/create', [ServicioController::class, 'create'])->name('servicio.create');
    Route::post('/', [ServicioController::class, 'store'])->name('servicio.store');
    Route::get('/{id}', [ServicioController::class, 'show'])->name('servicio.show');
    Route::get('/{id}/edit', [ServicioController::class, 'edit'])->name('servicio.edit');
    Route::put('/{id}', [ServicioController::class, 'update'])->name('servicio.update');
    Route::delete('/{id}', [ServicioController::class, 'destroy'])->name('servicio.destroy');

});

//Rutas para Calificacion
Route::prefix('calificacion')->group(function (){
    Route::get('/', [CalificacionController::class, 'index'])->name('calificacion.index');
    Route::get('/create', [CalificacionController::class, 'create'])->name('calificacion.create');
    Route::post('/', [CalificacionController::class, 'store'])->name('calificacion.store');
    Route::get('/{id}', [CalificacionController::class, 'show'])->name('calificacion.show');
    Route::get('/{id}/edit', [CalificacionController::class, 'edit'])->name('calificacion.edit');
    Route::put('/{id}', [CalificacionController::class, 'update'])->name('calificacion.update');
    Route::delete('/{id}', [CalificacionController::class, 'destroy'])->name('calificacion.destroy');

});

require __DIR__.'/auth.php';

