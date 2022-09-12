<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moisture extends Model
{
    use HasFactory;

    protected $fillable = [
        'sampling_id',
        'moisture_content'
    ];

    public static function serve()
    {
        return self::leftjoin('samplings', 'moistures.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('moistures.*', 'samples.name as sample_name')
            ->limit(1000)
            ->orderBy('id', 'desc')
            ->get();
    }
}
