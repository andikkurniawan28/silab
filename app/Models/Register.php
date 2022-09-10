<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Core_ek;

class Register extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'region',
    ];

    public static function rangkingByRegister($min, $max)
    {
        $i = 1;
        $registers = Register::all();
        foreach($registers as $register)
        {
            $data['core_ek'][$i]['region'] = $register->region;
            $data['core_ek'][$i]['rit'] = Core_ek::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', $register->code.'%')
                ->count('barcode_antrian');

            $data['core_ek'][$i]['brix'] = Core_ek::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', $register->code.'%')
                ->avg('brix_nira');

            $data['core_ek'][$i]['pol'] = Core_ek::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', $register->code.'%')
                ->avg('pol_nira');

            $data['core_ek'][$i]['rendemen'] = Core_ek::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', $register->code.'%')
                ->avg('rendemen'); 

            $data['core_eb'][$i]['region'] = $register->region;
            $data['core_eb'][$i]['rit'] = Core_eb::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', $register->code.'%')
                ->count('barcode_antrian');

            $data['core_eb'][$i]['brix'] = Core_eb::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', $register->code.'%')
                ->avg('brix_nira');

            $data['core_eb'][$i]['pol'] = Core_eb::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', $register->code.'%')
                ->avg('pol_nira');

            $data['core_eb'][$i]['rendemen'] = Core_eb::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', $register->code.'%')
                ->avg('rendemen');

            $i++;
        }
        return $data;
    }
}
