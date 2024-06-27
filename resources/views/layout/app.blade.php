<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Tipografía --}}
    <title>Viveros Romero | @yield('titulo')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
</head>

<body class="selection:bg-black selection:text-white">
    @if (Request::is('/'))
        <x-header />
    @else
        {{-- <x-banner /> --}}
        <x-navbar />
    @endif
    {{-- Contenido principal --}}
    <main>
        @yield('contenido')
    </main>

    <x-footer />


    <div x-data="{ 
        showScrollButton: false, 
        handleTop: 
            function() { 
                window.scrollTo({ top: 0, behavior: 'smooth' }); 
        } }" x-init="window.addEventListener('scroll', function() {
        showScrollButton = window.scrollY > window.innerHeight / 0.60;
    })">
        <button x-show="showScrollButton" @click="handleTop"
            class="fixed bottom-4 right-5 bg-gray-700 p-2 rounded-full shadow-lg text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 animate-fade-left"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
            </svg>
        </button>
    </div>

    @stack('script')
    @stack('styles')

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            iniciarApp();
        });

        function iniciarApp() {
            aplicarAnimaciones();
        }

        function aplicarAnimaciones() {
            let secciones = document.querySelectorAll(".seccion");

            function mostrarAnimaciones() {
                let scroll = window.scrollY;
                let windowHeight = window.innerHeight;
        
                secciones.forEach((seccion) => {
                    let offsetTop = seccion.offsetTop;
                    let seccionHeight = seccion.offsetHeight;

                    if (scroll + windowHeight >= offsetTop && scroll <= offsetTop + seccionHeight) {
                        seccion.classList.add("animate-fade", "animate-once", "animate-duration-[600ms]",
                            "animate-delay-200", "animate-ease-in", "animate-normal");
                    }
                });
            }

            window.addEventListener("scroll", function() {
                mostrarAnimaciones();
            });

            // Llama a mostrarAnimaciones() para aplicar animaciones cuando la página se carga inicialmente
            mostrarAnimaciones();
        }
    </script>

</body>

</html>
