<div>
    <div class=" mt-4 md:mt-0 space-y-2 rounded-md  p-1 bg-white dark:bg-gray-800 mx-auto lg:px-12">
        <h2
            class="mb-4 text-lg font-bold leading-none tracking-tight text-gray-900 dark:text-gray-200 md:text-xl lg:text-2xl px-2 py-1 text-center work-sans-link">
            Artículos Agregados
        </h2>
        <div class="flex flex-col items-center lg:flex-row gap-4 justify-center">
            <div class="w-full lg:w-2/3">
                {{-- Search --}}
                <label for="buscador" class="mb-2 text-sm font-medium text-gray-900 sr-only">Buscar</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="buscador"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg 
                bg-gray-50 focus:ring-gray-500 focus:border-gray-500"
                        placeholder="Busca un articulo" wire:model.live.debounce.150ms="search" />


                </div>
            </div>
            <div class="mt-4 lg:mt-0 w-full md:w-auto">
                <a href="{{ route('articulos.create') }}"
                    class="flex items-center justify-center text-white bg-primary hover:bg-primary-dark focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-lg px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Agregar
                </a>
            </div>
        </div>

        @foreach ($articles as $article)
            <article class="p-6" wire:key="{{$article->id}}">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span
                        class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                            </path>
                        </svg>
                        Articulo
                    </span>
                    <span class="text-sm">{{$article->created_at->diffForHumans()}}</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-200">
                    <a target="_blank" href="{{ $article->url }}">{{ $article->title }}</a>
                </h2>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full" src="{{ asset('img/img-2.webp') }}"
                            alt="Viveros Abogados avatar" />
                        <span class="font-medium">Viveros Abogados</span>
                    </div>
                    <a target="_blank" href="{{ $article->url }}"
                        class="inline-flex items-center font-medium text-primary-600 hover:underline">
                        Leer más
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
        @endforeach


    </div>

    <div class="m-3">
        {{ $articles->links() }}
    </div>

</div>
