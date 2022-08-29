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
}
