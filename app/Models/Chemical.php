<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chemical extends Model
{
    use HasFactory;
    protected $fillable = [
        'kapur',
        'belerang',
        'floc',
        'naoh',
        'b894',
        'b895',
        'b210',
        'asam_phospat',
        'blotong',
    ];
}
