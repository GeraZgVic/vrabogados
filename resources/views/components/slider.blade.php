<div id="default-carousel" class="relative w-full" data-carousel="slide" data-carousel-interval="5000">
    <!-- Carousel wrapper -->
    <div class="relative  overflow-hidden h-[70vh] md:h-[80vh]">
        <!-- Item 1 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item="active">
            <img src="{{ asset('img/img-1.jpg') }}"
                class="absolute block w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
            <div class="absolute bottom-0 top-0 left-0 right-0 bg-black bg-opacity-60 p-4 text-center">
                <div class="flex flex-col items-center justify-center h-full m-auto px-8">
                    <h1
                        class="z-10 mb-4 leading-none tracking-tight text-white text-2xl md:text-5xl lg:text-6xl work-sans-bold animate-fade-down animate-once animate-duration-[1200ms] animate-ease-in-out">
                        Viveros Romero Abogados<span
                            class="underline underline-offset-3 decoration-8 decoration-gray-400 "> S.C.</span></h1>
                    <p
                        class="text-lg font-normal text-gray-300 lg:text-xl animate-fade-down animate-duration-[1300ms] animate-delay-700 animate-ease-in-out">
                        Here at Flowbite we focus on markets where technology, innovation, and capital can unlock
                        long-term value and drive economic growth.</p>
                    <a href="#"
                        class="capitalize mt-8 px-6 py-4 bg-gray-500 transition duration-300 ease-in-out hover:bg-gray-600 text-white hover:ring-2 ring-gray-300/80 rounded-full">más información</a>
                </div>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/img-2.webp') }}"
                class="absolute block w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
            <div class="absolute bottom-0 top-0 left-0 right-0 bg-black bg-opacity-30 p-4 text-center">
                <div class="flex flex-col items-center justify-center h-full m-auto px-8">
                    <h2
                        class="z-10 mb-4 leading-none tracking-tight text-white text-2xl md:text-5xl lg:text-6xl work-sans-bold animate-fade-down animate-once animate-duration-[1200ms] animate-ease-in-out">
                        Viveros Romero Abogados<span
                            class="underline underline-offset-3 decoration-8 decoration-blue-400 "> S.C.</span></h2>
                    <p
                        class="text-lg font-normal text-gray-300 lg:text-xl animate-fade-down animate-duration-[1300ms] animate-delay-700 animate-ease-in-out">
                        Here at Flowbite we focus on markets where technology, innovation, and capital can unlock
                        long-term value and drive economic growth.</p>
                    <a href="#"
                        class="uppercase mt-8 px-6 py-4 bg-blue-500 transition duration-300 ease-in-out hover:bg-blue-600 text-white hover:ring-2 ring-blue-500/80 rounded-full">consultar</a>
                </div>
            </div>
        </div>
        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/img-3.webp') }}"
                class="absolute block w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
            <div class="absolute bottom-0 top-0 left-0 right-0 bg-black bg-opacity-30 p-4 text-center">
                <div class="flex flex-col items-center justify-center h-full m-auto px-8">
                    <h2
                        class="z-10 mb-4 leading-none tracking-tight text-white text-2xl md:text-5xl lg:text-6xl work-sans-bold animate-fade-down animate-once animate-duration-[1200ms] animate-ease-in-out">
                        Viveros Romero Abogados<span
                            class="underline underline-offset-3 decoration-8 decoration-blue-400 "> S.C.</span></h2>
                    <p
                        class="text-lg font-normal text-gray-300 lg:text-xl animate-fade-down animate-duration-[1300ms] animate-delay-700 animate-ease-in-out">
                        Here at Flowbite we focus on markets where technology, innovation, and capital can unlock
                        long-term value and drive economic growth.</p>
                    <a href="#"
                        class="uppercase mt-8 px-6 py-4 bg-blue-500 transition duration-300 ease-in-out hover:bg-blue-600 text-white hover:ring-2 ring-blue-500/80 rounded-full">consultar</a>
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
            class="inline-flex items-center justify-center w-5 h-5 md:w-8 md:h-8 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-2 h-2 md:w-3 md:h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
