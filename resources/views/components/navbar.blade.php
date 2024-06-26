<nav x-data="accordion(6)"
    class="sticky top-0 z-40 w-full px-1 py-2 tracking-wide bg-gradient-to-r bg-black  shadow-md bg-opacity-95">
    <!-- Toggle button -->
    <div @click="handleClick()" x-data="{ open: false }" class="block text-white cursor-pointer lg:hidden">
        <button @click="open = ! open" class="w-6 h-6 text-lg">
            <svg x-show="! open" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"
                :clas="{ 'transition-full each-in-out transform duration-500 ': !open }">
                <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                <path d="M7.94977 11.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                <path d="M7.94977 23.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                <path d="M7.94977 35.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>

            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x text-white">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
    <!-- End toggle button -->

    <!-- Toggle menu -->
    <div x-ref="tab" :style="handleToggle()"
        class="relative w-full overflow-hidden transition-all duration-700 lg:hidden max-h-0">
        <div class="flex flex-col items-center my-3 space-y-2 text-lg hover:font-b text-gray-100">

            <a href="#"
                class="hover:text-cyan-500 hover:bg-slate-600 px-2 py-1 rounded-md"><span>Inicio</span></a>
            <a href="#" class="hover:text-cyan-500 hover:bg-slate-600 px-2 py-1 rounded-md"><span>Áreas de
                    práctica</span></a>
            <a href="#"
                class="hover:text-cyan-500 hover:bg-slate-600 px-2 py-1 rounded-md"><span>Nosotros</span></a>
            <a href="#"
                class="hover:text-cyan-500 hover:bg-slate-600 px-2 py-1 rounded-md"><span>Contacto</span></a>
        </div>

    </div>
    <!-- End toggle menu -->
    <!-- End show menu sm,md -->

    <!-- Show Menu lg -->
    <div class="hidden w-full lg:flex lg:items-center lg:justify-between">
        <div>
            <a href="{{ route('home.index') }}">
                <img class="md:h-[4rem] w-full" src="{{ asset('img/logo.png') }}" alt="Logo de Vrabogados">
            </a>
        </div>
        <div class="flex text-gray-100  font-work-sans uppercase tracking-[.15em] text-base items-center ">

            <x-link-navbar :text="__('site/navbar.link-inicio')" :route="'home.index'" />
            <x-link-navbar :text="__('site/navbar.link-area')" :route="'area.index'" />
            <x-link-navbar :text="'Blog'" :route="'blog.index'" />
            <x-link-navbar :text="__('site/navbar.link-nosotros')" :route="'nosotros.index'" />
            <x-link-navbar :text="__('site/navbar.link-contacto')" :route="'contacto.index'" />

            {{-- <div class="mr-3 tracking-[.15em] text-base">
                <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block"
                    :class="{ 'hover:text-gray-400': open, 'text-gray-100': !open }">
                    <!-- Dropdown Toggle Button -->
                    <button @mouseover="open = true" class="flex items-center">
                        <span class=" font-work-sans uppercase text-sm">{{ __('site/navbar.link-despacho') }}</span>
                        <span :class="open = !open ? '' : '-rotate-180'"
                            class="transition-transform duration-500 transform">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
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
                        class="absolute right-0 py-1 text-gray-200 bg-black rounded-lg shadow-xl min-w-max">
                        <a href="{{ route('mexico.index') }}"
                            class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 text-sm">Ciudad de
                            México</a>
                        <a href="{{ route('guadalajara.index') }}"
                            class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 text-sm">Guadalajara,
                            Jalisco</a>
                        <a href="{{ route('vhsa.index') }}"
                            class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100 text-sm">Villahermosa,
                            Tabasco</a>
                    </div>
                    <!-- End Dropdown Menu -->
                </div>
            </div> --}}

            <div class="mr-3 tracking-[.15em] text-base">
                <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block"
                    :class="{ 'hover:text-gray-400': open, 'text-gray-100': !open }">
                    <!-- Dropdown Toggle Button -->
                    <button @mouseover="open = true" class="flex items-center">
                        <span class=" font-work-sans uppercase text-sm">{{ __('site/navbar.link-idioma') }}</span>
                        <span :class="open = !open ? '' : '-rotate-180'"
                            class="transition-transform duration-500 transform">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
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
                        class="absolute right-0 py-1 text-gray-200 bg-black rounded-lg shadow-xl min-w-max">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <a href="{{ route('lang', $lang) }}" class="block px-4 py-1 text-sm hover:text-gray-900 hover:bg-gray-100">
                                    {{ strtoupper($language) }}
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <!-- End Dropdown Menu -->
                </div>
            </div>
        </div>
    </div>

</nav>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
            tab: 0
        });
        Alpine.data('accordion', (idx) => ({
            init() {
                this.idx = idx;
            },
            idx: -1,
            handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? '-rotate-180' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ?
                    `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })
</script>
