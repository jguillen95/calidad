<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proteccion extends Model
{
    use HasFactory;
    protected $fillable=[
        'parametro_control',
        'control_tecnico',
        'medidas',
        'prote_ojos',
        'prote_piel',
        'prote_respiratoria',
        'peligros_termicos',
        'seguridad_id',
    ];
}
