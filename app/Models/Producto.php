<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table="producto";
    protected $keyType="string";
    protected $primaryKey="cod";

    public $timestamps="false";
    public $incrementing="false";


    protected $fillable=["nombre_corto","descripcion","cod","PVP","familia"];
}
