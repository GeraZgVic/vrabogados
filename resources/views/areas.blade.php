@extends('layout.app')
@section('titulo')
    Areas de práctica
@endsection

@section('contenido')
    <div class="flex h-screen items-center justify-center">
        <div class="font-inter antialiased animate-fade relative h-full w-full bg-cover bg-center bg-fixed"
            style="background-image: url('https://images.unsplash.com/photo-1436450412740-6b988f486c6b?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-65">
                <div class="p-6 text-white">
                    <h1 class="pb-4 t mb-2 md:m-0 text-white text-center animate-fade-up titulos">
                        Servicios Legales</h1>
                    <p class="mb-8 text-gray-300 sm:px-16 lg:px-32 animate-bottom parrafo-cuerpo text-center">
                        ¿Necesitas resolver un problema legal? En Vivero Romero, ofrecemos soluciones expertas
                        en todas las áreas del derecho. Nuestro equipo de abogados especializados está listo para ayudarte.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex min-h-screen items-center justify-center bg-neutral-800">
        <div class="mt-5 mb-8 grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
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
                    <h2 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho civil</h2>
                    <p
                        class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Asesoría legal experta en contratos, propiedad, herencias y responsabilidad civil.</p>
                    <a href="{{ route('area.civil') }}"
                        class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                        Más</a>
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
                    <h2 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho penal</h2>
                    <p
                        class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Asesoramiento legal en casos criminales, defensa en juicios y gestión de litigios penales.</p>
                    <a href="{{ route('area.penal') }}"
                        class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                        Más</a>
                </div>
            </div>
            <div
                class="group relative cursor-pointer items-center justify-center overflow-hidden rounded-md transition-shadow hover:shadow-xl hover:shadow-black/30">
                <div class="h-96 w-72">
                    <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                        src="https://images.unsplash.com/photo-1488751045188-3c55bbf9a3fa?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" />
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h2 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho laboral</h2>
                    <p
                        class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Asesoría legal en relaciones laborales, contratos de trabajo, derechos de empleados y litigios
                        laborales.</p>
                    <a href="{{ route('area.laboral') }}"
                        class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                        Más</a>
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
                    <h2 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho administrativo</h2>
                    <p
                        class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Asesoría legal especializada en procedimientos administrativos, normativas gubernamentales y
                        litigios ante entidades públicas.</p>
                    <a href="{{ route('area.administrativo') }}"
                        class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                        Más</a>
                </div>
            </div>
            <div
                class="group relative cursor-pointer items-center justify-center overflow-hidden rounded-md transition-shadow hover:shadow-xl hover:shadow-black/30">
                <div class="h-96 w-72">
                    <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                        src="https://img.freepik.com/foto-gratis/detalles-columna-marmol-gris-edificio_1359-886.jpg?t=st=1718738255~exp=1718741855~hmac=c4d5abb36e226f87e5768f173a6a0ab0d0c1c338f23c20aad562498332c15821&w=740"
                        alt="" />
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h2 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho mercantil</h2>
                    <p
                        class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Asesoría legal en temas comerciales, contratos mercantiles, derecho societario y litigios empresariales.</p>
                    <a href="{{ route('area.mercantil') }}"
                        class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                        Más</a>
                </div>
            </div>
            <div
                class="group relative cursor-pointer items-center justify-center overflow-hidden rounded-md transition-shadow hover:shadow-xl hover:shadow-black/30">
                <div class="h-96 w-72">
                    <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                        src="https://img.freepik.com/foto-gratis/bodegon-monedas-dolar-escala_23-2150794349.jpg?t=st=1718738335~exp=1718741935~hmac=602f3bca70c7387f9029f7fe42396830cd49144b0312871b32faf1f54ae1540e&w=360"
                        alt="" />
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h2 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho tributario</h2>
                    <p
                        class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Asesoría legal en normativas fiscales, planificación tributaria, defensa ante auditorías y litigios fiscales.</p>
                    <a href="{{ route('area.tributaria') }}"
                        class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                        Más</a>
                </div>
            </div>

            {{-- NUEVOS --}}
            <div
                class="group relative cursor-pointer items-center justify-center overflow-hidden rounded-md transition-shadow hover:shadow-xl hover:shadow-black/30">
                <div class="h-96 w-72">
                    <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                        src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" />
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h2 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho Amparo</h2>
                    <p
                        class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Asesoría legal en la protección de derechos constitucionales, recursos de amparo y defensa ante violaciones a derechos fundamentales.</p>
                    <a href="{{ route('area.amparo') }}"
                        class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                        Más</a>
                </div>
            </div>
            <div
                class="group relative cursor-pointer items-center justify-center overflow-hidden rounded-md transition-shadow hover:shadow-xl hover:shadow-black/30">
                <div class="h-96 w-72">
                    <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                        src="https://images.unsplash.com/photo-1479142506502-19b3a3b7ff33?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" />
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h2 class="font-dmserif text-3xl font-bold text-white capitalize">Derecho Constitucional</h2>
                    <p
                        class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Asesoría legal en derechos fundamentales, interpretación constitucional y defensa ante violaciones constitucionales.</p>
                    <a href="{{ route('area.contitucional') }}"
                        class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver
                        Más</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-red-950 py-6 sm:py-12 mb-8">
        <div class="w-full container mx-auto px-4">
            <div class="group grid w-full lg:grid-cols-2">
                <div class="flex flex-col items-center lg:items-end">
                    <p class="font-bold text-sm flex mt-2 mb-8 items-center gap-2 order-2 lg:order-1" href="">
                        <span class="text-white text-center text-2xl">Informate</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#fff" class="w-6 h-6 hidden lg:block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </p>
                    <div class="rounded-xl overflow-hidden order-1 lg:order-2">
                        <img src="https://img.freepik.com/fotos-premium/grupo-punos-mapa-mundo-detras-union-contra-cancer_1136993-81.jpg?w=740"
                            alt="">
                    </div>
                </div>
                <div>
                    <div class="pl-12 space-y-6">
                        <h2 class="text-gray-100 subtitulos">Experticia en Gestión de Crisis</h2>
                        <p class="text-gray-200">
                            Simply Air Conditioning London are fixed system heating and air conditioning installation
                            specialists. Because we’ve tested all heating and air conditioning unit manufacturers before
                            using them there are no hidden surprises for our customers. We only supply air conditioning
                            units from the leading manufacturers so any system we fit will be of the highest quality. We
                            also thoroughly test every type of unit before supplying..
                        </p>
                        <p class="text-gray-200">
                            We also provide tailored Air Conditioning installation packages. The Air Conditioning systems we
                            install are all inverter driven therefor are energy efficient, stylish & silent both providing
                            cooling and heating. At Zero Degree AC Limited we only use the best brands.
                        </p>
                        <h3 class="font-semibold text-xl text-gray-100">Conditioning installation packages</h3>
                        <ul role="list" class="marker:text-amber-400 list-disc pl-5 space-y-3 text-white">
                            <li>5 cups chopped Porcini mushrooms</li>
                            <li>1/2 cup of olive oil</li>
                            <li>3lb of celery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

            if (isSafari) {
                const cards = document.querySelectorAll('.group');

                cards.forEach(card => {
                    card.addEventListener('touchstart', function() {
                        card.classList.add('hover');
                    });

                    card.addEventListener('touchend', function() {
                        setTimeout(() => {
                            card.classList.remove('hover');
                        }, 3000); // Mantener el efecto por 3 segundos
                    });
                });
            }
        });
    </script>
@endpush
