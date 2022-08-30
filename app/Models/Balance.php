<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;
    protected $fillable = [
        'sugar_cane',
        'totalizer_raw_juice',
        'flow_raw_juice',
        'raw_juice_percent_sugar_cane',
    ];
}
