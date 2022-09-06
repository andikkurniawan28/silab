<?php

namespace App\Http\Controllers;

use App\Models\Imbibition;
use App\Models\Station;
use App\Models\Factor;
use Illuminate\Http\Request;

class ImbibitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $imbibitions = Imbibition::all();
        return view('imbibition.index', compact('stations', 'imbibitions'));
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
        $find_factor = Factor::where('description', 'Flow Imbibisi')->limit(1)->get();

        foreach($find_factor as $factor)
        {
            $factor_imb = $factor->value;
        }

        $data_before = Imbibition::orderBy('id', 'desc')->limit(1)->select('totalizer');

        if($data_before->count() > 0)
        {
            foreach($data_before->get() as $data)
            {
                $last_totalizer = $data->totalizer;
            }
        }
        else
        {
            $last_totalizer = 0;
        }

        $flow = ($request->totalizer - $last_totalizer) * $factor_imb;
        $request->request->add(['flow' => $flow]);

        Imbibition::create($request->all());
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imbibition  $imbibition
     * @return \Illuminate\Http\Response
     */
    public function show(Imbibition $imbibition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imbibition  $imbibition
     * @return \Illuminate\Http\Response
     */
    public function edit(Imbibition $imbibition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imbibition  $imbibition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Imbibition::where('id', $id)->update([
            'totalizer' => $request->totalizer,
            'flow' => $request->flow,
        ]);
        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imbibition  $imbibition
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Imbibition::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
