<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\Sample;
use App\Models\Sampling;

class Report extends Controller
{
    public function showDailyReport(Request $request)
    {
        $date = $request->date;
        $samplings = Sampling::join('samples', 'samplings.sample_id', 'samples.id')
            ->select('samplings.created_at', 'samples.name')
            ->get();

        return $samplings;
            
    }
}
