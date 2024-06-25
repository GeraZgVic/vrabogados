@extends('layout.app')

@section('titulo', 'Ciudad de México')

@section('contenido')
<section class="relative h-screen flex flex-col items-center justify-center text-center text-white ">
    <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden">
        <video class="min-w-full min-h-full absolute object-cover"
            src="https://videos.pond5.com/hand-lady-scrolling-social-media-footage-245681414_main_xxl.mp4"
            type="video/mp4" autoplay muted loop></video>
    </div>
    <div class="video-content space-y-2 z-10">
        <h1 class="font-light text-6xl">Contactanos en Ciudad de México</h1>
        <h3 class="font-light text-3xl">¡El despacho de abogados Viveros Romero está aquí para ayudarte! Con más de
            20 años de experiencia, nuestro equipo de expertos en derecho civil, penal y laboral está comprometido a
            proteger tus derechos y resolver tus problemas legales de manera eficaz.</h3>
    </div>
</section>



<section class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">Nuestra Ubicación</h2>
        </div>
        <div class="inline-flex items-center justify-center w-full">
            <hr class="w-[90%] h-1 my-8 bg-gray-300 border-0 rounded">
            <div class="absolute px-4 -translate-x-1/2 bg-gray-100 left-1/2">
                <h3 class="font-bold text-xl font-dmserif">VR</h3>
            </div>
        </div>
        <div class="mt-16 lg:mt-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="rounded-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.712906864483!2d-99.17569370000001!3d19.3815799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff9da953685d%3A0x8372c931a7de75d!2sSta.%20Margarita%20518%2C%20Insurgentes%20San%20Borja%2C%20Benito%20Ju%C3%A1rez%2C%2003100%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1719345732852!5m2!1ses!2smx"
                        width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div>
                    <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                        <div class="px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Nuestra dirección</h3>
                            <p class="mt-1 text-gray-600">Sta. Margarita 518, Insurgentes San Borja, Benito Juárez,
                                03100 Ciudad de México, CDMX</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Horas</h3>
                            <p class="mt-1 text-gray-600">Lunes - Viernes: 9am - 5pm</p>
                            <p class="mt-1 text-gray-600">Sabado: 10am - 4pm</p>
                            <p class="mt-1 text-gray-600">Domingo: Cerrado</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Contacto</h3>
                            <p class="mt-1 text-gray-600">Correo electrónico: info@example.com</p>
                            <p class="mt-1 text-gray-600">Teléfono: (55) 5575-3855</p>
                            <p class="mt-1 text-gray-600">Teléfono: 55759223 / 5575-7887</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .video-docker video {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .video-docker::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }
</style>

@endsection