@extends('layout.auth')

@section('titulo')
    Ver Articulos
@endsection

@section('contenido')
    <section class="my-4 rounded-md py-4">
        <livewire:mostrar-articles />
    </section>
@endsection
