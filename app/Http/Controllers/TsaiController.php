<?php

namespace App\Http\Controllers;

use App\Models\Tsai;
use App\Models\Station;
use Illuminate\Http\Request;

class TsaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $tsais = Tsai::join('samplings', 'tsais.sampling_id', 'samplings.id')
        ->join('samples', 'samplings.sample_id', 'samples.id')
        ->select('tsais.*', 'samples.name as sample_name')
        ->get();
        return view('tsai.index', compact('stations', 'tsais'));
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
        $check = Tsai::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Tsai::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tsai  $tsai
     * @return \Illuminate\Http\Response
     */
    public function show(Tsai $tsai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tsai  $tsai
     * @return \Illuminate\Http\Response
     */
    public function edit(Tsai $tsai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tsai  $tsai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Tsai::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'tsai' => $request->tsai,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tsai  $tsai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tsai::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
