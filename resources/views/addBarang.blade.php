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

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Stock Barang</th>
                                    <th scope="col">Tanggal Expaired</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $no = $dataBarang->firstItem(); @endphp
                                @foreach($dataBarang as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->namaBarang }}</td>
                                    <td>{{ $data->qty }}</td>
                                    <td>{{ $data->tglExp }}</td>
                                    <td>
                                        <!-- <a href="{{ url('barangEdit') }}/{{ $data->barangId }}" class="btn">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a> -->
                                        <a href="{{ url('delete') }}/{{$data->barangId }}" class="btn" onclick="return confirm('Are you sure you want to delete this document ?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <nav aria-label="...">
                    <ul class="pagination justify-content-center pt-4">
                        {{ $dataBarang->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
