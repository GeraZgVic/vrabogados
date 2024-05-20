@extends('layout.app')
@section('titulo')
Areas de práctica
@endsection

@section('contenido')
<div class="container m-auto px-8 mt-4 flex flex-col justify-center text-center">
    <div class="my-4">
        <h2
            class="text-3xl font-semibold bg-gradient-to-r  from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text ">
            {{__('site/areas.areas-servicios')}}</h2>
        <div class="mt-4 space-y-6">
            <p class="text-2xl text-gray-500"">{{__('site/areas.areas-servicio-descripcion')}}</p>
        </div>
        <div>
            <div class=" grid grid-cols-1 md:grid-cols-2 gap-10 my-8">
            <div>
                <img class="rounded-md"
                    src="https://media.istockphoto.com/id/956243400/es/foto/cierre-empresario-abogado-trabajando-o-leyendo-el-libro-de-derecho-en-trabajo-de-oficina-para.jpg?s=1024x1024&w=is&k=20&c=0qwlfbmo-KSMAm9agaZwRTab2NDfBRHqk_7UJVi60oU="
                    alt="Vrabogados">
            </div>
            <livewire:accordion :texto="'Holaaaa'" />
        </div>
        <div class="grid md:grid-cols-3 gap-10 my-16">
            <div
                class="text-center border-double rounded-md border-4 border-sky-500 py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal group-hover:text-white">
                    Derecho civil
                </h2>
                <p class="text-gray-500 group-hover:text-white">Even the all-powerful Pointing has no control about
                    the
                    blind texts it is an almost unorthographic life</p>

            </div>
            <div
                class="text-center border-double rounded-md border-4 border-sky-500 py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                    Derecho penal
                </h2>
                <p class="text-gray-500 group-hover:text-white">Even the all-powerful Pointing has no control about
                    the
                    blind texts it is an almost unorthographic life</p>

            </div>
            <div
                class="text-center border-double rounded-md border-4 border-sky-500 py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                    Derecho laboral
                </h2>
                <p class="text-gray-500 group-hover:text-white">Even the all-powerful Pointing has no control about
                    the
                    blind texts it is an almost unorthographic life</p>

            </div>
            <div
                class="text-center border-double rounded-md border-4 border-sky-500 py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                    Derecho
                    administrativo</h2>
                <p class="text-gray-500 group-hover:text-white">Even the all-powerful Pointing has no control about
                    the
                    blind texts it is an almost unorthographic life</p>

            </div>
            <div
                class="text-center border-double rounded-md border-4 border-sky-500 py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                    Derecho mercantil
                </h2>
                <p class="text-gray-500 group-hover:text-white">Even the all-powerful Pointing has no control about
                    the
                    blind texts it is an almost unorthographic life</p>

            </div>
            <div
                class="text-center border-double rounded-md border-4 border-sky-500 py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                    Derecho
                    tributario</h2>
                <p class="text-gray-500 group-hover:text-white">Even the all-powerful Pointing has no control about
                    the
                    blind texts it is an almost unorthographic life</p>

            </div>
        </div>
        @endsection