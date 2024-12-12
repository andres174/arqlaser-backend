<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoProductos extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'id_grupo',
        'id_producto',
        'estado',
    ];
}
