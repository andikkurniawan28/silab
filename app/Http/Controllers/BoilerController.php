<?php

namespace App\Http\Controllers;

use App\Models\Boiler;
use App\Models\Station;
use Illuminate\Http\Request;

class BoilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $boilers = Boiler::leftjoin('samplings', 'boilers.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('boilers.*', 'samples.name as sample_name')
            ->get();
        return view('boiler.index', compact('stations', 'boilers'));
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
        $check = Boiler::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Boiler::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boiler  $boiler
     * @return \Illuminate\Http\Response
     */
    public function show(Boiler $boiler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boiler  $boiler
     * @return \Illuminate\Http\Response
     */
    public function edit(Boiler $boiler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boiler  $boiler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Boiler::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'tds' => $request->tds,
            'pH' => $request->pH,
            'hardness' => $request->hardness,
            'phospate' => $request->phospate,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boiler  $boiler
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Boiler::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
