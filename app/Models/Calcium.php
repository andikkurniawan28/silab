<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calcium extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'sampling_id',
        'calcium',
    ];
    
    public static function serve()
    {
        return self::leftjoin('samplings', 'calcia.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('calcia.*', 'samples.name as sample_name')
            ->limit(1000)
            ->orderBy('id', 'desc')
            ->get();
    }
}
