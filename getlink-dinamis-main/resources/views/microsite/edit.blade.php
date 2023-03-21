 {{-- Extends layout --}}
 @extends('layout.default')
 {{-- Content --}}
 @section('content')
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <style>
    #kiri{
        /* border:1px solid black; */
    }
    #kanan{
        border:1px solid black;
    }
    #add_konten{
        background-color:black;
        color:white;
    }
    .kontenku{
        text-align: left;
    }
    .kontenku:hover{
        background: rgb(196, 196, 196);
    }
 </style>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12" id="kiri">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home">
                <button class="btn btn-outline-primary" id="menu1_menu">
                    Konten
                </button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu1">
                <button class="btn btn-outline-primary" id="menu2_menu">
                    Pengaturan
                </button>
              </a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <form id="content">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" id="add_konten"  data-toggle="modal" data-target="#exampleModal">
                        Tambah Komponen <i class="fa-solid fa-plus"></i>
                    </button>
                    <br>
                    <div class="row" id="microsite_konten">

                    </div>
                </form>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <form id="setting">

                </form>
            </div>
          </div>

        </div>
        <div class="col-6  col-lg-6 col-sm-12" id="kanan">

        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Konten Mircrosite</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add_kontens">
                        @csrf
                        <input type="hidden" name="id_microsite" value="{{$id}}" id="id_microsite">
                        <div class="row">
                            <button data-dismiss="modal" type="button" class="card kontenku col-md-4 col-sm-6 col-lg-4" id="konten_text" value="text">
                                <h6><span>Icon</span> Text</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            </button>
                            <button data-dismiss="modal" type="button" class="card kontenku col-md-4 col-sm-6 col-lg-4" id="konten_link" value="link">
                                <h6><span>Icon</span> Link</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus, </p>
                            </button>
                            <button data-dismiss="modal" type="button" class="card kontenku col-md-4 col-sm-6 col-lg-4" id="konten_image" value="image">
                                <h6><span>Icon</span> Image</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus, </p>
                            </button>
                            <button data-dismiss="modal" type="button" class="card kontenku col-md-4 col-sm-6 col-lg-4" id="konten_image" value="video">
                                <h6><span>Icon</span> Video</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus, </p>
                            </button>
                            <button data-dismiss="modal" type="button" class="card kontenku col-md-4 col-sm-6 col-lg-4" id="konten_image" value="maps">
                                <h6><span>Icon</span> Maps</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus, </p>
                            </button>
                            <button data-dismiss="modal" type="button" class="card kontenku col-md-4 col-sm-6 col-lg-4" id="konten_image" value="horizontal_link">
                                <h6><span>Icon</span> Horizontal Link</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus, </p>
                            </button>
                            <button data-dismiss="modal" type="button" class="card kontenku col-md-4 col-sm-6 col-lg-4" id="konten_image" value="divider">
                                <h6><span>Icon</span> Divider</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus, </p>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger font-weight-bold" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
 @endsection

 {{-- Styles Section --}}
 @section('styles')

 @endsection
 {{-- Scripts Section --}}
 @section('scripts')
    {{-- <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> --}}
    {!! ReCaptcha::htmlScriptTagJsApi() !!}

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function(){
            function fetch_microsite(){
                var id_microsite = $("#id_microsite").val();
                $.ajax({
                    type: "GET",
                    url: "/fetch-microsite/"+id_microsite,
                    dataType: "json",
                    success: function (response) {
                        // console.log(response);
                        $('#kanan').html("");
                        $.each(response.conten, function (key, item) {
                            $('#kanan').append('<div class="col-12">\
                               ' + item.display_tag + '\
                            </div>');
                        })
                    }
                })
            }
            function fetch_konten(){
                var id_microsite = $("#id_microsite").val();
                $.ajax({
                    type: "GET",
                    url: "/fetch-konten/"+id_microsite,
                    dataType: "json",
                    success: function (response) {
                        // console.log(response);
                        $('#microsite_konten').html("");
                        $.each(response.konten, function (key, item) {
                            $('#microsite_konten').append('<div class="col-12">\
                               ' + item.tag + '\
                            </div>');
                            $(item.id_tag).change(function(){
                                var data = {
                                    'vals': $(this).val(),
                                    'id_microsite' : $("#id_microsite").val(),
                                    'id_microsite_detail' : item.id_microsite_detail,
                                }
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });

                                $.ajax({
                                    type: "POST",
                                    url: "/edit-konten",
                                    data: data,
                                    dataType: "json",
                                    success: function (response) {
                                        fetch_microsite();
                                    }
                                })
                            })
                        })
                    }
                });
            }
            fetch_konten();
            $(".kontenku").click(function(){

                var data = {
                    'value': $(this).val(),
                    'id_microsite' : $("#id_microsite").val(),
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/add-konten",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        // console.log(response);
                        if (response.status == 400) {
                            Swal.fire({
                                    icon: 'error',
                                    title: 'Oops Ada kesalahan',
                                    text: 'silahkan refresh halaman',
                                });
                        } else {
                            fetch_konten();
                        }
                    }
                });
            })
        })
    </script>
 @endsection
