@extends('home.main')

@section('content')
<div class="text-center animate-fadeInUp px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2 animate-color-change">Nuestros Servicios</h1>
    <p class="text-lg sm:text-xl text-gray-600 mb-6 sm:mb-8">Soluciones diseñadas para llevar tu empresa al siguiente nivel</p>
</div>

<div class="bg-gray-200 py-8 sm:py-12 lg:py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.2s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Desarrollo Web</h3>
                <p class="text-gray-600">Creación de sitios web dinámicos y responsivos para optimizar la presencia online de tu empresa.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.4s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Aplicaciones Móviles</h3>
                <p class="text-gray-600">Desarrollo de aplicaciones móviles personalizadas para Android y iOS.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.6s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Transformación Digital</h3>
                <p class="text-gray-600">Te ayudamos a digitalizar tus procesos y a adoptar nuevas tecnologías para hacer crecer tu negocio.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.8s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Cloud Computing</h3>
                <p class="text-gray-600">Implementación de soluciones en la nube para mejorar la eficiencia y escalabilidad de tu negocio.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 1s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Ciberseguridad</h3>
                <p class="text-gray-600">Protegemos tus datos con las mejores prácticas de seguridad informática.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 1.2s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Consultoría IT</h3>
                <p class="text-gray-600">Te brindamos el soporte necesario para implementar soluciones tecnológicas de última generación.</p>
            </div>
        </div>
    </div>
</div>
@endsection
