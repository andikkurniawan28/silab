<?php

namespace App\Http\Controllers;

use App\Models\Calcium;
use App\Models\Station;
use Illuminate\Http\Request;

class CalciumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $calciums = Calcium::leftjoin('samplings', 'calcia.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('calcia.*', 'samples.name as sample_name')
            ->get();
        return view('calcium.index', compact('stations', 'calciums'));
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
        $check = Calcium::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Calcium::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calcium  $calcium
     * @return \Illuminate\Http\Response
     */
    public function show(Calcium $calcium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calcium  $calcium
     * @return \Illuminate\Http\Response
     */
    public function edit(Calcium $calcium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calcium  $calcium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        Calcium::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'calcium' => $request->calcium,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calcium  $calcium
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Calcium::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
