<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devix Solutions Software</title>
    <link rel="icon" href="{{ asset('/public/Icono.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <style>
        /* Animaciones */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }

        @keyframes colorChange {
            0% { color: #3b82f6; } /* Azul */
            25% { color: #4f46e5; } /* Morado oscuro */
            50% { color: #a855f7; } /* Morado claro */
            75% { color: #ec4899; } /* Rosa */
            100% { color: #3b82f6; } /* Azul */
        }

        

        .animate-fadeInUp {
            animation: fadeInUp 1s ease-out;
        }

        .animate-pulse-slow {
            animation: pulse 2s infinite;
        }

        .animate-color-change {
            animation: colorChange 2s infinite;
        }

        .text-head {
            position: relative;
            font-size: 1.25rem; /* Tamaño de letra aumentado */
            color: black; /* Letra negra */
            overflow: hidden;
            display: inline-block;
        }


        .btn-primary {
            background-color: #ffffff; /* Blanco */
            color: #3b82f6; /* Azul */
            transition: background-color 0.3s, color 0.3s, transform 0.3s, box-shadow 0.3s;
            border: none; /* Sin bordes */
        }

        .btn-primary-active {
            background-color: #3b82f6; /* Azul */
            color: white;
        }

        .btn-primary:hover {
            background-color: #3b82f6; /* Azul */
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
        }

        /* Ajustes para el menú y contenido en móvil */
        #menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 50; /* Asegura que esté por encima del contenido */
        }

        .container {
            margin-top: 80px; /* Ajusta según el tamaño del menú */
            z-index: 1;
            position: relative;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-2">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-7">
                    <div>
                        <a href="#" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-gray-500 text-lg text-head">Devix Solutions</span>
                        </a>
                    </div>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="menu-button" class="text-gray-500 focus:outline-none">
                        <i class="fas fa-bars fa-lg"></i>
                    </button>
                </div>
                <div class="hidden md:flex items-center space-x-3">
                    <a href="{{ route('home') }}" class="py-2 px-4 font-medium rounded transition duration-300 btn-primary {{ request()->routeIs('home') ? 'btn-primary-active' : 'hover:bg-blue-500 hover:text-white' }}">
                        Inicio
                    </a>
                    <a href="{{ route('servicios') }}" class="py-2 px-4 font-medium rounded transition duration-300 btn-primary {{ request()->routeIs('servicios') ? 'btn-primary-active' : 'hover:bg-blue-500 hover:text-white' }}">
                        Servicios
                    </a>
                    <a href="{{ route('sobre-nosotros') }}" class="py-2 px-4 font-medium rounded transition duration-300 btn-primary {{ request()->routeIs('sobre-nosotros') ? 'btn-primary-active' : 'hover:bg-blue-500 hover:text-white' }}">
                        Sobre Nosotros
                    </a>
                    <a href="{{ route('contacto') }}" class="py-2 px-4 font-medium rounded transition duration-300 btn-primary {{ request()->routeIs('contacto') ? 'btn-primary-active' : 'hover:bg-blue-500 hover:text-white' }}">
                        Contacto
                    </a>
                    <a href="{{ route('login') }}" class="py-2 px-4 font-medium rounded transition duration-300 btn-primary {{ request()->routeIs('login') ? 'btn-primary-active' : 'hover:bg-blue-500 hover:text-white' }}">
                        Login
                    </a>
                </div>
            </div>
        </div>
        <div id="menu" class="md:hidden fixed top-0 left-0 w-full bg-white shadow-lg p-4 hidden z-50">
            <a href="{{ route('home') }}" class="block py-2 px-4 font-medium rounded transition duration-300 btn-primary {{ request()->routeIs('home') ? 'btn-primary-active' : 'hover:bg-blue-500 hover:text-white' }}">
                Inicio
            </a>
            <a href="{{ route('servicios') }}" class="block py-2 px-4 font-medium rounded transition duration-300 btn-primary {{ request()->routeIs('servicios') ? 'btn-primary-active' : 'hover:bg-blue-500 hover:text-white' }}">
                Servicios
            </a>
            <a href="{{ route('sobre-nosotros') }}" class="block py-2 px-4 font-medium rounded transition duration-300 btn-primary {{ request()->routeIs('sobre-nosotros') ? 'btn-primary-active' : 'hover:bg-blue-500 hover:text-white' }}">
                Sobre Nosotros
            </a>
            <a href="{{ route('contacto') }}" class="block py-2 px-4 font-medium rounded transition duration-300 btn-primary {{ request()->routeIs('contacto') ? 'btn-primary-active' : 'hover:bg-blue-500 hover:text-white' }}">
                Contacto
            </a>
            <a href="{{ route('login') }}" class="block py-2 px-4 font-medium rounded transition duration-300 btn-primary {{ request()->routeIs('login') ? 'btn-primary-active' : 'hover:bg-blue-500 hover:text-white' }}">
                Login
            </a>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mx-auto px-4 py-16 relative z-10">
        @yield('content')
    </div>
    <footer class="bg-gray-800 text-white text-center py-4">
        <p> Edinson Fernandez 2024 - Devix Solutions Software.</p>
        <p>&copy; Todos los derechos reservados.</p>
    </footer>
    <script>
        const menuButton = document.getElementById('menu-button');
        const menu = document.getElementById('menu');

        menuButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
