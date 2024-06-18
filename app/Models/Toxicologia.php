<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toxicologia extends Model
{
    use HasFactory;
    protected $fillable=[
        'toxicidad',
        'vias_entrada',
        'degradacion',
        'metodos_eliminacion',
        'seguridad_id',
    ];
}
