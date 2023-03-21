@extends('admin.base')
@section('konten')
@foreach ($data as $item)
    <h1>saldo anda adalah: </h1>
    {{ $item->value }}
@endforeach
@endsection