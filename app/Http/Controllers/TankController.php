<?php

namespace App\Http\Controllers;

use App\Models\Tank;
use App\Models\Station;
use Illuminate\Http\Request;

class TankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $tanks = Tank::limit(1000)->orderBy('id', 'desc')->get();
        return view('tank.index', compact('stations', 'tanks'));
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
        Tank::create($request->all());
        return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function show(Tank $tank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function edit(Tank $tank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Tank::where('id', $id)->update([
            'volume_t1' => $request->volume_t1,
            'volume_t2' => $request->volume_t2,
            'volume_t3' => $request->volume_t3,
            'meters' => $request->meters,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tank::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
