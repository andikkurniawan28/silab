<?php

namespace App\Http\Controllers;

use App\Models\Rawsugar_out;
use App\Models\Station;
use Illuminate\Http\Request;

class RawsugarOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs_outs = Rawsugar_out::limit(1000)->orderBy('id', 'desc')->get();
        $stations = Station::all();
        return view('rs_out.index', compact('rs_outs', 'stations'));
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
        Rawsugar_out::insert($data);
        return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rawsugar_out  $rawsugar_out
     * @return \Illuminate\Http\Response
     */
    public function show(Rawsugar_out $rawsugar_out)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rawsugar_out  $rawsugar_out
     * @return \Illuminate\Http\Response
     */
    public function edit(Rawsugar_out $rawsugar_out)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rawsugar_out  $rawsugar_out
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Rawsugar_out::where('id', $id)->update([
            'tarra' => $request->tarra,
            'bruto' => $request->bruto,
            'netto' => $request->netto,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rawsugar_out  $rawsugar_out
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rawsugar_out::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus');
    }

    public function publish()
    {
        $stations = Station::all();
        $data = Rawsugar_out::serveForPublish();
        return view('rs_out.publish', compact('data', 'stations'));
    }
}
