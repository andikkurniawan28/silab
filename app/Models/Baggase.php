<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baggase extends Model
{
    use HasFactory;

    protected $fillable = [
        'sampling_id',
        'corrected_pol',
        'dry',
        'water',
    ];

    public static function serve()
    {
        return self::leftjoin('samplings', 'baggases.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('baggases.*', 'samples.name as sample_name')
            ->limit(1000)
            ->orderBy('id', 'desc')
            ->get();
    }
}
