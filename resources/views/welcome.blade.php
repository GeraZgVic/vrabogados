@extends('layout.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
   <p class="work-sans-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ipsum, quisquam vero minima debitis nulla. Autem, adipisci eveniet dicta sunt repellat nihil corrupti magni nemo quibusdam, pariatur, eius maxime saepe?</p>
@endsection

@push('script')
    <script src="{{asset('build/assets/flowbite.min.js')}}"></script>
@endpush