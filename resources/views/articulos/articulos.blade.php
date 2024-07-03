@extends('layout.auth')

@section('titulo')
    Ver Articulos
@endsection

@section('contenido')
    <section class="my-4 rounded-md py-4">
        @if (session('success'))
        <div class="w-full text-white bg-green-500 rounded-md alerta-form my-3">
            <div class="container flex items-center justify-between px-6 py-2 mx-auto">
                <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    <p class="mx-3 text-lg">{{ session('success') }}</p>
                </div>
                <button type="button" onclick="eliminarAlerta()"
                    class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
        <livewire:mostrar-articles />
    </section>
@endsection
