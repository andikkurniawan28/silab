<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Npp extends Model
{
    use HasFactory;
    protected $fillable = [
        'pol',
        'percent_brix',
        'percent_pol',
        'purity',
        'yield',
    ];
}
