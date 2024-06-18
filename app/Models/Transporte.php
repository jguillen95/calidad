<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;
    protected $fillable=[
        'un',
        'desc_producto',
        'clase',
        'grupo_embalaje',
        'peligro_ambiente',
        'seguridad_id',
    ];
}
