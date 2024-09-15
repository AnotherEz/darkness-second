<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    // Validación de los campos del formulario
    $request->validate([
        'nombres' => 'required',
        'apellido_paterno' => 'required',
        'apellido_materno' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
    ]);

    // Dividir los nombres en primer y segundo nombre
    $nombres = explode(' ', $request->nombres, 2);
    $primerNombre = $nombres[0];
    $segundoNombre = $nombres[1] ?? null;

    // Crear el usuario
    $user = User::create([
        'first_name' => $primerNombre,
        'second_name' => $segundoNombre,
        'first_lastname' => $request->apellido_paterno,
        'second_lastname' => $request->apellido_materno,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Iniciar sesión automáticamente
    Auth::login($user);

    // Almacenar el mensaje de éxito en la sesión
    session()->flash('success', '¡Registro exitoso! Bienvenido al sistema.');

    // Redirigir al dashboard
    return redirect()->route('dashboard');
}

}
