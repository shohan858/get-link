@extends('admin.base')
@section('konten')
{{ Breadcrumbs::render('microsite') }}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Microsite Anda</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buatmicrosite">
                Buat Microsite
            </button>
        </div>
        <div class="row">

            @foreach ($microsite as $item)
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    {{ $item->title }}</div>
                                <a href="{{ '/microsite/'.$item->id.'/edit' }}" class="btn btn-primary btn-sm">Lihat</a>
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






{{-- modal --}}
<div class="modal" id="buatmicrosite">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Buat Microsite</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/microsite" method="POST">
        <div class="modal-body" style="border: 1px solid black">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" {{ old('title') }}>
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" class="form-control" id="link" {{ old('link') }}>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Buat</button>
        </div>
        </form>
      </div>
    </div>
</div>