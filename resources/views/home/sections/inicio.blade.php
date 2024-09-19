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



<!-- Proyectos en desarrollo -->
<div class="bg-gray-100 py-12 sm:py-16 lg:py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12 animate-fadeInUp">Proyectos en desarrollo a la fecha.</h2>
        <div class="flex flex-col sm:flex-row sm:space-x-8">
            <x-project-info 
             description="Este sitio web es de Shirley's Petals & Presents, una tienda que ofrece arreglos florales y servicios personalizados, destacando su pasión por crear detalles únicos para cada ocasión. Incluye productos destacados, información sobre sus servicios como entregas a domicilio y testimonios de clientes satisfechos, con un enfoque en ofrecer experiencias memorables a través de las flores."
             link="https://shirley.up.railway.app"
            />
            <x-project-info 
             description="Este sitio web es de Centro de Fisioterapia y Rehabilitación Mas Salud  especializado en fisioterapia y rehabilitación, enfocado en mejorar la calidad de vida de los pacientes mediante tratamientos personalizados. Incluiría información sobre los servicios disponibles, como terapia física, rehabilitación deportiva y postoperatoria, además de secciones sobre el equipo de especialistas, horarios de atención, y contacto para agendar citas. El diseño destacaría la confianza, la atención profesional y el bienestar integral del paciente."
             link="https://massalud.up.railway.app"
            />

        </div>
    </div>
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
                <h3 class="text-xl font-semibold mb-4">Tecnología Moderna</h3>
                <p class="text-gray-700">Utilizamos las herramientas y tecnologías actuales y modernas, que te garantizan un experiencia de calidad.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.6s;">
                <h3 class="text-xl font-semibold mb-4">Compromiso y Soporte</h3>
                <p class="text-gray-700">Estamos contigo en cada paso del camino, ofreciendo soporte y soluciones cuando más los necesitas.</p>
            </div>
        </div>
    </div>
</div>
@endsection
