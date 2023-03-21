@extends('admin.base')
@section('konten')
{{ Breadcrumbs::render('editrole',$data) }}
@foreach ($data as $item)
<form action="{{ url('role') . "/" . $item->id }}" method="POST">
    @csrf
    @method('PUT')
    <p>{{ url('role') . "/" . $item->id }}</p>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Role</label>
        <input type="text" name="role" value="{{ $item->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button class="btn btn-primary w-100">update</button>
</form>
@endforeach
@endsection