@extends('layouts.template')

@section('title', 'Sugerencias - Ayuntamiento de Almussafes')

@section('content')
<div class="min-h-screen bg-gray-100 flex items-center justify-center py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl w-full bg-white shadow-2xl rounded-xl p-10 space-y-8 transform transition-all duration-300 hover:shadow-3xl">
        
        <div class="text-center">
            <svg class="mx-auto h-12 w-12 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                Envía tu Sugerencia
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Tu opinión es importante para nosotros.
            </p>
        </div>

        @if (session('success'))
            <div class="rounded-md bg-green-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800">¡Sugerencia enviada con éxito!</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <form class="space-y-6" action="{{ route('sugerencias.store') }}" method="POST">
            @csrf
            
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre completo</label>
                <div class="mt-1">
                    <input id="nombre" name="nombre" type="text" autocomplete="name" required
                           class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition-colors duration-200"
                           placeholder="Introduce tu nombre completo">
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" required
                           class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition-colors duration-200"
                           placeholder="ejemplo@correo.com">
                </div>
            </div>

            <div>
                <label for="mensaje" class="block text-sm font-medium text-gray-700">Mensaje</label>
                <div class="mt-1">
                    <textarea id="mensaje" name="mensaje" rows="4" required
                              class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition-colors duration-200"
                              placeholder="Describe tu sugerencia aquí..."></textarea>
                </div>
            </div>

            <div>
                <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                    Enviar Sugerencia
                </button>
            </div>
        </form>
    </div>
</div>
@endsection