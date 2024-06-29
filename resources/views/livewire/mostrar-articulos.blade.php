<aside
    class=" order-1 lg:order-2  lg:w-1/3 mt-4 md:mt-0 space-y-2 rounded-md h-1/2 md:h-full max-h-[120vh] overflow-y-auto border p-1">
    <div class="sticky top-0 bg-white">
        <h2
            class="mb-4 leading-none tracking-tight text-gray-900  px-2 py-2 text-center text-xl md:text-2xl lg:text-3xl font-semibold font-raleway">
            Artículos más buscados</h2>
        {{-- Search --}}
        <div class="max-w-md mx-auto flex">
            <div>
                <select wire:model.live.debounce.150ms="category_id"
                    class="block w-full py-3 ps-3 text-sm text-gray-900 dark:text-gray-200 border border-gray-300 dark:border-gray-500 rounded-l-md  
                        bg-gray-50 dark:bg-gray-800 focus:ring-gray-500 dark:focus:ring-gray-600 focus:border-gray-500 dark:focus:border-gray-500">
                    <option value="">Categorías</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
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
                        class="block w-full p-3 ps-10 text-sm text-gray-900 border-y border-r border-gray-300 rounded-r-md  
                bg-gray-50 focus:ring-gray-500 focus:border-gray-500"
                        placeholder="Buscar" wire:model.live.debounce.150ms="search" />

                </div>
            </div>

        </div>
    </div>
    @forelse ($articles as $article)
        <article class="p-6 hover:bg-slate-100">
            <div class="flex justify-between items-center mb-5 text-gray-500">
                <span
                    class="font-raleway bg-blue-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="mr-1 w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                    {{ $article->category->name }}
                </span>
                <span class="text-sm">{{ $article->created_at->diffForHumans() }}</span>
            </div>
            <h2 class="mb-2 text-xl xl:text-2xl font-bold tracking-tight text-gray-700 font-raleway capitalize"><a
                    target="_blank" href="{{ $article->url }}">{{ $article->title }} </a></h2>
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <img class="w-7 h-7 rounded-full" src="{{ asset('img/img-2.webp') }}"
                        alt="Viveros Abogados avatar" />
                    <span class="font-medium font-raleway">Viveros Abogados</span>
                </div>
                <a target="_blank" href="{{ $article->url }}"
                    class="inline-flex items-center font-medium text-primary-600 hover:underline font-raleway">
                    Ver articulo
                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </article>

    @empty
        <p class="text-sm text-gray-500 py-6 text-center ">No se encuentra el articulo</p>
    @endforelse
</aside>
