@extends('layout.auth')
@section('titulo')
    Editar Post
@endsection
{{-- 
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush --}}

@section('contenido')
    <div class="bg-slate-50 dark:bg-gray-900/50 p-4 rounded-md shadow-md my-6">
        <h2 class="text-3xl font-extrabold dark:text-white text-center">Editar Post</h2>
   
        <form class="max-w-sm mx-auto" action="{{route('post.update', $post)}}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                <input type="title" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $post->title}}" placeholder="Titulo del post" />
            </div>
            <div class="mb-5">
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenido</label>
                <textarea id="content" name="content" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Agrega una descripción del post..."> {{ $post->content }}</textarea>
            </div>
            <div class="mb-5">
                <h3>Imagen Actual</h3>
                <img class="w-52 h-52" src="{{asset('uploads') .'/' . $post->image}}" alt="{{$post->title}}">
            </div>
            <div class="mb-5">
                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen Nueva
                </label>

                <input name="new_image" type="file" accept="image/*">

                @error('new_image')
                    <p class="my-2 text-white font-bold uppercase p-2 rounded-lg text-center bg-red-500">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="text-white bg-primary hover:bg-primary-dark focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center  dark:focus:ring-blue-800">Editar
                Post</button>
        </form>

    </div>
@endsection
