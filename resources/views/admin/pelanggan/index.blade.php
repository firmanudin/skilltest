@extends('admin.app')
@section('content')
    <h3>Daftar Pelanggan</h3>
    <hr>
    @if (Session::has('status'))
        <div class="alert alert-warning" role="alert">
                {{ Session::get('status') }}
        </div>
    @endif
    <a href="{{ url('admin/pelanggan/create') }}" class="btn btn-md btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Data</a>

    <table class="table table-bordered">
        <thead class="bg-primary text-light">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>NPWP</th>
                <th>Email</th>
                <th>Status</th>
                <th>No HP</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $pelanggan)
        <tr>
            <td>{{$pelanggan->nama}}</td>
            <td>{{$pelanggan->alamat}}</td>
            <td>{{$pelanggan->npwp}}</td>
            <td>{{$pelanggan->email}}</td>
            <td>{{($pelanggan->status_email == 1) ? "Tervalidasi" : "Belum Tervalidasi"}}</td>
            <td>{{$pelanggan->nohp}}</td>
            <td>{{($pelanggan->status_nohp == 1) ? "Tervalidasi" : "Belum Tervalidasi"}}</td>
            <td>
                <a href="{{ url('admin/pelanggan/edit/'.$pelanggan->id) }}" class="btn btn-primary btn-md"><i class="far fa-edit"></i> Edit</a>
                <a href="{{ url('admin/pelanggan/delete/'.$pelanggan->id) }}" class="btn btn-danger btn-md"><i class="fas fa-trash"></i> Delete</a>
            </td>
        </tr>
        @endforeach

    </table>
@endsection
