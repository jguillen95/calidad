<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desviaciones extends Model
{
    use HasFactory;
    protected $fillable=[
        'area_des',
        'prodcuto_des',
        'presentacion_des',
        'lote_des',
        'cantidad_des',
        'descripcion_des',
        'desviacion_des',
        'investigacion_des',
        'anexos_des',
        'vobo_des',
        'dptoCierre_des',
        'firma',
        'fechaCierre_des',
        'Estatus',
        'idComp',
        'responsableC',
        'responsbaleP',
        'firma_cierre',
        'sem',
    ];
}
