<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawsugar_in extends Model
{
    use HasFactory;
    protected $connection = 'timbangan_rs';
    protected $fillable = [
        'tarra',
        'bruto',
        'netto',
    ];
}
