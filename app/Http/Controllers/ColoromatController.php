<?php

namespace App\Http\Controllers;

use App\Models\Coloromat;
use App\Models\Station;
use Illuminate\Http\Request;

class ColoromatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coloromats = Coloromat::serve();
        $stations = Station::all();
        return view('coloromat.index', compact('coloromats', 'stations'));
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
        $check = Coloromat::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Coloromat::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coloromat  $coloromat
     * @return \Illuminate\Http\Response
     */
    public function show(Coloromat $coloromat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coloromat  $coloromat
     * @return \Illuminate\Http\Response
     */
    public function edit(Coloromat $coloromat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coloromat  $coloromat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Coloromat::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'icumsa' => $request->icumsa,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coloromat  $coloromat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coloromat::wehere('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
