<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicacion extends Model
{
    use HasFactory;
    protected $fillable=[
        'codigo_indicacion',
        'indicacion_peligro',
        'clase_p',
        'categoria_ghs',
        'seguridad_id',
    ];
}
