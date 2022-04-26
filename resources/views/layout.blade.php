<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
<header>

    <img class="max-h-full" src="{{asset("images/logo.png")}}" alt="logo">
    <h1 class="titulo">Venta de tecnología</h1>
    <div class="logueo">
        @auth
            {{auth()->user()->name}}
            <form action="{{route("logout")}}" method="post">
                @csrf
                <x-button>Logout</x-button>
            </form>
        @endauth
        @guest
            <x-ancla ref="{{route('login')}}">Login</x-ancla>
            <x-ancla ref="{{route('register')}}">Registrar</x-ancla>
        @endguest
    </div>
</header>
<nav>
    @yield("menu")
    {{--<h3 class="menu">Productos</h3>
    <h3 class="menu">Tienda</h3>
    <h3 class="menu">Contacto</h3>--}}
</nav>
<main>
    @yield("contenido")
</main>
<footer>Footer</footer>
</body>
</html>
