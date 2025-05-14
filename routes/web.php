<?php

use App\Http\Controllers\DietaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\PlanController;

Route::get('/', fn () => view('home'))->name('home');
Route::get('/blog', [ArticuloController::class, 'index'])->name('articulos.index');
Route::get('/articulos/{slug}', [ArticuloController::class, 'show'])->name('articulos.show');
Route::get('/calculadora', [CalculadoraController::class, 'show'])->name('calculadora.show');
Route::get('/calculadora/index', [CalculadoraController::class, 'index'])->name('calculadora.index');
Route::get('/calculadora/create/{mascota}', [CalculadoraController::class, 'create'])->name('calculadora.create');
Route::post('/calculadora', [CalculadoraController::class, 'store'])->name('calculadora.store');
Route::get('/planes', fn () => view('planes'))->name('planes');
Route::get('/contacto', fn () => view('home'))->name('contacto');
Route::get('/politica-privacidad', fn () => view('politica-privacidad'))->name('politica-privacidad');
Route::get('/terminos-uso', fn () => view('terminos-uso'))->name('terminos-uso');
Route::get('/aviso-legal', fn () => view('aviso-legal'))->name('aviso-legal');

Route::post('/contact', fn () => redirect()->back()->with('success', 'Mensaje enviado'))->name('contact.submit');
Route::post('/newsletter', fn () => redirect()->back()->with('success', '¡Suscrito a la newsletter!'))->name('newsletter.subscribe');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'adminLogin']);
Route::get('/planes/select/{mascota_id}/{tipo_plan?}', [PlanController::class, 'select'])->name('planes.select');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.delete');
    Route::resource('mascotas', MascotaController::class);
    Route::get('/calculadora/{id}/download', [CalculadoraController::class, 'download'])->name('calculadora.download');
    Route::post('/planes/checkout', [PlanController::class, 'checkout'])->name('planes.checkout');
    Route::get('/planes/success', [PlanController::class, 'success'])->name('planes.success');
    Route::get('/dietas/{mascota_id}/pdf', [DietaController::class, 'getPdf'])->name('dietas.pdf');
});
Route::get('/test-factura/{id}', function ($id) {
    $factura = \App\Models\Factura::findOrFail($id);
    $path = storage_path('app/' . $factura->pdf_path);
    if (file_exists($path)) {
        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="factura_' . $id . '.pdf"',
        ]);
    }
    return response()->json(['error' => 'Archivo no encontrado'], 404);
});
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [ArticuloController::class, 'adminIndex'])->name('admin.dashboard');
    Route::get('/articulos', [ArticuloController::class, 'adminIndex'])->name('admin.articulos.index');
    Route::get('/articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');
    Route::post('/articulos', [ArticuloController::class, 'store'])->name('articulos.store');
    Route::get('/articulos/{articulo}/edit', [ArticuloController::class, 'edit'])->name('articulos.edit');
    Route::put('/articulos/{articulo}', [ArticuloController::class, 'update'])->name('articulos.update');
    Route::delete('/articulos/{articulo}', [ArticuloController::class, 'destroy'])->name('admin.articulos.destroy');
});
