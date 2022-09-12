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
    ];

    public static function serve()
    {
        return self::leftjoin('samplings', 'saccharomats.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('saccharomats.*', 'samples.name as sample_name')
            ->limit(1000)
            ->orderBy('id','desc')->get();
    }
}
