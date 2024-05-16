@push('styles')
    <style>
        .slider {
            position: relative;
            width: 100%;
            height: auto;
            margin: auto;
            overflow: hidden;
        }

        .slider .slide-track {
            display: flex;
            /* La duración de la animación ahora es fija */
            animation: scroll 20s linear infinite;
            -webkit-animation: scroll 30s linear infinite;
            /* El ancho del slide-track es el número total de imágenes por el ancho de cada imagen */
            width: calc(200px * 32); /* 10 imágenes duplicadas */
        }

        .slider .slide {
            width: 200px;
            transition: transform 0.3s ease-in-out;
        }

        .slider .slide img {
            width: 100%;
            border-radius: 10px;
           
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }

        .slider .slide:hover img {
            transform: scale(1.5);
        }

        .slider .slide-track:hover {
            animation-play-state: paused;
        }

        @keyframes scroll {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            /* La distancia de desplazamiento es la mitad del ancho total del slide-track */
            100% {
                /* En lugar de terminar en la mitad del slide-track, terminamos en la posición que estaría justo después de la última imagen */
                -webkit-transform: translateX(calc(-200px * (32 / 2)));
                transform: translateX(calc(-200px * (32 / 2)));
            }
        }
    </style>
@endpush

<section class="w-full" x-data="{
    imagenesClientes: [
        {
            'photo': '{{ asset('clientes/1.webp') }}',
            'alt': 'Imagen ADO'
        },
        {
            'photo': '{{ asset('clientes/2.webp') }}',
            'alt': 'Imagen Altozano'
        },
        {
            'photo': '{{ asset('clientes/4.webp') }}',
            'alt': 'Imagen AT&T'
        },
        {
            'photo': '{{ asset('clientes/5.webp') }}',
            'alt': 'Imagen CI BANCO'
        },
        {
            'photo': '{{ asset('clientes/6.webp') }}',
            'alt': 'Imagen Dish'
        },
        {
            'photo': '{{ asset('clientes/7.webp') }}',
            'alt': 'Imagen G500'
        },
      
        {
            'photo': '{{ asset('clientes/9.webp') }}',
            'alt': 'Imagen Medic Group'
        },
        {
            'photo': '{{ asset('clientes/10.webp') }}',
            'alt': 'Imagen Mudlogging'
        },
        {
            'photo': '{{ asset('clientes/11.webp') }}',
            'alt': 'Imagen Oleo Palma'
        },
        {
            'photo': '{{ asset('clientes/12.webp') }}',
            'alt': 'Imagen Petricore'
        },
        {
            'photo': '{{ asset('clientes/13.webp') }}',
            'alt': 'Imagen Stratum'
        },
        {
            'photo': '{{ asset('clientes/14.webp') }}',
            'alt': 'Imagen ITVH'
        },
        {
            'photo': '{{ asset('clientes/16.webp') }}',
            'alt': 'Imagen Tumsa'
        },
        {
            'photo': '{{ asset('clientes/17.webp') }}',
            'alt': 'Imagen Veana'
        },
        {
            'photo': '{{ asset('clientes/19.webp') }}',
            'alt': 'Imagen Lirsa'
        },
        {
            'photo': '{{ asset('clientes/20.webp') }}',
            'alt': 'Imagen Ujat'
        },

    ]
}">
    {{-- SLIDER --}}
    <div class="slider">
        {{-- SLIDE-TRACK --}}
        <div class="slide-track">
            {{-- Duplicamos las imágenes para crear el bucle infinito --}}
            <template x-for="(image, index ) in imagenesClientes">
                {{-- Slide --}}
                <div class="slide">
                    <img :src="image.photo" :alt="image.alt">
                </div>
            </template>
            {{-- Duplicamos las imágenes nuevamente para crear el bucle infinito --}}
            <template x-for="(image, index ) in imagenesClientes">
                {{-- Slide --}}
                <div class="slide">
                    <img :src="image.photo" :alt="image.alt">
                </div>
            </template>
        </div>
    </div>
</section>
