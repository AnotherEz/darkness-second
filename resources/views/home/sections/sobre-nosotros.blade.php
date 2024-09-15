@extends('home.main')

@section('content')
<div class="text-center animate-fadeInUp px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2 animate-color-change">Sobre Nosotros</h1>
    <p class="text-lg sm:text-xl text-gray-600 mb-6 sm:mb-8">Conoce nuestra historia, misión y visión como empresa líder en soluciones tecnológicas.</p>
</div>

<div class="bg-gray-200 py-8 sm:py-12 lg:py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Nuestra Historia -->
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.2s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Nuestra Historia</h3>
                <p class="text-gray-600">Devix Solutions nació en 2024 con la misión de convertir ideas en soluciones tecnológicas innovadoras. Desde entonces, hemos evolucionado con la tecnología, sin perder de vista la calidad y la satisfacción del cliente.</p>
            </div>

            <!-- Nuestra Misión -->
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.4s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Nuestra Misión</h3>
                <p class="text-gray-600">Proveer soluciones tecnológicas personalizadas que impulsen a nuestros clientes a alcanzar sus metas, manteniendo la excelencia en el servicio y el compromiso con la innovación.</p>
            </div>

            <!-- Nuestra Visión -->
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.6s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Nuestra Visión</h3>
                <p class="text-gray-600">Ser reconocidos como una empresa líder en el desarrollo de soluciones tecnológicas a nivel global, generando impacto positivo en cada uno de nuestros proyectos y clientes.</p>
            </div>

            <!-- Nuestros Valores -->
            <div class="bg-white rounded-lg shadow-lg p-6 animate-fadeInUp" style="animation-delay: 0.8s;">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Nuestros Valores</h3>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li><strong>Innovación:</strong> Buscamos constantemente nuevas formas de mejorar.</li>
                    <li><strong>Calidad:</strong> Nos comprometemos con la excelencia en cada proyecto.</li>
                    <li><strong>Integridad:</strong> Actuamos con honestidad y ética en todas nuestras relaciones.</li>
                    <li><strong>Colaboración:</strong> Creemos en el trabajo en equipo como clave del éxito.</li>
                    <li><strong>Satisfacción del Cliente:</strong> El éxito de nuestros clientes es nuestro éxito.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
