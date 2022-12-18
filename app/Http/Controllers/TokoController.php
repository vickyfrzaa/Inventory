<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;
use App\Models\barang;
use App\Models\transaksi;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    public function addToko(){
        $toko = DB::table('toko')
        ->paginate(5);

        return view('addToko')
        ->with('dataToko', $toko);
    }

    public function detailToko(Request $request){
        $data = new toko();

        $data->namaToko = $request->input('namaToko');
        $data->alamat = $request->input('alamat');
        $data->kontak = $request->input('kontak');
        $data->save();

        return redirect('home');
    }

    public function hapusToko($tokoId){
        DB::table('toko')
        ->where('tokoId', $tokoId)
        ->delete();

        return redirect('addToko');
    }
}
