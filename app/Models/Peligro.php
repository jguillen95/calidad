<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peligro extends Model
{
    use HasFactory;
    protected $fillable=[
        'peligro',
        'salud',
        'inflamabilidad',
        'reactividad',
        'id_etiqueta',
        'seguridad_id',
    ];
}
