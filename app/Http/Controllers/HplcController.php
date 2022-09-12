<?php

namespace App\Http\Controllers;

use App\Models\Hplc;
use App\Models\Station;
use Illuminate\Http\Request;

class HplcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $hplcs = Hplc::serve();
        return view('hplc.index', compact('stations', 'hplcs'));
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
        $check = Hplc::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Hplc::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hplc  $hplc
     * @return \Illuminate\Http\Response
     */
    public function show(Hplc $hplc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hplc  $hplc
     * @return \Illuminate\Http\Response
     */
    public function edit(Hplc $hplc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hplc  $hplc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Hplc::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'fructose' => $request->fructose,
            'glucose' => $request->glucose,
            'succrose' => $request->succrose,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hplc  $hplc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hplc::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
