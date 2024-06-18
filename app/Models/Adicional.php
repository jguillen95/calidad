<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adicional extends Model
{
    use HasFactory;
    protected $fillable=[
        'abreviaturas',
        'aviso_lector',
        'seguridad_id',
    ];
}
