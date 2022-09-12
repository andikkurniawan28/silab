<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tsai extends Model
{
    use HasFactory;

    protected $fillable = [
        'sampling_id',
        'tsai',
    ];

    public static function serve()
    {
        return self::join('samplings', 'tsais.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('tsais.*', 'samples.name as sample_name')
            ->limit(1000)
            ->orderBy('id', 'desc')
            ->get();
    }
}
