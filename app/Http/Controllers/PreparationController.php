<?php

namespace App\Http\Controllers;

use App\Models\Preparation;
use App\Models\Station;
use Illuminate\Http\Request;

class PreparationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $preparations = Preparation::leftjoin('samplings', 'preparations.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('preparations.*', 'samples.name as sample_name')
            ->get();
        return view('preparation.index', compact('stations', 'preparations'));
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
        $check = Preparation::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Preparation::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preparation  $preparation
     * @return \Illuminate\Http\Response
     */
    public function show(Preparation $preparation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preparation  $preparation
     * @return \Illuminate\Http\Response
     */
    public function edit(Preparation $preparation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Preparation  $preparation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Preparation::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'pi' => $request->pi,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preparation  $preparation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Preparation::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
