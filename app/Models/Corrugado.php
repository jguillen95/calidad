<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corrugado extends Model
{
    use HasFactory;
    protected $fillable=[
        'sap_id_corrugado',
        'img_si_corrugado' ,
        'desc_si_corrugado',
        'img_no_corrugado',
        'desc_no_corrugado',
        'img_no_acomodo',
        'img_si_acomodo',
        'criterio_id',
        'sap_id_separador',
    ];

}
