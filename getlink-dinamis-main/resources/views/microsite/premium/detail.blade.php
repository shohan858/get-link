@extends('admin.base')
@section('konten')
{{ Breadcrumbs::render('showpaket',$data) }}
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Slot</h1>
        <a href="/premium" class="btn btn-primary btn-sm">Kembali</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-6" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                                <h1>{{ $data->name }}</h1>
                                <h5>Harga : Rp. {{ $data->price }}</h5>
                                <h5>Kuantiti : {{ $data->kuantiti }}</h5>
                            </div>
                            <div class="text-primary " style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;margin-top:5%">
                                <h5>Apa Yang Di Dapatkan ?</h5>
                                <h5>Anda Bisa Membuat Hingga {{ $data->kuantiti }} Microsite</h5>
                                <a href="/transaksi/create/{{ $data->id }}" class="btn btn-warning btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection