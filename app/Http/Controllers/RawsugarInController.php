<?php

namespace App\Http\Controllers;

use App\Models\Rawsugar_in;
use App\Models\Station;
use Illuminate\Http\Request;

class RawsugarInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs_in = Rawsugar_in::all();
        $stations = Station::all();
        return view('rs_in.index', compact('rs_in', 'stations'));
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
        Rawsugar_in::create($request->all());
        return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rawsugar_in  $rawsugar_in
     * @return \Illuminate\Http\Response
     */
    public function show(Rawsugar_in $rawsugar_in)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rawsugar_in  $rawsugar_in
     * @return \Illuminate\Http\Response
     */
    public function edit(Rawsugar_in $rawsugar_in)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rawsugar_in  $rawsugar_in
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Rawsugar_in::where('id', $id)->update([
            'tarra' => $request->tarra,
            'bruto' => $request->bruto,
            'netto' => $request->netto,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rawsugar_in  $rawsugar_in
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rawsugar_in::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus');
    }
}
