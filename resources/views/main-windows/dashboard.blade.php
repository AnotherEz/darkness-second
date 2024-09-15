<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Elegante</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes slideIn {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .menu-slide {
            animation: slideIn 0.5s ease forwards;
        }

        .bg-gradient-moving {
            background: linear-gradient(270deg, #3B82F6, #60A5FA, #9333EA, #4F46E5);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
        }

        .user-menu {
            display: none;
        }

        .user-menu.open {
            display: block;
        }
    </style>
</head>
<body class="min-h-screen flex bg-gray-100">

    <!-- Menú deslizante -->
    <aside id="menu" class="w-64 bg-gradient-moving text-white h-screen fixed z-50 transform -translate-x-full transition-transform duration-500">
        <div class="p-6 text-center">
            <h1 class="text-2xl font-bold">Mi Aplicación</h1>
        </div>
        <nav class="mt-6">
            <ul>
                <li><a href="#" class="block py-2 px-4 hover:bg-blue-600">Inicio</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-blue-600">Perfil</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-blue-600">Configuración</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Contenido principal -->
    <main id="main-content" class="flex-1 bg-white p-6 ml-0 transition-all duration-500">
        <header class="flex items-center justify-between border-b border-gray-200 pb-4 mb-6">
            <h2 class="text-3xl font-bold text-blue-600" style="margin-left: 2rem;">¡Bienvenido, {{ Auth::user()->first_name }}!</h2>
            
            <!-- Ícono de usuario para menú de cierre de sesión -->
            <div class="relative">
                <button id="user-button" class="flex items-center space-x-2 focus:outline-none">
                    <img src="/public/user.ico" alt="Avatar" class="rounded-full w-10 h-10">
                    <span class="text-gray-800">Usuario</span>
                </button>
                
                <!-- Menú de usuario -->
                <div id="user-menu" class="user-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Perfil</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-100">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </header>
        
        <!-- Tarjetas de contenido -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                <h3 class="text-xl font-semibold mb-4">Estadísticas</h3>
                <p class="text-gray-600">Resumen de actividades y estadísticas.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                <h3 class="text-xl font-semibold mb-4">Tareas</h3>
                <p class="text-gray-600">Lista de tareas pendientes.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                <h3 class="text-xl font-semibold mb-4">Mensajes</h3>
                <p class="text-gray-600">Mensajes y notificaciones recientes.</p>
            </div>
        </section>
    </main>

    <!-- Botón para abrir el menú -->
    <button id="menu-button" class="fixed top-4 left-4 z-50 text-blue-600 text-white p-3 rounded-full focus:outline-none hover:bg-transparent">
        &#9776;
    </button>

    <script>
        // Menú deslizante
        const menuButton = document.getElementById('menu-button');
        const menu = document.getElementById('menu');
        const mainContent = document.getElementById('main-content');

        menuButton.addEventListener('click', () => {
            menu.classList.toggle('-translate-x-full');
            if (menu.classList.contains('-translate-x-full')) {
                mainContent.style.marginLeft = '0';
            } else {
                mainContent.style.marginLeft = '16rem'; // 64px * 4 (w-64)
            }
        });

        // Menú de usuario
        const userButton = document.getElementById('user-button');
        const userMenu = document.getElementById('user-menu');
        userButton.addEventListener('click', () => {
            userMenu.classList.toggle('open');
        });

        // Cierra el menú de usuario si se hace clic fuera de él
        window.addEventListener('click', (e) => {
            if (!userButton.contains(e.target) && !userMenu.contains(e.target)) {
                userMenu.classList.remove('open');
            }
        });
    </script>
</body>
</html>
