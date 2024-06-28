@extends('layout.app')

@section('titulo', 'Blog')

@section('contenido')
    <div class="container mx-auto px-4 lg:px-10 my-4">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h1 class="mb-4 text-gray-900 titulos">Nuestro Blog</h1>
            <p class="font-light text-gray-600 sm:text-xl parrafo-cuerpo">
                En Viveros Romero Abogados, nos dedicamos a proporcionar información legal relevante y actualizada.
            </p>
        </div>
        <div class="bg-white space-y-12">
            <div class="mx-auto flex flex-col lg:flex-row gap-6">
                <div class="order-2 lg:order-1 lg:w-2/3">
                    @if ($posts->isEmpty())
                        <p class="text-center text-gray-500">No hay publicaciones disponibles.</p>
                    @else
                        <div class="grid lg:grid-cols-2 gap-6">
                            @foreach ($posts as $post)
                                <div class="shadow-md rounded-md overflow-hidden border border-gray-300/50">
                                    <img class="w-full h-48 object-cover" src="{{ asset('uploads/' . $post->image) }}" alt="Imagen de {{ $post->title }}">
                                    <div class="p-6">
                                        <span class="inline-block bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full uppercase font-semibold tracking-wide">Artículo</span>
                                        <h2 class="mt-2 text-xl font-semibold font-work-sans">{{ $post->title }}</h2>
                                        <p class="mt-2 text-gray-600 line-clamp-3 font-work-sans">{{ $post->content }}</p>
                                        <a href="{{ route('post.show', ['id' => $post->id, 'title' => $post->title]) }}" class="inline-flex items-center font-medium text-primary-600 hover:underline mt-4">
                                            Leer más
                                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                        <div class="flex items-center mt-4">
                                            <img class="w-10 h-10 object-cover rounded-full" src="{{ asset('uploads/' . $post->image) }}" alt="Imagen de {{ $post->title }}">
                                            <div class="ml-4">
                                                <p class="text-gray-700 text-sm font-semibold">Viveros Abogados</p>
                                                <p class="text-gray-500 text-xs">{{ $post->created_at->format('M d, Y') }} · {{ $post->created_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="my-3">
                            {{$posts->links()}}
                        </div>
                    @endif
                </div>
                <livewire:mostrar-articulos />
            </div>
        </div>
    </div>
@endsection
