@extends('layout.app')

@section('titulo', 'Derecho Administrativo')

@section('contenido')

<div>

    <section class="w-full h-screen animate-fade  bg-[url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-no-repeat bg-center flex flex-col justify-center items-center ">
        <div class="flex flex-col justify-center items-center bg-black/65 w-full h-full">
            <div class="container text-center max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8 space-y-6">
                <h1 class="titulos text-gray-300 animate-fade animate-once animate-duration-[2000ms] animate-ease-in">
                    Derecho Administrativo</h1>
                <p class="parrafo-cuerpo text-white animate-fade-up animate-once animate-duration-[2500ms] animate-ease-in">El principio de legalidad en el Derecho Administrativo establece que la administración pública debe actuar conforme a la ley en todas sus acciones, respetando los derechos de los ciudadanos y operando dentro de los límites legales establecidos.</p>
                <div class="flex justify-center mt-8">
                    <a href="{{ route('contacto.index') }}"
                        class="capitalize mt-8 px-6 py-4 bg-gray-500 transition duration-300 ease-in-out hover:bg-gray-600 text-white hover:ring-2 ring-gray-300/80 rounded-md">{{ __('site/navbar.link-contactanos') }}</a>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-gray-300">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="items-center md:flex md:space-x-6">
                <div class="md:w-1/2 animate-fade-right animate-once animate-duration-[2500ms] animate-ease-in">
                    <h2 class="subtitulos text-gray-800">Principios Fundamentales</h2>
                    <p class="parrafo-cuerpo text-gray-800">Entre los principios fundamentales del Derecho Administrativo destaca el principio de legalidad, que establece que la administración pública debe actuar conforme a la ley en todas sus actuaciones, asegurando así la protección de los derechos de los administrados y la predictibilidad en la actuación estatal.</p>
                    <h3 class="font-semibold my-1">Actuación Administrativa</h3>
                    <p class="parrafo-cuerpo text-gray-600"> La actuación administrativa se caracteriza por ser de naturaleza ejecutiva y reglada, orientada a la gestión de los intereses públicos conforme a los procedimientos y normativas establecidas por la ley.</p>
                </div>

                <div class="mt-8 md:mt-0 md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="object-cover object-center w-full rounded-md shadow animate-fade-left animate-once animate-duration-[2000ms] animate-ease-in" style="height: 500px;"
                                src="https://img.freepik.com/foto-gratis/vista-frontal-sonrientes-colegas-trabajo_23-2149622842.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="items-center md:flex md:space-x-6">
                <div class="md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="object-cover object-center w-full rounded-md shadow animate-fade-right animate-once animate-duration-[5000ms] animate-delay-[1000ms] animate-ease-in" style="height: 500px;"
                                src="https://img.freepik.com/foto-gratis/mujer-talla-media-que-trabaja-como-agente-bienes-raices_23-2151064940.jpg">
                        </div>
                    </div>
                </div>

                <div class="mt-8 md:mt-0 md:w-1/2">
                    <h2 class="subtitulos text-gray-800">Los Bienes</h2>
                    <p class="parrafo-cuerpo text-gray-600">El Derecho Civil se ocupa de la protección y respeto de los
                        bienes muebles y de los bienes inmuebles. La ley regula la forma cómo estos bienes se adquieren,
                        su uso, goce, disfrute, la forma de transmitirlos y los conflictos derivados de ellos.</p>
                    <p class="parrafo-cuerpo text-gray-600">En relación con los bienes están los derechos y obligaciones
                        relativos a la propiedad y a la posesión.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <h2 class="subtitulos text-gray-800">Contratos Civiles
            </h2>
            <p class="max-w-lg parrafo-cuerpo mt-4 text-gray-600">Los contratos son una especie de convenio. Un contrato
                es un acuerdo
                de voluntades entre dos o más personas para producir o transferir obligaciones y derechos.</p>
            <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-2">
                <div class="flex space-x-4">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M47.6268 23.7062C48.2466 24.4484 48.2466 25.5277 47.6268 26.2699L44.4812 30.0372C43.803 30.8493 43.4742 31.8971 43.5669 32.9512L44.0044 37.9287C44.0912 38.9165 43.4411 39.8188 42.4765 40.0491L38.0619 41.1031C36.9808 41.3612 36.0559 42.0575 35.5089 43.025L33.2053 47.099C32.6961 47.9995 31.5844 48.3631 30.6415 47.9375L26.6498 46.1358C25.6003 45.6621 24.3976 45.6636 23.3493 46.14L19.3597 47.9531C18.4161 48.3819 17.3014 48.0189 16.7912 47.1168L14.4911 43.0489C13.9441 42.0814 13.0192 41.3851 11.9381 41.127L7.52286 40.0728C6.55849 39.8426 5.90838 38.9406 5.99496 37.9529L6.43346 32.9505C6.52583 31.8968 6.19706 30.8494 5.5191 30.0375L2.37029 26.2665C1.75138 25.5253 1.75043 24.4477 2.36803 23.7054L5.52362 19.9127C6.1988 19.1012 6.52582 18.0557 6.43339 17.0041L5.99624 12.0308C5.90922 11.0408 6.56225 10.1372 7.52946 9.90904L11.9298 8.87123C13.0153 8.61522 13.9446 7.91765 14.4935 6.94684L16.7947 2.87709C17.3039 1.97664 18.4156 1.61302 19.3585 2.03858L23.3544 3.8422C24.4007 4.31444 25.5993 4.31444 26.6456 3.8422L30.6415 2.03858C31.5844 1.61301 32.6961 1.97663 33.2053 2.87709L35.5089 6.95112C36.0559 7.9186 36.9808 8.61486 38.0619 8.87297L42.4765 9.92701C43.4411 10.1573 44.0912 11.0596 44.0044 12.0474L43.5669 17.0249C43.4742 18.079 43.803 19.1268 44.4812 19.939L47.6268 23.7062ZM25 37.9326C26.8075 37.9326 28.2727 36.4674 28.2727 34.6599V34.4275C28.2727 32.6201 26.8075 31.1548 25 31.1548C23.1925 31.1548 21.7273 32.6201 21.7273 34.4275V34.6599C21.7273 36.4674 23.1925 37.9326 25 37.9326ZM25 28.377C26.8075 28.377 28.2727 26.9117 28.2727 25.1042V15.3162C28.2727 13.5087 26.8075 12.0435 25 12.0435C23.1925 12.0435 21.7273 13.5087 21.7273 15.3162V25.1042C21.7273 26.9117 23.1925 28.377 25 28.377Z"
                            stroke="currentColor" stroke-width="2" />
                    </svg>

                    <div>
                        <h4 class="text-xl subtitulos font-medium text-gray-800">Formación del Contrato</h4>
                        <p class="max-w-lg parrafo-cuerpo mt-4 text-gray-600">Para que un contrato se forme, la ley
                            emplea dos
                            términos: la oferta y la aceptación.

                            En la oferta una persona propone a otra la celebración de un contrato, fijándole o no un
                            plazo para aceptar. La parte que hace la oferta queda ligada por su oferta hasta que expire
                            el plazo. O bien, si no se fijó un plazo para aceptar, la parte que recibe la oferta deberá
                            aceptar inmediatamente si ambas partes están presentes, y el autor de la oferta queda
                            desligado si la aceptación no se da de forma inmediata. </p>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 25C1 11.8023 11.8023 1 25 1C38.1977 1 49 11.8023 49 25C49 38.1977 38.1977 49 25 49C11.8023 49 1 38.1977 1 25ZM33.36 35.3573C34.7228 36.1959 36.5074 35.771 37.346 34.4082C38.1913 33.0346 37.7522 31.2351 36.3692 30.4053L28.221 25.5164C27.6186 25.155 27.25 24.504 27.25 23.8014V14.375C27.25 12.7872 25.9628 11.5 24.375 11.5C22.7872 11.5 21.5 12.7872 21.5 14.375V25.8236C21.5 27.2127 22.2206 28.5023 23.4036 29.2302L33.36 35.3573Z"
                            stroke="currentColor" stroke-width="2" />
                    </svg>

                    <div>
                        <h2 class="text-xl subtitulos font-medium text-gray-800">El Objeto en los Contratos</h2>
                        <p class="parrafo-cuerpo max-w-lg mt-4 text-gray-600">El objeto en los contratos son: la cosa
                            que el obligado
                            debe dar, o el hecho que el obligado debe hacer o no hacer. Por ejemplo, puede ser objeto de
                            un contrato de arrendamiento un bien inmueble; y en un contrato de prestación de servicios
                            de contabilidad el objeto serán los servicios que preste el contador como el cálculo de
                            impuestos, la presentación de declaraciones del cliente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-12 lg:mt-24">
        <div class="bg-black text-white -skew-y-1">
            <div class="container mx-auto skew-y-1">
                <div class="flex flex-col items-center py-10 text-center lg:py-20">
                    <div class="w-full px-4 lg:w-1/2 lg:px-0">
                        <div class="mb-8">
                            <h2 class="subtitulos mb-3">
                                ¿Encontraste la solución?
                            </h2>
                            <p class="parrafo-cuerpo opacity-80">
                                Para recibir más información
                            </p>
                        </div>

                        <div class="text-lg">
                            <a href="{{ route('contacto.index') }}"
                                class="capitalize mt-8 px-6 py-4 bg-gray-500 transition duration-300 ease-in-out hover:bg-gray-600 text-white hover:ring-2 ring-gray-300/80 rounded-md">{{ __('site/navbar.link-contactanos') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="md:flex md:justify-between">
                <h2 class="subtitulos text-gray-800">Ramas del derecho civil</h2>
            </div>

            <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
                <div
                    class="px-6 py-8 overflow-hidden bg-white rounded-xl shadow-md transition duration-300 hover:scale-110">
                    <h2 class="text-xl subtitulos text-gray-800">El derecho de las personas.</h2>
                    <p class="max-w-md mt-4 parrafo-cuerpo text-gray-400">Lorem ipsum dolor sit amet, consectetur
                        adipiscing Ac aliquam
                        ac
                        volutpat, viverra magna risus aliquam massa.</p>
                </div>

                <div
                    class="px-6 py-8 overflow-hidden bg-white rounded-xl shadow-md transition duration-300 hover:scale-110">
                    <h2 class="text-xl subtitulos text-gray-800">El derecho de obligaciones y contratos.</h2>
                    <p class="max-w-md mt-4 parrafo-cuerpo text-gray-400">Lorem ipsum dolor sit amet, consectetur
                        adipiscing Ac aliquam
                        ac
                        volutpat,
                        viverra magna risus aliquam massa.</p>
                </div>

                <div
                    class="px-6 py-8 overflow-hidden bg-white rounded-xl shadow-md transition duration-300 hover:scale-110">
                    <h2 class="text-xl subtitulos text-gray-800">Los derechos reales.</h2>
                    <p class="max-w-md mt-4 parrafo-cuerpo text-gray-400">Lorem ipsum dolor sit amet, consectetur
                        adipiscing Ac aliquam
                        ac
                        volutpat,
                        viverra magna risus aliquam massa.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-300">
        <div class="max-w-5xl px-6 py-16 mx-auto text-center">
            <h2 class="subtitulos text-gray-800">Historia del derecho civil</h2>
            <p class="parrafo-cuerpo mt-4 text-gray-600">Como todo el derecho privado, el derecho civil es una de las
                ramas más importantes de la ciencia jurídica en lo que a la vida cotidiana se refiere.</p>

            <img class="object-cover object-center w-full mt-16 rounded-md shadow h-80"
                src="https://img.freepik.com/foto-gratis/entorno-derecho-fotorrealista_23-2151202463.jpg?t=st=1719522899~exp=1719526499~hmac=717b7752f741870140dc5f9a9e8dbe95a69a0ca3f9e555b52429bc105d16dfe4&w=1060">
        </div>
    </section>
</div>
@endsection