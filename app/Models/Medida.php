<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    use HasFactory;
    protected $fillable=[
        'niebla',
        'espuma',
        'co2',
        'polvo_quimico',
        'otros',
        'quimicas_peligrosas',
        'seguridad_id',
    ];
}
