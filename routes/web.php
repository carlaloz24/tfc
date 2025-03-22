<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Incluye las rutas de autenticación de Breeze
require __DIR__.'/auth.php';

// Tus rutas existentes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/calculadora', [App\Http\Controllers\CalculadoraController::class, 'index'])->name('calculadora');
Route::post('/calculadora/calcular', [App\Http\Controllers\DietaController::class, 'calcular'])->name('calculadora.calcular');
Route::get('/planes', [App\Http\Controllers\PlanController::class, 'index'])->name('planes');
Route::post('/planes/suscribir', [App\Http\Controllers\PlanController::class, 'suscribir'])->name('planes.suscribir');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('mascotas', App\Http\Controllers\MascotaController::class);
    Route::resource('articulos', App\Http\Controllers\ArticuloController::class)->middleware('admin');
    Route::get('/perfil', [App\Http\Controllers\ProfileController::class, 'index'])->name('perfil');
    Route::post('/perfil/actualizar', [App\Http\Controllers\ProfileController::class, 'actualizar'])->name('perfil.actualizar');
    Route::delete('/perfil/eliminar', [App\Http\Controllers\ProfileController::class, 'eliminar'])->name('perfil.eliminar');
});

