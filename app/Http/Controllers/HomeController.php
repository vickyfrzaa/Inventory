<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;
use App\Models\barang;
use App\Models\transaksi;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transaksi = DB::table('transaksi')
        ->select('transaksiId', 'namaToko', 'namaBarang', 'tglBeli', 'qty', 'harga', DB::raw('(qty * harga) as price'))
        ->groupBy('transaksiId', 'namaToko', 'namaBarang', 'tglBeli', 'qty', 'harga')
        ->orderBy('namaToko', 'ASC')
        ->paginate(5);
        // $transaksi = DB::table('transaksi')
        // ->get();

        return view('home')
        ->with('dataTransaksi', $transaksi);
    }
}
