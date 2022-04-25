@extends('layout')


@section('contenido')

<section>
    <!-- Producto 01-->
    @auth
    <div class="bg-neutral-900 m-12 p-2 rounded-lg items-center justify-center shadow shadow-inner z-20 shadow-2xl">
        <div class=" bg-neutral-200 rounded-sm items-center justify-center" style="height: 50%">

        </div>
        <div style="height: 25%" class=" justify-center p-2">
            <h3 class="font-medium leading-tight text-3xl mt-0 mb-2 text-gray-200">Mis Tiendas</h3>
            <h6 class="font-medium leading-tight text-base mt-0 mb-2 text-gray-400">Texto de ejemplo para esta
                carta.</h6>
        </div>
        <div style="height: 25%" class="inline-block  flex items-center justify-center ">
            <a href="tiendas">
            <button
                class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-8 border border-green-900 rounded">
                Gestionar tablas
            </button>
            </a>
        </div>
    </div>
    @endauth
    <!-- Producto 02 -->
    <div class="bg-neutral-900 m-12 p-2 rounded-lg items-center justify-center z-20 shadow-2xl">
        <div class="bg-neutral-200 rounded-sm items-center justify-center" style="height: 50%">

        </div>
        <div style="height: 25%" class=" justify-center p-2">
            <h3 class="font-medium leading-tight text-3xl mt-0 mb-2 text-gray-200">Mis Productos</h3>
            <h6 class="font-medium leading-tight text-base mt-0 mb-2 text-gray-400">Texto de ejemplo para esta
                carta.</h6>
        </div>
        <div style="height: 25%" class="inline-block  flex items-center justify-center ">
            <a href="productos">
            <button
                class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-8 border border-green-900 rounded">
                @auth
                    Gestionar tablas
                @endauth
                @guest
                    Ver productos
                    @endguest
            </button>
            </a>
        </div>
    </div>
    <!-- Producto 03 -->
    @auth
    <div class="bg-neutral-900 m-12 p-2 rounded-lg items-center justify-center z-20 shadow-2xl">
        <div class="bg-neutral-200 rounded-sm items-center justify-center" style="height: 50%">

        </div>
        <div style="height: 25%" class=" justify-center p-2">
            <h3 class="font-medium leading-tight text-3xl mt-0 mb-2 text-gray-200">Mis Familias</h3>
            <h6 class="font-medium leading-tight text-base mt-0 mb-2 text-gray-400">Texto de ejemplo para esta
                carta.</h6>
        </div>
        <div style="height: 25%" class="inline-block  flex items-center justify-center ">
            <a href="familia">
            <button
                class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-8 border border-green-900 rounded">
                Gestionar tablas
            </button>
            </a>
        </div>
    </div>
    @endauth
</section>
@endsection
