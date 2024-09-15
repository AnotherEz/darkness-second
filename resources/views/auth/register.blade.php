<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        /* Animaciones */
        @keyframes gradientBackground {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-20px); }
            to { transform: translateY(0); }
        }

        @keyframes colorChange {
            0%, 100% { color: #6366F1; }
            50% { color: #3B82F6; }
        }

        /* Clases personalizadas */
        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out;
        }

        .animate-slideIn {
            animation: slideIn 0.5s ease-out;
        }

        .animate-colorChange {
            animation: colorChange 2s infinite;
        }

        body {
            background: linear-gradient(45deg, #6366F1, #3B82F6, #60A5FA, #A78BFA);
            background-size: 400% 400%;
            animation: gradientBackground 5s ease infinite;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-opacity-75">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md animate-fadeIn bg-opacity-90">
        <h2 class="text-3xl font-bold text-center animate-colorChange mb-6 animate-slideIn">Registro</h2>

        <!-- Mostrar errores de validación -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Mostrar mensaje de éxito si el registro es exitoso -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Campo de Nombres -->
            <div>
                <label for="nombres" class="block text-sm font-medium text-gray-700">Nombres</label>
                <input type="text" id="nombres" name="nombres" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500" required>
            </div>

            <!-- Campo de Apellido Paterno -->
            <div>
                <label for="apellido_paterno" class="block text-sm font-medium text-gray-700">Apellido Paterno</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500" required>
            </div>

            <!-- Campo de Apellido Materno -->
            <div>
                <label for="apellido_materno" class="block text-sm font-medium text-gray-700">Apellido Materno</label>
                <input type="text" id="apellido_materno" name="apellido_materno" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500" required>
            </div>

            <!-- Campo de Correo Electrónico -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500" required>
            </div>

            <!-- Campo de Contraseña -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <div class="relative">
                    <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número, una letra mayúscula, una letra minúscula, y tener al menos 8 caracteres">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                        <input type="checkbox" id="show-password" class="hidden">
                        <label for="show-password" class="text-gray-600 cursor-pointer">Mostrar</label>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-1">La contraseña debe tener al menos 8 caracteres, incluir una mayúscula, una minúscula y un número.</p>
            </div>

            <!-- Botón de Registro -->
            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-150 ease-in-out">
                    Registrarse
                </button>
            </div>
        </form>

        <!-- Enlace para iniciar sesión -->
        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="font-medium text-purple-600 hover:text-purple-500">¿Ya tienes una cuenta? Inicia sesión</a>
        </div>

        <!-- Botón de Cerrar sesión si el usuario está autenticado -->
        @auth
        <div class="mt-4 text-center">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left py-2 px-4 bg-red-600 text-white rounded-md hover:bg-red-700 transition duration-150 ease-in-out">
                    Cerrar sesión
                </button>
            </form>
        </div>
        @endauth
    </div>

    <!-- Mostrar/Ocultar Contraseña -->
    <script>
        document.getElementById('show-password').addEventListener('change', function (e) {
            var password = document.getElementById('password');
            if (e.target.checked) {
                password.type = 'text';
                e.target.nextElementSibling.textContent = 'Ocultar';
            } else {
                password.type = 'password';
                e.target.nextElementSibling.textContent = 'Mostrar';
            }
        });
    </script>
</body>
</html>
