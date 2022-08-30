<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Station;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $balances = Balance::all();
        return view('balance.index', compact('stations', 'balances'));
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
        $data_before = Balance::orderBy('id', 'desc')->limit(1)->select('totalizer_raw_juice');

        if($data_before->count() > 0)
        {
            foreach($data_before->get() as $data)
            {
                $last_totalizer = $data->totalizer_raw_juice;
            }
        }
        else
        {
            $last_totalizer = 0;
        }

        $flow_raw_juice = ($request->totalizer_raw_juice - $last_totalizer) * 1;

        if($request->sugar_cane > 0)
        {
            $raw_juice_percent_sugar_cane = ($flow_raw_juice / $request->sugar_cane * 100);
        }
        else
        {
            $raw_juice_percent_sugar_cane = 0;
        }

        $request->request->add([
            'flow_raw_juice' => $flow_raw_juice,
            'raw_juice_percent_sugar_cane' => $raw_juice_percent_sugar_cane,
        ]);

        Balance::create($request->all());
        return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function show(Balance $balance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Balance $balance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->sugar_cane > 0)
        {
            $raw_juice_percent_sugar_cane = ($request->flow_raw_juice / $request->sugar_cane * 100);
        }
        else
        {
            $raw_juice_percent_sugar_cane = 0;
        }

        Balance::where('id', $id)->update([
            'sugar_cane' => $request->sugar_cane,
            'totalizer_raw_juice' => $request->totalizer_raw_juice,
            'flow_raw_juice' => $request->flow_raw_juice,
            'raw_juice_percent_sugar_cane' => $raw_juice_percent_sugar_cane,
        ]);
        
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Balance::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
