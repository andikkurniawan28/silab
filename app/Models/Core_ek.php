<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Core_ek extends Model
{
    use HasFactory;
    protected $connection = 'core_ek';
    protected $fillable = [
        'barcode_antrian',
        'rfid_ember',
        'register',
        'brix_nira',
        'pol_nira',
        'rendemen',
    ];
}
