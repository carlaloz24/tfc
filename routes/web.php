<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MascotaController;

// Rutas públicas
Route::get('/', fn () => view('home'))->name('home');
Route::get('/blog', [ArticuloController::class, 'index'])->name('articulos.index');
Route::get('/calculadora', fn () => view('calculadora'))->name('calculadora');
Route::get('/planes', fn () => view('planes'))->name('planes');

Route::post('/contact', function () {
    // Lógica para manejar el formulario
    return redirect()->back()->with('success', 'Mensaje enviado');
})->name('contact.submit');

Route::post('/newsletter', function () {
    // Lógica para manejar la suscripción
    return redirect()->back()->with('success', '¡Suscrito a la newsletter!');
})->name('newsletter.subscribe');

// Nueva ruta para Contacto
Route::get('/contacto', function () {
    return view('home'); // O la vista correspondiente para la página de contacto
})->name('contacto');

Route::get('/perfil', function () {
    return view('perfil'); // O la vista correspondiente
})->name('perfil');

Route::get('/politica-privacidad', function () {
    return view('politica-privacidad');
})->name('politica-privacidad');

Route::get('/terminos-uso', function () {
    return view('terminos-uso');
})->name('terminos-uso');

Route::get('/aviso-legal', function () {
    return view('aviso-legal');
})->name('aviso-legal');


// Rutas de autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Ruta para login de administrador
Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'adminLogin']);

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.delete');
    Route::resource('mascotas', MascotaController::class);
});

// Rutas de administración (protegidas por auth y admin)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [ArticuloController::class, 'adminIndex'])->name('admin.dashboard');
    Route::get('/articulos', [ArticuloController::class, 'adminIndex'])->name('admin.articulos.index');
    Route::get('/articles/create', [ArticuloController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticuloController::class, 'store'])->name('articles.store');
    Route::get('/articles/{articulo}/edit', [ArticuloController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{articulo}', [ArticuloController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{articulo}', [ArticuloController::class, 'destroy'])->name('admin.articulos.destroy');
});

// Rutas dinámicas (al final)
Route::get('/articulos/{slug}', [ArticuloController::class, 'show'])->name('articulos.show');
