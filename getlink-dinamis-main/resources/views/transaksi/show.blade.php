@extends('admin.base')
@section('konten')
<div class="d-sm-flex align-items-center justify-content-between mb-1">
    <h1 class="h3 mb-0 text-gray-800 card-head">Show Transaksi Id : {{ $transaksi->id }}</h1>
    <a href="/transaksi" class="btn btn-secondary btn-sm"><< Kembali</a>
</div>
<div class="row">
    <div class="col-12">
        <article class="p-3 card-body" style="border: 2px solid black">
            Id User : {{ $transaksi->id_user }} <br>
            Nama User : {{ $user->name }} <br>
            Type : {{ $transaksi->type }} <br>
            Total : {{ $transaksi->total }} <br>
            Sub Total : {{ $transaksi->sub_total }} <br>
            Invoice : {{ $transaksi->invoice }} <br>
            Payment Gateway : {{ $transaksi->payment_gateway }} <br>
            Deskripsi : {{ $transaksi->deskripsi }} <br>
            Tanggal : {{ $transaksi->date }}
        </article>
    </div>
</div>
@endsection