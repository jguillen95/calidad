<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellado extends Model
{
    use HasFactory;
    protected $fillable=[
        'img_no_mezcla',
        'img_si_sellado',
        'desc_si_sellado',
        'img_no_sellado' ,
        'desc_no_sellado' ,
        'img_si_acondicion',
        'desc_si_acondicion',
        'img_no_acondicion',
        'desc_no_acondicion',
        'sap_id_acondicion',
        'img_aux_1',
        'img_aux_2',
         'criterio_id',
    ];
}
