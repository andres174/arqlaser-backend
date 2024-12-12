<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'total',
        'subtotal',
        'fecha',
        'direccion',
        'cod_comprobante',
        'imagen_transferencia',
        'id_usuario',
        'id_tipo_pago',
        'id_estado_venta',
    ];
}
