<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codificado extends Model
{
    use HasFactory;
    protected $fillable=[
        'img_si_codi',
        'desc_si_codi',
         'img_no_codi',
        'desc_no_codi',
        'img_si_display_c',
    'desc_si_display_c',
     'img_no_display_c',
    'desc_no_display_c',
       'lote_envase_c',
        'cad_envase_c',
      'lote_display_c',
       'cad_display_c',
         'criterio_id',
    ];
}
