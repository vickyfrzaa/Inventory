@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Toko</div>
                    <div class="card-body pt-4">
                        <form action="{{ route('detailToko') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="namaToko" class="col-sm-2 col-form-label">Nama Toko</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="namaToko" name="namaToko">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm">
                                    <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kontak" class="col-sm-2 col-form-label">Kontak</label>
                                <div class="col-sm">
                                    <input type="number" class="form-control" id="kontak" name="kontak">
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto pt-3 mb-3">
                                <button class="btn btn-primary" type="submit">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div><br>

                <div class="card">
                    <div class="card-header text-center">{{ __('List Toko') }}</div>

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
                                    <th scope="col">Nama Toko</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kontak</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                            @php $no = $dataToko->firstItem(); @endphp
                            @foreach($dataToko as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->namaToko }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->kontak }}</td>
                                    <td>
                                        <a href="{{ url('delete') }}/{{$data->tokoId }}" class="btn" onclick="return confirm('Are you sure you want to delete this document ?')">
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
                        {{ $dataToko->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
