<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Npp extends Model
{
    use HasFactory;

    protected $fillable = [
        'pol',
        'percent_brix',
        'percent_pol',
        'purity',
        'yield',
    ];

    public static function serveReport($range_date)
    {
        $data['percent_brix'] = Npp::whereBetween('npps.created_at', [$range_date['min'], $range_date['max']])->avg('percent_brix');
        $data['percent_pol'] = Npp::whereBetween('npps.created_at', [$range_date['min'], $range_date['max']])->avg('percent_pol');
        $data['purity'] = Npp::whereBetween('npps.created_at', [$range_date['min'], $range_date['max']])->avg('purity');
        $data['yield'] = Npp::whereBetween('npps.created_at', [$range_date['min'], $range_date['max']])->avg('yield');
        return $data;
    }
}
