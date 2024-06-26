@extends('layout.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
    <div class="md:mx-auto px-0 md:px-8 mt-4">
        <div class="container mx-auto my-8">
            <div class="bg-gray-700 text-white p-8 md:rounded-t-lg">
                <h2 class="text-4xl font-bold">Donde hay sociedad, hay derecho.
                </h2>
                {{-- Marco Tulio Cicerón --}}
                <p class="mt-2 text-xl">- Cicerón</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="col-span-1 mt-6 container mx-auto px-4 flex flex-col">
                    <div class="lg:order-1 order-2 space-y-3">
                        <p class="text-gray-700 parrafo-cuerpo">
                            Viveros Romero Abogados S.C. se destaca por su equipo de socios, asociados y asesores con amplia experiencia en sectores como empresarial, petrolero, partidos políticos, y banca bursátil. Muchos de sus abogados también son profesores en prestigiosas universidades y escuelas de derecho del país. La firma busca ser "doctores legales de cabecera" a través de convenios comerciales con entidades gubernamentales y privadas, ofreciendo beneficios a colaboradores y socios. Su compromiso con obtener resultados favorables caracteriza su prestigio profesional.
                        </p>
                       
                    </div>
                    <img class="rounded-lg shadow-md lg:order-2 order-1 my-4 lg:my-10" loading="lazy"
                        src="{{ asset('img/img-1.jpg') }}" alt="Vrabogados">
                </div>
                <div class="col-span-1 bg-gray-500 p-4 shadow-md md:rounded-b-md">
                    <img class="rounded-lg shadow-md lg:-mt-16" loading="lazy" src="{{ asset('img/img-2.webp') }}"
                        alt="Vrabogados">
                    <div class="mt-6 container mx-auto px-4">
                        <h2 class="text-2xl capitalize font-semibold mb-4 text-white">Qué esperar</h2>
                        <p class="text-gray-100 mb-4 parrafo-cuerpo">
                            Viveros Romero Abogados S.C. es una firma con más de 70 años de experiencia compartida en el
                            área contenciosa de diversas ramas del derecho. Contamos con una amplia experiencia en:
                        </p>
                        <ul class="max-w-md space-y-1 text-gray-100 list-inside">
                            <li class="flex items-center parrafo-cuerpo">
                                <svg class="w-3.5 h-3.5 me-2 text-green-400 flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Derecho de Amparo
                            </li>
                            <li class="flex items-center parrafo-cuerpo">
                                <svg class="w-3.5 h-3.5 me-2 text-green-400 flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Derecho Civil
                            </li>
                            <li class="flex items-center parrafo-cuerpo">
                                <svg class="w-3.5 h-3.5 me-2 text-green-400 flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Derecho Administrativo
                            </li>
                            <li class="flex items-center parrafo-cuerpo">
                                <svg class="w-3.5 h-3.5 me-2 text-green-400 flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Derecho Mercantil
                            </li>
                            <li class="flex items-center parrafo-cuerpo">
                                <svg class="w-3.5 h-3.5 me-2 text-green-400 flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Derecho Fiscal
                            </li>
                            <li class="flex items-center parrafo-cuerpo">
                                <svg class="w-3.5 h-3.5 me-2 text-green-400 flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Derecho Penal
                            </li>
                            <li class="flex items-center parrafo-cuerpo">
                                <svg class="w-3.5 h-3.5 me-2 text-green-400 flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Derecho Constitucional
                            </li>
                            <li class="flex items-center parrafo-cuerpo">
                                <svg class="w-3.5 h-3.5 me-2 text-green-400 flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Derecho Laboral
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>



        {{-- Cards --}}
        <div id="services" class="container m-auto px-8 mt-0 my-10 flex flex-col justify-center text-center">
            <h2 class="subtitulos">
                {{ __('site/areas.areas-servicios') }}
            </h2>
        </div>
        <div class="flex items-center justify-center mb-10">
            <div class="mb-8 grid gap-5 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 ">
                <div
                    class="group relative cursor-pointer items-center justify-center overflow-hidden rounded-md transition-shadow hover:shadow-xl hover:shadow-black/30">
                    <div class="h-96 w-72">
                        <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                            src="https://img.freepik.com/foto-gratis/vista-superior-elementos-orientacion-profesional-jueces_23-2149443471.jpg?t=st=1718736535~exp=1718740135~hmac=831e13b79f44b14ecf5695531ba24b34330f34de79dba9e6b57a63f6d459f206&w=360"
                            alt="" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho civil</h1>
                        <p
                            class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolore adipisci placeat.</p>
                        <button
                            class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                            Más</button>
                    </div>
                </div>
                <div
                    class="group relative cursor-pointer items-center justify-center overflow-hidden rounded-md transition-shadow hover:shadow-xl hover:shadow-black/30">
                    <div class="h-96 w-72">
                        <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                            src="https://img.freepik.com/foto-gratis/corte-martillo-libros-juicio-concepto-ley_144627-30453.jpg?t=st=1718736475~exp=1718740075~hmac=83fc57a1463d3eccbea37d72769cf20ec580e6313dd9c6aaec5293650587ef01&w=360"
                            alt="" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho penal</h1>
                        <p
                            class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolore adipisci placeat.</p>
                        <button
                            class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                            Más</button>
                    </div>
                </div>
                <div
                    class="group relative cursor-pointer items-center justify-center overflow-hidden rounded-md transition-shadow hover:shadow-xl hover:shadow-black/30">
                    <div class="h-96 w-72">
                        <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                            src="https://img.freepik.com/foto-gratis/concepto-collage-opresion-dictadura_23-2149711439.jpg?w=360&t=st=1718736424~exp=1718737024~hmac=de7d44fea01cdd0859b7db12dbf60a70d63993f4c5745d45a9bc4feb203b8e7d"
                            alt="" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho laboral</h1>
                        <p
                            class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolore adipisci placeat.</p>
                        <button
                            class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                            Más</button>
                    </div>
                </div>
                <div
                    class="group relative cursor-pointer items-center justify-center overflow-hidden rounded-md transition-shadow hover:shadow-xl hover:shadow-black/30">
                    <div class="h-96 w-72">
                        <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                            src="https://img.freepik.com/foto-gratis/abogado-maduro-serio-que-lee-libro-ley-tribunal_23-2147898517.jpg?t=st=1718738180~exp=1718741780~hmac=475595a60a34fecca1c0243be4147213a5cf02d0323dbb674917e9173d252f80&w=360"
                            alt="" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho administrativo</h1>
                        <p
                            class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolore adipisci placeat.</p>
                        <button
                            class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                            Más</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end mb-3 px-3">
            <a href="{{ route('area.index') }}"
                class="w-full md:w-auto px-5 py-4 bg-gray-500 transition duration-300 ease-in-out hover:bg-gray-600 text-white hover:ring-2 ring-gray-500/80 rounded-full">Ver
                más</a>
        </div>
    </div>


    <div
    class="h-[90vh] mb-10 bg-[url(https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-cover bg-center bg-fixed">
    <div class="h-full text-white flex flex-col justify-center items-center text-center space-y-8 bg-black/60">
        <h2 class="text-3xl md:text-4xl lg:text-6xl font-bold font-raleway">Asesoría Legal de Confianza</h2>
        <p class="text-lg md:text-2xl xl:text-3xl font-raleway font-normal text-gray-300">Expertos en litigio y consultoría en los sectores empresarial, petrolero, partidos políticos, y banca bursátil.</p>
        <div class="space-x-4">
            <a href="#services" class="bg-gray-700 text-white px-6 py-3 rounded-md shadow-lg hover:bg-gray-800 transition-colors duration-300 ease-in-out">Nuestros Servicios</a>
            <a href="{{route('contacto.index')}}" class="bg-gray-700 text-white px-6 py-3 rounded-md shadow-lg hover:bg-gray-800 transition-colors duration-300 ease-in-out">Contacto</a>
        </div>
    </div>
</div>
    <section class="container m-auto px-4 md:px-8">
        <h2 class="text-center subtitulos">Nuestras Publicaciones</h2>
        <div class="inline-flex items-center justify-center w-full">
            <hr class="w-[90%] h-1 my-8 bg-gray-200 border-0 rounded">
            <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2">
                <h3 class="font-bold text-xl font-dmserif">VR</h3>
            </div>
        </div>
        <div class="px-8 py-12 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div class="flex flex-col w-full" x-data="{
                skip: 1,
                atBeginning: false,
                atEnd: false,
                next() {
                    this.to((current, offset) => current + (offset * this.skip))
                },
                prev() {
                    this.to((current, offset) => current - (offset * this.skip))
                },
                to(strategy) {
                    let slider = this.$refs.slider
                    let current = slider.scrollLeft
                    let offset = slider.firstElementChild.getBoundingClientRect().width
                    slider.scrollTo({ left: strategy(current, offset), behavior: 'smooth' })
                },
                focusableWhenVisible: {
                    'x-intersect:enter'() {
                        this.$el.removeAttribute('tabindex')
                    },
                    'x-intersect:leave'() {
                        this.$el.setAttribute('tabindex', '-1')
                    },
                },
                disableNextAndPreviousButtons: {
                    'x-intersect:enter.threshold.05'() {
                        let slideEls = this.$el.parentElement.children
                        // If this is the first slide.
                        if (slideEls[0] === this.$el) {
                            this.atBeginning = true
                            // If this is the last slide.
                        } else if (slideEls[slideEls.length - 1] === this.$el) {
                            this.atEnd = true
                        }
                    },
                    'x-intersect:leave.threshold.05'() {
                        let slideEls = this.$el.parentElement.children
                        // If this is the first slide.
                        if (slideEls[0] === this.$el) {
                            this.atBeginning = false
                            // If this is the last slide.
                        } else if (slideEls[slideEls.length - 1] === this.$el) {
                            this.atEnd = false
                        }
                    },
                },
            }">
                <div class="flex flex-col w-full" aria-labelledby="carousel-label" role="region" tabindex="0"
                    x-on:keydown.left="prev" x-on:keydown.right="next">
                    <h2 class="sr-only" hidden="" id="carousel-label">
                        Carousel
                    </h2>
                    <span class="sr-only" hidden="" id="carousel-content-label">Carousel</span>
                    <div class="inline-flex items-center space-x-2 lg:px-2">
                        <button
                            class="flex items-center text-white bg-gray-500 rounded-full hover:bg-gray-600 size-8 focus:bg-gray-400"
                            :class="{ 'opacity-50 ': atBeginning }" :aria-disabled="atBeginning" :tabindex="atEnd ? -1 : 0"
                            x-on:click="prev" tabindex="0">
                            <span aria-hidden="true" class="mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                                </svg>

                            </span><span class="sr-only">Skip to previous slide page</span>
                        </button>
                        <button
                            class="flex items-center text-white bg-gray-500 rounded-full hover:bg-gray-600 size-8 focus:bg-gray-400"
                            :class="{ 'opacity-50 ': atEnd }" :aria-disabled="atEnd" :tabindex="atEnd ? -1 : 0"
                            x-on:click="next" tabindex="0">
                            <span aria-hidden="true" class="mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                </svg>

                            </span><span class="sr-only">Skip to next slide page</span>
                        </button>
                    </div>
                    <ul class="flex w-full gap-3 mt-4 overflow-x-scroll text-center scrollbar-hide snap-mandatory snap-x rounded-2xl"
                        role="listbox" aria-labelledby="carousel-content-label" tabindex="0" x-ref="slider">
                        @forelse ($posts as $post)
                            <li class="max-w-sm shadow-lg rounded-lg overflow-hidden p-2 border shrink-0 snap-start bg-gray-50"
                                role="option" x-bind="disableNextAndPreviousButtons">
                                <div>
                                <a href="{{route('post.show', ['id' => $post->id,'title' => $post->title])}}">
                                    <img class="h-72 w-full object-cover" src="{{ asset('uploads/' . $post->image) }}"
                                        alt="Imagen de {{ $post->title }}">
                                    </a>

                                    <div class="border-t-8 border-blue-500 w-1/3 my-2 mx-auto"></div>
                                    <div class="p-4">
                                        <h2 class="text-gray-700 text-xl font-bold mb-2">{{ $post->title }}</h2>
                                        <h3 class="text-gray-500 text-sm mb-4">{{ $post->created_at->format('M d, Y') }} ·
                                            {{ $post->created_at->diffForHumans() }}</h3>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <p class="text-center text-sm text-gray-400">No se encuentra ningún artículo</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
