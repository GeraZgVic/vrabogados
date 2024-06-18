@extends('layout.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
    <div class="container m-auto px-8 mt-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 my-8">
            <div class="seccion">
                <img class="rounded-md" loading="lazy" src="{{ asset('img/img-2.webp') }}" alt="Vrabogados">
            </div>
            <div class="mt-4 space-y-6">
                <h2 class="text-3xl font-semibold">{{ __('site/inicio.welcome') }}</h2>
                <p>Lejos, muy lejos, detrás de las montañas de palabras, lejos de los países Vokalia y Consonantia, viven
                    los textos ciegos. Lejos de los países Vokalia y Consonantia, viven los textos ciegos.</p>
                <div class="mt-6">
                    <a href="#"
                        class="px-6 py-2 bg-blue-500 transition duration-300 ease-in-out hover:bg-blue-600 hover:ring-2 ring-blue-500/80 text-white rounded-full">Leer
                        más</a>
                </div>
            </div>
        </div>

        {{-- CARDS --}}
        <div class="container m-auto px-8 mt-4 flex flex-col justify-center text-center">
            <h2
                class="text-3xl font-semibold bg-gradient-to-r  from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text ">
                {{ __('site/areas.areas-servicios') }}
            </h2>
        </div>
        <div class="grid md:grid-cols-3 gap-10 my-16">
            <div
                class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal group-hover:text-white">
                    {{ __('site/areas.areas-derecho-civil') }}
                </h2>
                <p class="text-gray-500 group-hover:text-white"> {{ __('site/areas.areas-derecho-descripcion') }}</p>
            </div>
            <div
                class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                    {{ __('site/areas.areas-derecho-penal') }}
                </h2>
                <p class="text-gray-500 group-hover:text-white">{{ __('site/areas.areas-derecho-descripcion') }}</p>

            </div>
            <div
                class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                    {{ __('site/areas.areas-derecho-laboral') }}
                </h2>
                <p class="text-gray-500 group-hover:text-white">{{ __('site/areas.areas-derecho-descripcion') }}</p>

            </div>
            <div
                class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                    {{ __('site/areas.areas-derecho-administrativo') }}
                </h2>
                <p class="text-gray-500 group-hover:text-white">{{ __('site/areas.areas-derecho-descripcion') }}</p>

            </div>
            <div
                class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                    {{ __('site/areas.areas-derecho-mercantil') }}
                </h2>
                <p class="text-gray-500 group-hover:text-white">{{ __('site/areas.areas-derecho-descripcion') }}</p>

            </div>
            <div
                class="text-center  rounded-md  py-12 px-8 space-y-2 transition ease-in-out duration-500 hover:bg-indigo-600 group">
                <h2
                    class="uppercase text-2xl bg-gradient-to-r from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text work-sans-normal  group-hover:text-white">
                    {{ __('site/areas.areas-derecho-tributario') }}

                </h2>
                <p class="text-gray-500 group-hover:text-white">{{ __('site/areas.areas-derecho-descripcion') }}</p>

            </div>
        </div>
    </div>


    <div
        class="h-[85vh] mb-10 bg-[url(https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-cover bg-center bg-fixed">
        <div class="h-full text-white flex flex-col justify-center items-center text-center space-y-8 bg-black/60">
            <h2 class="md:text-5xl text-3xl">Far far away, behind the word <br> mountains</h2>
            <p class="text-lg md:text-2xl text-gray-400">Far far away, behind the word mountains, far from the <br>
                countries Vokalia and Consonantia, there live the blind
                texts.</p>
            <div>
                <a href="#"
                    class="uppercase px-6 py-4 bg-blue-500 transition duration-300 ease-in-out hover:bg-blue-600 text-white hover:ring-2 ring-blue-500/80 rounded-full">consultar</a>
            </div>
        </div>
    </div>


    <section>
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
                            class="flex items-center text-white bg-blue-500 rounded-full hover:bg-blue-600 size-8 focus:bg-blue-400"
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
                            class="flex items-center text-white bg-blue-500 rounded-full hover:bg-blue-600 size-8 focus:bg-blue-400"
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
                        <li class="p-2 border shrink-0 snap-start bg-gray-50 rounded-3xl" role="option"
                            x-bind="disableNextAndPreviousButtons">
                            <figure
                                class="relative flex flex-col justify-between h-full max-w-xs p-6 bg-white border shadow-lg rounded-2xl">
                                <figcaption class="relative flex flex-col justify-between">
                                    <img alt="#_"
                                        src="https://images.unsplash.com/photo-1496487611274-f4cd790205d2?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="object-cover mx-auto rounded-full size-14 grayscale">
                                    <div class="mt-4">
                                        <div class="font-medium text-gray-900">Michael Andreuzza</div>
                                        <div class="mt-1 text-sm text-gray-500">
                                            Creator of Windstatic.com
                                        </div>
                                    </div>
                                </figcaption>
                                <blockquote class="mt-4">
                                    <p class="text-base font-medium text-gray-500">
                                        Being in the financial industry, we were always looking for
                                        ways to enhance our transactions' security and efficiency.
                                    </p>
                                </blockquote>
                            </figure>
                        </li>
                        <li class="p-2 border shrink-0 snap-start bg-gray-50 rounded-3xl" role="option"
                            x-bind="disableNextAndPreviousButtons">
                            <figure
                                class="relative flex flex-col justify-between h-full max-w-xs p-6 bg-white border shadow-lg rounded-2xl">
                                <figcaption class="relative flex flex-col justify-between">
                                    <img alt="#_"
                                        src="https://images.unsplash.com/photo-1423592707957-3b212afa6733?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="object-cover mx-auto rounded-full size-14 grayscale">
                                    <div class="mt-4">
                                        <div class="font-medium text-gray-900">Gege Piazza</div>
                                        <div class="mt-1 text-sm text-gray-500">
                                            Creator of Pizza Piazza
                                        </div>
                                    </div>
                                </figcaption>
                                <blockquote class="mt-4">
                                    <p class="text-base font-medium text-gray-500">
                                        Implementing Semplice's blockchain technology has been a
                                        game-changer for our supply chain management.
                                    </p>
                                </blockquote>
                            </figure>
                        </li>
                        <li class="p-2 border shrink-0 snap-start bg-gray-50 rounded-3xl" role="option"
                            x-bind="disableNextAndPreviousButtons">
                            <figure
                                class="relative flex flex-col justify-between h-full max-w-xs p-6 bg-white border shadow-lg rounded-2xl">
                                <figcaption class="relative flex flex-col justify-between">
                                    <img alt="#_"
                                        src="https://images.unsplash.com/photo-1423592707957-3b212afa6733?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="object-cover mx-auto rounded-full size-14 grayscale">
                                    <div class="mt-4">
                                        <div class="font-medium text-gray-900">Jenson Button</div>
                                        <div class="mt-1 text-sm text-gray-500">
                                            Founder of Benji and Tom
                                        </div>
                                    </div>
                                </figcaption>
                                <blockquote class="mt-4">
                                    <p class="text-base font-medium text-gray-500">
                                        We were initially hesitant about integrating blockchain
                                        technology into our existing systems.
                                    </p>
                                </blockquote>
                            </figure>
                        </li>
                        <li class="p-2 border shrink-0 snap-start bg-gray-50 rounded-3xl" role="option"
                            x-bind="disableNextAndPreviousButtons">
                            <figure
                                class="relative flex flex-col justify-between h-full max-w-xs p-6 bg-white border shadow-lg rounded-2xl">
                                <figcaption class="relative flex flex-col justify-between">
                                    <img alt="#_"
                                        src="https://images.unsplash.com/photo-1423592707957-3b212afa6733?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="object-cover mx-auto rounded-full size-14 grayscale">
                                    <div class="mt-4">
                                        <div class="font-medium text-gray-900">Michael Andreuzza</div>
                                        <div class="mt-1 text-sm text-gray-500">
                                            Creator of Windstatic.com
                                        </div>
                                    </div>
                                </figcaption>
                                <blockquote class="mt-4">
                                    <p class="text-base font-medium text-gray-500">
                                        Being in the financial industry, we were always looking for
                                        ways to enhance our transactions' security and efficiency.
                                    </p>
                                </blockquote>
                            </figure>
                        </li>
                        <li class="p-2 border shrink-0 snap-start bg-gray-50 rounded-3xl" role="option"
                            x-bind="disableNextAndPreviousButtons">
                            <figure
                                class="relative flex flex-col justify-between h-full max-w-xs p-6 bg-white border shadow-lg rounded-2xl">
                                <figcaption class="relative flex flex-col justify-between">
                                    <img alt="#_"
                                        src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="object-cover mx-auto rounded-full size-14 grayscale">
                                    <div class="mt-4">
                                        <div class="font-medium text-gray-900">Gege Piazza</div>
                                        <div class="mt-1 text-sm text-gray-500">
                                            Creator of Pizza Piazza
                                        </div>
                                    </div>
                                </figcaption>
                                <blockquote class="mt-4">
                                    <p class="text-base font-medium text-gray-500">
                                        Implementing Semplice's blockchain technology has been a
                                        game-changer for our supply chain management.
                                    </p>
                                </blockquote>
                            </figure>
                        </li>
                        <li class="p-2 border shrink-0 snap-start bg-gray-50 rounded-3xl" role="option"
                            x-bind="disableNextAndPreviousButtons">
                            <figure
                                class="relative flex flex-col justify-between h-full max-w-xs p-6 bg-white border shadow-lg rounded-2xl">
                                <figcaption class="relative flex flex-col justify-between">
                                    <img alt="#_"
                                        src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="object-cover mx-auto rounded-full size-14 grayscale">
                                    <div class="mt-4">
                                        <div class="font-medium text-gray-900">Jenson Button</div>
                                        <div class="mt-1 text-sm text-gray-500">
                                            Founder of Benji and Tom
                                        </div>
                                    </div>
                                </figcaption>
                                <blockquote class="mt-4">
                                    <p class="text-base font-medium text-gray-500">
                                        We were initially hesitant about integrating blockchain
                                        technology into our existing systems.
                                    </p>
                                </blockquote>
                            </figure>
                        </li>
                        <li class="p-2 border shrink-0 snap-start bg-gray-50 rounded-3xl" role="option"
                            x-bind="disableNextAndPreviousButtons">
                            <figure
                                class="relative flex flex-col justify-between h-full max-w-xs p-6 bg-white border shadow-lg rounded-2xl">
                                <figcaption class="relative flex flex-col justify-between">
                                    <img alt="#_"
                                        src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="object-cover mx-auto rounded-full size-14 grayscale">
                                    <div class="mt-4">
                                        <div class="font-medium text-gray-900">Michael Andreuzza</div>
                                        <div class="mt-1 text-sm text-gray-500">
                                            Creator of Windstatic.com
                                        </div>
                                    </div>
                                </figcaption>
                                <blockquote class="mt-4">
                                    <p class="text-base font-medium text-gray-500">
                                        Being in the financial industry, we were always looking for
                                        ways to enhance our transactions' security and efficiency.
                                    </p>
                                </blockquote>
                            </figure>
                        </li>
                        <li class="p-2 border shrink-0 snap-start bg-gray-50 rounded-3xl" role="option"
                            x-bind="disableNextAndPreviousButtons">
                            <figure
                                class="relative flex flex-col justify-between h-full max-w-xs p-6 bg-white border shadow-lg rounded-2xl">
                                <figcaption class="relative flex flex-col justify-between">
                                    <img alt="#_"
                                        src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="object-cover mx-auto rounded-full size-14 grayscale">
                                    <div class="mt-4">
                                        <div class="font-medium text-gray-900">Gege Piazza</div>
                                        <div class="mt-1 text-sm text-gray-500">
                                            Creator of Pizza Piazza
                                        </div>
                                    </div>
                                </figcaption>
                                <blockquote class="mt-4">
                                    <p class="text-base font-medium text-gray-500">
                                        Implementing Semplice's blockchain technology has been a
                                        game-changer for our supply chain management.
                                    </p>
                                </blockquote>
                            </figure>
                        </li>
                        <li class="p-2 border shrink-0 snap-start bg-gray-50 rounded-3xl" role="option"
                            x-bind="disableNextAndPreviousButtons">
                            <figure
                                class="relative flex flex-col justify-between h-full max-w-xs p-6 bg-white border shadow-lg rounded-2xl">
                                <figcaption class="relative flex flex-col justify-between">
                                    <img alt="#_"
                                        src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="object-cover mx-auto rounded-full size-14 grayscale">
                                    <div class="mt-4">
                                        <div class="font-medium text-gray-900">Jenson Button</div>
                                        <div class="mt-1 text-sm text-gray-500">
                                            Founder of Benji and Tom
                                        </div>
                                    </div>
                                </figcaption>
                                <blockquote class="mt-4">
                                    <p class="text-base font-medium text-gray-500">
                                        We were initially hesitant about integrating blockchain
                                        technology into our existing systems.
                                    </p>
                                </blockquote>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
