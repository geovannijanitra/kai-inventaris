<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Jenis;
use App\Models\Merk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = Jenis::all();
        $merk = Merk::all();
        return view('jenis.view', compact('jenis','merk'));
    }

    public function merkbarang($id)
    {
        $jenis = Jenis::find($id);
        $merk = DB::table('merks')
        ->where('kode_jenis', '=', $jenis->kodeJenis)
        ->get();

        return view('merk.view', compact('jenis', 'merk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::all();
        $merk = Merk::all();

        return view('jenis.create', compact('jenis','merk'))->with('message', 'Data added Successfully');
    }

    public function merk($id)
    {
        $jenis = Jenis::find($id);
        $merk = DB::table('merks')
        ->where('kode_jenis', '=', $jenis->kodeJenis)
        ->get();

        return view('merk.create', compact('jenis','merk'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Jenis::create($data);
        return redirect('/jenis')->with('message', 'Data added Successfully');
    }

    public function add($id)
    {
        $jenis = Jenis::all();
        $merk = Merk::find($id);

        return view('jenis.create', compact('jenis', 'merk'))->with('message', 'Data added Successfully');
    }

    public function read($id)
    {
        $jenis = Jenis::all();
        $merk = Merk::find($id);

        return view('merk.create', compact('jenis', 'merk'));
    }

    public function edit($id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.update', compact('jenis'))->with('info', 'The information was updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jenis  $jenis
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        Jenis::where('kodeJenis', $id)->update([
            'kodeJenis' => $request->kodeJenis,
            'jenisBarang' => $request->jenisBarang
        ]);

        return redirect('jenis')->with('info', 'The information was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenis  $jenis
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        DB::table('jenis')->where('kodeJenis', $id)->delete();
        return redirect()->back()->with('error', 'Data Deleted');
    }
}
