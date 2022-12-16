<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    // use HasFactory;
    protected $table = 'transaksi';
    protected $primary = 'transaksiId';

    protected $fillable = [
        'namaToko', 'namaBarang', 'qty', 'harga', 'total', 'tglBeli'
    ];
}
