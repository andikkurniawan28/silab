<?php

namespace App\Http\Controllers;

use App\Models\Around;
use App\Models\Station;
use Illuminate\Http\Request;

class AroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $arounds = Around::limit(1000)->orderBy('id', 'desc')->get();
        return view('around.index', compact('stations', 'arounds'));
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
        Around::create($request->all());
        return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Around  $around
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stations = Station::all();
        $arounds = Around::where('id', $id)->get();
        return view('around.show', compact('stations', 'arounds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Around  $around
     * @return \Illuminate\Http\Response
     */
    public function edit(Around $around)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Around  $around
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Around $around)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Around  $around
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Around::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
