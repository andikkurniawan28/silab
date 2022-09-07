<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mollase extends Model
{
    use HasFactory;
    protected $connection = 'timbangan_tetes';
    protected $fillable = [
        'tarra',
        'bruto',
        'netto',
    ];
}
