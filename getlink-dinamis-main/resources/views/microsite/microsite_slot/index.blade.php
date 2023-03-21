@if (Auth::user()->role_id == 2)
@extends('admin.base')
@section('konten')
{{ Breadcrumbs::render('micrositeslot') }}
<div class="d-sm-flex align-items-center justify-content-between mb-1">
    <h1 class="h3 mb-0 text-gray-800">Microsite Slot</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahslot">
        Tambah Slot
    </button>
</div>

<div class="row">
    <div class="col-12">
        <table class="table">
            <thead class="text-center">
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Kuantiti</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->kuantiti }}</td>
                        <td>
                            <a href="{{ url('/micrositeslot/'.$item->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <form class="d-inline" onsubmit="return confirm('Yakin Ingin Menghapus Data ???')" action="{{ '/micrositeslot/'.$item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


{{-- modal --}}
<div class="modal" id="tambahslot">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Slot</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/micrositeslot" method="POST">
        <div class="modal-body" >
                @csrf
                <div class="form-group">
                    <label for="name">Nama Slot</label>
                    <input type="name" name="name" class="form-control" id="name" {{ old('name') }}>
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" name="price" class="form-control" id="price" {{ old('price') }}>
                </div>
                <div class="form-group">
                    <label for="kuantiti">Kuantiti Microsite</label>
                    <input type="number" name="kuantiti" class="form-control" id="kuantiti" {{ old('kuantiti') }}>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
        </form>
      </div>
    </div>
</div>
@endif