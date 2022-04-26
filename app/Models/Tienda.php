<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $table = "tienda";
    protected $keyType = "string";
    protected $primaryKey = "cod";
    public $incrementing = false;
    public $timestamps = false;
}
