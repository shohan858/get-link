@extends('admin.base')
@section('konten')
{{ Breadcrumbs::render('editkategori',$data) }}
<h2>edit kategori</h2>
<form action="{{ url('/update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
 
    <h5>edit image</h5>
    <input class="form-control" name="icon" type="file"  >
    <img class="mt-3" src="{{ url('uploads').'/'.$data->icon }}" width="150px" alt="">
   <h5 class="mt-3">edit title</h5>
    <input type="text" class="form-control" name="title" " placeholder="marketing" aria-label="marketing" aria-describedby="basic-addon1" value="{{ $data->title }}" required>
    <div class="form-group">

      <label for="">warna button </label>
      <input type="color" value="{{ $data->color }}" class="form-control" name="color" " placeholder="marketing" aria-label="marketing" aria-describedby="basic-addon1" required>
      <div class="form-group">

        <button type="submit" class="btn btn-primary mt-3">edit</button>
      </div>




</form>
    
@endsection