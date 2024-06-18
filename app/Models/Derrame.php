<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Derrame extends Model
{
    use HasFactory;
    protected $fillable=[
        'derrame_material',
        'equipo_proteccion',
        'precausiones_ambiente',
        'material_limpieza',
        'desechos',
        'seguridad_id',
    ];
}
