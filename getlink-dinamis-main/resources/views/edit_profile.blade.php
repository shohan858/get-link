@extends('admin.base')
@section('konten')
@foreach ($data as $item)
<form action="{{ route('update_profile', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="p-4 bg-white rounded">
        <h5 class="text-black">Informasi Profile</h5>
        @if (Auth::user()->image != null)
        <img src="{{ asset('uploads/images.user_profile/' . Auth::user()->image ) }}" class="img-thumbnail" alt="image">
        @else
        <img class="img-thumbnail roudned"
            src="{{ asset('uploads/images.user_profile/avatar-default.png') }}">
        @endif
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="image" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <p>Perbarui informasi profil akun dan alamat email Anda.</p>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
            <input type="text" name="name" value="{{ $item->name }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
            <input type="email" name="email" value="{{ $item->email }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
            <input type="text" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <button class="btn btn-success w-100">Simpan</button>
    </div>
</form>
@endforeach

@endsection