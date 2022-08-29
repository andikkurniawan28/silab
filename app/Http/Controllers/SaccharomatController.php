<?php

namespace App\Http\Controllers;

use App\Models\Saccharomat;
use App\Models\Station;
use Illuminate\Http\Request;

class SaccharomatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saccharomats = Saccharomat::leftjoin('samplings', 'saccharomats.sampling_id', 'samplings.id')
            ->join('samples', 'samplings.sample_id', 'samples.id')
            ->select('saccharomats.*', 'samples.name as sample_name')
            ->get();
        $stations = Station::all();
        return view('saccharomat.index', compact('saccharomats', 'stations'));
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
        $check = Saccharomat::where('sampling_id', $request->sampling_id)->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Sampel dengan barcode '.$request->sampling_id.' sudah dianalisa, sistem tidak mengizinkan duplikasi.');
        }
        else
        {
            if($request->percent_brix != '' && $request->percent_pol != '')
            {
                $request->request->add(['purity' => $this->findPurity($request->percent_brix, $request->percent_pol)]);
            }
            if($request->percent_pol > $request->percent_brix)
            {
                return redirect()->back()->with('error', 'Error : %Pol yang Anda masukkan : '.$request->percent_pol.' seharusnya tidak lebih besar dari %Brix yang Anda masukkan : '.$request->percent_brix.' . Evaluasi kembali data Anda.');
            }
            else
            {
                Saccharomat::create($request->all());
                return redirect()->back()->with('success', 'Sukses : Data berhasil disimpan');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saccharomat  $saccharomat
     * @return \Illuminate\Http\Response
     */
    public function show(Saccharomat $saccharomat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saccharomat  $saccharomat
     * @return \Illuminate\Http\Response
     */
    public function edit(Saccharomat $saccharomat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saccharomat  $saccharomat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->percent_brix != '' && $request->percent_pol != '')
        {
            $request->request->add(['purity' => $this->findPurity($request->percent_brix, $request->percent_pol)]);
        }

        if($request->percent_pol > $request->percent_brix)
        {
            return redirect()->back()->with('error', 
            'Error : %Pol yang Anda masukkan : '.$request->percent_pol.' 
            seharusnya tidak lebih besar dari %Brix yang Anda masukkan : '.$request->percent_brix.' . Evaluasi kembali data Anda!.'
            );
        }
        else
        {
            Saccharomat::where('id', $id)->update([
                'sampling_id' => $request->sampling_id,
                'pol' => $request->pol,
                'percent_brix' => $request->percent_brix,
                'percent_pol' => $request->percent_pol,
                'purity' => $request->purity,
            ]);
            return redirect()->back()->with('success', 'Sukses : Data berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saccharomat  $saccharomat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Saccharomat::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses : Data berhasil dihapus');
    }

    public function findPurity($brix, $pol)
    {
        return ($pol/$brix) * 100;
    }
}
