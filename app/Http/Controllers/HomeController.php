<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\Sample;
use App\Models\Sampling;
use App\Models\Coloromat;
use App\Models\Saccharomat;

class HomeController extends Controller
{
    public function index()
    {
        $stations = Station::all();
        return view('welcome', compact('stations'));
    }

    public function showStation($title, $id)
    {
        $stations = Station::all();
        $samples = Sample::where('station_id', $id)->get();
        
        foreach($samples as $sample)
        {
            $barcode[$sample->id] = Sampling::where('samplings.sample_id', $sample->id)
                ->join('samples', 'samplings.sample_id', 'samples.id')
                ->leftjoin('coloromats', 'samplings.id', 'coloromats.sampling_id')
                ->leftjoin('moistures', 'samplings.id', 'moistures.sampling_id')
                ->leftjoin('saccharomats', 'samplings.id', 'saccharomats.sampling_id')
                ->leftjoin('baggases', 'samplings.id', 'baggases.sampling_id')
                ->leftjoin('umums', 'samplings.id', 'umums.sampling_id')
                ->leftjoin('boilers', 'samplings.id', 'boilers.sampling_id')
                ->leftjoin('sulphurs', 'samplings.id', 'sulphurs.sampling_id')
                ->leftjoin('diameters', 'samplings.id', 'diameters.sampling_id')
                ->leftjoin('tsais', 'samplings.id', 'tsais.sampling_id')
                ->leftjoin('hplcs', 'samplings.id', 'hplcs.sampling_id')
                ->leftjoin('calcia', 'samplings.id', 'calcia.sampling_id')
                ->leftjoin('fibers', 'samplings.id', 'fibers.sampling_id')
                ->leftjoin('preparations', 'samplings.id', 'preparations.sampling_id')
                ->select(
                    'samplings.created_at', 
                    'samplings.id', 
                    'samples.name', 
                    'coloromats.icumsa', 
                    'moistures.moisture_content', 
                    'saccharomats.pol',
                    'saccharomats.percent_brix', 
                    'saccharomats.percent_pol', 
                    'saccharomats.purity',
                    'baggases.corrected_pol',
                    'baggases.dry',
                    'baggases.water',
                    'umums.cao',
                    'umums.pH as ph_umum',
                    'umums.turbidity',
                    'boilers.tds',
                    'boilers.pH as ph_ketel',
                    'boilers.hardness',
                    'boilers.phospate',
                    'sulphurs.so2',
                    'diameters.bjb',
                    'tsais.tsai',
                    'hplcs.fructose',
                    'hplcs.glucose',
                    'hplcs.succrose',
                    'calcia.calcium',
                    'fibers.fiber',
                    'preparations.pi',
                )
                ->limit(5)
                ->orderBy('id', 'desc')
                ->get();
        }
        return view('home.show_station', compact('stations' ,'title', 'samples', 'barcode'));
    }

    public function showMethod($id, $method_id, $sample_name)
    {
        $stations = Station::all();
        $samples = Sampling::where('samplings.sample_id', $id)
                ->join('samples', 'samplings.sample_id', 'samples.id')
                ->leftjoin('coloromats', 'samplings.id', 'coloromats.sampling_id')
                ->leftjoin('moistures', 'samplings.id', 'moistures.sampling_id')
                ->leftjoin('saccharomats', 'samplings.id', 'saccharomats.sampling_id')
                ->leftjoin('baggases', 'samplings.id', 'baggases.sampling_id')
                ->leftjoin('umums', 'samplings.id', 'umums.sampling_id')
                ->leftjoin('boilers', 'samplings.id', 'boilers.sampling_id')
                ->leftjoin('sulphurs', 'samplings.id', 'sulphurs.sampling_id')
                ->leftjoin('diameters', 'samplings.id', 'diameters.sampling_id')
                ->leftjoin('tsais', 'samplings.id', 'tsais.sampling_id')
                ->leftjoin('hplcs', 'samplings.id', 'hplcs.sampling_id')
                ->leftjoin('calcia', 'samplings.id', 'calcia.sampling_id')
                ->leftjoin('fibers', 'samplings.id', 'fibers.sampling_id')
                ->leftjoin('preparations', 'samplings.id', 'preparations.sampling_id')
                ->select(
                    'samplings.created_at', 
                    'samplings.id', 
                    'samples.name', 
                    'coloromats.icumsa', 
                    'moistures.moisture_content', 
                    'saccharomats.percent_brix', 
                    'saccharomats.percent_pol', 
                    'saccharomats.purity',
                    'baggases.dry',
                    'baggases.water',
                    'umums.cao',
                    'umums.pH as ph_umum',
                    'umums.turbidity',
                    'boilers.tds',
                    'boilers.pH as ph_ketel',
                    'boilers.hardness',
                    'boilers.phospate',
                    'sulphurs.so2',
                    'diameters.bjb',
                    'tsais.tsai',
                    'hplcs.fructose',
                    'hplcs.glucose',
                    'hplcs.succrose',
                    'calcia.calcium',
                    'fibers.fiber',
                    'preparations.pi',
                )
                ->limit(1000)
                ->orderBy('id', 'desc')
                ->get();

        return view('home.show_method', compact('stations', 'samples', 'method_id', 'sample_name'));
    }

    public function dailyReport()
    {
        $stations = Station::all();
        return view('report.daily', compact('stations'));
    }

    public function coaReport()
    {
        $stations = Station::all();
        return view('coa.index', compact('stations'));
    }
}
