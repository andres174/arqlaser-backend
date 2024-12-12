<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdicionalesPersonalizacion extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'num_caracteres',
        'precio',
        'estado',
        'id_tipo_presonalizacion',
        'id_producto',
    ];
}
