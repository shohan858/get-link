@extends('admin.layout.base')

@section('admin_konten')
    <div class="iframDiv">
        <div class="framTop">
            <p class="fram_p">Preview landing page</p>
        </div>
        <div class="framBot">
            <iframe class="framPrew" src="{{ url('/') }}" frameborder="0" width="100%" height="100%"></iframe>
        </div>
    </div>
@endsection
