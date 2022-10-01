<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coloromat extends Model
{
    use HasFactory;

    protected $fillable = [
        'sampling_id',
        'icumsa',
        'analyst',
        'leader',
        'is_corrected',
        'is_verified',
    ];

    public static function serve()
    {
        return self::leftjoin('samplings', 'coloromats.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('coloromats.*', 'samples.name as sample_name')
            ->limit(1000)
            ->orderBy('id','desc')
            ->get();
    }

    public static function latestSugarIcumsa()
    {
        return self::leftjoin('samplings', 'coloromats.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('coloromats.icumsa', 'samples.name')
            ->where('samples.name', 'Gula SHS')
            ->limit(1)
            ->orderBy('coloromats.created_at')
            ->get();
    }
}
