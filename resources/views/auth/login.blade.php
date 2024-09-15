<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Fondo animado con gradiente */
        body {
            background: linear-gradient(270deg, #6a11cb, #2575fc);
            background-size: 400% 400%;
            animation: gradientBG 5s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Animación de glitch para el título */
        @keyframes glitch {
            0% {
                text-shadow: -2px 0 red, 2px 0 blue;
            }
            50% {
                text-shadow: 2px 0 red, -2px 0 blue;
            }
            100% {
                text-shadow: -2px 0 red, 2px 0 blue;
            }
        }

        .glitch-effect {
            animation: glitch 1s infinite alternate-reverse;
        }

        /* Animaciones de fadeIn y slideIn */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-20px); }
            to { transform: translateY(0); }
        }

        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out;
        }

        .animate-slideIn {
            animation: slideIn 0.5s ease-out;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-opacity-75">

    <!-- Contenedor principal -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md animate-fadeIn bg-opacity-90">
        <h2 class="text-4xl font-bold text-center text-black mb-6 animate-slideIn glitch-effect">
            Iniciar Sesión
        </h2>
        
        <!-- Mostrar mensaje de error si existe -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">Credenciales incorrectas. Por favor, intenta de nuevo.</span>
            </div>
        @endif

        <!-- Formulario de inicio de sesión -->
        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf <!-- Token de seguridad CSRF -->
            
            <!-- Campo de correo electrónico -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500">
            </div>
            
            <!-- Campo de contraseña -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500">
            </div>
            
            <!-- Recordarme y link de contraseña olvidada -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" id="remember-me" name="remember" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-700">Recordarme</label>
                </div>
                <div class="text-sm">
                    <a href="{{ route('password.request') }}" class="font-medium text-purple-600 hover:text-purple-500">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
            
            <!-- Botón de Iniciar Sesión -->
            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-150 ease-in-out">
                    Iniciar Sesión
                </button>
            </div>
        </form>
        
        <!-- Botón de Registro -->
        <div class="mt-4">
            <a href="{{ route('register') }}" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                Registrarse
            </a>
        </div>
    </div>

</body>
</html>
