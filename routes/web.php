<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticuloController;

require __DIR__.'/auth.php';

// Rutas existentes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/calculadora', [App\Http\Controllers\CalculadoraController::class, 'index'])->name('calculadora');
Route::post('/calculadora/calcular', [App\Http\Controllers\DietaController::class, 'calcular'])->name('calculadora.calcular');
Route::get('/planes', [App\Http\Controllers\PlanController::class, 'index'])->name('planes');
Route::post('/planes/suscribir', [App\Http\Controllers\PlanController::class, 'suscribir'])->name('planes.suscribir');
Route::get('/blog', [ArticuloController::class, 'index'])->name('articulos.index');
Route::post('/articulos', [ArticuloController::class, 'store'])->middleware('auth')->name('articulos.store');
Route::get('/articulos/create', [ArticuloController::class, 'create'])->middleware('auth')->name('articulos.create');


Route::middleware(['auth'])->group(function () {
    Route::resource('mascotas', App\Http\Controllers\MascotaController::class);
    Route::resource('articulos', App\Http\Controllers\ArticuloController::class); // Quité middleware('admin')
    Route::get('/perfil', [App\Http\Controllers\ProfileController::class, 'index'])->name('perfil');
    Route::post('/perfil/actualizar', [App\Http\Controllers\ProfileController::class, 'actualizar'])->name('perfil.actualizar');
    Route::delete('/perfil/eliminar', [App\Http\Controllers\ProfileController::class, 'eliminar'])->name('perfil.eliminar');
});
