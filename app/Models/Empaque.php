<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empaque extends Model
{
    use HasFactory;
    protected $fillable=[
    'id_sap_envase',
    'img_si_envase',
    'desc_si_envase',
    'img_no_envase',
    'desc_no_envase',
    'img_si_tapa',
    'desc_si_tapa',
    'img_no_tapa',
    'desc_no_tapa',
    'id_sap_sello',
    'img_si_sello',
    'desc_si_sello',
    'img_no_sello',
    'desc_no_sello',
    'id_sap_pegotin',
    'img_si_pegotin',
    'desc_si_pegotin',
    'img_no_pegotin',
    'desc_no_pegotin',
    'id_sap_display',
    'img_si_display',
    'desc_si_display',
    'img_no_display',
    'desc_no_display',
    'criterio_id',
    'id_sap_tapa',
    'extra_display',
        ];
}
