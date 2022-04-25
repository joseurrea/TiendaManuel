<?php
?>
    <!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
<header>

    <img class="flex-none" alt="" src="{{asset('img/logo.png')}}">
    <h1 class="font-medium leading-tight text-5xl ml-4 mt-0 mb-2 flex-auto w-50 ">Mi Tienda </h1>

    <div class="justify-end justify-items-end content-end items-end">
        @auth
            <svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            Conectado como <span class="font-bold">{{auth()->user()->name}} </span>
            <form action="{{route("logout")}}" method="post">
                @csrf

                <x-button class="text-zinc-400 hover:text-white">
                    Logout
                </x-button>
            </form>
        @endauth
        @guest
                <div class=" flex-auto w-25 inline-block mt-2 ml-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <x-input  class="text-gray-900 h-8" value="{{old('email')}}" type="email" name="email" placeholder="email" ></x-input>
                        <x-input class="text-gray-900 h-8" type="password" name="password" placeholder="password"></x-input>
                        <x-button class=" text-zinc-400 hover:text-white ml-2">
                            Login
                        </x-button>
                        @if ($errors->any())
                            <h2> Login incorrecto</h2>
                            @endif
                    </form>
                </div>
                <div class="justify-between justify-content-between flex-auto w-25 inline-block mt-2 ml-2">
                    <a href="{{route('register')}}" class="text-zinc-400 hover:text-white ">
                        <x-button class="text-zinc-400 hover:text-white">
                            Registrarse
                        </x-button>
                    </a>
                </div>

        @endguest
    </div>
</header>
<nav>
    @yield('navegador')

</nav>
<main>
    @yield('contenido')
</main>

<footer>
    <p> No se que de copyright y tal © </p>
</footer>
</body>

</html>
