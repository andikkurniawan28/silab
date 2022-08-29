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
}
