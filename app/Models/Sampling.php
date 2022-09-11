<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampling extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'sample_id',
        'pan',
        'reef',
        'volume',
        'description',
        'name',
        'start_time',
        'end_time',
    ];

    public static function serveReport($range_date)
    {
        return $data = self::join('samples', 'samplings.sample_id', 'samples.id')
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
        ->whereBetween('samplings.created_at', [[$range_date['min'], $range_date['max']]])
        ->get();
    }

    public static function serveReportDistributed($range_date)
    {
        $samples = Sample::all();
        foreach($samples as $sample)
        {
            $analysis_result[$sample->id] = self::leftjoin('samples', 'samplings.sample_id', 'samples.id')
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
        return $data;
    }

    public static function serveByMethod($id)
    {
        return self::where('samplings.sample_id', $id)
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
    }

    public static function serveByStation($id)
    {
        return $data = self::where('samplings.sample_id', $id)
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
}
