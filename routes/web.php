<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Barang
Route::get('/addBarang', [App\Http\Controllers\BarangController::class, 'addBarang'])->name('addBarang');
Route::post('/detailBarang', [App\Http\Controllers\BarangController::class, 'detailBarang'])->name('detailBarang');
Route::get('/delete/{barangId}', [App\Http\Controllers\BarangController::class, 'hapusBarang']);
// Route::get('barangEdit/{barangId}', [App\Http\Controllers\BarangController::class, 'barangEdit']);
// Route::post('/editBarang', [App\Http\Controllers\BarangController::class, 'editBarang']);

// Toko
Route::get('/addToko', [App\Http\Controllers\TokoController::class, 'addToko'])->name('addToko');
Route::post('/detailToko', [App\Http\Controllers\TokoController::class, 'detailToko'])->name('detailToko');
Route::get('/delete/{tokoId}', [App\Http\Controllers\BarangController::class, 'hapusToko']);

//Transaksi
Route::get('/addTransaksi', [App\Http\Controllers\TransaksiController::class, 'addTransaksi'])->name('addTransaksi');
Route::post('/detailTransaksi', [App\Http\Controllers\TransaksiController::class, 'detailTransaksi'])->name('detailTransaksi');
Route::get('/delete/{transaksiId}', [App\Http\Controllers\BarangController::class, 'hapusTransaksi']);

// Route::get('/addBarang', 'PageController@addBarang')->name('addBarang');

