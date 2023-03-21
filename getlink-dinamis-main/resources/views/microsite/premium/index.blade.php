@extends('admin.base')
@section('konten')
{{ Breadcrumbs::render('paket') }}
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Microsite Slot</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            @foreach ($data as $item)
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <h6>{{ $item->name }}</h6>
                                        <p>Rp. {{ $item->price }}</p>
                                    </div>
                                        <a href="{{ url('/premium/'.$item->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


</div>
@endsection
