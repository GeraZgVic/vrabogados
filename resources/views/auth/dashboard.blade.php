@extends('layout.auth')
@section('titulo')
    Inicio
@endsection

{{-- Colores dinámicos: 
   text-primary-dark dark:text-light
   bg-primary hover:bg-primary-dark
--}}

@section('contenido')
    <div x-data="{
        postsCount: 0,
        posts: {{ $posts->count() }},
        articlesCount: 0,
        articles: {{ $articles->count() }},
        time: 300
    }" x-init="() => {
        // Inicializa los contadores para posts
        let startPosts = postsCount;
        const intervalPosts = Math.max(time / (posts - startPosts), 5);
        const stepPosts = (posts - startPosts) / (time / intervalPosts);
        const handlePosts = setInterval(() => {
            if (postsCount < posts)
                postsCount += stepPosts
            else {
                clearInterval(handlePosts);
                postsCount = posts;
            }
        }, intervalPosts);
    
        // Inicializa los contadores para artículos
        let startArticles = articlesCount;
        const intervalArticles = Math.max(time / (articles - startArticles), 5);
        const stepArticles = (articles - startArticles) / (time / intervalArticles);
        const handleArticles = setInterval(() => {
            if (articlesCount < articles)
                articlesCount += stepArticles
            else {
                clearInterval(handleArticles);
                articlesCount = articles;
            }
        }, intervalArticles);
    }" class="container mx-auto p-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <a href="{{ route('post.index') }}"
                class="flex flex-col items-center justify-center w-full h-52 bg-indigo-500 dark:bg-indigo-600 rounded-md shadow-lg hover:bg-indigo-600 dark:hover:bg-indigo-700 transition-colors duration-300 ease-in-out transform hover:scale-105">
                <p class="text-3xl font-extrabold bg-gradient-to-r from-slate-200 to-gray-300 bg-clip-text text-transparent"
                    x-text="Math.round(postsCount) + ' Posts'">
                </p>
            </a>

            <a href="{{ route('articulos.index') }}"
                class="flex flex-col items-center justify-center w-full h-52 bg-primary rounded-md shadow-lg hover:bg-primary-dark transition-colors duration-300 ease-in-out transform hover:scale-105">
                <p class="text-3xl font-extrabold bg-gradient-to-r from-slate-200 to-gray-300 bg-clip-text text-transparent"
                    x-text="Math.round(articlesCount) + ' Articulos'">
                </p>
            </a>
        </div>

    </div>
@endsection
