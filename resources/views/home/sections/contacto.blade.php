@extends('home.main')

@section('content')
<div class="text-center animate-fadeInUp px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2 animate-color-change">Contacto</h1>
    <p class="text-lg sm:text-xl text-gray-600 mb-8">¡Estamos aquí para ayudarte! Puedes comunicarte con nosotros a través de las siguientes plataformas:</p>
</div>

<div class="bg-gray-200 py-8 sm:py-12 lg:py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <!-- GitHub -->
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.8s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">GitHub</h3>
                <p class="text-gray-600 mb-4">Explora mis proyectos y contribuciones en GitHub.</p>
                <a href="https://github.com/AnotherEz" target="_blank" class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 flex items-center justify-center">
                    <i class="fab fa-github mr-2"></i> Ver Perfil
                </a>
            </div>
            <!-- WhatsApp -->
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.2s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">WhatsApp</h3>
                <p class="text-gray-600 mb-4">Habla directamente con nuestro equipo vía WhatsApp.</p>
                <a href="https://wa.me/+51923851639" target="_blank" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 flex items-center justify-center">
                    <i class="fab fa-whatsapp mr-2"></i> Enviar Mensaje
                </a>
            </div>

            <!-- Telegram -->
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.4s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Telegram</h3>
                <p class="text-gray-600 mb-4">Conéctate con nosotros en Telegram para cualquier consulta.</p>
                <a href="https://t.me/AnotherEz" target="_blank" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 flex items-center justify-center">
                    <i class="fab fa-telegram-plane mr-2"></i> Enviar Mensaje
                </a>
            </div>

            <!-- Instagram -->
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.6s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Instagram</h3>
                <p class="text-gray-600 mb-4">Síguenos en Instagram y mantente actualizado con nuestras novedades.</p>
                <a href="https://www.instagram.com/anotherez23" target="_blank" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 flex items-center justify-center">
                    <i class="fab fa-instagram mr-2"></i> Visítanos
                </a>
            </div>

            
        </div>
    </div>
</div>
@endsection