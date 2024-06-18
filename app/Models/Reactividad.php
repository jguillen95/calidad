<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reactividad extends Model
{
    use HasFactory;
    protected $fillable=[
        'estabilidad_q',
        'condiciones_e',
        'seguridad_id',
    ];
}
