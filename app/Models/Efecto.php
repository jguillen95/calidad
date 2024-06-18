<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Efecto extends Model
{
    use HasFactory;
    protected $fillable=[
        'inhalacion',
        'ojos_p',
        'piel_p',
        'incendio_p',
        'ingestion_p',
        'seguridad_id',
    ];
}

