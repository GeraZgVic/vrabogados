@extends('layout.app')

@section('titulo')
Inicio
@endsection

@section('contenido')
<x-sliderclientes />

<div class="container m-auto px-8 mt-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 my-8">
        <div class="seccion">
            <img class="rounded-md" loading="lazy"
                src="{{asset('img/img-2.webp')}}"
                alt="Vrabogados">
        </div>
        <div class="mt-4 space-y-6">
            <h2 class="text-3xl font-semibold">{{__('site/inicio.welcome')}}</h2>
            <p>Lejos, muy lejos, detrás de las montañas de palabras, lejos de los países Vokalia y Consonantia, viven
                los textos ciegos. Lejos de los países Vokalia y Consonantia, viven los textos ciegos.</p>
            <div class="mt-6">
                <a href="#"
                    class="px-6 py-2 bg-blue-500 transition duration-300 ease-in-out hover:bg-blue-600 hover:ring-2 ring-blue-500/80 text-white rounded-full">Leer
                    más</a>
            </div>
        </div>
    </div>

    {{-- CARDS --}}
    <div class="container m-auto px-8 mt-4 flex flex-col justify-center text-center">
        <h2
            class="text-3xl font-semibold bg-gradient-to-r  from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text ">
            {{__('site/areas.areas-servicios')}}
        </h2>
    </div>
    <div class="grid md:grid-cols-3 gap-10 my-16">
        <div
            class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
            <h2
                class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal group-hover:text-white">
                {{__('site/areas.areas-derecho-civil')}}
            </h2>
            <p class="text-gray-500 group-hover:text-white"> {{__('site/areas.areas-derecho-descripcion')}}</p>
        </div>
        <div
            class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
            <h2
                class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                {{__('site/areas.areas-derecho-penal')}}
            </h2>
            <p class="text-gray-500 group-hover:text-white">{{__('site/areas.areas-derecho-descripcion')}}</p>

        </div>
        <div
            class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
            <h2
                class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                {{__('site/areas.areas-derecho-laboral')}}
            </h2>
            <p class="text-gray-500 group-hover:text-white">{{__('site/areas.areas-derecho-descripcion')}}</p>

        </div>
        <div
            class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
            <h2
                class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                {{__('site/areas.areas-derecho-administrativo')}}
            </h2>
            <p class="text-gray-500 group-hover:text-white">{{__('site/areas.areas-derecho-descripcion')}}</p>

        </div>
        <div
            class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
            <h2
                class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                {{__('site/areas.areas-derecho-mercantil')}}
            </h2>
            <p class="text-gray-500 group-hover:text-white">{{__('site/areas.areas-derecho-descripcion')}}</p>

        </div>
        <div
            class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
            <h2
                class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                {{__('site/areas.areas-derecho-tributario')}}

            </h2>
            <p class="text-gray-500 group-hover:text-white">{{__('site/areas.areas-derecho-descripcion')}}</p>

        </div>
    </div>
</div>


<div
    class="h-[85vh] mb-10 bg-[url(https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-cover bg-center bg-fixed">
    <div class="h-full text-white flex flex-col justify-center items-center text-center space-y-8 bg-black/60">
        <h2 class="md:text-5xl text-3xl">Far far away, behind the word <br> mountains</h2>
        <p class="text-lg md:text-2xl text-gray-400">Far far away, behind the word mountains, far from the <br>
            countries Vokalia and Consonantia, there live the blind
            texts.</p>
        <div>
            <a href="#"
                class="uppercase px-6 py-4 bg-blue-500 transition duration-300 ease-in-out hover:bg-blue-600 text-white hover:ring-2 ring-blue-500/80 rounded-full">consultar</a>
        </div>
    </div>
</div>
@endsection