@extends('admin.base')
@section('konten')
{{ Breadcrumbs::render('editmicrositeslot',$data) }}
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Update Slot</h1>
        <a href="/micrositeslot" class="btn btn-secondary">
            Kembali
        </a>
    </div>
    <div class="row">
        <form action="{{ '/micrositeslot/'.$data->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama Slot</label>
                <input type="name" name="name" class="form-control" value="{{ $data->name }}" id="name" {{ old('name') }}>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" value="{{ $data->price }}" name="price" class="form-control" id="price" {{ old('price') }}>
            </div>
            <div class="form-group">
                <label for="kuantiti">Kuantiti Microsite</label>
                <input type="number" value="{{ $data->kuantiti }}" name="kuantiti" class="form-control" id="kuantiti" {{ old('kuantiti') }}>
            </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
@endsection