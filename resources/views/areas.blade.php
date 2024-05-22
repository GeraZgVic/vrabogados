@extends('layout.app')
@section('titulo')
Areas de práctica
@endsection

@section('contenido')
<div class="container m-auto px-8 mt-4 flex flex-col justify-center text-center">
    <div class="my-4">
        <h2
            class="text-3xl font-bold bg-gradient-to-r  from-blue-950 via-blue-800 to-blue-950 inline-block text-transparent bg-clip-text ">
            AREAS DE EJERCICIO</h2>
        <div class="mt-4 space-y-6">
            <p class="text-2xl text-gray-500"">{{__('site/areas.areas-servicio-descripcion')}}</p>
        </div>
        <div>
            <div class=" grid grid-cols-1 md:grid-cols-2 gap-10 my-8">
            <div>
                <img class="rounded-md"
                    src="https://media.istockphoto.com/id/956243400/es/foto/cierre-empresario-abogado-trabajando-o-leyendo-el-libro-de-derecho-en-trabajo-de-oficina-para.jpg?s=1024x1024&w=is&k=20&c=0qwlfbmo-KSMAm9agaZwRTab2NDfBRHqk_7UJVi60oU="
                    alt="Vrabogados">
            </div>
            <div class="container mx-auto">
                <ul class="list-disc text-blue-900">
                    <li>Litigio en materia administrativa.</li>
                    <li>Litigio en materia de amparo.</li>
                    <li>Litigio en materia civil del fuero común.</li>
                    <li>Litigio en materia civil federal.</li>
                    <li>Litigio en materia familiar y arrendamiento inmobiliario.</li>
                    <li>Litigio en materia fiscal.</li>
                    <li>Litigio en materia mercantil.</li>
                    <li>Asesoramiento en cada una de las materias antes mencionadas.</li>
                    <li>Litigio en materia laboral a través de nuestras firmas asociadas.</li>
                    <li>Litigio en materia penal a través de nuestras firmas asociadas.</li>
                    <li>Litigio en materia agraria a través de nuestras firmas asociadas.</li>
                    <li>Litigio en materia corporativa a través de nuestras firmas asociadas.</li>
                </ul>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-10 my-16">
            <div class="block max-w-sm rounded-lg bg-white bg-cover p-6 shadow-lg dark:bg-neutral-700"
                style="background-image: url('https://media.istockphoto.com/id/1351571961/es/foto/mirando-directamente-hacia-el-horizonte-del-distrito-financiero-en-el-centro-de-londres.jpg?s=1024x1024&w=is&k=20&c=-DbOFC0tJbGvoLKvx7MHlvQ-vAup20ZGOUg_O5i5eI0=');">
                <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 text-white dark:text-neutral-50">
                    Card title
                </h5>
                <p class="mb-4 text-base text-neutral-600 text-white  dark:text-neutral-200">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                </p>
                <button type="button"
                    class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                    data-twe-ripple-init>
                    Button
                </button>
            </div>
            <div class="block max-w-sm rounded-lg bg-white bg-cover p-6 shadow-lg dark:bg-neutral-700"
                style="background-image: url('https://media.istockphoto.com/id/1351571961/es/foto/mirando-directamente-hacia-el-horizonte-del-distrito-financiero-en-el-centro-de-londres.jpg?s=1024x1024&w=is&k=20&c=-DbOFC0tJbGvoLKvx7MHlvQ-vAup20ZGOUg_O5i5eI0=');">
                <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 text-white dark:text-neutral-50">
                    Card title
                </h5>
                <p class="mb-4 text-base text-neutral-600 text-white  dark:text-neutral-200">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                </p>
                <button type="button"
                    class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                    data-twe-ripple-init>
                    Button
                </button>
            </div>
            <div class="block max-w-sm rounded-lg bg-white bg-cover p-6 shadow-lg dark:bg-neutral-700"
                style="background-image: url('https://media.istockphoto.com/id/1351571961/es/foto/mirando-directamente-hacia-el-horizonte-del-distrito-financiero-en-el-centro-de-londres.jpg?s=1024x1024&w=is&k=20&c=-DbOFC0tJbGvoLKvx7MHlvQ-vAup20ZGOUg_O5i5eI0=');">
                <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 text-white dark:text-neutral-50">
                    Card title
                </h5>
                <p class="mb-4 text-base text-neutral-600 text-white  dark:text-neutral-200">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                </p>
                <button type="button"
                    class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                    data-twe-ripple-init>
                    Button
                </button>
            </div>
        </div>
        @endsection