<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "producto";
    protected $keyType = "string";
    protected $primaryKey = "cod";

    public $incrementing = false;
    public $timestamps = false;

    public $fillable = [
        'cod',
        'nombre',
        'nombre_corto',
        'descripcion',
        'PVP'
    ];

    function ejemplo(){
        $producto = [
            'cod' => '12345',
            'nombre' => 'Producto 1',
            'nombre_corto' => 'Producto 1',
            'descripcion' => 'Descripción del producto 1',
            'PVP' => '10'
        ];
        $p = new Producto($producto);
        $p->save();
    }

}
