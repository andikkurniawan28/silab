<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chemical extends Model
{
    use HasFactory;
    protected $fillable = [
        'kapur',
        'belerang',
        'floc',
        'naoh',
        'b894',
        'b895',
        'b210',
        'asam_phospat',
        'blotong',
    ];

    public static function serveReport($range_date)
    {
        $data['kapur'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('kapur');
        $data['belerang'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('belerang');
        $data['floc'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('floc');
        $data['naoh'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('naoh');
        $data['b894'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('b894');
        $data['b895'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('b895');
        $data['b210'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('b210');
        $data['asam_phospat'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('asam_phospat');
        $data['blotong'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('blotong');
        return $data;
    }
}
