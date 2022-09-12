<?php

namespace App\Http\Controllers;

use App\Models\Npp;
use App\Models\Station;
use Illuminate\Http\Request;

class NppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $npps = Npp::limit(1000)->orderBy('id', 'desc')->get();
        return view('npp.index', compact('stations', 'npps'));
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
        if($request->percent_pol > $request->percent_brix)
        {
            return redirect()->back()->with('error', 'Error : %Pol yang Anda masukkan : '.$request->percent_pol.' seharusnya tidak lebih besar dari %Brix yang Anda masukkan : '.$request->percent_brix.' . Evaluasi kembali data Anda.');
        }
        else
        {
            $request->request->add(['purity' => $this->findPurity($request->percent_brix, $request->percent_pol)]);
            $request->request->add(['yield' => $this->findYield($request->percent_brix, $request->percent_pol)]);
            Npp::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Npp  $npp
     * @return \Illuminate\Http\Response
     */
    public function show(Npp $npp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Npp  $npp
     * @return \Illuminate\Http\Response
     */
    public function edit(Npp $npp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Npp  $npp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Npp::where('id', $id)->update([
            'pol' => $request->pol,
            'percent_brix' => $request->percent_brix,
            'percent_pol' => $request->percent_pol,
            'purity' => $this->findPurity($request->percent_brix, $request->percent_pol),
            'yield' => $this->findYield($request->percent_brix, $request->percent_pol),
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Npp  $npp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Npp::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }

    public function findPurity($brix, $pol)
    {
        return ($pol/$brix) * 100;
    }

    public function findYield($brix, $pol)
    {
        return number_format(0.7 * ($pol - 0.5 * ($brix - $pol)),2);
    }

    public function showNPP()
    {
        $stations = Station::all();
        $npps = Npp::all();
        return view('npp.show_npp', compact('stations', 'npps'));
    }
}
