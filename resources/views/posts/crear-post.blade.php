@extends('layout.auth')
@section('titulo')
    Crear Post
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="bg-slate-50 dark:bg-gray-900/50 p-4 rounded-md shadow-md my-6">
        <h2 class="text-3xl font-extrabold dark:text-white text-center">Crear Post</h2>
        <div class="max-w-sm mx-auto my-5">
            <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data" id="dropzone"
                class="dropzone flex flex-col items-center justify-center bg-gray-50 border-2 border-dashed border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full h-64 p-5 transition ease-in-out duration-300 hover:bg-gray-100 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:hover:bg-gray-800">
                @csrf
                <div class="dz-message flex flex-col items-center justify-center text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera-down" width="52"
                        height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9ca3af" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 20h-7a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v3.5" />
                        <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        <path d="M19 16v6" />
                        <path d="M22 19l-3 3l-3 -3" />
                    </svg>
                    <p class="text-gray-500 dark:text-gray-400">Arrastre y suelte su imagen aquí, o haga clic para
                        seleccionar la imagen</p>
                </div>
            </form>
        </div>
        <form class="max-w-sm mx-auto" action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                <input type="text" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('title') }}" placeholder="Titulo del post" />
                @error('title')
                    <p class="my-2 text-white font-bold uppercase p-2 rounded-lg text-center bg-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenido</label>
                <textarea id="content" name="content" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Agrega una descripción del post..."> {{ old('content') }}</textarea>
                @error('content')
                    <p class="my-2 text-white font-bold uppercase p-2 rounded-lg text-center bg-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <input name="image" type="hidden" value="{{ old('image') }}" />
                @error('image')
                    <p class="my-2 text-white font-bold uppercase p-2 rounded-lg text-center bg-red-500">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="text-white bg-primary hover:bg-primary-dark focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center  dark:focus:ring-blue-800">Crear
                Post</button>
        </form>

    </div>
@endsection
