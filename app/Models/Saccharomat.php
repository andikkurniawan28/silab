<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saccharomat extends Model
{
    use HasFactory;

    protected $fillable = [
        'sampling_id',
        'pol',
        'percent_brix',
        'percent_pol',
        'purity',
        'analyst',
        'leader',
        'is_corrected',
        'is_verified',
    ];

    public static function serve()
    {
        return self::leftjoin('samplings', 'saccharomats.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('saccharomats.*', 'samples.name as sample_name')
            ->limit(1000)
            ->orderBy('id','desc')->get();
    }

    public static function latestTetesPurity()
    {
        return self::leftjoin('samplings', 'saccharomats.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('saccharomats.purity', 'samples.name')
            ->where('samples.name', 'Tetes Puteran')
            ->limit(1)
            ->orderBy('saccharomats.created_at')
            ->get();
    }
}
