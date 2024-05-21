@extends('layout.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
<x-sliderclientes />

    <div class="container m-auto px-8 mt-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 my-8">
            <div class="seccion">
                <img class="rounded-md"
                    loading="lazy"
                    src="https://img.freepik.com/foto-gratis/vista-escalas-3d-justicia-dia-abogado_23-2151023417.jpg?w=1060&t=st=1715279060~exp=1715279660~hmac=d3d2923c0a15eaf5f22c7ca377b729566161ebc89428e1d444324d059b224106"
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
        <div class="grid md:grid-cols-3 gap-10 my-16">
            <article
                class="text-center border py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2 class="text-2xl text-indigo-600 work-sans-normal group-hover:text-white">Real Estate Law</h2>
                <p class="text-gray-500 group-hover:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consectetur reiciendis ex obcaecati nisi animi iste quia ipsa? Rerum impedit, voluptates molestias
                    adipisci quo, exercitationem fuga aperiam perferendis id aut nihil.</p>
            </article>
            <article
                class="text-center border py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2 class="text-2xl text-indigo-600 work-sans-normal group-hover:text-white">Insurance Law</h2>
                <p class="text-gray-500 group-hover:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Tenetur exercitationem non id sed accusamus saepe excepturi, eum modi obcaecati officia eligendi dicta
                    quos nobis illum mollitia, sit magnam et quae.</p>
            </article>
            <article
                class="text-center border py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2 class="text-2xl text-indigo-600 work-sans-normal group-hover:text-white">Business Law</h2>
                <p class="text-gray-500 group-hover:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Magnam iste magni quos. Dignissimos, minus asperiores repellat officiis, inventore pariatur eaque
                    tenetur, repudiandae eius sapiente in nobis illo necessitatibus? Dolores, sapiente.</p>
            </article>
        </div>
    </div>


    <div
        class="h-[85vh] mb-10 bg-[url(https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-cover bg-center bg-fixed">
        <div class="h-full text-white flex flex-col justify-center items-center text-center space-y-8 bg-black/60">
            <h2 class="text-5xl">Far far away, behind the word <br> mountains</h2>
            <p class="text-2xl text-gray-400">Far far away, behind the word mountains, far from the <br> countries Vokalia and Consonantia, there live the blind
                texts.</p>
            <div>
                <a href="#"
                    class="uppercase px-6 py-4 bg-blue-500 transition duration-300 ease-in-out hover:bg-blue-600 text-white hover:ring-2 ring-blue-500/80 rounded-full">consultar</a>
            </div>
        </div>
    </div>
@endsection
