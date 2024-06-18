<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liquido extends Model
{
    use HasFactory;
    protected $fillable=[
        'sap_id_etiqueta',
        'img_si_etiqueta',
        'img_no_etiqueta',
        'desc_si_etiqueta',
        'desc_no_etiqueta',
        'img_si_etiqueta_1',
        'img_no_etiqueta_1',
        'desc_si_etiqueta_1',
        'desc_no_etiqueta_1',
        'sap_id_gotero',
        'img_si_gotero',
        'img_no_gotero',
        'desc_si_gotero',
        'desc_no_gotero',
        'img_si_dedal',
        'img_no_dedal',
        'desc_si_dedal',
        'desc_no_dedal',
        'criterio_id',
            ];
}
