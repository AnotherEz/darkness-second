@extends('home.main')

@section('content')
<div class="text-center animate-fadeInUp px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2 animate-color-change">Devix Solutions Software</h1>
    <p class="text-lg sm:text-xl text-gray-600 mb-6 sm:mb-8">Transformando ideas en soluciones tecnológicas innovadoras</p>
    <a href="{{ route('servicios') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">
        Descubre Nuestros Servicios
    </a>
</div>

<div class="bg-gray-200 py-8 sm:py-12 lg:py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.2s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Desarrollo de Software</h3>
                <p class="text-gray-600">Creamos soluciones personalizadas para impulsar tu negocio.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.4s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Consultoría IT</h3>
                <p class="text-gray-600">Asesoramiento experto para optimizar tus procesos tecnológicos.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.6s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Soporte Técnico</h3>
                <p class="text-gray-600">Asistencia continua para mantener tus sistemas funcionando sin problemas.</p>
            </div>
        </div>
    </div>
</div>
@endsection
