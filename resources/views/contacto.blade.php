@extends('layout.app')

@section('titulo', 'Vrabogados | Contácto')

@section('contenido')

<section class="container mx-auto px-8">
    <h1 class="titulos text-gray-700 text-center my-6">Contacto</h1>
    <p class="text-center text-gray-600 mb-10 parrafo-cuerpo">
        En Viveros Romero Abogados S.C. estamos comprometidos a brindarle la mejor asesoría legal. No dude en ponerse en contacto con nosotros a través de nuestras oficinas en Ciudad de México, Villahermosa, y Guadalajara. Nuestro equipo está listo para atender sus consultas y ofrecer soluciones legales a la medida de sus necesidades.
    </p>
    <div class="py-10">
        <div class="flex flex-col md:flex-row gap-6">
            <div id="map" class="z-0 w-full md:w-2/3 h-96 mb-6 md:mb-0"></div>
            <div class="w-full md:w-1/3">
                <h2 class="text-xl md:text-2xl font-semibold mb-4 text-gray-800">Nuestras Oficinas</h2>
                <ul class="space-y-6 text-gray-700 list-inside font-raleway">
                    <li>
                        <a href="{{route('mexico.index')}}" class="hover:text-blue-600 transition duration-300 ease-in-out">
                            <h4 class="font-semibold text-lg">Ciudad de México</h4>
                            <address class="text-gray-500">Sta. Margarita #518, Col. Insurgentes San Borja, Del. Benito Juárez C.P. 03100</address>
                            <p class="text-blue-600">Más información</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('vhsa.index')}}" class="hover:text-blue-600 transition duration-300 ease-in-out">
                            <h4 class="font-semibold text-lg">Villahermosa, Tabasco</h4>
                            <address class="text-gray-500">Av. del Sol #202 Fracc.Galaxia, Tabasco 2000 C.P. 86035</address>
                            <p class="text-blue-600">Más información</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('guadalajara.index')}}" class="hover:text-blue-600 transition duration-300 ease-in-out">
                            <h4 class="font-semibold text-lg">Guadalajara, Jalisco</h4>
                            <address class="text-gray-500">Turin 2796, int. #101, Col. Providencia C.P. 44600</address>
                            <p class="text-blue-600">Más información</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Inicializa el mapa
        let map = L.map('map').setView([23.6345, -102.5528], 5); // Coordenadas de México

        // Añadir el tile layer de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Configurar el icono del marcador sin sombra
        var iconOptions = {
            iconUrl: 'https://unpkg.com/leaflet@1.7.1/dist/images/marker-icon.png',
            iconSize: [25, 41], // tamaño del icono
            iconAnchor: [12, 41], // punto del icono que corresponde a la posición del marcador
            popupAnchor: [1, -34], // punto desde el cual el popup debe abrirse en relación al icono
            shadowUrl: '', // eliminar la sombra
            shadowSize: [0, 0], // tamaño de la sombra
            shadowAnchor: [0, 0] // punto de la sombra que corresponde a la posición del marcador
        };
        var customIcon = L.icon(iconOptions);

        // Añadir marcadores
        var locations = [{
                coords: [19.4326, -99.1332],
                label: 'Ciudad de México'
            },
            {
                coords: [20.6597, -103.3496],
                label: 'Guadalajara, Jalisco'
            },
            {
                coords: [17.9895, -92.9475],
                label: 'Villahermosa, Tabasco'
            }
        ];

        locations.forEach(function(location) {
            L.marker(location.coords, {
                    icon: customIcon
                })
                .addTo(map)
                .bindPopup(location.label);
        });
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
@endpush
