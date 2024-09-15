<?php

use App\Http\Controllers\PasswordResetLinkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

// Ruta para la página de inicio 
Route::get('/', [HomeController::class, 'inicio'])->name('inicio');

// Ruta para la página de home
Route::get('/home', [HomeController::class, 'home'])->name('home');

// Rutas para login y registro
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/api/consulta-dni', [RegisterController::class, 'consultaDNI']);

// Ruta protegida para el dashboard, solo accesible si el usuario está autenticado
Route::get('/dashboard', [AuthController::class, 'showDashboardForm'])->middleware('auth')->name('dashboard');

// Rutas públicas
Route::get('/servicios', [HomeController::class, 'servicios'])->name('servicios');
Route::get('/sobre-nosotros', [HomeController::class, 'sobreNosotros'])->name('sobre-nosotros');
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto');

// Rutas para la recuperación de contraseña
Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
