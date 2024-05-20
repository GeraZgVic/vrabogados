<div class="h-full">
    <div class=" grid sm:grid-cols-2 px-8 -mb-10">
        <div class="bg-indigo-500 text-white p-7 ">
            <h3 class="text-2xl">Need Legal Services?</h3>
            <p class="text-lg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                there
                live the
                blind texts.</p>
        </div>
        <div class="bg-indigo-700 text-white p-7">
            <h3 class="text-2xl">Call now (+1) 123-456-7890</h3>
            <p class="text-lg">Email us at <span class="text-sky-500">info@yourwebsite.com</p></span>
            <p class="mt-3 text-lg">Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia,
                there live the blind texts.</p>
        </div>
    </div>
    <div class="bg-slate-900 px-8 py-8 flex flex-col justify-center">
        <div class="grid md:grid-cols-1 lg:grid-cols-4 md:gap-x-6 mt-10">
            {{-- LOGO - PRIMER COLUMNA --}}
            <div class="flex flex-col items-center mb-10 md:mb-0">
                    <a href="{{ route('home.index') }}">
                        <img class="h-20 w-full" src="{{ asset('img/logo.png') }}" alt="Logo de Vrabogados">
                    </a>
                <h2 class="text-gray-300 work-sans-normal text-center my-1">{{__('site/footer.footer-eslogan')}}</h2>
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
            <div>
                <h2 class="uppercase text-gray-300 work-sans-link tracking-[.20em]">{{__('site/footer.footer-navegacion')}}</h2>
                <ul class="mt-4 capitalize text-base space-y-1 text-gray-300">
                    <li><a href="#" class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">{{__('site/navbar.link-inicio')}}</a></li>
                    <li><a href="#" class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">{{__('site/navbar.link-area')}}</a></li>
                    <li><a href="#" class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">Blog</a></li>
                    <li><a href="#" class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">{{__('site/navbar.link-nosotros')}}</a>
                    </li>
                    <li><a href="#" class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">{{__('site/navbar.link-despacho')}}</a>
                    </li>
                </ul>
            </div>
            {{-- TERCERA COLUMNA --}}
            <div class="mt-4 md:mt-0">
                <h2 class="uppercase text-gray-300 work-sans-link tracking-[.20em]">{{__('site/footer.footer-informacion-contacto')}}</h2>
                <p class="mt-4 capitalize text-gray-500">198 West 21th Street,Suite 721 New York NY 10016</p>
                <ul class="mt-2 capitalize text-base space-y-1 text-gray-300">
                    <li><a href="#" class="hover:border-b-2 border-b-blue-300/60 work-sans-normal">+ 1235 2355 98</a>
                    </li>
                    <li><a href="#" class="hover:border-b-2 border-b-gray-300/60 work-sans-normal">info@yoursite.com</a>
                    </li>
                </ul>
            </div>
            {{-- CUARTA COLUMNA --}}
            <div>
                <h2 class="uppercase text-gray-300 work-sans-link tracking-[.20em]">{{__('site/footer.footer-horario')}}</h2>
                <p class="mt-4 text-gray-300">Mon - Thu: 9:00 - 21 00 <br> Fri 8:00 - 21 00 <br> Sat 9:30 - 15: 00</p>
            </div>
        </div>
        <div class="text-gray-500 my-8 text-center">
            Copyright &copy; {{ date('Y') }} Todos los derechos reservados | Este sitio fue hecho por <a
                class="text-gray-400 cursor-pointer hover:text-blue-700" href="http://www.siccoms.com/"
                target="_blank">SICCOMS</a>
        </div>

    </div>
</div>