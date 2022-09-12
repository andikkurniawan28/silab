<?php

namespace App\Http\Controllers;

use App\Models\Taxation;
use App\Models\Station;
use Illuminate\Http\Request;

class TaxationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $taxations = Taxation::limit(1000)->orderBy('id', 'desc')->get();
        return view('taxation.index', compact('stations', 'taxations'));
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
        Taxation::create($request->all());
        return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Taxation  $taxation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stations = Station::all();
        $taxations = Taxation::where('id', $id)->get();
        return view('taxation.show', compact('stations', 'taxations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taxation  $taxation
     * @return \Illuminate\Http\Response
     */
    public function edit(Taxation $taxation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taxation  $taxation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taxation $taxation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taxation  $taxation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Taxation::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus');
    }
}
