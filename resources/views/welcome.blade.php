@extends('layout.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 my-8">
        <div>
            <img
                class="rounded-md" 
                src="https://www.calliaweb.co.uk/wp-content/uploads/2015/10/600x400.jpg" alt="Vrabogados">
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
