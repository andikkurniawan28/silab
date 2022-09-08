<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawsugar_out extends Model
{
    use HasFactory;
    protected $connection = 'timbangan_rs';
    protected $fillable = [
        'tarra',
        'bruto',
        'netto',
    ];

    public static function serveForPublish()
    {
        $now = date('Y-m-d H:i');
        $today = date('Y-m-d 5:00');
        $yesterday = date('Y-m-d 5:00',strtotime('-1 days',strtotime($today)));

        for($i=0; $i<24; $i++)
        {
            $min = date('Y-m-d '.$i.':i');
            $max = date('Y-m-d H:i',strtotime('+1 hours',strtotime($min)));
            $data['sum_hourly'][$i] = self::whereBetween('created_at', [$min, $max])->sum('netto');
        }

        $data['sum_yesterday'] = self::whereBetween('created_at', [$yesterday, $today])->sum('netto');
        $data['sum_today'] = self::whereBetween('created_at', [$today, $now])->sum('netto');
        $data['sum_until_yesterday'] = self::where('created_at', '<=', $yesterday)->sum('netto');
        $data['sum_until_today'] = self::where('created_at', '<=', $today)->sum('netto');
        $data['sum_until_now'] = self::sum('netto');

        return $data;
    }
}
