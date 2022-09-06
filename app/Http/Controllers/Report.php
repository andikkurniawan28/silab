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

class Report extends Controller
{
    public function showDailyReport(Request $request)
    {
        // Get date value
        $date = $request->date;
        
        // Get Shift value
        $shift = $request->shift;

        // Switch shift, determine range_date
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

        // Get analysis result between range_date choosen
        $analysis_per_unit = Sampling::join('samples', 'samplings.sample_id', 'samples.id')
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
            ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
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
            ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
            ->get();

        // Get sample all
        $samples = Sample::all();
        foreach($samples as $sample)
        {
            // Each sample, store analysis data by it sample_id
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
                // ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->where('samplings.sample_id', $sample->id);
            
            foreach($analysis_result[$sample->id]->select(
                'samples.name as sample_name', 
                'stations.name as station_name',
            )->get() as $result){
                
            $data[$sample->id]['name'] = $result->sample_name;
            $data[$sample->id]['station'] = $result->station_name;
            $data[$sample->id]['volume'] = $result->volume;

            $data[$sample->id]['volume'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->sum('samplings.volume');
            
            $data[$sample->id]['percent_brix'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('saccharomats.percent_brix');

            $data[$sample->id]['percent_pol'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('saccharomats.percent_pol');

            $data[$sample->id]['purity'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('saccharomats.purity');

            $data[$sample->id]['pol'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('saccharomats.pol');

            $data[$sample->id]['icumsa'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('coloromats.icumsa');

            $data[$sample->id]['moisture_content'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('moistures.moisture_content');

            $data[$sample->id]['corrected_pol'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('baggases.corrected_pol');

            $data[$sample->id]['dry'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('baggases.dry');

            $data[$sample->id]['water'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('baggases.water');

            $data[$sample->id]['so2'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('sulphurs.so2');

            $data[$sample->id]['bjb'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('diameters.bjb');   

            $data[$sample->id]['fiber'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('fibers.fiber');

            $data[$sample->id]['pi'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('preparations.pi');

            $data[$sample->id]['calcium'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('calcia.calcium');

            $data[$sample->id]['cao'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('umums.cao');

            $data[$sample->id]['ph'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('umums.pH');

            $data[$sample->id]['turbidity'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('umums.turbidity');

            $data[$sample->id]['tsai'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('tsais.tsai');

            $data[$sample->id]['ph_ketel'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('boilers.pH');

            $data[$sample->id]['tds'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('boilers.tds');
                
            $data[$sample->id]['hardness'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('boilers.hardness');
                
            $data[$sample->id]['phospate'] = $analysis_result[$sample->id]
                ->whereBetween('samplings.created_at', [$range_date['min'], $range_date['max']])
                ->avg('boilers.phospate');
            }
        }

        $npp['percent_brix'] = Npp::whereBetween('npps.created_at', [$range_date['min'], $range_date['max']])->avg('percent_brix');
        $npp['percent_pol'] = Npp::whereBetween('npps.created_at', [$range_date['min'], $range_date['max']])->avg('percent_pol');
        $npp['purity'] = Npp::whereBetween('npps.created_at', [$range_date['min'], $range_date['max']])->avg('purity');
        $npp['yield'] = Npp::whereBetween('npps.created_at', [$range_date['min'], $range_date['max']])->avg('yield');

        for($i=1; $i<=2; $i++)
        {
            $keliling['tek_pe'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('tek_pe'.$i);
        }

        for($i=1; $i<=7; $i++)
        {
            $keliling['tek_evap'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('tek_evap'.$i);
        }

        for($i=1; $i<=14; $i++)
        {
            $keliling['tek_pan'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('tek_pan'.$i);
        }

        for($i=1; $i<=2; $i++)
        {
            $keliling['suhu_pe'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('suhu_pe'.$i);
        }

        for($i=1; $i<=7; $i++)
        {
            $keliling['suhu_evap'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('suhu_evap'.$i);
        }

        for($i=1; $i<=3; $i++)
        {
            $keliling['suhu_heater'.$i] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('suhu_heater'.$i);
        }
        $keliling['tek_vakum'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('tek_vakum');
        $keliling['suhu_air_injeksi'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('suhu_air_injeksi');
        $keliling['suhu_air_terjun'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('suhu_air_terjun');
        $keliling['uap_baru'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('uap_baru');
        $keliling['uap_bekas'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('uap_bekas');
        $keliling['uap_3ato'] = Around::whereBetween('arounds.created_at', [$range_date['min'], $range_date['max']])->avg('uap_3ato');

        $chemical['kapur'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('kapur');
        $chemical['belerang'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('belerang');
        $chemical['floc'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('floc');
        $chemical['naoh'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('naoh');
        $chemical['b894'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('b894');
        $chemical['b895'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('b895');
        $chemical['b210'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('b210');
        $chemical['asam_phospat'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('asam_phospat');
        $chemical['blotong'] = Chemical::whereBetween('chemicals.created_at', [$range_date['min'], $range_date['max']])->avg('blotong');
            
        return view('report.show_daily_report', compact('date', 'range_date', 'analysis_per_unit', 'data', 'npp', 'keliling', 'chemical', 'shift'));
        // return $analysis_result;
    }

    public function showCoaTetes(Request $request)
    {
        $date = $request->date;
        $range_date['min'] = $date.' 05:00:00';
        $range_date['max'] = date('Y-m-d H:i:s',strtotime('+1 days',strtotime($range_date['min'])));

        $samples = Sample::join('stations', 'samples.station_id', 'stations.id')
            ->where('stations.name', 'Tangki')
            ->select('samples.id', 'samples.name as sample_name')
            ->get();

        $i = 0;
        foreach($samples as $sample)
        {
            $data[$i]['brix'] = Saccharomat::join('samplings', 'saccharomats.sampling_id', 'samplings.id')
                ->leftjoin('samples', 'samplings.sample_id', 'samples.id')
                ->where('samplings.sample_id', $sample->id)
                ->whereBetween('saccharomats.created_at', [$range_date['min'], $range_date['max']])
                ->avg('percent_brix');

            $data[$i]['tsai'] = Tsai::join('samplings', 'tsais.sampling_id', 'samplings.id')
                ->leftjoin('samples', 'samplings.sample_id', 'samples.id')
                ->where('samplings.sample_id', $sample->id)
                ->whereBetween('tsais.created_at', [$range_date['min'], $range_date['max']])
                ->avg('tsai');

            $data[$i]['name'] = $sample->sample_name;
            $i++;
        }

        return view('coa.show_report', compact('date', 'data'));
    }

    public function showCoaKapur(Request $request)
    {
        $date = $request->date;
        $range_date['min'] = $date.' 05:00:00';
        $range_date['max'] = date('Y-m-d H:i:s',strtotime('+1 days',strtotime($range_date['min'])));

        $samples = Sample::where('name','LIKE','Kapur'.'%')
            ->select('id', 'name')
            ->get();

        $i = 0;
        foreach($samples as $sample)
        {
            $data[$i]['name'] = $sample->name;
            $data[$i]['calcium'] = Calcium::join('samplings', 'calcia.sampling_id', 'samplings.id')
                ->leftjoin('samples', 'samplings.sample_id', 'samples.id')
                ->where('samplings.sample_id', $sample->id)
                ->whereBetween('calcia.created_at', [$range_date['min'], $range_date['max']])
                ->avg('calcium');
            $i++;
        }

        return view('coa.show_report2', compact('date', 'data'));
    }
}
