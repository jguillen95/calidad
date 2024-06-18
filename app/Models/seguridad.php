<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seguridad extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'marca',
        'id_sap',
        'codigo_p',
        'proposito_p',
        'usos_p',
        'nombre_distribuidor',
        'direccion_p',
    ];
}
