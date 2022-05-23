<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DropdownController extends Controller
{
    public function getJenis()
    {
        $kode_jenis = DB::table('jenis')
        ->get();
        return $kode_jenis;
    }

    public function getMerk(Request $request)
    {
        $id_merk = DB::table('merks')
        ->where('kode_jenis', $request->kode_jenis)
        ->get();

        if (count($id_merk) > 0) {
            return response()->json($id_merk);
        }
    }
}
