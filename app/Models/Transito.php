<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transito extends Model
{
    use HasFactory;
    protected $fillable=[
        'regla_transito',
        'trans_internacional',
        'seguridad_id',
    ];
}
