<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;
    protected $fillable=[
        'precausiones_generales',
        'condicion_alm',
        'incompatibilidad',
        'seguridad_id',
    ];
}
