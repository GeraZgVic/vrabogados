@extends('layout.app')

@section('titulo')
    Nosotros
@endsection

@section('contenido')
    <!-- component -->
    <div class="w-full lg:h-screen ">
        <div class="flex h-full pt-4 lg:pt-0">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <h1 class="font-dmserif pb-4 t mb-2 md:m-0 text-black animate-fade-up titulos">Nosotros <span
                            class="titulos text-blue-600">VR</span></h1>
                    <p class="parrafo-cuerpo">En nuestra firma legal, nos dedicamos a ofrecer
                        representación legal sólida y efectiva, respaldada por años de experiencia y un compromiso
                        inquebrantable con nuestros clientes para alcanzar los mejores resultados en cada situación legal
                        que enfrentan.</p>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover object-center bg-no-repeat"
                    style="background-image: url(https://img.freepik.com/foto-gratis/vista-superior-elementos-orientacion-profesional-jueces_23-2149443471.jpg?w=740&t=st=1718928929~exp=1718929529~hmac=8e258721a76d35ced430281d02fd90eec02539742ddc7c351adb2189d385b77a)">
                    <div class="h-full bg-black opacity-50"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- component -->
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-4">
                    <div
                        class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                        <img class="absolute inset-0 h-full w-full object-cover brightness-125 saturate-0 "
                            src="https://img.freepik.com/foto-gratis/joven-empresario-taza-cafe-mano-bolsillo-mirando-camara_23-2148112813.jpg?t=st=1718927253~exp=1718930853~hmac=6f67562b194d1d461b6dc731f596109665cb881963eed420e8dc7b5deb907d4c&w=740"
                            alt="">
                        <div class="absolute left-1/2 top-1/2 -ml-16 -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl"
                            aria-hidden="true">
                            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#000000] to-[#03003d] opacity-40"
                                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                            </div>
                        </div>
                        <figure class="relative isolate">
                            <blockquote class="mt-6 text-white ">
                                <p class="parrafo-cuerpo ">“Siempre defiende lo que crees que es correcto, incluso si eso
                                    significa estar en desacuerdo con la mayoría”</p>
                            </blockquote>
                            <figcaption class="subtitulos mt-6 text-sm leading-6 text-white"><strong
                                    class="subtitulos text-white">Shehab Najib,</strong> ceo VR</figcaption>
                        </figure>
                    </div>
                </div>
                <div>
                    <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                        <p class="subtitulos text-base leading-7 text-blue-900">Vivero Romeros Abogados s.c</p>
                        <h1 class=" subtitulos text-gray-900">Nuestro fundador</h1>
                        <div class="max-w-xl">
                            <p class="mt-6 parrafo-cuerpo">You won't ever have a peaceful mind unless you have a peace ful
                                life and equal
                                times you have a time with your religion then time for fun then time for work and study.</p>
                            <p class="mt-8 parrafo-cuerpo">You want to have a peaceful day try ignoring problems that are
                                blamed on you but
                                you are sure you didn't do the mistake.</p>
                            <p class="mt-8 parrafo-cuerpo">Try dividing your life days into equal times and do every thing
                                on it's time.
                            </p>
                        </div>
                    </div>

                    <dl class="mt-5 grid grid-cols-2 gap-8 border-t border-gray-900/10 pt-5 sm:grid-cols-4">
                        <div>
                            <dt class="parrafo-cuerpo leading-6 text-gray-600">Founded</dt>
                            <dd class="subtitulos text-gray-900">end of 1985</dd>
                        </div>
                        <div>
                            <dt class="parrafo-cuerpo leading-6 text-gray-600">Employees</dt>
                            <dd class="subtitulos text-gray-900">100k</dd>
                        </div>
                        <div>
                            <dt class="parrafo-cuerpo leading-6 text-gray-600">Countries</dt>
                            <dd class="subtitulos text-gray-900">2</dd>
                        </div>
                        <div>
                            <dt class="parrafo-cuerpo leading-6 text-gray-600">Raised</dt>
                            <dd class="subtitulos text-gray-900">$1.5K</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- component -->
    <section>
        <div class="container px-5 py-5 mx-auto">
            <h1 class="subtitulos text-center text-black mb-20">NUESTROS VALORES
            </h1>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-black text-lg title-font font-medium mb-2 subtitulos">Misión </h2>
                        <p class="leading-relaxed text-base parrafo-cuerpo text-gray-700">En nuestro despacho, nuestra
                            misión es proporcionar asesoría
                            legal integral y representación excepcional a nuestros clientes. Nos comprometemos a defender
                            sus derechos con integridad, diligencia y profesionalismo, buscando siempre alcanzar soluciones
                            efectivas y justas para sus problemas legales.</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-black text-lg title-font font-medium mb-2 subtitulos">Visión</h2>
                        <p class="leading-relaxed text-base parrafo-cuerpo text-gray-700">
                            Nuestra visión es ser líderes destacados en el campo del derecho, enfocándonos en la excelencia
                            del servicio al cliente, la resolución de desafíos legales complejos y la contribución positiva
                            a la comunidad legal y social. Nos comprometemos a mantenernos a la vanguardia de las nuevas
                            tendencias legales y tecnológicas para garantizar los mejores resultados para nuestros
                            clientes.
                        </p>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-black text-lg title-font font-medium mb-2 subtitulos">Compromiso</h2>
                        <p class="leading-relaxed text-base parrafo-cuerpo text-gray-700">Colaboramos estrechamente con
                            nuestros clientes, creyendo que
                            es fundamental para alcanzar los mejores resultados. Poseemos un profundo conocimiento de la ley
                            y de los mercados comerciales, comprometidos con nuestros valores y principios para hacer lo
                            correcto. Mantenemos una curiosidad constante, siempre actualizados y conscientes de las
                            cuestiones actuales y futuras.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container px-5 py-5 mx-auto">
        <h2 class="subtitulos text-center text-black">Premios</h2>
    </div>
    <!-- component -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/keen-slider@latest/keen-slider.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/keen-slider@latest/keen-slider.js"></script>

    <main class="px-5 min-h-[100dvh] py-[100px] bg-black flex flex-col justify-center">
        <section class="container">
            <!-- Desktop Version -->
            <div id="slider-wrapper" class="hidden xl:grid xl:grid-cols-[546px_1fr] 2xl:grid-cols-[690px_1fr]">
                <!-- Left Side - Image Slider -->
                <div id="image-slider" class="relative z-[1] overflow-hidden bg-black/50 rounded-xl">
                    <!-- For Sizing -->
                    <!-- To set the size of the Image Slider, because it works via 'position: absolute;' -->
                    <div class="flex invisible">
                        <!-- Image 1 -->
                        <img class="block w-full h-full object-contain" src="https://picsum.photos/id/70/600/400" />

                        <!-- Image 2 -->
                        <img class="block w-full h-full object-contain" src="https://picsum.photos/id/83/600/400" />

                        <!-- Image 3 -->
                        <img class="block w-full h-full object-contain" src="https://picsum.photos/id/94/600/400" />
                    </div>

                    <!-- Image Slider Items -->
                    <!-- Image 1 -->
                    <div class="keen-slider__slide absolute top-0 w-full h-full flex flex-col justify-center opacity-0">
                        <div class="rounded-xl overflow-hidden">
                            <img class="block w-full h-full object-contain" src="https://picsum.photos/id/70/600/400" />
                        </div>
                    </div>

                    <!-- Image 2 -->
                    <div class="keen-slider__slide absolute top-0 w-full h-full flex flex-col justify-center opacity-0">
                        <div class="rounded-xl overflow-hidden">
                            <img class="block w-full h-full object-contain" src="https://picsum.photos/id/83/600/400" />
                        </div>
                    </div>

                    <!-- Image 3 -->
                    <div class="keen-slider__slide absolute top-0 w-full h-full flex flex-col justify-center opacity-0">
                        <div class="rounded-xl overflow-hidden">
                            <img class="block w-full h-full object-contain" src="https://picsum.photos/id/94/600/400" />
                        </div>
                    </div>
                </div>

                <!-- Right Side - Text Slider -->
                <div id="text-slider" class="keen-slider relative">
                    <!-- Text Slider Items -->
                    <!-- Text 1 -->
                    <div
                        class="keen-slider__slide xl:w-[332px] 2xl:w-[380px] absolute h-full flex flex-col justify-center">
                        <div class="text-lg text-white font-medium">
                            1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                            recusandae nisi mollitia vel facere dolorem ad sapiente nesciunt,
                            assumenda quod quisquam a qui voluptatem magni beatae iste
                            molestias impedit voluptatum.
                        </div>
                    </div>

                    <!-- Text 2 -->
                    <div
                        class="keen-slider__slide xl:w-[332px] 2xl:w-[380px] absolute h-full flex flex-col justify-center">
                        <div class="text-lg text-white font-medium">
                            2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                            recusandae nisi mollitia vel facere dolorem ad sapiente nesciunt,
                            assumenda quod quisquam a qui voluptatem magni beatae iste
                            molestias impedit voluptatum.
                        </div>
                    </div>

                    <!-- Text 3 -->
                    <div
                        class="keen-slider__slide xl:w-[332px] 2xl:w-[380px] absolute h-full flex flex-col justify-center">
                        <div class="text-lg text-white font-medium">
                            3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                            recusandae nisi mollitia vel facere dolorem ad sapiente nesciunt,
                            assumenda quod quisquam a qui voluptatem magni beatae iste
                            molestias impedit voluptatum.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Version - List -->
            <div class="relative xl:hidden flex flex-col gap-6 [&>*:nth-child(2)>img]:order-1">
                <!-- List Items -->
                <!-- Item 1 -->
                <div class="grid grid-cols-2 gap-3 md:gap-5 lg:md:gap-8">
                    <!-- Image 1 -->
                    <img class="block w-full h-full object-cover rounded-md" src="https://picsum.photos/id/70/600/400" />

                    <!-- Text 1 -->
                    <p class="m-0 text-sm md:text-md lg:text-lg text-white">
                        1 Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Laboriosam doloremque totam eius laborum animi delectus ullam nobis
                        repellendus. Corrupti veritatis molestias temporibus obcaecati? Quo
                        pariatur minus commodi, error soluta voluptatum.
                    </p>
                </div>

                <!-- Item 2 -->
                <div class="grid grid-cols-2 gap-3 md:gap-5 lg:md:gap-8">
                    <!-- Image 2 -->
                    <img class="block w-full h-full object-cover rounded-md" src="https://picsum.photos/id/83/600/400" />

                    <!-- Text 2 -->
                    <p class="m-0 text-sm md:text-md lg:text-lg text-white">
                        2 Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Laboriosam doloremque totam eius laborum animi delectus ullam nobis
                        repellendus. Corrupti veritatis molestias temporibus obcaecati? Quo
                        pariatur minus commodi, error soluta voluptatum.
                    </p>
                </div>

                <!-- Item 3 -->
                <div class="grid grid-cols-2 gap-3 md:gap-5 lg:md:gap-8">
                    <!-- Image 3 -->
                    <img class="block w-full h-full object-cover rounded-md" src="https://picsum.photos/id/94/600/400" />

                    <!-- Text 3 -->
                    <p class="m-0 text-sm md:text-md lg:text-lg text-white">
                        3 Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Laboriosam doloremque totam eius laborum animi delectus ullam nobis
                        repellendus. Corrupti veritatis molestias temporibus obcaecati? Quo
                        pariatur minus commodi, error soluta voluptatum.
                    </p>
                </div>
            </div>

        </section>
    </main>

    @push('script')
        <script>
            document.addEventListener("DOMContentLoaded", async function() {
                // Params
                const animationDuration = 1000;
                const autoplayDelay = 10000;

                // UI
                const sectionWrapper = document.querySelector("#slider-wrapper");

                // Image Slider
                const imageSlider = new KeenSlider(
                    "#image-slider", {
                        loop: true,
                        defaultAnimation: {
                            duration: animationDuration,
                        },
                        detailsChanged: (s) => {
                            s.slides.forEach((element, idx) => {
                                element.style.opacity = s.track.details.slides[idx].portion;
                            });
                        },
                        renderMode: "custom",
                    },
                    [
                        (slider) => {
                            let timeout;
                            let mouseOver = false;

                            function clearNextTimeout() {
                                clearTimeout(timeout);
                            }

                            function nextTimeout() {
                                clearTimeout(timeout);
                                if (mouseOver) return;
                                timeout = setTimeout(() => {
                                    slider.next();
                                }, autoplayDelay);
                            }
                            slider.on("created", () => {
                                slider.container.addEventListener("mouseover", () => {
                                    mouseOver = true;
                                    clearNextTimeout();
                                });
                                slider.container.addEventListener("mouseout", () => {
                                    mouseOver = false;
                                    nextTimeout();
                                });
                                nextTimeout();
                            });
                            slider.on("dragStarted", clearNextTimeout);
                            slider.on("animationEnded", nextTimeout);
                            slider.on("updated", nextTimeout);
                        },
                    ]
                );

                // Text Slider
                const textSlider = new KeenSlider(
                    "#text-slider", {
                        defaultAnimation: {
                            duration: animationDuration,
                        },
                        loop: true,
                        slides: {
                            origin: "center",
                            perView: 2,
                            spacing: 15,
                        },
                        detailsChanged: (s) => {
                            const slides = s.track.details.slides;
                            s.slides.forEach((element, idx) => {
                                scaleElement(element.querySelector("div"), slides[idx].portion);
                            });
                        },
                        initial: 0,
                    },
                    [SyncSlidersPlugin(imageSlider)]
                );

                function scaleElement(element, portion) {
                    const scale_size = 0.75;
                    const scale = 1 - (scale_size - scale_size * portion);
                    const scale_style = `scale(${scale})`;
                    element.style.transform = scale_style;
                    element.style["-webkit-transform"] = scale_style;

                    const opacity = portion === 1 ? 1 : 0.2;
                    element.style.opacity = String(opacity);
                }

                // Sync sliders
                function SyncSlidersPlugin(secondSlider) {
                    return (firstSlider) => {
                        firstSlider.on("created", () => {
                            // Sync
                            secondSlider.on("slideChanged", (secondSlider) => {
                                const nextId = secondSlider.track.details.rel;

                                firstSlider.moveToIdx(nextId);
                            });

                            firstSlider.on("slideChanged", (firstSlider) => {
                                const nextId = firstSlider.track.details.rel;

                                secondSlider.moveToIdx(nextId);
                            });

                            // Click on Wrapper
                            sectionWrapper.addEventListener("click", () => {
                                firstSlider.next();
                            });
                        });
                    };
                }
            });
        </script>
    @endpush
@endsection
