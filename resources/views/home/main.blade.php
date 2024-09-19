<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devix Solutions Software</title>
    <link rel="icon" href="{{ asset('/public/Icono.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-2">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-7">
                    <div>
                        <a href="#" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-head">Devix Solutions</span>
                        </a>
                    </div>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="menu-button" class="text-gray-500 focus:outline-none">
                        <i class="fas fa-bars fa-lg"></i>
                    </button>
                </div>
                <div id="menu" class="hidden md:flex items-center space-x-3 -translate-x-full">
                    <x-section title="Inicio" route="home"/>
                    <x-section title="Servicios" route="servicios"/>
                    <x-section title="Sobre Nosotros" route="sobre-nosotros"/>
                    <x-section title="Contacto" route="contacto"/>
                    <x-section title="Login" route="login"/>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div id="main-content" class="container mx-auto px-4 py-16 relative z-10">
        @yield('content')
    </div>

    <!-- Botón de usuario -->
    <div class="absolute top-4 right-4">
        <button id="user-button" class="bg-blue-500 text-white px-4 py-2 rounded">Usuario</button>
        <div id="user-menu" class="hidden bg-white shadow-md p-4 rounded-lg absolute top-12 right-0">
            <a href="#" class="block px-4 py-2 text-gray-800">Perfil</a>
            <a href="#" class="block px-4 py-2 text-gray-800">Cerrar sesión</a>
        </div>
    </div>

    <footer class="bg-gray-800 text-white text-center py-4">
        <p>Edinson Fernandez 2024 - Devix Solutions Software.</p>
        <p>&copy; Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
