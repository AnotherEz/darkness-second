<?php

use App\Http\Controllers\PasswordResetLinkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\PasswordResetCode;
use App\Notifications\ResetPasswordCodeNotification;
use Carbon\Carbon;

// Página de inicio 
Route::get('/', [HomeController::class, 'inicio'])->name('inicio');

// Página principal del usuario
Route::get('/home', [HomeController::class, 'home'])->name('home');

// Autenticación (login, registro, logout)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/api/consulta-dni', [RegisterController::class, 'consultaDNI']);

// Ruta protegida para el dashboard
Route::get('/dashboard', [AuthController::class, 'showDashboardForm'])->middleware('auth')->name('dashboard');

// Rutas públicas
Route::get('/servicios', [HomeController::class, 'servicios'])->name('servicios');
Route::get('/sobre-nosotros', [HomeController::class, 'sobreNosotros'])->name('sobre-nosotros');
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto');

// 🔹 RUTAS PARA RECUPERACIÓN DE CONTRASEÑA CON CÓDIGO 🔹

// Mostrar el formulario de solicitud de código
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

// Enviar código de recuperación
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $user = User::where('email', $request->email)->first();
    if (!$user) {
        return back()->withErrors(['email' => 'No encontramos una cuenta con ese correo.']);
    }

    // Generar código aleatorio
    $code = rand(100000, 999999);

    // Guardar en la base de datos
    PasswordResetCode::updateOrCreate(
        ['email' => $request->email],
        ['code' => $code, 'created_at' => Carbon::now()]
    );

    // Enviar el código por correo
    $user->notify(new ResetPasswordCodeNotification($code));

    return redirect()->route('password.verify')->with(['email' => $request->email]);
})->middleware('guest')->name('password.email');

// Formulario para ingresar el código de verificación
Route::get('/verify-code', function () {
    return view('auth.verify-code');
})->middleware('guest')->name('password.verify');

// Verificar el código ingresado por el usuario
Route::post('/verify-code', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'code' => 'required|digits:6',
    ]);

    $record = PasswordResetCode::where('email', $request->email)->where('code', $request->code)->first();

    if (!$record || Carbon::parse($record->created_at)->addMinutes(15)->isPast()) {
        return back()->withErrors(['code' => 'El código es inválido o ha expirado.']);
    }

    return redirect()->route('password.reset')->with(['email' => $request->email]);
})->middleware('guest')->name('password.verify.code');

// Formulario para restablecer la contraseña después de verificar el código
Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->middleware('guest')->name('password.reset');

// Procesar el restablecimiento de la contraseña
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $user = User::where('email', $request->email)->first();
    if ($user) {
        $user->update(['password' => Hash::make($request->password)]);
        PasswordResetCode::where('email', $request->email)->delete(); // Eliminar código usado
    }

    return redirect()->route('login')->with('status', 'Tu contraseña ha sido restablecida con éxito.');
})->middleware('guest')->name('password.update');
