@extends('home.main')

@section('content')
<!-- Sección Principal -->
<div class="relative bg-white text-center py-20 px-6 sm:px-8 lg:px-12 overflow-hidden">
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-gray-800 mb-4 animate-color-change">Innovación en Cada Proyecto</h1>
    <p class="text-lg sm:text-xl text-gray-600 mb-8">Transformamos tus ideas en soluciones tecnológicas de vanguardia</p>
    <a href="{{ route('contacto') }}" class="bg-blue-500 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 shadow-lg">
        Contáctanos
    </a>
</div>

<!-- Sección de Valor Añadido -->
<div class="bg-gray-50 py-12 sm:py-16 lg:py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12 animate-fadeInUp">¿Por Qué Elegirnos?</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.2s;">
                <h3 class="text-xl font-semibold mb-4">Enfoque Personalizado</h3>
                <p class="text-gray-700">Cada proyecto es único. Adaptamos nuestras soluciones a tus necesidades específicas.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.4s;">
                <h3 class="text-xl font-semibold mb-4">Tecnología de Punta</h3>
                <p class="text-gray-700">Utilizamos las herramientas y tecnologías más avanzadas para garantizar resultados óptimos.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.6s;">
                <h3 class="text-xl font-semibold mb-4">Compromiso y Soporte</h3>
                <p class="text-gray-700">Estamos contigo en cada paso del camino, ofreciendo soporte y soluciones cuando más los necesitas.</p>
            </div>
        </div>
    </div>
</div>

<!-- Testimonios -->
<div class="bg-gray-100 py-12 sm:py-16 lg:py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12 animate-fadeInUp">Lo Que Dicen Nuestros Clientes</h2>
        <div class="flex flex-col sm:flex-row sm:space-x-8">
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8 sm:mb-0 flex-1 animate-fadeInUp" style="animation-delay: 0.2s;">
                <p class="text-gray-700 mb-4">“Devix Solutions transformó nuestra visión en realidad. Su atención al detalle y soporte continuo ha sido invaluable.”</p>
                <p class="font-semibold">Ana García</p>
                <p class="text-gray-500">CEO, Tech Innovations</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8 sm:mb-0 flex-1 animate-fadeInUp" style="animation-delay: 0.4s;">
                <p class="text-gray-700 mb-4">“Los expertos de Devix Solutions nos ayudaron a optimizar nuestros procesos y mejorar significativamente nuestra eficiencia.”</p>
                <p class="font-semibold">Luis Fernández</p>
                <p class="text-gray-500">CTO, Future Tech</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 flex-1 animate-fadeInUp" style="animation-delay: 0.6s;">
                <p class="text-gray-700 mb-4">“Su compromiso con la calidad y el servicio al cliente es excepcional. Recomiendo altamente sus servicios.”</p>
                <p class="font-semibold">María López</p>
                <p class="text-gray-500">Fundadora, Innovate Solutions</p>
            </div>
        </div>
    </div>
</div>
@endsection
