<?php

namespace App\Http\Controllers;

use App\Models\Umum;
use App\Models\Station;
use Illuminate\Http\Request;

class UmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $umums = Umum::leftjoin('samplings', 'umums.sampling_id', 'samplings.id')
        ->join('samples', 'samplings.sample_id', 'samples.id')
        ->select('umums.*', 'samples.name as sample_name')
        ->get();
        return view('umum.index', compact('stations', 'umums'));
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
        $check = Umum::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Umum::create($request->all());
            return redirect()->back()->with('sukses', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function show(Umum $umum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function edit(Umum $umum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Umum::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'cao' => $request->cao,
            'pH' => $request->pH,
            'turbidity' => $request->turbidity,
        ]);
        return redirect()->back()->with('sukses', 'Sukses : Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Umum::where('id', $id)->delete();
        return redirect()->back()->with('sukses', 'Sukses : Data berhasil dihapus.');
    }
}
