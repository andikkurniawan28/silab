<?php

namespace App\Http\Controllers;

use App\Models\Core_eb;
use App\Models\Station;
use Illuminate\Http\Request;

class CoreEbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $core_eks = Core_eb::all();
        return view('core_ek.index', compact('stations', 'core_eks'));
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
        Core_eb::create($request->all());
        return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Core_eb  $core_eb
     * @return \Illuminate\Http\Response
     */
    public function show(Core_eb $core_eb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Core_eb  $core_eb
     * @return \Illuminate\Http\Response
     */
    public function edit(Core_eb $core_eb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Core_eb  $core_eb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Core_eb::where('id', $id)->update([
            'barcode_antrian' => $request->barcode_antrian,
            'rfid_ember' => $request->rfid_ember,
            'register' => $request->register,
            'brix_nira' => $request->brix_nira,
            'pol_nira' => $request->pol_nira,
            'rendemen' => $request->rendemen,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Core_eb  $core_eb
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Core_eb::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
