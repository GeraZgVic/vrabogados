<footer class="h-full">
    <div class="grid sm:grid-cols-2 px-8 -mb-10">
        <div class="bg-gray-800 text-white p-7 rounded-l">
            <h3 class="text-2xl font-raleway font-semibold mb-3">¿Necesita servicios legales?</h3>
            <p class="parrafo-cuerpo">Viveros Romero Abogados S.C. ofrece más de 80 años de experiencia en derecho civil,
                penal,
                laboral y otras ramas del derecho. Nuestro equipo está comprometido a proteger tus derechos y resolver
                tus problemas legales de manera efectiva.</p>
        </div>
        <div class="bg-gray-700 text-white p-7 rounded-r">
            <h3 class="text-2xl font-semibold mb-3">Consulta Gratis</h3>
            <p class=" mb-2">¿Tienes dudas legales? Ofrecemos una consulta inicial gratuita. Llama al <a
                    href="tel:+525555757887" class="text-sky-500 text-base sm:text-base md:text-lg leading-relaxed">(+52) 9932680884</a></p>
            <p class="parrafo-cuerpo mb-2">O envíanos un correo a <a class="text-sky-500 font-semibold"
                    href="mailto:rleon@vrabogados.com.mx">rleon@vrabogados.com.mx</a> para agendar tu cita.</p>
            <p class="parrafo-cuerpo leading-relaxed">Nuestro equipo de expertos está listo para ayudarte a entender tus
                opciones legales y encontrar la mejor solución para ti.</p>
        </div>
    </div>
    <div class="bg-black  shadow-md bg-opacity-90 px-8 py-8 flex flex-col justify-center">
        <div class="grid md:grid-cols-1 lg:grid-cols-4 md:gap-x-6 mt-10">
            {{-- LOGO - PRIMER COLUMNA --}}
            <div class="flex flex-col items-center mb-10 md:mb-0">
                <a href="{{ route('home.index') }}">
                    <img class="h-20 w-full" src="{{ asset('img/logo.png') }}" alt="Logo de Vrabogados">
                </a>
                <h2 class="text-gray-300 work-sans-normal text-center my-1">{{ __('site/footer.footer-eslogan') }}</h2>
                <div class="flex justify-center gap-x-4 mt-4 text-gray-400">
                    <a href="#" class="hover:text-white"><!-- X -->
                        <span class="[&>svg]:h-6 [&>svg]:w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                <path
                                    d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                            </svg>
                        </span>
                    </a>
                    <div><!-- Facebook -->
                        <a href="#" class="hover:text-white">
                            <span class="[&>svg]:h-6 [&>svg]:w-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                    <path
                                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div><!-- Instagram -->
                        <a href="#" class="hover:text-white">
                            <span class="[&>svg]:h-6 [&>svg]:w-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                        </a>
                        </span>
                    </div>
                </div>
            </div>
            {{-- SEGUNDA COLUMNA --}}
            <div class="text-center md:text-left">
                <h2 class="uppercase text-gray-300 font-raleway tracking-[.20em]">
                    {{ __('site/footer.footer-navegacion') }}</h2>
                <ul class="mt-4 capitalize text-base text-gray-300 space-y-2">
                    <li><a href="#"
                            class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">{{ __('site/navbar.link-inicio') }}</a>
                    </li>
                    <li><a href="#"
                            class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">{{ __('site/navbar.link-area') }}</a>
                    </li>
                    <li><a href="#" class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">Blog</a></li>
                    <li><a href="#"
                            class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">{{ __('site/navbar.link-nosotros') }}</a>
                    </li>
                    <li><a href="#"
                            class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">{{ __('site/navbar.link-contacto') }}</a>
                    </li>
                    <div class="mr-3 tracking-[.15em] text-base">
                        <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block"
                            :class="{ 'hover:text-gray-400': open, 'text-gray-100': !open }">
                            <!-- Dropdown Toggle Button -->
                            <button @mouseover="open = true" class="flex items-center">
                                <span class="font-raleway text-sm">{{ __('site/navbar.link-idioma') }}</span>
                                <span :class="open = !open ? '' : '-rotate-180'"
                                    class="transition-transform duration-500 transform">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </span>
                            </button>
                            <!-- Dropdown Menu -->
                            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-90"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-90"
                                class="absolute right-0 py-1 text-gray-200 min-w-max text-sm">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a href="{{ route('lang', $lang) }}"
                                            class="hover:border-b-2 border-b-gray-300/60 work-sans-normal px-2">
                                            {{ $language }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <!-- End Dropdown Menu -->
                        </div>
                    </div>
                </ul>
            </div>
            {{-- TERCERA COLUMNA --}}
            <div class="md:col-span-2 mt-4 md:mt-0 text-center md:text-left">
                <h2 class="uppercase text-gray-300 font-raleway tracking-[.20em] text-center">
                    {{ __('site/footer.footer-informacion-contacto') }}</h2>
                <div class="grid md:grid-cols-2 gap-x-3">
                    <div>
                        <address class="mt-4 capitalize text-gray-500">
                            Santa Margarita #518 Col Insurgentes San Borja<br>
                            Del. Benito Juárez C.P. 03100 Cd de Mexico
                        </address>
                        <ul class="mt-2 capitalize text-base space-y-1 text-gray-300">
                            <li><a href="tel:+525555753855"
                                    class="hover:border-b-2 border-b-blue-300/60 work-sans-normal">(55) 5575-3855</a>
                            </li>
                            <li><a href="tel:+525555759223"
                                    class="hover:border-b-2 border-b-blue-300/60 work-sans-normal">(55) 5575-9223</a>
                            </li>
                            <li><a href="tel:+525555757887"
                                    class="hover:border-b-2 border-b-blue-300/60 work-sans-normal">(55) 5575-7887</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <address class="mt-4 capitalize text-gray-500">
                            Av. del Sol #202 Fracc.Galaxia Tabasco 2000<br>
                            C.P 86035 Villahermosa, Tabasco
                        </address>
                        <ul class="mt-2 capitalize text-base space-y-1 text-gray-300">
                            <li><a href="tel:+529932680884"
                                    class="hover:border-b-2 border-b-blue-300/60 work-sans-normal">(993) 268-0884</a>
                            </li>
                            <li><a href="tel:+529931708212"
                                    class="hover:border-b-2 border-b-blue-300/60 work-sans-normal">(993) 170-8212</a>
                            </li>
                        </ul>
                        <ul class="mt-2 text-base space-y-1 text-gray-300">
                            <li><a href="mailto:rleon@vrabogados.com.mx"
                                    class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">rleon@vrabogados.com.mx</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <address class="mt-4 capitalize text-gray-500">
                            Colonia Providencia, Turin 2796 int #101<br>
                            C.P 44600 Guadalajara, Jalisco
                        </address>
                        <ul class="mt-2 capitalize text-base space-y-1 text-gray-300">
                            <li><a href="tel:+523321525632"
                                    class="hover:border-b-2 border-b-blue-300/60 work-sans-normal">(332) 152-5632</a>
                            </li>
                            <li><a href="tel:+523321525633"
                                    class="hover:border-b-2 border-b-blue-300/60 work-sans-normal">(332) 152-5633</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
        <div class="text-gray-500 my-8 text-center">
            Copyright &copy; {{ date('Y') }} Todos los derechos reservados | Este sitio fue hecho por <a
                class="text-gray-400 cursor-pointer hover:text-blue-700" href="http://www.siccoms.com/"
                target="_blank">SICCOMS</a>
        </div>

    </div>
</footer>
