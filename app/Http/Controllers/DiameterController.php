<?php

namespace App\Http\Controllers;

use App\Models\Diameter;
use App\Models\Station;
use Illuminate\Http\Request;

class DiameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $diameters = Diameter::serve();
        return view('diameter.index', compact('stations', 'diameters'));
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
        $check = Diameter::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Diameter::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diameter  $diameter
     * @return \Illuminate\Http\Response
     */
    public function show(Diameter $diameter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diameter  $diameter
     * @return \Illuminate\Http\Response
     */
    public function edit(Diameter $diameter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diameter  $diameter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Diameter::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'bjb' => $request->bjb,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diameter  $diameter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Diameter::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
