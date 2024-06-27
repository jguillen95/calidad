<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cambio extends Model
{
    use HasFactory;
    protected $fillable=[
        'formato',
        'valor_cambio' ,
        'valor_nuevo',
        'fecha_soli',
        'fecha_mod',
        'user_mod',
        'user_soli',
        'motivo',
        'estatus',
        'id_cambio',
    ];
}
