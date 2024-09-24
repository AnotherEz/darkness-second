<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devix Solutions Software</title>
    <link rel="icon" href="{{ asset('/public/Icono.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-2">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-7">
                    <div>
                        <a href="/" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-head hover:text-blue-600 transition duration-200">Devix Solutions</span>
                        </a>
                    </div>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="menu-button" class="text-gray-500 focus:outline-none">
                        <i class="fas fa-bars fa-lg"></i>
                    </button>
                </div>
                <div class="hidden md:flex items-center space-x-3">
                    <x-section title="Inicio" route="home"/>
                    <x-section title="Servicios" route="servicios"/>
                    <x-section title="Sobre Nosotros" route="sobre-nosotros"/>
                    <x-section title="Contacto" route="contacto"/>
                    <x-section title="Login" route="login"/>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menú móvil deslizante y overlay -->
    <div id="mobile-menu-container" class="fixed inset-0 z-50 hidden">
        <div id="mobile-menu-overlay" class="absolute inset-0 bg-black opacity-50"></div>
        <div id="mobile-menu" class="absolute top-0 left-0 right-0 bg-white shadow-lg transform -translate-y-full transition-transform duration-300 ease-in-out">
            <div class="p-4">
                <button id="close-menu" class="float-right text-gray-500 focus:outline-none">
                    <i class="fas fa-times fa-lg"></i>
                </button>
                <div class="clear-both"></div>
                <div class="flex flex-col mt-4">
                    <a href="{{ route('home') }}" class="py-2 hover:bg-gray-100">Inicio</a>
                    <a href="{{ route('servicios') }}" class="py-2 hover:bg-gray-100">Servicios</a>
                    <a href="{{ route('sobre-nosotros') }}" class="py-2 hover:bg-gray-100">Sobre Nosotros</a>
                    <a href="{{ route('contacto') }}" class="py-2 hover:bg-gray-100">Contacto</a>
                    <a href="{{ route('login') }}" class="py-2 hover:bg-gray-100">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="container mx-auto px-4 py-16 relative z-10">
        @yield('content')
    </div>

    <footer class="bg-gray-800 text-white text-center py-4">
        <p>Edinson Fernandez 2024 - Devix Solutions Software.</p>
        <p>&copy; Todos los derechos reservados.</p>
    </footer>
</body>
</html>