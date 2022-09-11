<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imbibition extends Model
{
    use HasFactory;
    protected $fillable = [
        'totalizer',
        'flow',
    ];

    public static function serveForReport($date)
    {
        $today = $date." 5:00";
        $yesterday = date('Y-m-d 5:00',strtotime('-1 days',strtotime($today)));
        return $data = self::whereBetween('created_at', [$yesterday, $today])->sum('flow');
    }
}
