<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capsula extends Model
{
    use HasFactory;
    protected $fillable=[
        'sap_id_liner',
        'img_si_liner' ,
        'desc_si_liner',
        'img_no_liner',
        'desc_no_liner',
        'sap_id_extra',
        'img_no_comodin',
        'img_si_comodin',
        'desc_si_comodin',
        'desc_no_comodin',
        'criterio_id',
    ];
}
