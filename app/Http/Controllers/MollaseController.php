<?php

namespace App\Http\Controllers;

use App\Models\Mollase;
use App\Models\Station;
use Illuminate\Http\Request;

class MollaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mollases = Mollase::all();
        $stations = Station::all();
        return view('mollase.index', compact('mollases', 'stations'));
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
        Mollase::create($request->all());
        return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mollase  $mollase
     * @return \Illuminate\Http\Response
     */
    public function show(Mollase $mollase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mollase  $mollase
     * @return \Illuminate\Http\Response
     */
    public function edit(Mollase $mollase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mollase  $mollase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Mollase::where('id', $id)->update([
            'tarra' => $request->tarra,
            'bruto' => $request->bruto,
            'netto' => $request->netto,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mollase  $mollase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mollase::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus');
    }
}
