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
        $rs_ins = Rawsugar_in::limit(1000)->orderBy('id', 'desc')->get();
        $stations = Station::all();
        return view('rs_in.index', compact('rs_ins', 'stations'));
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
        $date = $request->date;
        $time = $request->time;
        $created_at = $date.' '.$time;
        $data = [
            'created_at' => $created_at,
            'tarra' => $request->tarra,
            'bruto' => $request->bruto,
            'netto' => $request->netto,
        ];
        Rawsugar_in::insert($data);
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

    public function publish()
    {
        $stations = Station::all();
        $data = Rawsugar_in::serveForPublish();
        return view('rs_in.publish', compact('data', 'stations'));
    }
}
