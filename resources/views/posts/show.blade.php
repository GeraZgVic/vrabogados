@extends('layout.app')

@section('titulo', 'Blog')

@section('contenido')

    <div class="px-4 my-3 max-w-4xl mx-auto">
        <img class="object-cover w-full h-[50vh] md:h-[70vh] lg:h-[80vh] xl:h-[90vh] rounded-md"
            src="{{ asset('uploads/' . $post->image) }}" alt="Imagen {{ $post->title }}">
        <div class="mt-4">
            <span
                class="inline-block bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full uppercase font-semibold tracking-wide">Article</span>
            <h1
                class="font-bold text-3xl md:text-4xl lg:text-5xl xl:text-6xl mb-4 leading-none tracking-tight text-gray-900">
                {{ $post->title }}</h1>
            <p class="mt-2 text-lg">{{ $post->content }}</p>
        </div>
        <div class="flex items-center mt-4">
            <img class="w-10 h-10 object-cover rounded-full" src="{{ asset('uploads/' . $post->image) }}"
                alt="Imagen de {{ $post->title }}">
            <div class="ml-4">
                <p class="text-gray-700 text-sm font-semibold">Viveros Abogados</p>
                <p class="text-gray-500 text-xs">{{ $post->created_at->format('M d, Y') }} ·
                    {{ $post->created_at->diffForHumans() }}</p>
            </div>
        </div>
    </div>

@endsection
