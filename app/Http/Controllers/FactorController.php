<?php

namespace App\Http\Controllers;

use App\Models\Factor;
use App\Models\Station;
use Illuminate\Http\Request;

class FactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $factors = Factor::all();
        return view('factor.index', compact('stations', 'factors'));
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
        Factor::create($request->all());
        return redirect()->back()->with('success', 'Sukses : Faktor berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function show(Factor $factor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function edit(Factor $factor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Factor::where('id', $id)->update([
            'description' => $request->description,
            'operation' => $request->operation,
            'value' => $request->value,
        ]);
        return redirect()->back()->with('success', 'Sukses : Faktor berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Factor::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Faktor berhasil dihapus.');
    }
}
