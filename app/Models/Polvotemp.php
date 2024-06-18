<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polvotemp extends Model
{
    use HasFactory;
    protected $fillable=[
        'sap_id_etiqueta',
        'desc_si_etiqueta',
        'desc_si_mezcla',
        'desc_lotificado_si',
        'lote_envase',
        'cad_envase',
         'criterio_id',
    ];
}
