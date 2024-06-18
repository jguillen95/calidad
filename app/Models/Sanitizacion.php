<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanitizacion extends Model
{
    use HasFactory;
    protected $fillable=[
        'fecha',
        'h_inicio',
        'h_final',
        'p_anterior',
        'p_entrada',
        'equipo',
        'observaciones',
        'nombre_supervisor',
        'firma_supervisor',
        'nombre_calidad',
        'firma_calidad',
    ];
}
