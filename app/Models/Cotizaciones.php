<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizaciones extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nombre',
        'presupuesto',
        'celular',
        'correo',
        'descripcion',
        'imagen_boceto',
        'fecha',
        'estado',
        'id_estado_cotizacion',
    ];
}
