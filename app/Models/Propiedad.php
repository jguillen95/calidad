<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;
    protected $fillable=[
        'apariencia',
        'olor',
        'ph',
        'punto_fusion',
        'temperatura',
        'velocidad',
        'inflamabilidad_info',
        'limite',
        'presion_vapor',
        'densidad_vapor',
        'densidad_relativa',
        'solubilidad',
        'coeficiente',
        'temperatura_esp',
        'temperatura_descom',
        'viscosidad',
        'peso_mol',
        'materia_volatil',
        'datos_relevantes',
        'seguridad_id',
    ];
}
