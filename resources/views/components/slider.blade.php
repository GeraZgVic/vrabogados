<div id="default-carousel" class="relative w-full" data-carousel="slide" data-carousel-interval="6000">
    <!-- Carousel wrapper -->
    <div class="relative  overflow-hidden h-[70vh] md:h-[90vh]">
        <!-- Item 1 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item="active">
            <img src="https://images.unsplash.com/photo-1505547828843-176834e42154?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="absolute block w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
            <div class="absolute bottom-0 top-0 left-0 right-0 bg-black bg-opacity-70 p-4 text-center">
                <div class="flex flex-col items-center justify-center h-full m-auto px-8">
                    <h1
                        class="z-10 mb-4 leading-none tracking-tight text-gray-100 animate-fade-down animate-once animate-duration-[1200ms] animate-ease-in-out titulos">
                        Viveros Romero Abogados S.C.</span></h1>
                    <p
                        class="text-gray-300 text-base sm:text-lg md:text-2xl font-raleway leading-relaxed animate-fade-down animate-duration-[1300ms] animate-delay-700 animate-ease-in-out">
                        Desde 1944, Viveros Romero Abogados S.C. ofrece experiencia en litigios a nivel nacional.</p>
                    <a href="{{ route('contacto.index') }}"
                        class="capitalize mt-8 px-6 py-4 bg-gray-500 transition duration-300 ease-in-out hover:bg-gray-600 text-white hover:ring-2 ring-gray-300/80 rounded-md">{{ __('site/navbar.link-contactanos') }}</a>
                </div>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
            <img src="https://images.unsplash.com/photo-1601923112035-3e4819c82317?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="absolute block w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
            <div class="absolute bottom-0 top-0 left-0 right-0 bg-black bg-opacity-70 p-4 text-center">
                <div class="grid md:grid-cols-2 gap-x-4 h-full place-items-center -mt-10">
                    <div class="flex flex-col items-center md:items-start container mx-auto px-10 mt-20 space-y-6">
                        <h2 class="titulos text-gray-100 md:text-start">Áreas de Práctica</h2>
                        <p
                            class="text-gray-300 text-base sm:text-lg md:text-2xl font-raleway leading-relaxed text-center md:text-start">
                            Especializados en derecho civil, penal, laboral, fiscal y más. <br>Tu caso es nuestra
                            prioridad.
                        </p>
                        <div>
                            <a href="{{ route('area.index') }}"
                                class="text-gray-100 p-3 rounded-md bg-gray-500 transition duration-300 ease-in-out hover:bg-gray-600 hover:ring-2 ring-gray-300/80">{{ __('site/navbar.link-area') }}</a>
                        </div>
                    </div>
                    <img class="rounded-md hidden md:inline-block" src="{{ asset('img/areas-hero.svg') }}"
                        alt="Abogado">
                </div>

            </div>
        </div>
        {{-- Item 3 --}}
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
            <img src="https://images.unsplash.com/photo-1537222961176-50d25fff78ef?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="absolute block w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
            <div class="absolute bottom-0 top-0 left-0 right-0 bg-black bg-opacity-70 p-4 text-center">
                <div class="grid md:grid-cols-2 gap-x-4 h-full place-items-center -mt-10">
                    <div class="flex flex-col items-center md:items-start container mx-auto px-10 mt-20 space-y-6">
                        <h2 class="titulos text-gray-100 md:text-start">Explora la Constitución</h2>
                        <p
                            class="text-gray-300 text-base sm:text-lg md:text-2xl font-raleway leading-relaxed text-center md:text-start">
                            Encuentra y comprende los artículos más relevantes de la Constitución Política.
                        </p>
                        <div>
                            <a href="{{ route('blog.index') }}"
                                class="text-gray-100 p-3 rounded-md bg-gray-500 transition duration-300 ease-in-out hover:bg-gray-600 hover:ring-2 ring-gray-300/80">
                                Visitar Blog</a>
                        </div>
                    </div>
                    <img class="rounded-full hidden md:inline-block" src="{{asset('img/blog-hero.svg')}}"
                        alt="Abogado">
                </div>

            </div>
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-2 h-2 md:w-3 md:h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-2 h-2 md:w-3 md:h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-2 h-2 md:w-3 md:h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-5 h-5 md:w-8 md:h-8 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-2 h-2 md:w-4 md:h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-5 h-5 md:w-8 md:h-8 rounded-full bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-2 h-2 md:w-3 md:h-3 text-white rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
