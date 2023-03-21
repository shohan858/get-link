@extends('admin.base')
@section('konten')

{{ Breadcrumbs::render('kategori') }}

<div class="d-sm-flex align-items-center justify-content-between mb-1">
    <h1 class="h2 mb-0 text-gray-800">kategori</h1>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-1">
    <h5 class="h5 mb-0 text-gray-800" >pilih kategori anda</h5>
</div>


@foreach ($data as $item)

<div>
    <button class="mt-3" type="button" style="width:400px; border: none;" data-mdb-ripple-color="dark" onmouseover="this.style.backgroundColor='{{ $item->color }}';" onmouseout="this.style.backgroundColor='';">
        <img class="mx-3" style="border-radius:10px " src="{{ url('uploads').'/'.$item->icon }}" width="20px" height="20px" alt="">{{ $item->title }}
     </button>
     
</div>
@endforeach




@endsection