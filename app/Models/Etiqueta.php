<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;
    protected $fillable=[
        'img_etiqueta',
        'palabra',
        'indicacion',
        'categoria_p',
        'seguridad_id',
    ];
}
