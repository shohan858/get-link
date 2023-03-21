@extends('admin.base')
@section('konten')
{{ Breadcrumbs::render('createrole') }}
<form action="{{ url('role') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Role</label>
        <input type="text" name="role" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button class="btn btn-success w-100">simpan</button>
</form>
@endsection