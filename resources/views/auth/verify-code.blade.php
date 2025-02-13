<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Código de Verificación</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-200 to-blue-400 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">Verificar Código</h2>

        <!-- Mensajes de error -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong>Error:</strong> Código inválido o expirado.
            </div>
        @endif

        <!-- Formulario para ingresar el código -->
        <form action="{{ route('password.verify.code') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ session('email') }}">

            <div>
                <label for="code" class="block text-sm font-medium text-gray-700">Código de Verificación</label>
                <input type="text" id="code" name="code" required maxlength="6"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Ingresa el código">
            </div>

            <div class="mt-4">
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Verificar Código
                </button>
            </div>
        </form>
    </div>
</body>
</html>
