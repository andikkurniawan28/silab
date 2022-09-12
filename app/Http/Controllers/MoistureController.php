<?php

namespace App\Http\Controllers;

use App\Models\Moisture;
use App\Models\Station;
use Illuminate\Http\Request;

class MoistureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moistures = Moisture::serve();
        $stations = Station::all();
        return view('moisture.index', compact('moistures', 'stations'));
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
        $check = Moisture::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Moisture::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moisture  $moisture
     * @return \Illuminate\Http\Response
     */
    public function show(Moisture $moisture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moisture  $moisture
     * @return \Illuminate\Http\Response
     */
    public function edit(Moisture $moisture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Moisture  $moisture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Moisture::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'moisture_content' => $request->moisture_content,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moisture  $moisture
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Moisture::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
    }
}
