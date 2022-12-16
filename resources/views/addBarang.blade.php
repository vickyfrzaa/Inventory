@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">Tambah Barang</div>
                    <div class="card-body pt-4">
                        <form action="{{ route('detailBarang') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="namaBarang" name="namaBarang">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="qty" class="col-sm-2 col-form-label">Stock Barang</label>
                                <div class="col-sm">
                                    <input type="number" class="form-control" id="qty" name="qty">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Expired</label>
                                <div class="col-sm-2">
                                    <input type="date" name="tglExp">
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto pt-3 mb-3">
                                <button class="btn btn-primary" type="submit">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div><br>

                <div class="card">
                    <div class="card-header text-center">{{ __('List Barang') }}</div>

                    <div class="card-body" style="background-color: #b5d9f4;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <button type="button" class="btn btn-success mb-4">Tambah Transaksi
                        <a href="{{ url('addBarang') }}"></a>
                    </button>

                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Toko</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Tanggal Pembelian</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
