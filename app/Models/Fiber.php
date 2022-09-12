<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiber extends Model
{
    use HasFactory;

    protected $fillable = [
        'sampling_id',
        'fiber',
    ];

    public static function serve()
    {
        return self::leftjoin('samplings', 'fibers.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('fibers.*', 'samples.name as sample_name')
            ->limit(1000)
            ->orderBy('id', 'desc')
            ->get();
    }
}
