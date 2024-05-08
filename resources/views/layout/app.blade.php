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
            font-weight: 700;
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

<body>
    {{-- Banner --}}
    <div class="flex items-center justify-between gap-x-8 md:gap-x-4  px-2 py-1">
        <a href="{{ route('home.index') }}">
            <img class=md:h-14 w-full" src="{{ asset('img/logo.png') }}" alt="Logo de Vrabogados">
        </a>
        <div class="flex gap-x-6">
            <a href="mailto:vrabogados@siccoms.com" class="flex gap-x-1 text-gray-600 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                vrabogados@siccoms.com
            </a>

            <a href="#" class="flex gap-x-1 text-gray-600 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                </svg>
                +2722486069
            </a>
        </div>
    </div>
    {{-- Header --}}
    <x-header />

    {{-- Contenido principal --}}
    <main class="container m-auto px-4 mt-4">
        @yield('contenido')
    </main>

    <footer>

    </footer>
    @stack('script')
</body>

</html>
