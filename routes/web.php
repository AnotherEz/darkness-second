<?php
use App\Http\Controllers\PasswordResetLinkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Ruta para la página de inicio 
Route::get('/', [HomeController::class, 'inicio'])->name('inicio');

// Ruta para la página de home
Route::get('/home', [HomeController::class, 'home'])->name('home');

// Ruta para el login (manejada por AuthController)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Ruta para la página de servicios
Route::get('/servicios', [HomeController::class, 'servicios'])->name('servicios');

// Ruta para la página "Sobre Nosotros"
Route::get('/sobre-nosotros', [HomeController::class, 'sobreNosotros'])->name('sobre-nosotros');

// Ruta para la página de contacto
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto');

Route::post('/login', [AuthController::class, 'login'])->name('login');




Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);