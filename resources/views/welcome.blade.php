@extends('layout.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 my-8">
        <div>
            <img
                class="rounded-md" 
                src="https://img.freepik.com/foto-gratis/vista-escalas-3d-justicia-dia-abogado_23-2151023417.jpg?w=1060&t=st=1715279060~exp=1715279660~hmac=d3d2923c0a15eaf5f22c7ca377b729566161ebc89428e1d444324d059b224106" alt="Vrabogados">
        </div>
        <div class="mt-4 space-y-6">
             <h2 class="text-3xl font-semibold">Lorem lorem lorem lor</h2>
            <p>Lejos, muy lejos, detrás de las montañas de palabras, lejos de los países Vokalia y Consonantia, viven los textos ciegos. Lejos de los países Vokalia y Consonantia, viven los textos ciegos.</p>
            <div class="mt-6">
                <a href="#" class="px-6 py-2 bg-blue-500 transition duration-300 ease-in-out hover:bg-blue-600 text-white rounded-full">Leer más</a>
            </div>
        </div>
    </div>
@endsection
