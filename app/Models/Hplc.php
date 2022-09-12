<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hplc extends Model
{
    use HasFactory;

    protected $fillable = [
        'sampling_id',
        'fructose',
        'glucose',
        'succrose',
    ];

    public static function serve()
    {
        return self::join('samplings', 'hplcs.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('hplcs.*', 'samples.name as sample_name')
            ->limit(1000)
            ->orderBy('id', 'desc')
            ->get();
    }
}
