@extends('layout')

@section('navegador')

    <a href="home">
        <div class="hover:bg-neutral-900 pt-3 pb-3 pl-12 pr-12 ml-12 mr-12">
            <svg class="w-5 h-4 inline mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>

            Home
        </div>
    </a>

    <a href={{route("productos.index")}}>
        <div class="hover:bg-neutral-900 pt-3 pb-3 pl-12 pr-12 ml-12 mr-12">
            <svg class="w-5 h-4 inline mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
            </svg>
            Productos
        </div>
    </a>
@endsection

@section('contenido')
    <div class=" pb-20" >
        <h1 class="font-medium  flex justify-content-center justify-center items-center pt-4"> Añadir un nuevo
            producto</h1>
        <div class="pt-1">

            <div class=" flex justify-content-center justify-center items-center text-gray-900">

                <hr>
                <br>
                <form action="{{route("productos.store")}}" method="post">
                    <!-- campo oculto con un token de seguridad de laravel para que funcione -->
                    @csrf

                    <div class="form-block ">
                        <label class="block font-medium text-sm text-gray-100" for="nombre"> Nombre </label>
                        <x-input class="form-control" type="text" name="nombre_corto" id="nombre_corto"></x-input>
                        <br>
                    </div>
                    <div class="form-block ">
                        <label class="block font-medium text-sm text-gray-100" for="cod"> COD </label>
                        <x-input class="form-control" type="text" name="cod" id="cod"></x-input>
                        <br>
                    </div>
                    <div class="form-block ">
                        <label class="block font-medium text-sm text-gray-100" for="desc"> Descripción</label>
                        <x-input class="form-control" type="text" name="descripcion" id="desc"></x-input>
                        <br>
                    </div>
                    <div class="form-block ">
                        <label class="block font-medium text-sm text-gray-100" for="pvp"> PVP</label>
                        <x-input class="form-control" type="text" name="PVP" id="pvp"></x-input>
                        <br>
                    </div>
                    <div class="form-block " style="margin-bottom: 2rem">
                        <label class="block font-medium text-sm text-gray-100" for="familia"> Familia</label>
                        <x-input class="form-control" type="text" name="familia" id="familia"></x-input>
                        <br>
                    </div>
                    <x-button> Guardar</x-button>
                </form>
            </div>
        </div>
    </div>
@endsection
