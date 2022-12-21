@extends('layouts.app')

@section('content')
<div class="container pt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">{{ __('List Barang') }}</div>

        <div class="card-body" style="background-color: #b5d9f4;">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

          <nav class="navbar">
            <div class="container">
            <button type="button" class="btn btn-success mb-4">
              <a href="{{ url('addTransaksi') }}" class="text-black text-decoration-none fw-bold">Tambah Transaksi</a>
            </button>
              <form class="d-flex" role="search">
                <p class="fw-bold text-dark">Sub Total :</p>
                @foreach($dataTransaksiAll as $data)
                  <p class="fw-bold ms-3">Rp. {{ $data->subTotal }}</p>
                @endforeach
              </form>
            </div>
          </nav>
          <!-- <button type="button" class="btn btn-success mb-4">
            <a href="{{ url('addTransaksi') }}" class="text-black text-decoration-none fw-bold">Tambah Transaksi</a>
          </button> -->

            <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Toko</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Tanggal Pembelian</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
              @php $no = $dataTransaksi->firstItem(); @endphp
              @foreach($dataTransaksi as $data)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data->namaToko }}</td>
                    <td>{{ $data->namaBarang }}</td>
                    <td>{{ $data->tglBeli }}</td>
                    <td>{{ $data->qty }} </td>
                    <td>{{ $data->harga }}</td>
                    <td>{{ $data->price }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <nav aria-label="...">
        <ul class="pagination justify-content-center pt-4">
          {{ $dataTransaksi->links() }}
        </ul>
      </nav>
    </div>
  </div>
</div>
@endsection