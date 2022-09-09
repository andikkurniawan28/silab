<?php

namespace App\Http\Controllers;

use App\Models\Method;
use App\Models\Station;
use Illuminate\Http\Request;

class MethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $methods = Method::all();
        $stations = Station::all();
        return view('method.index', compact('methods', 'stations'));
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
        $check = Method::where('description', $request->description)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Method dengan deskripsi '.$request->description.' sudah terdaftar. Sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            Method::create($request->all());
            return redirect()->back()->with('success', 'Sukses : Method berhasil disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function show(Method $method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function edit(Method $method)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Method::where('id', $id)->update([
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Sukses : Method berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Method::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Method berhasil dihapus');
    }
}
