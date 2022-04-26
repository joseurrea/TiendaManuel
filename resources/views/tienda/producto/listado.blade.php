@extends("layout")

@section("menu")
    <x-ancla ref="{{route('productos.create')}}">Nuevo producto</x-ancla>
    <x-ancla ref="{{route('principal')}}">Volver</x-ancla>
@endsection

@section("contenido")
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->nombre_corto}}</td>
                <td>{{$producto->PVP}}</td>
            </tr>
        @endforeach
    </table>
    <hr/>
    <div class="p-10">
        {{$productos->links()}}
    </div>
@endsection
