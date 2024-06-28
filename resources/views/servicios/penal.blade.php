@extends('layout.app')

@section('titulo', 'Derecho Civil')

@section('contenido')

<div class="relative h-screen w-full flex items-center animate-fade justify-center bg-cover bg-center text-center px-5"
    style="background-image:url(https://images.pexels.com/photos/260689/pexels-photo-260689.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500);">
    <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-900 opacity-75"></div>

    <div class="z-50 flex flex-col justify-center text-white w-full h-screen">
        <h1 class="titulos animate-bounce animate-infinite">¡Nos <b> estamos</b> acercando!</h1>
        <p class="parrafo-cuerpo animate-fade animate-infinite animate-duration-[3000ms]">¡Estén pendientes, algo
            extraordinario que viene pronto!</p>

        <div>
            <div class="shadow w-full mt-2 max-w-2xl mx-auto rounded-full">
                <div x-data="{ progress: 0, interval: null }"
                    x-init="() => { interval = setInterval(() => { progress < 75 ? progress += 5 : clearInterval(interval); }, 100); }"
                    class="w-full">

                    <div class="relative h-5 mt-3 bg-gray-200 rounded-full">
                        <div x-bind:style="'width: ' + progress + '%;'"
                            class="absolute top-0 left-0 h-full bg-blue-500 rounded-full" style="width: 75%;">
                            <div class="text-sm text-white" x-text="progress + '%'">Cargando... 75%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

@endsection