@extends('layout.auth')
@section('titulo')
    Editar Articulo
@endsection

@section('contenido')
    <div class="bg-slate-50 dark:bg-gray-900/50 p-4 rounded-md shadow-md my-6">
        <h2 class="text-3xl font-extrabold dark:text-white text-center">Editar Articulo</h2>

        <form class="max-w-sm mx-auto" action="{{ route('articulos.update', $article) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                <input type="text" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $article->title }}" placeholder="Titulo del post" />
                @error('title')
                    <p class="my-2 text-white font-bold uppercase p-2 rounded-lg text-center bg-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría</label>
                <select name="category_id" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">-- Seleccionar --</option>
                    @foreach ($categories as $categoria)                        
                    <option value="{{ $categoria->id }}" {{ $article->category_id == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->name }}
                    </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="my-2 text-white font-bold uppercase p-2 rounded-lg text-center bg-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                <input type="text" id="url" name="url"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $article->url }}" placeholder="Url del articulo" />
                @error('url')
                    <p class="my-2 text-white font-bold uppercase p-2 rounded-lg text-center bg-red-500">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="text-white bg-primary hover:bg-primary-dark focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center  dark:focus:ring-blue-800">Editar</button>
        </form>

    </div>
@endsection
