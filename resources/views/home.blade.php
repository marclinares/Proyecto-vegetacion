@extends('layouts.template')

@section('title', 'Inicio - Ayuntamiento de Almussafes')

@section('content')

    <!-- Hero institucional -->
    <div class="relative bg-cover bg-center h-[450px] rounded-lg overflow-hidden mt-24" style="background-image: url('/images/almussafes-banner.jpg');">
        <div class="absolute inset-0 bg-blue-900 bg-opacity-60 flex items-center justify-center">
            <div class="text-center text-white px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">Zonificación Urbana de Almussafes</h1>
                <p class="text-lg md:text-xl">Explora las 14 zonas del municipio y descubre toda su información ambiental, urbana y social.</p>
            </div>
        </div>
    </div>

    <!-- Introducción -->
    <div class="max-w-6xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Un proyecto para conocer mejor nuestro entorno</h2>
        <p class="text-gray-700 text-lg text-center max-w-3xl mx-auto">
            Este portal ha sido desarrollado por el Ayuntamiento de Almussafes con el objetivo de facilitar el acceso a información detallada de cada zona urbana del municipio: desde vegetación y espacios verdes hasta servicios esenciales como aparcamientos, colegios o zonas de sombra.
        </p>
    </div>

    <!-- Qué incluye cada zona -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-2xl font-semibold text-gray-800 mb-8 text-center">¿Qué información incluye cada zona?</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @php
                    $features = [
                        ['icon' => '🌳', 'title' => 'Vegetación y sombra', 'desc' => 'Áreas verdes, árboles, sombra natural disponible.'],
                        ['icon' => '☀️', 'title' => 'Zonas de calor', 'desc' => 'Análisis térmico del área urbana en épocas cálidas.'],
                        ['icon' => '🅿️', 'title' => 'Aparcamientos', 'desc' => 'Ubicación de parkings públicos y zonas de carga y descarga.'],
                        ['icon' => '🏫', 'title' => 'Centros educativos', 'desc' => 'Escuelas, institutos y otros centros de formación.'],
                        ['icon' => '🏥', 'title' => 'Salud y servicios sociales', 'desc' => 'Centros médicos, farmacias, espacios de ayuda.'],
                        ['icon' => '🏟️', 'title' => 'Equipamientos públicos', 'desc' => 'Polideportivos, centros cívicos, parques infantiles.'],
                    ];
                @endphp

                @foreach ($features as $item)
                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 text-center hover:shadow-lg transition">
                        <div class="text-4xl mb-4">{{ $item['icon'] }}</div>
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">{{ $item['title'] }}</h4>
                        <p class="text-gray-600 text-sm">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Beneficios del proyecto -->
    <div class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <img src="https://i0.wp.com/almussafes.net/wp-content/uploads/2018/12/MarcaCiutat_Logo01.png?ssl=1" alt="Ciudadanía" class="w-full max-w-sm mx-auto md:mx-0">
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Transparencia y utilidad para la ciudadanía</h3>
                <p class="text-gray-700 text-lg mb-4">Este proyecto facilita la toma de decisiones urbanas, la participación ciudadana y la accesibilidad a los recursos municipales.</p>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Planificación urbana sostenible</li>
                    <li>Mejora de la movilidad y el aparcamiento</li>
                    <li>Fomento de zonas verdes y saludables</li>
                    <li>Acceso rápido a servicios clave</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- CTA Final -->
    <div class="bg-blue-700 text-white text-center py-16">
        <h3 class="text-3xl font-bold mb-4">Empieza ya a explorar Almussafes por zonas</h3>
        <p class="text-lg mb-6">Accede al mapa interactivo para conocer tu zona y su información detallada.</p>
        <a href="{{ route('mapeado') }}" class="bg-white text-blue-700 font-semibold px-6 py-3 rounded-md shadow hover:bg-gray-100 transition">
            Ver el Mapa Interactivo
        </a>
    </div>

@endsection
