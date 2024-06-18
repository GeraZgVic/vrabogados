<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Tipografía --}}
    <title>Viveros Romero | @yield('titulo')</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');

        .work-sans-bold {
            font-family: "Work Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
        }

        .work-sans-extrabold {
            font-family: "Work Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 900;
            font-style: normal;
        }

        .work-sans-link {
            font-family: "Work Sans", sans-serif;
            font-optical-sizing: auto;
            text-transform: uppercase;
            font-weight: 400;
            font-style: normal;

        }

        .work-sans-normal {
            font-family: "Work Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .work-sans-light {
            font-family: "Work Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;
        }
    </style>
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
