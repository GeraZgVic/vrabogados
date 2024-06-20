<div>
    <div class="mt-4 md:mt-0 space-y-6 rounded-md py-3 bg-white dark:bg-gray-800 mx-auto lg:px-12">
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
                        class="block w-full p-4 ps-10 text-sm text-gray-900 dark:text-gray-200 border border-gray-300 dark:border-gray-500 rounded-lg 
                bg-gray-50 dark:bg-gray-800 focus:ring-gray-500 dark:focus:ring-gray-600 focus:border-gray-500 dark:focus:border-gray-500"
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

        @forelse ($articles as $article)
        <article class="p-6 flex flex-col lg:flex-row md:justify-between shadow rounded-sm" wire:key="{{ $article->id }}">
            <div class="w-full lg:w-1/2 mb-4 lg:mb-0">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                        </svg>
                        Artículo
                    </span>
                </div>
                <span class="text-sm">{{ $article->created_at->diffForHumans() }}</span>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-200">
                    <a target="_blank" href="{{ $article->url }}">{{ $article->title }}</a>
                </h2>
                <div class="w-full lg:w-auto lg:inline-flex">
                    <a target="_blank" href="{{ $article->url }}" 
                        class="flex items-center hover:bg-slate-300 lg:hover:bg-transparent justify-center border-2 lg:border-none border-gray-400 rounded-md px-1 lg:px-0 py-2 lg:py-0 font-medium text-primary-600 lg:hover:underline">
                        Ver artículo
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-auto flex flex-col lg:flex-row items-start lg:items-center gap-4 mt-3 lg:mt-0">
                <button 
                    onclick="confirmDelete({{ $article->id }})" type="button"
                    class="w-full lg:w-auto relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-500 to-pink-400 group-hover:from-red-500 group-hover:to-pink-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-red-200 dark:focus:ring-red-800">
                    <span class="w-full text-center relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-800 rounded-md group-hover:bg-opacity-0">
                        Eliminar
                    </span>
                </button>
                <a href="{{route('articulos.edit', $article->id)}}" class="w-full lg:w-auto relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-blue-500 to-cyan-400 group-hover:from-blue-500 group-hover:to-cyan-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-800">
                    <span class="w-full text-center relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-800 rounded-md group-hover:bg-opacity-0">
                        Editar
                    </span>
                </a>
            </div>
        </article>
        
        

        @empty
            <p class="text-sm text-center ">No se encuentra ningun articulo</p>
        @endforelse


    </div>

    <div class="m-3">
        {{ $articles->links() }}
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Sí, eliminarlo'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si el usuario confirma, envía una solicitud DELETE al servidor
                fetch('/dashboard/delete-articulo/' + id, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token() }}'
                    }
                }).then(response => {
                    // Redirige a la página después de la eliminación
                    window.location.href = '/dashboard/ver-articulos';
                }).catch(error => {
                    console.error('Error al eliminar el articulo:', error)
                })
            }
        });
    }
</script>

