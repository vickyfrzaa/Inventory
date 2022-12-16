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
        return view('addBarang');
    }
    
    public function detailBarang(Request $request){
        $data = new barang();

        $data->namaBarang = $request->input('namaBarang');
        $data->qty = $request->input('qty');
        $data->tglExp = $request->input('tglExp');
        $data->save();

        return view('home');
    }
}
