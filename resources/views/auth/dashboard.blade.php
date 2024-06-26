@extends('layout.auth')
@section('titulo')
    Dashboard
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
    }" class="container mx-auto px-6 pt-6">
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
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 container mx-auto p-6">
        <a target="_blank"
            href="https://www.cjf.gob.mx/micrositios/dggj/paginas/serviciosTramites.htm?pageName=servicios%2Fexpedientes.htm"
            class="bg-primary rounded-md shadow-lg hover:bg-primary-dark transition-colors duration-300 ease-in-out transform hover:scale-105 p-4">
            <div class="flex items-center justify-center">
                <p class="parrafo-cuerpo text-center text-gray-100 font-semibold">
                    Dirección General de Gestión Judicial
                </p>
            </div>
        </a>
        <a target="_blank" href="https://www.serviciosenlinea.pjf.gob.mx/juicioenlinea"
            class="p-4 bg-pink-500 dark:bg-pink-600 rounded-md shadow-lg hover:bg-pink-600 dark:hover:bg-pink-700 transition-colors duration-300 ease-in-out transform hover:scale-105">
            <div class="flex items-center justify-center">
                <p class="parrafo-cuerpo text-center text-gray-100 font-semibold">
                    Portal de Servicios en Línea
                </p>
            </div>
        </a>
        <a target="_blank" href="https://consultasjfca.stps.gob.mx:209/"
            class="p-4 bg-pink-500 dark:bg-pink-600 rounded-md shadow-lg hover:bg-pink-600 dark:hover:bg-pink-700 transition-colors duration-300 ease-in-out transform hover:scale-105">
            <div class="flex items-center justify-center">
                <p class="parrafo-cuerpo text-center text-gray-100 font-semibold">
                    Informe del Estado Procesal de los Expedientes
                </p>
            </div>
        </a>
        <a target="_blank" href="https://eje.tsj-tabasco.gob.mx/login/"
            class="p-4 bg-indigo-500 dark:bg-indigo-600 rounded-md shadow-lg hover:bg-indigo-600 dark:hover:bg-indigo-700 transition-colors duration-300 ease-in-out transform hover:scale-105">
            <div class="flex items-center justify-center">
                <p class="parrafo-cuerpo text-center text-gray-100 font-semibold">
                    Poder Judicial del Estado de Tabasco
                </p>
            </div>
        </a>
        <a target="_blank" href="https://stjjalisco.gob.mx/consultas-en-linea/"
            class="col-span-1 p-4 bg-indigo-500 dark:bg-indigo-600 rounded-md shadow-lg hover:bg-indigo-600 dark:hover:bg-indigo-700 transition-colors duration-300 ease-in-out transform hover:scale-105">
            <div class="flex items-center justify-center">
                <p class="parrafo-cuerpo text-center text-gray-100 font-semibold">
                    Supremo Tribunal de Justicia Jalisco
                </p>
            </div>
        </a>
        <a target="_blank" href="https://sicor.poderjudicialdf.gob.mx/BusquedaExpediente.php"
            class="col-span-1 md:col-span-2 p-4 bg-pink-500 dark:bg-pink-600 rounded-md shadow-lg hover:bg-pink-600 dark:hover:bg-pink-700 transition-colors duration-300 ease-in-out transform hover:scale-105 ">
            <div class="flex items-center justify-center">
                <p class="parrafo-cuerpo text-center text-gray-100 font-semibold">
                    Poder Judicial De La Ciudad de México <br> Consulta en Línea
                </p>
            </div>
        </a>
        <a target="_blank" href="https://sicor.poderjudicialdf.gob.mx/BusquedaExpediente.php"
            class="col-span-1 bg-primary rounded-md shadow-lg hover:bg-primary-dark transition-colors duration-300 ease-in-out transform hover:scale-105 p-4">
            <div class="flex items-center justify-center">
                <p class="parrafo-cuerpo text-center text-gray-100 font-semibold">
                    Sistema Integral para la Consulta de Resoluciones
                </p>
            </div>
        </a>
    </div>
    
@endsection
