<?php

namespace App\Http\Controllers;

use App\Models\Around;
use App\Models\Balance;
use App\Models\Chemical;
use Illuminate\Http\Request;
use App\Models\Sample;
use App\Models\Sampling;
use App\Models\Npp;
use App\Models\Mollase;
use App\Models\Core_ek;
use App\Models\Core_eb;
use App\Models\Imbibition;
use App\Models\Register;
use App\Models\Post;
use App\Models\Program;
use App\Models\Rawsugar_in;
use App\Models\Rawsugar_out;

class Report extends Controller
{
    public function showDailyReport(Request $request)
    {
        $date = $request->date;
        $shift = $request->shift;
        $handling = $request->handling;
        $range_date = $this->determineRange($date, $shift);
        $analysis_per_unit = Sampling::serveReport($range_date);
        $data = Sampling::serveReportDistributed($range_date);
        $npp = Npp::serveReport($range_date);
        $keliling = Around::serveReport($range_date);
        $chemical = Chemical::serveReport($range_date);
        $raw_juice = Balance::serveForReport($date);
        $imb = Imbibition::serveForReport($date);
        $mollase = Mollase::serveForReport($date);
        $rs_in = Rawsugar_in::serveForReport($date);
        $rs_out = Rawsugar_out::serveForReport($date);
        return view('report.show_daily_report', compact(
            'date', 
            'range_date', 
            'analysis_per_unit', 
            'data', 
            'npp', 
            'keliling', 
            'chemical', 
            'raw_juice', 
            'imb', 
            'mollase', 
            'rs_in', 
            'rs_out', 
            'shift',
            'handling',
        ));
    }

    public function showDailyReportCoreSample(Request $request)
    {
        $date = $request->date;
        $shift = $request->shift;
        $handling = $request->handling;
        $range_date = $this->determineRange2($date, $shift);
        $data = $this->serveCoreSample($range_date['min'], $range_date['max']);
        return view('report.show_daily_report_core_sample', compact(
            'date',
            'shift',
            'range_date',
            'data',
            'handling',
        ));
    }

    public function showCoaTetes(Request $request)
    {
        $date = $request->date;
        $range_date['min'] = $date.' 05:00:00';
        $range_date['max'] = $this->plusTimeStampWithSomeDay($range_date['min'], 1);
        $data = Sample::serveTetesReport($range_date);
        return view('coa.show_report', compact(
            'date', 
            'data',
        ));
    }

    public function showCoaKapur(Request $request)
    {
        $date = $request->date;
        $range_date['min'] = $date.' 05:00:00';
        $range_date['max'] = $this->plusTimeStampWithSomeDay($range_date['min'], 1);
        $data = Sample::serveKapurReport($range_date);
        return view('coa.show_report2', compact(
            'date', 
            'data',
        ));
    }

    public function plusTimeStampWithSomeDay($date, $day)
    {
        $data = date('Y-m-d H:i:s',strtotime('+'.$day.' days',strtotime($date)));
        return $data;
    }

    public function determineRange($date, $shift)
    {
        switch($shift)
        {
            case 0 : 
                $range_date['min'] = $date.' 05:00:00'; 
                $range_date['max'] = date('Y-m-d H:i:s',strtotime('+1 days',strtotime($range_date['min'])));
            break;

            case 1 : 
                $range_date['min'] = $date.' 05:00:00'; 
                $range_date['max'] = date('Y-m-d H:i:s',strtotime('+8 hours',strtotime($range_date['min'])));
            break;
            
            case 2 : 
                $range_date['min'] = $date.' 13:00:00'; 
                $range_date['max'] = date('Y-m-d H:i:s',strtotime('+8 hours',strtotime($range_date['min'])));
            break;
            
            case 3 : 
                $range_date['min'] = $date.' 21:00:00'; 
                $range_date['max'] = date('Y-m-d H:i:s',strtotime('+8 hours',strtotime($range_date['min'])));
            break;
        }
        return $range_date;
    }

    public function determineRange2($date, $shift)
    {
        switch($shift)
        {
            case 0 : 
                $range_date['min'] = $date.' 06:00:00'; 
                $range_date['max'] = date('Y-m-d H:i:s',strtotime('+1 days',strtotime($range_date['min'])));
            break;

            case 1 : 
                $range_date['min'] = $date.' 06:00:00'; 
                $range_date['max'] = date('Y-m-d H:i:s',strtotime('+8 hours',strtotime($range_date['min'])));
            break;
            
            case 2 : 
                $range_date['min'] = $date.' 14:00:00'; 
                $range_date['max'] = date('Y-m-d H:i:s',strtotime('+8 hours',strtotime($range_date['min'])));
            break;
            
            case 3 : 
                $range_date['min'] = $date.' 22:00:00'; 
                $range_date['max'] = date('Y-m-d H:i:s',strtotime('+8 hours',strtotime($range_date['min'])));
            break;
        }
        return $range_date;
    }

    public function serveCoreSample($min, $max)
    {
        $data['core_ek'] = Core_ek::whereBetween('created_at', [$min, $max])->orderBy('register', 'asc')->get();
        $data['core_ek_aggregate']['rit'] = Core_ek::whereBetween('created_at', [$min, $max])->count('barcode_antrian');
        $data['core_ek_aggregate']['brix'] = Core_ek::whereBetween('created_at', [$min, $max])->avg('brix_nira');
        $data['core_ek_aggregate']['pol'] = Core_ek::whereBetween('created_at', [$min, $max])->avg('pol_nira');
        $data['core_ek_aggregate']['rendemen'] = Core_ek::whereBetween('created_at', [$min, $max])->avg('rendemen');

        $data['core_eb'] = Core_eb::whereBetween('created_at', [$min, $max])->orderBy('register', 'asc')->get();
        $data['core_eb_aggregate']['rit'] = Core_eb::whereBetween('created_at', [$min, $max])->count('barcode_antrian');
        $data['core_eb_aggregate']['brix'] = Core_eb::whereBetween('created_at', [$min, $max])->avg('brix_nira');
        $data['core_eb_aggregate']['pol'] = Core_eb::whereBetween('created_at', [$min, $max])->avg('pol_nira');
        $data['core_eb_aggregate']['rendemen'] = Core_eb::whereBetween('created_at', [$min, $max])->avg('rendemen');

        return $data;
    }

    public function showCoreByRegister(Request $request)
    {
        $register = $request->register;
        $date = $request->date;
        $handling = $request->handling;

        $range_date['min'] = $date.' 06:00:00';
        $range_date['max'] = $this->plusTimeStampWithSomeDay($range_date['min'], 1);
        
        foreach(Register::where('code', $register)->select('region')->latest()->get() as $region)
        {
            $data['region'] = $region->region;
        }
        $data['core_ek'] = Core_ek::serveByRegister($register, $range_date['min'], $range_date['max']);
        $data['core_eb'] = Core_eb::serveByRegister($register, $range_date['min'], $range_date['max']);

        return view('report.core_sample_by_register', compact('date', 'data', 'handling'));
    }

    public function showCoreByPost(Request $request)
    {
        $post = $request->post;
        $date = $request->date;
        $handling = $request->handling;

        $range_date['min'] = $date.' 06:00:00';
        $range_date['max'] = $this->plusTimeStampWithSomeDay($range_date['min'], 1);
        
        foreach(Post::where('code', $post)->select('region')->latest()->get() as $region)
        {
            $data['region'] = $region->region;
        }

        $data['core_ek'] = Core_ek::serveByPost($post, $range_date['min'], $range_date['max']);
        $data['core_eb'] = Core_eb::serveByPost($post, $range_date['min'], $range_date['max']);

        return view('report.core_sample_by_post', compact('date', 'data', 'handling'));
    }

    public function showCoreByProgram(Request $request)
    {
        $program = $request->program;
        $date = $request->date;
        $handling = $request->handling;

        $range_date['min'] = $date.' 06:00:00';
        $range_date['max'] = $this->plusTimeStampWithSomeDay($range_date['min'], 1);
        
        foreach(Program::where('code', $program)->select('name')->latest()->get() as $name)
        {
            $data['name'] = $name->name;
        }

        $data['core_ek'] = Core_ek::serveByProgram($program, $range_date['min'], $range_date['max']);
        $data['core_eb'] = Core_eb::serveByProgram($program, $range_date['min'], $range_date['max']);

        return view('report.core_sample_by_program', compact('date', 'data', 'handling'));
    }

    public function rangkingByRegister(Request $request)
    {
        $date = $request->date;
        $handling = $request->handling;
        $range_date['min'] = $date.' 06:00:00';
        $range_date['max'] = $this->plusTimeStampWithSomeDay($range_date['min'], 1);
        $data = Register::rangkingByRegister($range_date['min'], $range_date['max']);
        return view('report.rangkingRegister', compact(
            'date',
            'data',
            'handling',
        ));
    }

    public function rangkingByPost(Request $request)
    {
        $date = $request->date;
        $handling = $request->handling;
        $range_date['min'] = $date.' 06:00:00';
        $range_date['max'] = $this->plusTimeStampWithSomeDay($range_date['min'], 1);
        $data = Post::rangkingByPost($range_date['min'], $range_date['max']);
        return view('report.rangkingPost', compact(
            'date',
            'data',
            'handling',
        ));
    }

}
