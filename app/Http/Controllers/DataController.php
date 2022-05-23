<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\Jenis;
use App\Models\Merk;
use DateTime;
use Illuminate\Http\Request;


class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();
        $jenis = Jenis::all();
        $merk = Merk::all();
        return view('data.view', compact('data','jenis', 'merk'));
    }

    public function getmerk(request $request)
    {
        $id_merk = $request->id_merk;

        $merks = Merk::where('kode_jenis', $id_merk)->get();

        foreach ($merks as $merk) {
            echo "<option value='$merk->idMerk'>$merk->namaMerk</option>";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Data::all();
        $jenis = Jenis::all();
        $merk = Merk::all();
        return view('data.view', compact('data', 'jenis', 'merk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(data $data)
    {
        //
    }
}
