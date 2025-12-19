{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Ayuntamiento de Almussafes')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">


    <nav class="bg-white shadow-md fixed top-5 left-5 right-5 rounded-md z-50">
        <div class="px-6 py-3 flex items-center justify-between max-w-screen-xl mx-auto">
          <!-- Izquierda: Logo y nombre -->
          <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logoalmussafes.png') }}" alt="Logo Ayuntamiento" class="h-10 w-10 object-contain">
            <span class="text-xl font-bold text-gray-800">Ayuntamiento de Almussafes</span>
          </div>
      
          <!-- Botón menú móvil -->
          <button id="menu-btn" class="block md:hidden text-gray-700 focus:outline-none" aria-label="Toggle menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
      
          <!-- Menú desktop -->
          <div class="hidden md:flex space-x-6">
            <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 font-semibold {{ request()->is('/') ? 'text-blue-600' : 'text-gray-700' }}">Home</a>
            <a href="{{ route('mapeado') }}" class="text-gray-700 hover:text-blue-600 font-semibold {{ request()->routeIs('mapeado') ? 'text-blue-600' : 'text-gray-700' }}">Mapeado</a>
            <a href="#" class="text-gray-700 hover:text-blue-600 font-semibold">Servicios</a>
            <a href="#" class="text-gray-700 hover:text-blue-600 font-semibold">Contacto</a>
          </div>
        </div>
      
        <!-- Menú móvil desplegable -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md rounded-b-md max-w-screen-xl mx-auto px-6 py-4 space-y-3">
          <a href="{{ url('/') }}" class="block text-gray-700 hover:text-blue-600 font-semibold {{ request()->is('/') ? 'text-blue-600' : 'text-gray-700' }}">Home</a>
          <a href="{{ route('mapeado') }}" class="block text-gray-700 hover:text-blue-600 font-semibold {{ request()->routeIs('mapeado') ? 'text-blue-600' : 'text-gray-700' }}">Mapeado</a>
          <a href="#" class="block text-gray-700 hover:text-blue-600 font-semibold">Servicios</a>
          <a href="#" class="block text-gray-700 hover:text-blue-600 font-semibold">Contacto</a>
        </div>
      </nav>
      
      <!-- Script menú desplegable responsive -->
      <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
      
        btn.addEventListener('click', () => {
          menu.classList.toggle('hidden');
        });
      </script>
      
    

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>


    <footer class="bg-gray-100 text-center py-4 mt-10 text-gray-600 text-sm">
        &copy; {{ date('Y') }} Ayuntamiento de Almussafes. Todos los derechos reservados.
    </footer>
    

</body>
</html> --}}


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Ayuntamiento de Almussafes')</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">

<nav class="bg-white shadow-md fixed top-5 left-5 right-5 z-50 rounded-lg border border-gray-200">
  <div class="max-w-screen-xl mx-auto px-6 py-3 flex items-center justify-between">
    
    <!-- Logo y nombre -->
    <div class="flex items-center space-x-4">
      <img src="{{ asset('images/logoalmussafes.png') }}" alt="Logo Ayuntamiento" class="h-10 w-10 object-contain">
      <span class="text-lg md:text-xl font-semibold text-gray-800">Ayuntamiento de Almussafes</span>
    </div>

    <!-- Botón menú móvil -->
    <button id="menu-btn" class="md:hidden text-gray-600" aria-label="Abrir menú">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Menú desktop -->
    <div class="hidden md:flex items-center space-x-8">
      <a href="{{ url('/') }}" class="flex items-center space-x-2 font-medium text-sm transition-all duration-200 
        {{ request()->is('/') ? 'text-blue-700 border-b-2 border-blue-700' : 'text-gray-700 hover:text-blue-600' }}">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
        </svg>
        <span>Inicio</span>
      </a>

      <a href="{{ route('mapeado') }}" class="flex items-center space-x-2 font-medium text-sm transition-all duration-200 
        {{ request()->routeIs('mapeado') ? 'text-blue-700 border-b-2 border-blue-700' : 'text-gray-700 hover:text-blue-600' }}">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 20l-5-2.5V4l6 3 6-3 5 2.5v13l-6-3-6 3z" />
        </svg>
        <span>Mapeado</span>
      </a>

      <a href="#" class="flex items-center space-x-2 font-medium text-sm transition-all duration-200 
        text-gray-700 hover:text-blue-600">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.75 17L15 12l-5.25-5" />
        </svg>
        <span>Servicios</span>
      </a>

      <a href="{{ route('sugerencias.index') }}" class="flex items-center space-x-2 font-medium text-sm transition-all duration-200 
        {{ request()->routeIs('sugerencias.index') ? 'text-blue-700 border-b-2 border-blue-700' : 'text-gray-700 hover:text-blue-600' }}">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
        <span>Sugerencias</span>
      </a>
    </div>
  </div>

  <!-- Menú móvil -->
  <div id="mobile-menu" class="hidden md:hidden px-6 py-4 space-y-4 bg-white border-t border-gray-200 rounded-b-lg">
    <a href="{{ url('/') }}" class="flex items-center space-x-2 font-medium text-gray-700 hover:text-blue-600">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
      </svg>
      <span>Inicio</span>
    </a>
    <a href="{{ route('mapeado') }}" class="flex items-center space-x-2 font-medium text-gray-700 hover:text-blue-600">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 20l-5-2.5V4l6 3 6-3 5 2.5v13l-6-3-6 3z" />
        </svg>
      <span>Mapeado</span>
    </a>
    <a href="#" class="flex items-center space-x-2 font-medium text-gray-700 hover:text-blue-600">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9.75 17L15 12l-5.25-5" />
      </svg>
      <span>Servicios</span>
    </a>
    <a href="{{ route('sugerencias.index') }}" class="flex items-center space-x-2 font-medium text-gray-700 hover:text-blue-600">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
      <span>Sugerencias</span>
    </a>
  </div>
</nav> 

<!-- Script menú responsive -->
<script>
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>

<main class="container mx-auto px-4 py-8 mt-10">
  @yield('content')
</main>


<footer class="bg-gray-100 text-center py-4 mt-10 text-gray-600 text-sm border-t">
  &copy; {{ date('Y') }} Ayuntamiento de Almussafes. Todos los derechos reservados.
</footer>

</body>
</html>
