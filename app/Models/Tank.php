<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    use HasFactory;
    protected $fillable = [
        'volume_t1',
        'volume_t2',
        'volume_t3',
        'meters',
    ];
}
