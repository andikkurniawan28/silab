<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use App\Models\Station;
use App\Models\Method;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $methods = Method::all();
        $samples = Sample::join('stations', 'samples.station_id', 'stations.id')
            ->select('samples.*', 'stations.name as station_name')->get();
        return view('sample.index', compact('samples', 'stations', 'methods'));
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
        $check = Sample::where('name', $request->name)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan nama '.$request->name.' sudah terdaftar. Sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Sample::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Sampel berhasil disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function show(Sample $sample)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function edit(Sample $sample)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Sample::where('id', $id)->update([
            'name' => $request->name,
            'station_id' => $request->station_id,
            'method_id' => $request->method_id,
        ]);
        return redirect()->back()->with('success', 'Sukses : Sampel berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sample::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Sampel berhasil dihapus');
    }
}
