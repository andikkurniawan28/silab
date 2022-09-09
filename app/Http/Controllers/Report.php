<?php

namespace App\Http\Controllers;

use App\Models\Around;
use App\Models\Calcium;
use App\Models\Chemical;
use Illuminate\Http\Request;
use App\Models\Saccharomat;
use App\Models\Station;
use App\Models\Sample;
use App\Models\Sampling;
use App\Models\Npp;
use App\Models\Tsai;
use App\Models\Core_ek;
use App\Models\Core_eb;

class Report extends Controller
{
    public function showDailyReport(Request $request)
    {
        $date = $request->date;
        $shift = $request->shift;
        $range_date = $this->determineRange($date, $shift);
        $analysis_per_unit = $this->serveAll($range_date['min'], $range_date['max']);
        $data = $this->serveSampled($range_date['min'], $range_date['max']);
        $npp = $this->serveNpp($range_date['min'], $range_date['max']);
        $keliling = $this->serveAround($range_date['min'], $range_date['max']);
        $chemical = $this->serveChemical($range_date['min'], $range_date['max']);
        return view('report.show_daily_report', compact(
            'date', 
            'range_date', 
            'analysis_per_unit', 
            'data', 
            'npp', 
            'keliling', 
            'chemical', 
            'shift',
        ));
    }

    public function showDailyReportCoreSample(Request $request)
    {
        $date = $request->date;
        $shift = $request->shift;
        $range_date = $this->determineRange2($date, $shift);
        $data = $this->serveCoreSample($range_date['min'], $range_date['max']);
        return view('report.show_daily_report_core_sample', compact(
            'date',
            'shift',
            'range_date',
            'data',
        ));

        // return $data;

    }

    public function showCoaTetes(Request $request)
    {
        $date = $request->date;
        $range_date['min'] = $date.' 05:00:00';
        $range_date['max'] = $this->plusTimeStampWithSomeDay($range_date['min'], 1);
        $data = $this->serveTetes($range_date['min'], $range_date['max']);
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
        $data = $this->serveKapur($range_date['min'], $range_date['max']);
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

    public function serveAll($min, $max)
    {
        return $data = Sampling::join('samples', 'samplings.sample_id', 'samples.id')
            ->leftjoin('saccharomats', 'samplings.id', 'saccharomats.sampling_id')
            ->leftjoin('coloromats', 'samplings.id', 'coloromats.sampling_id')
            ->leftjoin('moistures', 'samplings.id', 'moistures.sampling_id')
            ->leftjoin('baggases', 'samplings.id', 'baggases.sampling_id')
            ->leftjoin('umums', 'samplings.id', 'umums.sampling_id')
            ->leftjoin('boilers', 'samplings.id', 'boilers.sampling_id')
            ->leftjoin('sulphurs', 'samplings.id', 'sulphurs.sampling_id')
            ->leftjoin('diameters', 'samplings.id', 'diameters.sampling_id')
            ->leftjoin('tsais', 'samplings.id', 'tsais.sampling_id')
            ->leftjoin('preparations', 'samplings.id', 'preparations.sampling_id')
            ->leftjoin('fibers', 'samplings.id', 'fibers.sampling_id')
            ->leftjoin('calcia', 'samplings.id', 'calcia.sampling_id')
            ->whereBetween('samplings.created_at', [$min, $max])
            ->orderBy('samples.id', 'asc')
            ->select(
                'samplings.created_at', 
                'samplings.id', 
                'samples.name',
                'saccharomats.percent_brix',
                'saccharomats.percent_pol',
                'saccharomats.pol',
                'saccharomats.purity',
                'coloromats.icumsa',
                'moistures.moisture_content',
                'baggases.water',
                'baggases.dry',
                'baggases.corrected_pol',
                'umums.cao',
                'umums.pH as ph_umum',
                'umums.turbidity',
                'boilers.tds',
                'boilers.pH as ph_boiler',
                'boilers.hardness',
                'boilers.phospate',
                'sulphurs.so2',
                'diameters.bjb',
                'tsais.tsai',
                'preparations.pi',
                'fibers.fiber',
                'calcia.calcium',
            )
        ->whereBetween('samplings.created_at', [[$min, $max]])
        ->get();
    }

    public function serveSampled($min, $max)
    {
        $samples = Sample::all();
        foreach($samples as $sample)
        {
            $analysis_result[$sample->id] = Sampling::leftjoin('samples', 'samplings.sample_id', 'samples.id')
                ->leftjoin('stations', 'samples.station_id', 'stations.id')
                ->leftjoin('saccharomats', 'samplings.id', 'saccharomats.sampling_id')
                ->leftjoin('coloromats', 'samplings.id', 'coloromats.sampling_id')
                ->leftjoin('moistures', 'samplings.id', 'moistures.sampling_id')
                ->leftjoin('baggases', 'samplings.id', 'baggases.sampling_id')
                ->leftjoin('umums', 'samplings.id', 'umums.sampling_id')
                ->leftjoin('boilers', 'samplings.id', 'boilers.sampling_id')
                ->leftjoin('sulphurs', 'samplings.id', 'sulphurs.sampling_id')
                ->leftjoin('diameters', 'samplings.id', 'diameters.sampling_id')
                ->leftjoin('tsais', 'samplings.id', 'tsais.sampling_id')
                ->leftjoin('preparations', 'samplings.id', 'preparations.sampling_id')
                ->leftjoin('fibers', 'samplings.id', 'fibers.sampling_id')
                ->leftjoin('calcia', 'samplings.id', 'calcia.sampling_id')
                ->where('samplings.sample_id', $sample->id);
            
            foreach($analysis_result[$sample->id]->select(
                'samples.name as sample_name', 
                'stations.name as station_name',
            )
            ->get() as $result){
                
            $data[$sample->id]['name'] = $result->sample_name;
            $data[$sample->id]['station'] = $result->station_name;
            $data[$sample->id]['volume'] = $result->volume;

            $data[$sample->id]['volume'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->sum('samplings.volume');
            
            $data[$sample->id]['percent_brix'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('saccharomats.percent_brix');

            $data[$sample->id]['percent_pol'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('saccharomats.percent_pol');

            $data[$sample->id]['purity'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('saccharomats.purity');

            $data[$sample->id]['pol'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('saccharomats.pol');

            $data[$sample->id]['icumsa'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('coloromats.icumsa');

            $data[$sample->id]['moisture_content'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('moistures.moisture_content');

            $data[$sample->id]['corrected_pol'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('baggases.corrected_pol');

            $data[$sample->id]['dry'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('baggases.dry');

            $data[$sample->id]['water'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('baggases.water');

            $data[$sample->id]['so2'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('sulphurs.so2');

            $data[$sample->id]['bjb'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('diameters.bjb');   

            $data[$sample->id]['fiber'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('fibers.fiber');

            $data[$sample->id]['pi'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('preparations.pi');

            $data[$sample->id]['calcium'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('calcia.calcium');

            $data[$sample->id]['cao'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('umums.cao');

            $data[$sample->id]['ph'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('umums.pH');

            $data[$sample->id]['turbidity'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('umums.turbidity');

            $data[$sample->id]['tsai'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('tsais.tsai');

            $data[$sample->id]['ph_ketel'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('boilers.pH');

            $data[$sample->id]['tds'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('boilers.tds');
                
            $data[$sample->id]['hardness'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('boilers.hardness');
                
            $data[$sample->id]['phospate'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$min, $max])
                ->avg('boilers.phospate');
            }
        }
        return $data;
    }

    public function serveNpp($min, $max)
    {
        $data['percent_brix'] = Npp::whereBetween('npps.created_at', [$min, $max])->avg('percent_brix');
        $data['percent_pol'] = Npp::whereBetween('npps.created_at', [$min, $max])->avg('percent_pol');
        $data['purity'] = Npp::whereBetween('npps.created_at', [$min, $max])->avg('purity');
        $data['yield'] = Npp::whereBetween('npps.created_at', [$min, $max])->avg('yield');
        return $data;
    }

    public function serveAround($min, $max)
    {
        for($i=1; $i<=2; $i++)
        {
            $data['tek_pe'.$i] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('tek_pe'.$i);
        }

        for($i=1; $i<=7; $i++)
        {
            $data['tek_evap'.$i] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('tek_evap'.$i);
        }

        for($i=1; $i<=14; $i++)
        {
            $data['tek_pan'.$i] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('tek_pan'.$i);
        }

        for($i=1; $i<=2; $i++)
        {
            $data['suhu_pe'.$i] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('suhu_pe'.$i);
        }

        for($i=1; $i<=7; $i++)
        {
            $data['suhu_evap'.$i] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('suhu_evap'.$i);
        }

        for($i=1; $i<=3; $i++)
        {
            $data['suhu_heater'.$i] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('suhu_heater'.$i);
        }

        $data['tek_vakum'] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('tek_vakum');
        $data['suhu_air_injeksi'] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('suhu_air_injeksi');
        $data['suhu_air_terjun'] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('suhu_air_terjun');
        $data['uap_baru'] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('uap_baru');
        $data['uap_bekas'] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('uap_bekas');
        $data['uap_3ato'] = Around::whereBetween('arounds.created_at', [$min, $max])->avg('uap_3ato');

        return $data;
    }

    public function serveChemical($min, $max)
    {
        $data['kapur'] = Chemical::whereBetween('chemicals.created_at', [$min, $max])->avg('kapur');
        $data['belerang'] = Chemical::whereBetween('chemicals.created_at', [$min, $max])->avg('belerang');
        $data['floc'] = Chemical::whereBetween('chemicals.created_at', [$min, $max])->avg('floc');
        $data['naoh'] = Chemical::whereBetween('chemicals.created_at', [$min, $max])->avg('naoh');
        $data['b894'] = Chemical::whereBetween('chemicals.created_at', [$min, $max])->avg('b894');
        $data['b895'] = Chemical::whereBetween('chemicals.created_at', [$min, $max])->avg('b895');
        $data['b210'] = Chemical::whereBetween('chemicals.created_at', [$min, $max])->avg('b210');
        $data['asam_phospat'] = Chemical::whereBetween('chemicals.created_at', [$min, $max])->avg('asam_phospat');
        $data['blotong'] = Chemical::whereBetween('chemicals.created_at', [$min, $max])->avg('blotong');
        return $data;
    }

    public function serveTetes($min, $max)
    {
        $i = 0;

        $samples = Sample::join('stations', 'samples.station_id', 'stations.id')
            ->where('stations.name', 'Tangki')
            ->select('samples.id', 'samples.name as sample_name')
            ->get();

        foreach($samples as $sample)
        {
            $data[$i]['brix'] = Saccharomat::join('samplings', 'saccharomats.sampling_id', 'samplings.id')
                ->leftjoin('samples', 'samplings.sample_id', 'samples.id')
                ->where('samplings.sample_id', $sample->id)
                ->whereBetween('saccharomats.created_at', [$min, $max])
                ->avg('percent_brix');

            $data[$i]['tsai'] = Tsai::join('samplings', 'tsais.sampling_id', 'samplings.id')
                ->leftjoin('samples', 'samplings.sample_id', 'samples.id')
                ->where('samplings.sample_id', $sample->id)
                ->whereBetween('tsais.created_at', [$min, $max])
                ->avg('tsai');

            $data[$i]['name'] = $sample->sample_name;
            $i++;
        }
        return $data;
    }

    public function serveKapur($min, $max)
    {
        $i = 0;

        $samples = Sample::where('name','LIKE','Kapur'.'%')
            ->select('id', 'name')
            ->get();

        foreach($samples as $sample)
        {
            $data[$i]['name'] = $sample->name;
            $data[$i]['calcium'] = Calcium::join('samplings', 'calcia.sampling_id', 'samplings.id')
                ->leftjoin('samples', 'samplings.sample_id', 'samples.id')
                ->where('samplings.sample_id', $sample->id)
                ->whereBetween('calcia.created_at', [$min, $max])
                ->avg('calcium');
            $i++;
        }
        return $data;
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
}
