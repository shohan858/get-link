@extends('admin.base')
@section('konten')
{{ Breadcrumbs::render('transaksicreate',$harga) }}
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Check Out</h1>
            <a href="/premium" class="btn btn-warning btn-sm">Kembali</a>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="/transaksi/{{ $harga->id }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Type</label>
                                <select class="form-control" name="type" id="">
                                    <option value="microsite">Microsite</option>
                                    <option value="landingpage">Landing Page</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="harga">Paket</label>
                                <input type="text" name="id_produk" value="{{ $harga->id }}" class="form-control" disabled id="id_produk" {{ old('price') }}>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" name="price" value="{{ $harga->price }}" class="form-control" disabled id="harga" {{ old('price') }}>
                            </div>
                            <div class="form-group">
                                <label for="kuantiti">Invoice</label>
                                <input type="text" name="invoice" class="form-control"  id="invoice" {{ old('invoice') }}>
                            </div>
                            <div class="form-group">
                                <label for="payment_gateway">Payment Gateway</label>
                                <input type="text" name="payment_gateway" class="form-control" id="payment_gateway" {{ old('payment_gateway') }}>
                            </div>
                            <div class="form-group">
                                <label for="des">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary">Check Out</button>
                                </div>
                                <div class="col-6 bg-primary p-2 text-center text-white">
                                    Sub Total : {{ $subtotal }}
                                </div>
                            </div>
                        </form>
                    </div>
        </div>
@endsection