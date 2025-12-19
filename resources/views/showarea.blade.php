@extends('layouts.template')

@section('title', 'Detalle de ' . $area->nombre)

@section('content')

    {{-- ------------------------------------------------DESCRIPCIÓN DE CADA AREA---------------------------------------------------- --}}


<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6">{{ $area->nombre }}</h2>
    <p class="mb-4 text-gray-700">{{ $area->descripcion }}</p>

    @if($area->mapa)
        <div class="mb-8">
            <iframe 
                src="{{ $area->mapa }}" 
                width="100%" 
                height="600" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full rounded-lg shadow-lg">
            </iframe>
        </div>
    @else
        <p class="text-red-500">Mapa no disponible para esta área.</p>
    @endif


    {{-- --------------------------------------------------VEGETACIÓN ASOCIADA A CADA AREA------------------------------------------------ --}}

    <div x-data="{ abierto: false }" class="mt-10">
        <button @click="abierto = !abierto"
                class="flex items-center justify-between w-full bg-green-600 text-white px-6 py-3 rounded-lg text-xl font-semibold shadow hover:bg-green-700 transition">
            Vegetación
            <svg :class="{ 'rotate-180': abierto }" 
                class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="abierto" x-transition class="mt-6 space-y-6">
            @forelse($vegetaciones as $veg)
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-green-200 hover:shadow-xl transition-all duration-300">
                    <h4 class="text-2xl font-semibold text-green-900 mb-3">{{ $veg->nombre }}</h4>

                    @if($veg->imagen)
                        <img src="{{ asset('images/vegetacion/' . $veg->imagen) }}"
                            alt="Imagen de {{ $veg->nombre }}"
                            class="w-full max-w-xl h-64 object-cover rounded-xl mb-4 border border-green-100 shadow" />
                    @endif

                    @if($veg->descripcion)
                        <p class="text-gray-800 whitespace-pre-line text-base mb-4">
                            {{ $veg->descripcion }}
                        </p>
                    @endif

                    @if($veg->descripciones->count())
                        <div x-data="{ info: false }" class="mt-2">
                            <button @click="info = !info"
                                    class="flex items-center gap-2 text-green-700 font-medium hover:underline focus:outline-none">
                                <svg :class="{ 'rotate-180': info }" class="w-5 h-5 transition-transform duration-300" 
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                                Información adicional
                            </button>

                            <div x-show="info" x-transition class="mt-3 border-l-4 border-green-300 pl-4">
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    @foreach($veg->descripciones as $desc)
                                        <li>{{ $desc->descripcion }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @else
                        <p class="text-gray-500 italic text-sm">No hay información adicional registrada.</p>
                    @endif
                </div>
            @empty
                <p class="text-red-600 text-base">No hay vegetación asociada a esta área.</p>
            @endforelse
        </div>
    </div>


    

    {{-- --------------------------------------------------APARCAMIENTOS DE CADA AREA------------------------------------------------ --}}

    <div x-data="{ abierto: false }" class="mt-3">
        <button @click="abierto = !abierto"
                class="flex items-center justify-between w-full bg-blue-600 text-white px-6 py-3 rounded-lg text-xl font-semibold shadow hover:bg-blue-700 transition">
            Aparcamientos
            <svg :class="{ 'rotate-180': abierto }" 
                class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="abierto" x-transition class="mt-6 space-y-6">
            {{-- Descripción general de los aparcamientos --}}
            @if($area->descripcion_aparcamientos)
                <div class="bg-blue-50 border border-blue-200 p-4 rounded-xl shadow text-gray-800">
                    {{ $area->descripcion_aparcamientos }}
                </div>
            @endif

            {{-- Listado de aparcamientos --}}
            @forelse($area->aparcamientos as $aparcamiento)
                <div class="bg-white rounded-xl shadow p-5 border border-blue-100 hover:shadow-md transition">
                    <h4 class="text-xl font-semibold text-blue-800 mb-2">{{ $aparcamiento->nombre }}</h4>
                    
                    @if($aparcamiento->descripcion)
                        <p class="text-gray-700 mb-2 whitespace-pre-line">{{ $aparcamiento->descripcion }}</p>
                    @endif

                    @if($aparcamiento->plazas)
                        <p class="text-gray-600 font-medium">Numero de plazas: <span class="text-blue-700">{{ $aparcamiento->plazas }}</span></p>
                    @endif
                </div>
            @empty
                <p class="text-red-600 text-base">No hay aparcamientos registrados para esta área.</p>
            @endforelse
        </div>
    </div>



    {{-- ------------------------------------------------VOLVER AL LISTA DE AREAS-------------------------------------------- --}}
    <br><br>
    <a href="{{ route('mapeado') }}" class="text-blue-600 hover:underline">← Volver al listado de áreas</a>
    
</div>

@endsection

