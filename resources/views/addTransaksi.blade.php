@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">Transaksi</div>
                    <div class="card-body pt-4">
                        <form action="{{ route('detailTransaksi') }}" method="POST">
                            @csrf
                            @foreach($dataBarang as $data)
                                <input type="hidden" name="qty" value="{{$data->qty}}">
                            @endforeach
                            <div class="row mb-3">
                                <label for="namaToko" class="col-sm-2 col-form-label">Nama Toko</label>
                                <div class="col-sm">
                                    <select class="form-select" aria-label="Default select example" name="namaToko">
                                        <option selected>Open this select menu</option>
                                        @foreach($dataToko as $data)
                                            <option value="{{$data->namaToko}}">{{$data->namaToko}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm">
                                    
                                    <select class="form-select" aria-label="Default select example" name="namaBarang">
                                        <option selected>Open this select menu</option>
                                        @foreach($dataBarang as $data)
                                            <option value="{{$data->namaBarang}}">{{$data->namaBarang}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm">
                                    <input type="number" class="form-control" id="harga" name="harga">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Pembelian</label>
                                <div class="col-sm-2">
                                    <input type="date" name="tglBeli">
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto pt-3 mb-3">
                                <button class="btn btn-primary" type="submit">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
