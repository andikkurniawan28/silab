<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampling extends Model
{
    use HasFactory;
    protected $fillable = [
        'sample_id',
        'pan',
        'reef',
        'volume',
        'description',
        'name',
        'start_time',
        'end_time',
    ];
}
