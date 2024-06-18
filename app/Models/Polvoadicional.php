<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polvoadicional extends Model
{
    use HasFactory;
    protected $fillable=[
        'sap_id_desecante',
        'img_si_desecante',
        'desc_si_desecante',
         'img_no_desecante',
        'desc_no_desecante',
        'sap_id_termo',
        'img_si_termo',
        'desc_si_termo',
        'img_no_termo',
        'desc_no_termo',
         'criterio_id',
    ];
}
