<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Around extends Model
{
    use HasFactory;
    protected $fillable = [
        'tek_pe1',
        'tek_pe2',
        'tek_evap1',
        'tek_evap2',
        'tek_evap3',
        'tek_evap4',
        'tek_evap5',
        'tek_evap6',
        'tek_evap7',
        'tek_pan1',
        'tek_pan2',
        'tek_pan3',
        'tek_pan4',
        'tek_pan5',
        'tek_pan6',
        'tek_pan7',
        'tek_pan8',
        'tek_pan9',
        'tek_pan10',
        'tek_pan11',
        'tek_pan12',
        'tek_pan13',
        'tek_pan14',
        'tek_vakum',
        'suhu_pe1',
        'suhu_pe2',
        'suhu_evap1',
        'suhu_evap2',
        'suhu_evap3',
        'suhu_evap4',
        'suhu_evap5',
        'suhu_evap6',
        'suhu_evap7',
        'suhu_heater1',
        'suhu_heater2',
        'suhu_heater3',
        'suhu_air_injeksi',
        'suhu_air_terjun',
        'uap_baru',
        'uap_bekas',
        'uap_3ato',
    ];
}
