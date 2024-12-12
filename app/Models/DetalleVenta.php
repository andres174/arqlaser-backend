<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'precio_total',
        'precio_unitario',
        'cantidad',
        'estado',
        'id_venta',
        'id_producto',
    ];
}
