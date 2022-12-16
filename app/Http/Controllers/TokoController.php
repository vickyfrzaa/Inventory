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
        return view('addToko');
    }

    public function detailToko(Request $request){
        $data = new toko();

        $data->namaToko = $request->input('namaToko');
        $data->alamat = $request->input('alamat');
        $data->kontak = $request->input('kontak');
        $data->save();

        return view('home');
    }
}
