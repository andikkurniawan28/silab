<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umum extends Model
{
    use HasFactory;

    protected $fillable = [
        'sampling_id',
        'cao', 
        'pH',
        'turbidity',
    ];

    public static function serve()
    {
        return self::leftjoin('samplings', 'umums.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('umums.*', 'samples.name as sample_name')
            ->limit(1000)
            ->orderBy('id', 'desc')
            ->get();
    }
}
