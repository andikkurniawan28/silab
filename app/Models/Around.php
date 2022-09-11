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

    public static function serveReport($range_date)
    {
        for($i=1; $i<=2; $i++)
        {
            $data['tek_pe'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('tek_pe'.$i);
        }

        for($i=1; $i<=7; $i++)
        {
            $data['tek_evap'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('tek_evap'.$i);
        }

        for($i=1; $i<=14; $i++)
        {
            $data['tek_pan'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('tek_pan'.$i);
        }

        for($i=1; $i<=2; $i++)
        {
            $data['suhu_pe'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('suhu_pe'.$i);
        }

        for($i=1; $i<=7; $i++)
        {
            $data['suhu_evap'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('suhu_evap'.$i);
        }

        for($i=1; $i<=3; $i++)
        {
            $data['suhu_heater'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('suhu_heater'.$i);
        }

        $data['tek_vakum'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('tek_vakum');
        $data['suhu_air_injeksi'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('suhu_air_injeksi');
        $data['suhu_air_terjun'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('suhu_air_terjun');
        $data['uap_baru'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('uap_baru');
        $data['uap_bekas'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('uap_bekas');
        $data['uap_3ato'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('uap_3ato');

        return $data;
    }
}
