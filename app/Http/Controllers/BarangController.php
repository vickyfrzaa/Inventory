<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;
use App\Models\barang;
use App\Models\transaksi;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function addBarang(){
        $barang = DB::table('barang')
        ->paginate(5);

        return view('addBarang')
        ->with('dataBarang', $barang);
    }
    
    public function detailBarang(Request $request){
        $data = new barang();

        $data->namaBarang = $request->input('namaBarang');
        $data->qty = $request->input('qty');
        $data->tglExp = $request->input('tglExp');
        $data->save();

        return redirect('home');
    }
    
    public function hapusBarang($barangId){
        DB::table('barang')
        ->where('barangId', $barangId)
        ->delete();

        return redirect('addBarang');
    }
}
