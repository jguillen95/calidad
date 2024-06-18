<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biovita extends Model
{
    use HasFactory;
    protected $fillable=[

    'desc_si_envase',
    'desc_si_tapa',
    'desc_si_liner',
    'sap_id_etiqueta',
    'img_si_etiqueta',
    'img_no_etiqueta',
    'desc_si_etiqueta',
    'desc_no_etiqueta',
    'desc_si_capsula',
    'desc_si_desecante',
    'desc_si_mezcla',
    'densidad_mezcla',
    'ph_mezcla',
    'desc_envase_si',
    'lote_envase',
    'cad_envase',
    'criterio_id',
    ];
}
