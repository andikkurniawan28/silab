<?php

namespace App\Http\Controllers;

use App\Models\Fiber;
use App\Models\Station;
use Illuminate\Http\Request;

class FiberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        $fibers = Fiber::leftjoin('samplings', 'fibers.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('fibers.*', 'samples.name as sample_name')
            ->get();
        return view('fiber.index', compact('stations', 'fibers'));
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
        $check = Fiber::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Fiber::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fiber  $fiber
     * @return \Illuminate\Http\Response
     */
    public function show(Fiber $fiber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fiber  $fiber
     * @return \Illuminate\Http\Response
     */
    public function edit(Fiber $fiber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fiber  $fiber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Fiber::where('id', $id)->update([
            'sampling_id' => $request->sampling_id,
            'fiber' => $request->fiber,
        ]);
        return redirect()->back()->with('success', 'Sukses : Data berhasil diupate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fiber  $fiber
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fiber::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus.');
    }
}
