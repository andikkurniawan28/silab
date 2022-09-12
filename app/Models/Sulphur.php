<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sulphur extends Model
{
    use HasFactory;

    protected $fillable = [
        'sampling_id',
        'so2',
    ];

    public static function serve()
    {
        return self::leftjoin('samplings', 'sulphurs.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('sulphurs.*', 'samples.name as sample_name')
            ->limit(1000)
            ->orderBy('id', 'desc')
            ->get();
    }
}
