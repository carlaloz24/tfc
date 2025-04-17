<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Rutas públicas
Route::get('/', fn () => view('home'))->name('home');
Route::get('/blog', [ArticuloController::class, 'index'])->name('articulos.index');
Route::get('/calculadora', fn () => view('calculadora'))->name('calculadora');
Route::get('/planes', fn () => view('planes'))->name('planes');

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/perfil', fn () => view('perfil'))->name('perfil');
});

// Rutas de administración (solo auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/articulos', [ArticuloController::class, 'adminIndex'])->name('admin.articulos.index');
    Route::get('/articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');
    Route::post('/articulos', [ArticuloController::class, 'store'])->name('articulos.store');
    Route::get('/admin/articulos/{articulo}/edit', [ArticuloController::class, 'edit'])->name('admin.articulos.edit');
    Route::put('/admin/articulos/{articulo}', [ArticuloController::class, 'update'])->name('admin.articulos.update');
    Route::delete('/admin/articulos/{articulo}', [ArticuloController::class, 'destroy'])->name('admin.articulos.destroy');
});

// Rutas dinámicas (al final)
Route::get('/articulos/{articulo}', [ArticuloController::class, 'show'])->name('articulos.show');
