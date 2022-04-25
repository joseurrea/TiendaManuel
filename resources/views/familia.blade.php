@extends('layout')

@section('navegador')

    <a href="/">
        <div class="hover:bg-neutral-900 pt-3 pb-3 pl-12 pr-12 ml-12 mr-12">
            <svg class="w-5 h-4 inline mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>

            Home
        </div>
    </a>
    @auth
        <a href="">
            <div class="hover:bg-neutral-900 pt-3 pb-3 pl-12 pr-12 ml-12 mr-12">
                <svg class="w-5 h-4 inline mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Añadir Familia
            </div>
        </a>
    @endauth
@endsection

@section('contenido')
    <div class="pt-6 pl-6 pr-6">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-neutral-50 bg-neutral-700 text-gray-400">
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
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>

    </div>

@endsection

