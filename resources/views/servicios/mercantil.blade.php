@extends('layout.app')

@section('titulo', 'Derecho Civil')

@section('contenido')

<div>

    <section class="w-full">
        <div
            class="w-full h-[520px] animate-fade  bg-[url('https://img.freepik.com/foto-gratis/mujer-trabajando-tarde-oficina_23-2148991378.jpg?t=st=1719604567~exp=1719608167~hmac=c374bcade480015bc07bf45da8cca1d2b269b65da04f966fee73c906bf045104&w=1380')] bg-cover bg-no-repeat bg-center flex flex-col justify-center items-center ">
            <div class="container text-center max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8 space-y-6">
                <h1 class="titulos text-gray-300 animate-fade animate-once animate-duration-[2000ms] animate-ease-in">
                    Derecho Mercantil</h1>
                <p
                    class="parrafo-cuerpo text-white animate-fade-up animate-once animate-duration-[2500ms] animate-ease-in">
                    En México, el Derecho Mercantil al igual que el Derecho Civil pertenece al Derecho Privado. </p>
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
                    <h2 class="subtitulos text-gray-800">Disposiciones Aplicables</h2>
                    <p class="parrafo-cuerpo text-gray-800">En México, los actos de comercio, son regulados por el
                        Código de Comercio y demás leyes mercantiles y a falta de disposiciones en estas leyes, serán
                        aplicables las disposiciones contenidas en el Código Civil Federal.

                        Algunas de estas leyes mercantiles son: Ley de Comercio Exterior; Ley de Concursos Mercantiles;
                        Ley de Instituciones de Crédito; Ley General de Sociedades Mercantiles; Ley General de Títulos y
                        Operaciones de Crédito; Ley Sobre el Contrato de Seguro, entre otras.</p>
                    <p class="parrafo-cuerpo text-gray-600"> El patrón y el trabajador, en virtud de la relación laboral
                        tienen obligaciones recíprocas, la ley contempla como obligaciones del patrón: cumplir con las
                        disposiciones legales; pagar al trabajador salarios e indemnizaciones; proporcionar materiales
                        necesarios para la ejecución del trabajo; proporcionar a las mujeres embarazadas la protección
                        que establezcan los reglamentos; entre otros.</p>
                </div>

                <div class="mt-8 md:mt-0 md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="object-cover object-center w-full rounded-md shadow animate-fade-left animate-once animate-duration-[2000ms] animate-ease-in"
                                style="height: 500px;"
                                src="https://img.freepik.com/foto-gratis/trabajadores-cuello-blanco-trabajan-sitio-construccion_1398-5095.jpg?t=st=1719605631~exp=1719609231~hmac=4e7b7095160ee774a607771c19927d6283775a5cddb88186709d880560d9dbe6&w=740">
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
                            <img class="object-cover object-center w-full rounded-md shadow animate-fade-right animate-once animate-duration-[5000ms] animate-delay-[1000ms] animate-ease-in"
                                style="height: 500px;"
                                src="https://img.freepik.com/foto-gratis/gente-tiro-completo-trabajando-juntos_23-2150290134.jpg?t=st=1719605760~exp=1719609360~hmac=9febeaed087089061813846083ddcaad8710b755fbb35c24f922d0330af29a02&w=740">
                        </div>
                    </div>
                </div>

                <div class="mt-8 md:mt-0 md:w-1/2">
                    <h2 class="subtitulos text-gray-800">Comerciantes</h2>
                    <p class="parrafo-cuerpo text-gray-600">De acuerdo con el Código de Comercio se consideran
                        comerciantes tanto las personas físicas y morales con las siguientes consideraciones:

                        Las personas que de acuerdo con la ley tienen capacidad para contratar y obligarse, que hagan
                        del comercio su ocupación ordinaria y a quienes las leyes no les prohíben expresamente la
                        profesión de comercio.
                        Las sociedades constituidas conforme a las leyes mercantiles.
                        Las sociedades extranjeras, sus agencias y sucursales, que ejerzan actos de comercio en México.
                    </p>
                    <p class="parrafo-cuerpo text-gray-600">Esto es, los comerciantes son aquellas personas físicas o
                        morales que hacen del comercio su profesión habitual. No obstante ello, se puede dar el supuesto
                        de que cualquier persona física o moral con o sin establecimiento físico, eventual o
                        accidentalmente, realice alguna operación de comercio y aunque no sea considerada en derecho
                        como comerciante, por el hecho de realizar esa operación de comercio, quedaría sujeta a las
                        leyes mercantiles.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <h2 class="subtitulos text-gray-800">Actos de Comercio
            </h2>
            <p class="max-w-lg parrafo-cuerpo mt-4 text-gray-600">Los actos de comercio son aquellos actos jurídicos
                celebrados por personas físicas o morales, comerciantes o no, que produzcan efectos jurídicos regulados
                por el derecho mercantil.

                El Código de Comercio enuncia cuáles son los actos de comercio contemplados por la ley. Los reproducimos
                a continuación:<br>

                Los contratos de trabajo pueden ser individuales o colectivos. <br>

                El contrato individual de trabajo es aquel en virtud del cual una persona se obliga a prestar a otra un
                trabajo personal subordinado, mediante el pago de un salario.</p>
            <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-2">
                <div class="flex space-x-4">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M47.6268 23.7062C48.2466 24.4484 48.2466 25.5277 47.6268 26.2699L44.4812 30.0372C43.803 30.8493 43.4742 31.8971 43.5669 32.9512L44.0044 37.9287C44.0912 38.9165 43.4411 39.8188 42.4765 40.0491L38.0619 41.1031C36.9808 41.3612 36.0559 42.0575 35.5089 43.025L33.2053 47.099C32.6961 47.9995 31.5844 48.3631 30.6415 47.9375L26.6498 46.1358C25.6003 45.6621 24.3976 45.6636 23.3493 46.14L19.3597 47.9531C18.4161 48.3819 17.3014 48.0189 16.7912 47.1168L14.4911 43.0489C13.9441 42.0814 13.0192 41.3851 11.9381 41.127L7.52286 40.0728C6.55849 39.8426 5.90838 38.9406 5.99496 37.9529L6.43346 32.9505C6.52583 31.8968 6.19706 30.8494 5.5191 30.0375L2.37029 26.2665C1.75138 25.5253 1.75043 24.4477 2.36803 23.7054L5.52362 19.9127C6.1988 19.1012 6.52582 18.0557 6.43339 17.0041L5.99624 12.0308C5.90922 11.0408 6.56225 10.1372 7.52946 9.90904L11.9298 8.87123C13.0153 8.61522 13.9446 7.91765 14.4935 6.94684L16.7947 2.87709C17.3039 1.97664 18.4156 1.61302 19.3585 2.03858L23.3544 3.8422C24.4007 4.31444 25.5993 4.31444 26.6456 3.8422L30.6415 2.03858C31.5844 1.61301 32.6961 1.97663 33.2053 2.87709L35.5089 6.95112C36.0559 7.9186 36.9808 8.61486 38.0619 8.87297L42.4765 9.92701C43.4411 10.1573 44.0912 11.0596 44.0044 12.0474L43.5669 17.0249C43.4742 18.079 43.803 19.1268 44.4812 19.939L47.6268 23.7062ZM25 37.9326C26.8075 37.9326 28.2727 36.4674 28.2727 34.6599V34.4275C28.2727 32.6201 26.8075 31.1548 25 31.1548C23.1925 31.1548 21.7273 32.6201 21.7273 34.4275V34.6599C21.7273 36.4674 23.1925 37.9326 25 37.9326ZM25 28.377C26.8075 28.377 28.2727 26.9117 28.2727 25.1042V15.3162C28.2727 13.5087 26.8075 12.0435 25 12.0435C23.1925 12.0435 21.7273 13.5087 21.7273 15.3162V25.1042C21.7273 26.9117 23.1925 28.377 25 28.377Z"
                            stroke="currentColor" stroke-width="2" />
                    </svg>

                    <div>
                        <h4 class="text-xl subtitulos font-medium text-gray-800">Registro Público de Comercio</h4>
                        <p class="max-w-lg parrafo-cuerpo mt-4 text-gray-600">El Reglamento Interior del Trabajo, es un
                            conjunto de disposiciones obligatorias tanto para los trabajadores como para los patrones,
                            algunas de estas disposiciones son las relativas a las horas de entrada y salida de los
                            trabajadores; días y lugares de pago; normas para prevenir los riesgos de trabajo; permisos
                            y licencias; tiempo y forma en que los trabajadores deben someterse a exámenes médicos;
                            entre otras. Para crear el Reglamento Interior del Trabajo</p>
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
                        <h2 class="text-xl subtitulos font-medium text-gray-800">Condiciones de Trabajo</h2>
                        <p class="parrafo-cuerpo max-w-lg mt-4 text-gray-600">Las condiciones de trabajo deberán hacerse
                            constar por escrito, sin embargo la falta del escrito no priva al trabajador de los derechos
                            que deriven de la ley y de los servicios prestados. <br> Se
                            Son condiciones de trabajo: el lugar o lugares donde deba prestarse el trabajo; la duración
                            de la jornada de trabajo; la forma y monto del salario; el día y el lugar de pago del
                            salario; las condiciones de capacitación o adiestramiento; los días de descanso; vacaciones
                            y demás que convengan el trabajador y el patrón.</p>
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
                <h2 class="subtitulos text-gray-800">Coaliciones</h2>
            </div>

            <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
                <div
                    class="px-6 py-8 overflow-hidden bg-white rounded-xl shadow-md transition duration-300 hover:scale-110">
                    <h2 class="text-xl subtitulos text-gray-800">Seguridad Social</h2>
                    <p class="max-w-md mt-4 parrafo-cuerpo text-gray-400">Lorem ipsum dolor sit amet, consectetur
                        adipiscing Ac aliquam
                        ac
                        volutpat, viverra magna risus aliquam massa.</p>
                </div>

                <div
                    class="px-6 py-8 overflow-hidden bg-white rounded-xl shadow-md transition duration-300 hover:scale-110">
                    <h2 class="text-xl subtitulos text-gray-800">Sindicatos </h2>
                    <p class="max-w-md mt-4 parrafo-cuerpo text-gray-400">Lorem ipsum dolor sit amet, consectetur
                        adipiscing Ac aliquam
                        ac
                        volutpat,
                        viverra magna risus aliquam massa.</p>
                </div>

                <div
                    class="px-6 py-8 overflow-hidden bg-white rounded-xl shadow-md transition duration-300 hover:scale-110">
                    <h2 class="text-xl subtitulos text-gray-800">Huelgas</h2>
                    <p class="max-w-md mt-4 parrafo-cuerpo text-gray-400">Lorem ipsum dolor sit amet, consectetur
                        adipiscing Ac aliquam
                        ac
                        volutpat,
                        viverra magna risus aliquam massa.</p>
                </div>
            </div>
        </div>
    </section>



    <div>
        <div class="max-w-4xl mx-auto p-8">
            <h2 class="text-4xl font-bold mb-8">Contratos Mercantiles</h2>
            <div class="flex items-center mb-6">
                <div class="h-8 w-8 rounded-full bg-gray-400 mr-4"></div>
                <div>
                    <div class="h-2 w-24 bg-gray-400 mb-1"></div>
                    <div class="h-2 w-16 bg-gray-400"></div>
                </div>
            </div>
            <p class="text-lg leading-8 mb-20">
                Los contratos mercantiles son los convenios que producen o transfieren obligaciones y derechos de
                naturaleza mercantil.
            </p>
            <p class="text-lg leading-8 mb-20">
                Entre los contratos mercantiles regulados por las disposiciones de naturaleza mercantil encontramos:
                agencia, cesión de créditos comerciales, comisión mercantil, concesión mercantil, consignación
                mercantil, compraventa mercantil, permuta mercantil, diversos contratos de seguro, diversos contratos de
                transporte, depósito mercantil, fianza, fideicomiso, garantía, suministro, tiempo compartido y otros.
            </p>
            <p class="text-lg leading-8 mb-20">
                El despido del trabajador será injustificado cuando el patrón no haya dado aviso al trabajador
                personalmente o por conducto del Tribunal, de la terminación de la relación de trabajo. La separación no
                justificada produce la nulidad del despido.
            </p>
            <p class="text-lg leading-8 mb-20">
                En el caso de despido no justificado (despido injustificado), el trabajador podrá solicitar a su
                elección que se le reinstale en el trabajo que desempeñaba o que se le indemnice con el importe de tres
                meses de salario.
            </p>
        </div>
    </div>

    <section class="bg-gray-300">
        <div class="max-w-5xl px-6 py-16 mx-auto text-center">
            <h2 class="subtitulos text-gray-800">Concurso Mercantil</h2>
            <p class="parrafo-cuerpo mt-4 text-gray-600">Mediante el procedimiento de concurso mercantil, se declara en
                concurso al comerciante que ha incumplido con sus obligaciones de pago a dos o más acreedores distintos
                y bajo las condiciones previstas en la Ley de Concursos Mercantiles.

                El procedimiento de concurso mercantil puede ser solicitado por: el propio comerciante, el acreedor o el
                Ministerio Público.

                Mediante este procedimiento se busca evitar que el incumplimiento de las obligaciones de pago del
                comerciante ponga en riesgo la existencia de la empresa, y que además se lesione a los acreedores, a sus
                clientes, proveedores y empleados.</p>

            <img class="object-cover object-center w-full mt-16 rounded-md shadow h-80"
                src="https://img.freepik.com/foto-gratis/empresario-leyendo-contrato-closeup_1098-14742.jpg?t=st=1719608886~exp=1719612486~hmac=36d7798e3aead0a7453954738b1e067b9b690214a8b1d28f04ce9165349d21fd&w=1060">
        </div>
    </section>
</div>
@endsection