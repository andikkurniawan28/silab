<?php

namespace App\Http\Controllers;

use App\Models\Baggase;
use App\Models\Station;
use App\Models\Saccharomat;
use App\Models\Sampling;
use Illuminate\Http\Request;

class BaggaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $baggases = Baggase::serve();
        return view('baggase.index', compact('stations', 'baggases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = Baggase::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 
                'Error : Sampel dengan barcode '.$request->sampling_id.' 
                sudah terdaftar, sistem tidak mengizinkan duplikasi.'
            );
        }
        else
        {
            $determine_station = Sampling::leftjoin('samples', 'samplings.sample_id', 'samples.id')
                    ->join('stations', 'samples.station_id', 'stations.id')
                    ->where('samplings.id', $request->sampling_id)
                    ->select('samplings.id', 'samples.name as sample_name', 'stations.id as station_id')
                    ->get();

            foreach($determine_station as $data)
            {
                $station_selected = $data->station_id;
            }

            $find_pol_from_saccharomat = Saccharomat::where('sampling_id', $request->sampling_id)->select('pol');

            if($find_pol_from_saccharomat->count() > 0)
            {
                foreach($find_pol_from_saccharomat->get() as $data)
                {
                    $pol_from_saccharomat = $data->pol;
                }
                
                if($station_selected == 2)
                {
                    $kadar_air = 100 - $request->dry;
                    $dry = $request->dry;
                    $corrected_pol = number_format((($pol_from_saccharomat/2) * 0.0286 * ((10000+$kadar_air)/100)*2.5),2);
                }
                else
                {
                    $kadar_air = ((10-$request->dry)/10) * 100;
                    $dry = ($request->dry*10);
                    $corrected_pol = $pol_from_saccharomat;
                }

                $request->request->add([
                    'corrected_pol' => $corrected_pol,
                    'dry' => $dry,
                    'water' => $kadar_air,
                ]);
                
                Baggase::create($request->all());
                return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan');
            }
            else
            {
                return redirect()->back()->with('error', 
                    'Error : Sampel dengan barcode '.$request->sampling_id.' 
                    belum di analisa di Saccharomat. Lakukan analisa di Saccharomat terlebih dahulu.'
                );
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Baggase  $baggase
     * @return \Illuminate\Http\Response
     */
    public function show(Baggase $baggase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Baggase  $baggase
     * @return \Illuminate\Http\Response
     */
    public function edit(Baggase $baggase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Baggase  $baggase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Baggase::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'corrected_pol' => $request->corrected_pol,
            'dry' => $request->dry,
            'water' => $request->water,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Baggase  $baggase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Baggase::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus');
    }
}
