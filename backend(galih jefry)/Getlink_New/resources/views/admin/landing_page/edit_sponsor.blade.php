@extends('admin.base')
@section('konten')
<div class="d-sm-flex align-items-center justify-content-between mb-1">
    <h1 class="h3 mb-0 text-gray-800">Edit Sponsor</h1>
</div>
<form  action="{{ '/collab/'.$data->id }}" method="POST" enctype="multipart/form-data">
    @method("PUT")
    @csrf
    <label for="formFile" class="form-label">Masukkan Gambar Baru</label>
    <input class="form-control" name="foto" type="file" id="formFile">
    <img src="{{ url('uploads').'/'.$data->image }}" width="200px" alt="">
    <button class="w-100 btn btn-primary mt-1 mb-2">Update</button>
</form> 
@endsection