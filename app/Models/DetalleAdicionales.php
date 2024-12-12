<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleAdicionales extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'descripcion_adicional',
        'estado',
        'id_detalle_venta',
        'id_adicionales_personalizacion',
    ];
}
