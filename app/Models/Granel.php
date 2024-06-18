<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Granel extends Model
{
    use HasFactory;
    protected $fillable=[
        'img_si_mezcla',
        'desc_si_mezcla',
        'img_no_mezcla',
        'desc_no_mezcla',
        'densidad',
        'ph',
        'viscosidad',
        'criterio_id',
            ];
}
