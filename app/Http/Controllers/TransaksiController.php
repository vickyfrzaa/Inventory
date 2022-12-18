<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;
use App\Models\barang;
use App\Models\transaksi;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function addTransaksi(){
        $barang = DB::table('barang')
        ->get();

        $toko = DB::table('toko')
        ->get();
        
        return view('addTransaksi')
        ->with('dataBarang', $barang)
        ->with('dataToko', $toko);
    }
    
    public function detailTransaksi(Request $request){
        $data = new transaksi();

        $data->namaToko = $request->input('namaToko');
        $data->namaBarang = $request->input('namaBarang');
        $data->qty = $request->input('qty');
        $data->harga = $request->input('harga');
        $data->tglBeli = $request->input('tglBeli');
        
        $data->save();

        return redirect('home');
    }

    public function hapusTransaksi($transaksiId){
        DB::table('transaksi')
        ->where('$transaksiId',$transaksiId)
        ->delete();

        return redirect('addTransaksi');
    }
}
