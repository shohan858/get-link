 {{-- Extends layout --}}
 @extends('layout.default')

 {{-- Content --}}
 @section('content')

     <div class="card card-custom">
         <div class="card-header flex-wrap border-0 pt-6 pb-0">
             <div class="card-title">
                 <h3 class="card-label">My Short Links
                     <div class="text-muted pt-2 font-size-sm">Semua Link yang dipendekkan </div>
                 </h3>
             </div>
             <div class="card-toolbar">
                 <!--begin::Button-->
                 @if($my_link_qty >= auth()->user()->limit)
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
                        </span>Short New Link
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
                    </span>Short New Link</a>
                @endif
                 <!--end::Button-->
             </div>
         </div>
         <div class="card-body">
             <table class="table table-striped">
                 <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th>Shorten Link</th>
                        <th>Original Link</th>
                        <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach ($my_link as $row)
                    <tr>
                        <td style="width: 5%;">{{$loop->iteration}}</td>
                        <td>getlink.id/{{$row->short_link}}</td>
                        <td>{{ substr($row->real_link,0,30) }} ...</td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <button id="edit_btn" class="btn btn-warning cobak btn-sm" value="{{$row->id_link}}" data-link="{{$row->short_link}}" data-toggle="modal" data-target="#edit_modal">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <form action="{{url('hapus-link/')}}" id="form_hapus_{{$row->id_link}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" id="" value="{{$row->id_link}}">
                                        <button type="button" id="hapus" value="{{$row->id_link}}" class="btn btn-sm btn-danger hapus">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>

                    @endforeach
                 </tbody>
             </table>
             <!--end: Datatable-->
         </div>
     </div>
    <!-- Modal New Link-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pendekkan Link Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="link-short">
                        <div class="row col-12">
                            <div class="input-group">
                                <input type="hidden" name="id" id="id_user" value="{{auth()->user()->id}}">
                                <div class="input-group-append" style="width: 100%">
                                <input type="url" id="short" placeholder="Https://Link-panjangmu-pendekkan-di-sini-lebih-cepat-praktis-dan-mudah" class="form-control" required>
                                    <button class="btn btn-success" id="buton_short" type="button">Short</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Edit Link --}}
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Link</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form action="{{url('edit-link')}}" method="POST" id="form_edit">
                <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="id_link">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">getlink.id/</span>
                          </div>
                            <input type="text"  pattern="getlink.id/.+" class="form-control" title="tidak boleh mengubah/menghapus getlink.id/" name="short_link" id="old_short_link">
                        </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="button" id="submit_form" class="btn btn-primary font-weight-bold">Save Changes</button>
                </div>
                </form>
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
                $('.table').DataTable();

                $('body').on('click', '.cobak', function() {
                // $(".cobak").click(function(){
                    // alert('tes');
                    // var button = $(e.relatedTarget)
                    var link = $(this).data('link');
                    var id = $(this).val();
                    console.log(link);
                    $("#id_link").val(id);
                    $("#old_short_link").val(link);
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
                $("#submit_form").click(function(){

                    var links_all = <?php echo json_encode($links); ?>;
                    var new_link = $("#old_short_link").val();
                    if(jQuery.inArray(new_link, links_all) != -1){
                        swal.fire({
                            icon :'error',
                            title : 'Link Sudah Digunakan !',
                            text : 'silahkan masukkan nama link baru',
                        })
                    }else{
                        $("#form_edit").submit();
                        
                    }
                })
                function shorten(length) {
                    var result           = '';
                    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                    var charactersLength = characters.length;
                    for ( var i = 0; i < length; i++ ) {
                    result += characters.charAt(Math.floor(Math.random() *
                charactersLength));
                }
                    return result;
                }


                if( $("#short").val() == ""){
                    $("#buton_short").prop("disabled",true);
                }

                $("#short").change(function(){
                    if($("#link-short").valid() === true){
                    $("#buton_short").prop("disabled",false);
                    }else{
                        console.log("tidak ok");
                    }
                    // $("#buton_short").prop("disabled",false);
                })
                function fetch_my_link() {
                    var nom=1;
                    $.ajax({
                        type: "GET",
                        url: "/fetch-my-link",
                        dataType: "json",
                        success: function (response) {
                            // console.log(response);
                            $.each(response.my_links, function (key, item) {
                                $('tbody').append('<tr>\
                                    <td>' + nom + '</td>\
                                    <td>' + item.short_link + '</td>\
                                    <td>' + item.real_link + '</td>\
                                </tr>');
                                nom++;
                            });
                        }
                    });
                }

                $("#buton_short").click(function(){
                    Swal.fire({
                    title: 'Human Verification',
                    html: '<div id="recaptcha"></div>',
                    didOpen: () => {
                        grecaptcha.render('recaptcha', {
                        'sitekey': '6Lcg7QQhAAAAAB6d_Kzj8YWVushnEnLTgC2qYMX6'
                        })
                    },
                    preConfirm: function () {
                        if (grecaptcha.getResponse().length === 0) {
                            Swal.showValidationMessage(`Please verify that you're not a robot`)
                        }else{

                            var links = <?php echo json_encode($links); ?>;
                            console.log(links);
                            var shorten_link = shorten(5);
                            while(jQuery.inArray(shorten_link, links) != -1) {
                                shorten_link = shorten(5);
                            }
                            var data = {
                                'real_link': $('#short').val(),
                                'shorten_link': shorten_link,
                                'id': $("#id_user").val(),
                            }
                            $.ajax({
                                type: "POST",
                                url:"save-link",
                                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                                data: data,
                                dataType: "json",
                                success: function (response) {
                                    // console.log(response);
                                    if (response.status == 400) {
                                        swal.fire({
                                            icon: 'error',
                                            text: 'server error',
                                        });
                                    }else{
                                        swal.fire({
                                            icon: 'success',
                                            title: 'Link berhasil dipendekkan !',
                                        })
                                        window.location.href = window.location.href;
                                        $("#short").val(shorten_link);
                                    }
                                }
                            })
                        }
                    }
                    })

                })
            })
    </script>
 @endsection
