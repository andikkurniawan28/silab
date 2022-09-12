<?php

namespace App\Http\Controllers;

use App\Models\Sulphur;
use App\Models\Station;
use Illuminate\Http\Request;

class SulphurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $sulphurs = Sulphur::serve();
        return view('sulphur.index', compact('stations', 'sulphurs'));
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
        $check = Sulphur::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Sulphur::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sulphur  $Sulphur
     * @return \Illuminate\Http\Response
     */
    public function show(Sulphur $sulphur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sulphur  $Sulphur
     * @return \Illuminate\Http\Response
     */
    public function edit(Sulphur $sulphur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sulphur  $Sulphur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Sulphur::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'so2' => $request->so2,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sulphur  $Sulphur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sulphur::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
