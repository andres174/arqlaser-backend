<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nombre',
        'cantidad',
        'precio',
        'descripcion',
        'is_custom',
        'estado',
        'id_cateogria',
    ];
}
