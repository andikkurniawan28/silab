<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Core_eb extends Model
{
    use HasFactory;
    protected $connection = 'core_eb';
    protected $fillable = [
        'barcode_antrian',
        'rfid_ember',
        'register',
        'brix_nira',
        'pol_nira',
        'rendemen',
    ];

    public static function findYield($brix, $pol)
    {
        return number_format(0.7 * ($pol - 0.5 * ($brix - $pol)),2);
    }

    public static function serveByRegister($register, $min, $max)
    {
        $data['core_eb'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', $register.'%')
                    ->orderBy('id', 'asc')->get();
        
        $data['core_eb_aggregate']['rit'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', $register.'%')
                    ->count('barcode_antrian');
        
        $data['core_eb_aggregate']['brix'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', $register.'%')
                    ->avg('brix_nira');
        
        $data['core_eb_aggregate']['pol'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', $register.'%')
                    ->avg('pol_nira');
        
        $data['core_eb_aggregate']['rendemen'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', $register.'%')
                    ->avg('rendemen');

        return $data;
    }

    public static function serveByPost($post, $min, $max)
    {
        $data['core_eb'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', '%'.$post.'%')
                    ->orderBy('id', 'asc')->get();

        $data['core_eb_aggregate']['rit'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', '%'.$post.'%')
                    ->count('barcode_antrian');

        $data['core_eb_aggregate']['brix'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', '%'.$post.'%')
                    ->avg('brix_nira');

        $data['core_eb_aggregate']['pol'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', '%'.$post.'%')
                    ->avg('pol_nira');

        $data['core_eb_aggregate']['rendemen'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', '%'.$post.'%')
                    ->avg('rendemen');
        
        return $data;
    }

    public static function serveByProgram($program, $min, $max)
    {
        $data['core_eb'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', '%%'.$program)
                    ->orderBy('id', 'asc')->get();

        $data['core_eb_aggregate']['rit'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', '%%'.$program)
                    ->count('barcode_antrian');

        $data['core_eb_aggregate']['brix'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', '%%'.$program)
                    ->count('brix_nira');

        $data['core_eb_aggregate']['pol'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', '%%'.$program)
                    ->count('pol_nira');

        $data['core_eb_aggregate']['rendemen'] = self::whereBetween('created_at', [$min, $max])
                    ->where('register', 'like', '%%'.$program)
                    ->count('rendemen');
                    
        return $data;
    }
}
