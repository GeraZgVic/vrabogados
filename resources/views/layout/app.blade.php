<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Tipografía --}}
    <title>@yield('titulo')</title>
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
</head>

<body class="selection:bg-black selection:text-white">
    @if (Request::is('/'))
        <x-header />
    @else
        <x-banner />
        <x-navbar />
    @endif
    {{-- Contenido principal --}}
    <main>
        @yield('contenido')
    </main>

    <x-footer />
    @stack('script')
    @stack('styles')
</body>

</html>
