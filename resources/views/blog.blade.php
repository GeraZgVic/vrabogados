@extends('layout.app')
@section('titulo')
    Blog
@endsection

@section('contenido')
    <div class="container mx-auto px-8 my-4">
        <h1 class="text-3xl font-bold mb-8">Nuestro Blog</h1>
        <div class="bg-white space-y-12">
            <!-- Primera entrada del blog -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <img class="w-full h-64 md:h-80 object-cover rounded-md"
                    src="https://images.unsplash.com/photo-1505663912202-ac22d4cb3707?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Imagen del blog">
                <div>
                    <span class="text-sm text-gray-400">24 Jan 2021</span>
                    <h2 class="font-semibold text-xl mt-2">Titulo Post del Blog</h2>
                    <p class="text-gray-500 mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                        accusantium sequi vitae maxime et corporis nostrum laborum autem iusto esse odio nobis qui suscipit,
                        quidem harum doloremque doloribus provident deleniti.</p>
                    <a href="#" class="text-blue-600 mt-4 inline-block">Leer más</a>
                </div>
            </div>
            <!-- Segunda entrada del blog -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div>
                    <span class="text-sm text-gray-400">24 Jan 2021</span>
                    <h2 class="font-semibold text-xl mt-2">Titulo Post del Blog</h2>
                    <p class="text-gray-500 mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                        accusantium sequi vitae maxime et corporis nostrum laborum autem iusto esse odio nobis qui suscipit,
                        quidem harum doloremque doloribus provident deleniti.</p>
                    <a href="#" class="text-blue-600 mt-4 inline-block">Leer más</a>
                </div>
                <img class="w-full h-64 md:h-80 object-cover rounded-md"
                    src="https://images.unsplash.com/photo-1505663912202-ac22d4cb3707?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Imagen del blog">
            </div>
        </div>
    </div>
@endsection
