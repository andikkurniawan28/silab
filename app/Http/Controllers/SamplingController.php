<?php

namespace App\Http\Controllers;

use App\Models\Sampling;
use App\Models\Sample;
use App\Models\Station;
use App\Models\Method;
use Illuminate\Http\Request;

class SamplingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $samples = Sample::all();
        $stations = Station::all();
        $methods = Method::all();
        return view('sampling.index2', compact('samples', 'stations', 'methods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $stations = Station::all();
        $samplings = Sampling::join('samples', 'samplings.sample_id', 'samples.id')
            ->select('samplings.*', 'samples.name as sample_name')
            ->get();
        return view('sampling.index', compact('samplings', 'stations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sampling::create($request->all());
        $sample = Sample::where('id', $request->sample_id)->get();
        $get_data = Sampling::orderBy('id', 'desc')->limit(1)->get();
        foreach($get_data as $data)
        {
            $barcode = $data->id;
        }
        return view('sampling.barcode', compact('barcode', 'sample'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sampling  $sampling
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sampling  $sampling
     * @return \Illuminate\Http\Response
     */
    public function edit(Sampling $sampling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sampling  $sampling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Sampling::where('id', $id)->update([
            'sample_id' => $request->sample_id,
            'pan' => $request->pan,
            'reef' => $request->reef,
            'volume' => $request->volume,
            'description' => $request->description,
            'name' => $request->name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);
        return redirect()->route('samplings.index')->with('success', 'Data berhasil di-update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sampling  $sampling
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sampling::where('id', $id)->delete();
        return redirect()->route('samplings.index')->with('success', 'Data berhasil dihapus');
    }
    
    public function printBarcode($id)
    {
        $sample = Sampling::join('samples', 'samplings.sample_id', 'samples.id')
            ->select('samplings.*', 'samples.name as sample_name')
            ->where('samplings.id', $id)
            ->get();
        return view('sampling.barcode2', compact('sample'));
    }
}
