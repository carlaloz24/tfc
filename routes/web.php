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
use App\Http\Controllers\Auth\CustomPasswordResetController;

Route::get('/', fn () => view('home'))->name('home');
Route::get('/blog', [ArticuloController::class, 'index'])->name('articulos.index');
Route::get('/articulos/{slug}', [ArticuloController::class, 'show'])->name('articulos.show');
Route::get('/calculadora', [CalculadoraController::class, 'show'])->name('calculadora.show');
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
//Route::get('/calculadora/index', [CalculadoraController::class, 'index'])->name('calculadora.index');


// Rutas para restablecimiento de contraseña
Route::get('password/reset', [CustomPasswordResetController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [CustomPasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [CustomPasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [CustomPasswordResetController::class, 'reset'])->name('password.update');


Route::middleware('auth')->group(function () {
    Route::get('/calculadora/index', [CalculadoraController::class, 'index'])->name('calculadora.index');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.delete');
    Route::resource('mascotas', MascotaController::class);
    Route::get('/calculadora/{id}/download', [CalculadoraController::class, 'download'])->name('calculadora.download');
    Route::get('/planes/contratar/{tipo_plan}', [PlanController::class, 'contratar'])->name('planes.select');
    Route::post('/planes/checkout', [PlanController::class, 'checkout'])->name('planes.checkout');
    Route::get('/planes/success', [PlanController::class, 'success'])->name('planes.success');
    Route::get('/planes/select/{mascota_id}', [PlanController::class, 'select'])->name('planes.select');
    Route::post('/planes/checkout', [PlanController::class, 'checkout'])->name('planes.checkout');
    Route::get('/dietas/{mascota_id}/pdf', [DietaController::class, 'getPdf'])->name('dietas.pdf');
    Route::get('/dietas/{mascota}/pdf', [DietaController::class, 'getPdf'])->name('dietas.pdf');
    Route::get('/facturas/{factura}/download', [App\Http\Controllers\PlanController::class, 'downloadFactura'])->name('facturas.download')->middleware('auth');
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
Route::get('/politica-cookies', function () {
    return view('cookies');
})->name('cookies');


Route::prefix('admin/users')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('/{id}/edit', [App\Http\Controllers\AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::patch('/{id}', [App\Http\Controllers\AdminUserController::class, 'update'])->name('admin.users.update');
    Route::get('/{id}/password', [App\Http\Controllers\AdminUserController::class, 'showPasswordForm'])->name('admin.users.password');
    Route::patch('/{id}/password', [App\Http\Controllers\AdminUserController::class, 'updatePassword'])->name('admin.users.password.update');
});
