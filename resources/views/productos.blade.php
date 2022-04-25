@extends('layout')

@section('navegador')

    <a href="/">
        <div class="hover:bg-neutral-900 pt-3 pb-3 pl-12 pr-12 ml-12 mr-12">
            <svg class="w-5 h-4 inline mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>

            Home
        </div>
    </a>
    @auth
    <a href={{route("productos.create")}}>
        <div class="hover:bg-neutral-900 pt-3 pb-3 pl-12 pr-12 ml-12 mr-12">
            <svg class="w-5 h-4 inline mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Añadir producto
        </div>
    </a>
    @endauth
@endsection

@section('contenido')
    <div class="pt-6 pl-6 pr-6">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 text-gray-400">
                <thead class="text-xs uppercase bg-neutral-700 text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Producto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Familia
                    </th>
                    <th scope="col" class="px-6 py-3">
                        COD
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio
                    </th>
                    @auth
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Comprar</span>
                    </th>
                    @endauth
                </tr>
                </thead>
                <tbody>
                @foreach($productos as $producto)
                <tr class=" border-b bg-neutral-800 border-neutral-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 text-white whitespace-nowrap">
                       {{$producto->nombre_corto}}
                    </th>
                    <td class="px-6 py-4">
                        {{$producto->familia}}
                    </td>
                    <td class="px-6 py-4">
                        {{$producto->cod}}
                    </td>
                    <td class="px-6 py-4">
                        {{$producto->PVP}}
                    </td>
                    @auth
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-white hover:underline">
                        <x-button>
                        Comprar
                        </x-button>
                        </a>
                    </td>
                @endauth
                @endforeach
                </tbody>
            </table>
            <div class="p-2 text-white bg-neutral-800">
            {{$productos->links()}}
            </div>
        </div>

    </div>

@endsection
