<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos =Producto::paginate(5);
        return view("productos", ['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("productos_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {

        // recojo el contenido del formulario del .create
        $producto = new Producto($request->input());
        // guardar el nuevo producto
        $producto->SaveOrFail();
        // mostrar
        $productos =Producto::paginate(5);
        return view("productos",["productos"=>$productos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
        return view("productos_update",["producto"=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductoRequest  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        // request son los nuevos datos del producto y $producto los antiguos

        // modificar el producto
        $producto->update($request->input());

        // mostrar productos (con el modificado)
        $productos =Producto::paginate(6);
        return view("productos",["productos"=>$productos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        // borrar el producto
        $producto->delete();
        // mostrar clientes (con el modificado)
        $productos=Producto::paginate(6);
        return view("productos",["productos"=>$productos]);

    }
}
