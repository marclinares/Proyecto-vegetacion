{{-- @extends('layouts.template')

@section('title', 'Mapeado Almussafes')

@section('content')

  @if (session('error'))
    <br><br><br><br>
    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
        {{ session('error') }}
    </div>
  @endif


  <div class="container mx-auto px-4 py-8 mt-24">

        {{-- Título y explicación
        <h2 class="text-3xl font-bold text-blue-700 mb-4">Mapeado de Almussafes</h2>

        <p class="text-gray-700 leading-relaxed mb-8">
            Con el fin de organizar mejor la información urbana y los servicios municipales,
            hemos dividido el término de Almussafes en <strong>14 áreas diferenciadas</strong>.
            Cada área agrupa calles y equipamientos cercanos para facilitar la planificación y
            la consulta de datos geográficos. En el mapa interactivo podrás ver el contorno de
            cada área y hacer clic para obtener detalles adicionales.
        </p>

        {{-- Contenedor del mapa
        <div class="bg-white shadow-lg rounded-md p-4 md:p-6">
            <div class="relative" style="padding-top: 50%; /* altura≈50% del ancho */">
                <iframe
                    src="https://www.google.com/maps/d/embed?mid=1hTM8J0M7u-uUf4bYQgPemuxYu2ubnPU&ehbc=2E312F>"
                    class="absolute top-0 left-0 w-full h-full rounded-md border-0"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa con las 14 áreas de Almussafes">
                </iframe>
            </div>
        </div>
    </div>


    {{--Aqui mostraremos las 12 áreas con un foreach
    <div class="container mx-auto px-4 py-8 mt-10">
      <h2 class="text-3xl font-bold mb-8">Áreas de Almussafes</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($areas as $area)
          <a href="{{ route('showarea', $area->id) }}"
            class="block bg-white rounded-lg shadow-md overflow-hidden cursor-pointer hover:shadow-lg transition-shadow">
            <img src="{{ asset('images/areas/' . $area->imagen) }}"
                alt="{{ $area->nombre }}" class="w-full h-48 object-cover">
            <div class="p-4">
              <h3 class="text-xl font-semibold mb-2">{{ $area->nombre }}</h3>
              <p class="text-gray-700 text-sm">{{ $area->descripcion_breve }}</p>
            </div>
          </a>
        @endforeach
      </div>
    </div>


@endsection --}}

@extends('layouts.template')

@section('title', 'Mapeado de Almussafes')

@section('content')

  {{-- Mensaje de error --}}
  @if (session('error'))
    <div class="fixed top-0 inset-x-0 z-50 flex items-center justify-center p-4">
        <div class="bg-red-600 text-white font-medium px-6 py-3 rounded-lg shadow-xl flex items-center space-x-2 animate-fade-in-down">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
            </svg>
            <span>{{ session('error') }}</span>
        </div>
    </div>
  @endif

  <div class="container mx-auto px-4 py-12 md:py-20">

      {{-- Sección de Encabezado --}}
      <div class="text-center mb-16">
          <svg class="mx-auto h-20 w-20 text-blue-600 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-none">Mapeado de Almussafes</h1>
          <p class="mt-6 text-xl text-gray-600 max-w-4xl mx-auto">
              Con el objetivo de organizar mejor la información urbana y los servicios municipales, hemos dividido el término de Almussafes en <strong class="text-blue-600">14 áreas diferenciadas</strong>. Cada área agrupa calles y equipamientos cercanos para facilitar la planificación y la consulta de datos geográficos.
          </p>
      </div>

      {{-- Contenedor del mapa --}}
      <div class="bg-white shadow-2xl rounded-3xl p-6 md:p-10 mb-16 transform transition-all duration-300 hover:scale-[1.01] hover:shadow-3xl">
          <div class="relative" style="padding-top: 50%;">
              <iframe
                  src="https://www.google.com/maps/d/embed?mid=1hTM8J0M7u-uUf4bYQgPemuxYu2ubnPU&ehbc=2E312F"
                  class="absolute top-0 left-0 w-full h-full rounded-2xl border-0"
                  loading="lazy"
                  allowfullscreen
                  referrerpolicy="no-referrer-when-downgrade"
                  title="Mapa con las 14 áreas de Almussafes">
              </iframe>
          </div>
      </div>

      {{-- Sección de Áreas con foreach --}}
      <div class="mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-10 text-center">Explora las Áreas de Almussafes</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
          @foreach ($areas as $area)
            <a href="{{ route('showarea', $area->id) }}"
              class="block bg-white rounded-3xl shadow-xl overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:bg-gray-50">
              <div class="h-60 overflow-hidden">
                  <img src="{{ asset('images/areas/' . $area->imagen) }}"
                      alt="Imagen del área {{ $area->nombre }}"
                      class="w-full h-full object-cover transform transition-transform duration-300 hover:scale-110">
              </div>
              <div class="p-6 md:p-8">
                <h3 class="text-2xl font-semibold text-gray-800 mb-2">{{ $area->nombre }}</h3>
                <p class="text-gray-600 text-base leading-relaxed">{{ $area->descripcion_breve }}</p>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </div>

@endsection
