 {{-- Extends layout --}}
 @extends('layout.default')

 {{-- Content --}}
 @section('content')

     <div class="card card-custom">
         <div class="card-header flex-wrap border-0 pt-6 pb-0">
             <div class="card-title">
                 <h3 class="card-label">My Microsite
                     <div class="text-muted pt-2 font-size-sm">Microsite saya </div>
                 </h3>
             </div>
             <div class="card-toolbar">
                 <!--begin::Button-->
                 @if($my_microsite_qty >= auth()->user()->limit)
                    <button class="btn btn-primary font-weight-bolder" id="link_limit">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <circle fill="#000000" cx="9" cy="15" r="6"/>
                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>Create New Microsite
                    </button>
                 @else
                 <a href="#" class="btn btn-primary font-weight-bolder" id="new_short" data-toggle="modal" data-target="#exampleModal">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <circle fill="#000000" cx="9" cy="15" r="6"/>
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>Create New Microsite</a>
                @endif
                 <!--end::Button-->
             </div>
         </div>
         <div class="card-body">
                    @foreach ($my_microsite as $row)
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="{{asset('images/microsite/'.$row->meta_image)}}" style="height: 80px;border:1px solid gray;border-radius:10px;">
                                    </div>
                                    <div class="col-11">
                                        <div class="cont" style="margin-left: 10px;">
                                        <h3>{{$row->name}}</h3>
                                        <a href='http://www.{{$row->microsite_link}}' target="_blank" class="mirosite_link">
                                            {{$row->microsite_link}}
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-4">
                                        <button id="edit_btn" class="btn btn-warning cobak btn-sm" value="{{$row->id_link}}" data-link="{{$row->short_link}}" data-toggle="modal" data-target="#edit_modal">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <form action="{{url('hapus-link/')}}" id="form_hapus_{{$row->id_link}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" id="" value="{{$row->id_link}}">
                                            <button type="button" id="hapus" value="{{$row->id_link}}" class="btn btn-sm btn-danger hapus">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
             <!--end: Datatable-->
         </div>
     </div>
     <!-- Modal New Link-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Mircrosite Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form_micro" method="POST" action="{{url('save-microsite')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Microsite</label>
                            <input type="text" name="nama" class="form-control" placeholder="Microsite pertamaku" required>
                        </div>
                        <div class="form-group">
                            <label for="link">Link Microsite</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="button">
                                        Getlink.id/
                                    </button>
                                </span>
                                <input type="url" id="old_short_link" name="microsite_link" class="form-control" required>
                            </div>
                            <span id="error-link"></span>
                        </div>
                        <div class="form-group">
                            <label for="meta-image">Gambar Microsite</label>
                            <div class="row">
                                <div class="col-3">
                                    <input type="file" name="meta_image" id="meta-image" style="padding-top:100%;align:center;width: 100%;height:80%;border:1px solid gray;border-radius:5px;background-image:url('images/logo/logo.png');background-size:cover;">
                                </div>
                                <div class="col-9">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatibus assumenda, natus itaque officiis quae accusamus nisi earum reiciendis consequuntur ab? Quod, molestiae? Odit voluptatum reiciendis deserunt quisquam. Distinctio, eligendi?</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="button" id="submit_form" class="btn btn-primary font-weight-bold">Save changes</button>
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
            $("#link_limit").click(function(){
                    swal.fire({
                        icon: 'info',
                        title: 'Jumlah Link Mencapai Limit',
                        text: 'Silahkan hapus link yang sudah ada terlebih dahulu , atau membuat akun baru'
                    })
                })
                $("#submit_form").click(function(){

                    var links_all = <?php echo json_encode($links); ?>;
                    var new_links = $("#old_short_link").val();
                    var new_link = "getlink.id/"+new_links;
                    console.log(links_all);
                    console.log(new_link);
                    if(jQuery.inArray(new_link, links_all) != -1){
                        swal.fire({
                            icon :'error',
                            title : 'Link Sudah Digunakan !',
                            text : 'silahkan masukkan nama link baru',
                        })
                    }else{
                        $("#form_micro").submit();


                    }
                })
                $('.table').DataTable();
                $(".cobak").click(function(e){
                    var button = $(e.relatedTarget)
                    var link = $(this).data('link');
                    var id = $(this).val();
                    console.log(link);
                    $("#id_link").val(id);
                })
                $(".hapus").click(function(){
                    var id_link = $(this).val();
                    Swal.fire({
                        title: 'Apakah anda yakin untuk menghapus data ini ?',
                        showDenyButton: true,
                        confirmButtonText: 'Iya',
                        denyButtonText: `Batal`,
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            $('#form_hapus_'+id_link).submit();
                        } else if (result.isDenied) {
                          Swal.fire('Aksi telah dibatalkan', '', 'info')
                        }
                      })
                })
         });
    </script>
 @endsection
