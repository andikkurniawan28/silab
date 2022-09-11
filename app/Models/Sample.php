<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'station_id',
        'method_id',
    ];
    
    public static function serveTetesReport($range_date)
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
        return $data;
    }

    public static function serveKapurReport($range_date)
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
                ->whereBetween('calcia.created_at', [$range_date['min'], $range_date['max']])
                ->avg('calcium');
            $i++;
        }
        return $data;
    }
}
