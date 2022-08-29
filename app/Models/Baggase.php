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
}
