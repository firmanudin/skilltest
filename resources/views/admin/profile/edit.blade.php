@extends('admin.app')
@section('content')
    <h3>Edit Profile</h3>
    <hr>
    <div class="col-lg-6">
        @if (Session::has('status'))
            <div class="alert alert-warning" role="alert">
                    {{ Session::get('status') }}
            </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ url('admin/profile/'.$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$data->name}}" class="form-control">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$data->email}}" class="form-control">
            <br>
            <input type="submit" name="submit" class="btn btn-md btn-primary" value="Edit Data">
            <a href="{{ url('admin') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
        </form>
    </div>
@endsection
@section('js')
<script src="{{url('assets/ckeditor/ckeditor.js')}}"></script>
<script>
   var desc = document.getElementById("desc");
     CKEDITOR.replace(desc,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;

   var content = document.getElementById("content");
     CKEDITOR.replace(content,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endsection
