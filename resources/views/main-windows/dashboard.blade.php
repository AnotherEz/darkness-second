<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateX(-20px); }
            to { transform: translateX(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out;
        }
        .animate-slideIn {
            animation: slideIn 0.5s ease-out;
        }
        .bg-gradient-custom {
            background: linear-gradient(135deg, #6EE7B7, #B9FBC0);
        }
        .text-gradient {
            background: -webkit-linear-gradient(45deg, #4F46E5, #8B5CF6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-gradient-custom min-h-screen flex">
    <aside class="w-64 bg-gray-800 text-white h-screen">
        <div class="p-6 text-center">
            <h1 class="text-2xl font-bold">Mi Aplicación</h1>
        </div>
        <nav class="mt-6">
            <ul>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-700">Inicio</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-700">Perfil</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-700">Configuración</a></li>
                <li>
                    <!-- Formulario para cerrar sesión -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-left py-2 px-4 hover:bg-gray-700">Cerrar sesión</button>
                    </form>
                </li>
            </ul>
        </nav>
    </aside>
    <main class="flex-1 bg-white p-6">
        <header class="flex items-center justify-between border-b border-gray-200 pb-4 mb-6">
            <h2 class="text-3xl font-bold text-gradient animate-fadeIn">¡Bienvenido, {{ Auth::user()->first_name }}!</h2>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Notificaciones</button>
        </header>
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Tarjeta de Estadísticas -->
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 animate-slideIn">
                <h3 class="text-xl font-semibold mb-4">Estadísticas</h3>
                <p class="text-gray-600">Aquí puedes ver un resumen de tus actividades y estadísticas.</p>
            </div>
            <!-- Tarjeta de Tareas -->
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 animate-slideIn">
                <h3 class="text-xl font-semibold mb-4">Tareas</h3>
                <p class="text-gray-600">Lista de tareas pendientes y cosas que debes hacer.</p>
            </div>
            <!-- Tarjeta de Mensajes -->
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 animate-slideIn">
                <h3 class="text-xl font-semibold mb-4">Mensajes</h3>
                <p class="text-gray-600">Revisa tus mensajes recientes y notificaciones.</p>
            </div>
        </section>
    </main>
</body>
</html>
