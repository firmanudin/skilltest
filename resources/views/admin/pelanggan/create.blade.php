@extends('admin.app')
@section('content')
    <h3>Tambah Data Pelanggan</h3>
    <hr>
    <div class="col-lg-6">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ url('admin/pelanggan/create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap disini...">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat disini...">
            <label for="npwp">NPWP</label>
            <input type="text" name="npwp" class="form-control" placeholder="Isi jika memiliki npwp disini...">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Masukan email disini...">
            <label for="status">Status</label>
            <select class="form-control" name="status_email" id="status">
                <option value="1">Valid</option>
                <option value="0">Tidak Valid</option>
            </select>
            <label for="nohp">No Telephone</label>
            <input type="text" name="nohp" class="form-control" placeholder="Masukan no telephone disini...">
            <label for="status">Status</label>
            <select class="form-control" name="status_nohp" id="status">
                <option value="1">Valid</option>
                <option value="0">Tidak Valid</option>
            </select>
            <br>
            <input type="submit" name="submit" class="btn btn-md btn-primary" value="Tambah Data">
            <a href="{{ url('admin/pelanggan') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
        </form>
    </div>


@endsection
@section('js')
<script src="{{url('assets/ckeditor/ckeditor.js')}}"></script>
<script>
   var content = document.getElementById("content");
     CKEDITOR.replace(content,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endsection
