@extends('admin.layout.base')

@section('admin_konten')
    <div class="button-kanan">
        <button class="button1" onclick="add_kategori()" id="add_kategori" style="cursor: pointer;margin:1% 1% 3% 2.5%"><i
                class="fa-solid fa-plus"></i> Tambah Kategori</button>
        {{-- <button class="button2" id="myBtn"><i class="fa-regular fa-eye"></i> Preview</button> --}}
    </div>
    <div class="adMicro">
        <table id="users-table" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th style="border-radius: 10px 0 0 0">Id</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Icon</th>
                    <th style="border-radius: 0 10px 0 0">Aksi</th>
                </tr>
            </thead>
        </table>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> --}}
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script>
        $(function() {
            $('#users-table').DataTable({
                // searchClass: 'my-custom-search-class',
                // table
                // .search(inputValue)
                // .draw();

                // $('#myTable_filter input[type="search"]').addClass('my-custom-search-class');

                // processing: true,
                // serverSide: true,
                ajax: "{{ route('getdata_kategori') }}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'color',
                        render: function(data, type, full, meta) {
                            return '<div style="background-color:' + data +
                                '; width:50px; height:50px;"></div>';
                        }
                    },
                    {
                        data: 'icon',
                        render: function(data, type, full, meta) {
                            return '<img src="/microsite/kategori/' + data + '" width="50" height="50">';
                        }
                    },
                    {
                        data: 'id',
                        name: 'aksi',
                        render: function(data, type, full, meta) {
                            return '<button id="btn-hapus" class="katHap" data-id="' + data +
                                '" data-nama="' + full.name +
                                '" onclick="deleteKategori(this)"style="cursor: pointer;"><i class="fa-solid fa-trash" style="color:#fff"></i></button>';
                        }
                    },
                ]
            });
        });


        function deleteKategorimodal() {
            var deletekategori = document.getElementById("hapus");
            deletekategori.style.display = "flex";
        }

        function closedeletekategori() {
            var deletekategori = document.getElementById("hapus");
            deletekategori.style.display = "none";
        }

        function deleteItem() {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }

        function deleteKategori(button) {
        var id = $(button).data('id');
        var nama = $(button).data('nama');
  if (confirm("Apakah Anda yakin ingin menghapus kategori " + nama + "?")) {
    $.ajax({
      url: "{{ url('kategori') }}/" + id,
      type: 'DELETE',
      data: {
        _token: "{{ csrf_token() }}",
      },
      success: function(result) {
        $('#users-table').DataTable().ajax.reload();
      },
      error: function(xhr, status, error) {
        $('#users-table').DataTable().ajax.reload();
      }
    });
  }
}


    </script>

    <div id="hapus" class="modal">
        <div class="modal-content" style="">
            <div class="modal-header">
                <p class="headP">Konfirmasi Hapus </p>
                <span onclick="closedeletekategori()" class="close">&times;</span>
            </div>
            <div class="modal-body">
                <form action="{{ url('kategori') }}" style="margin: 15px">
                    <input type="hidden" name="id_kategori" value="">
                    <div class="p">
                        <p class="confirm-hapus">Apakah Anda Yakin Ingin Menghapus Collaboration Ini ?</p>
                    </div>
                    <div class="submit" style="">
                        <div class="btn-batal">
                            <button onclick="closedeletekategori()" type="button" class="button_close btn-close">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button id="btn-hapus-modal" class="button2">Hapus</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal add_collab --}}
    <div id="add_modal_kategori" class="modal">
        <div class="modal-content-kategori">
            <div class="modal-header">
                <p class="headP">Tambah Kategori</p>
                <span onclick="closeaddkategori()" class="close">&times;</span>
            </div>
            <div class="modal-body-kategori">
                <form id="formTambahKategori" method="POST" action="/kategori/tambah"
                enctype="multipart/form-data" style="margin: 15px">
                @csrf
                    <div class="collab">
                        <label for="" class="label-gambar">Nama Kategori</label>
                        <input type="text" name="name" class="botImg" required>
                    </div>
                    <div class="collab">
                        <label for="" class="label-gambar">Warna Kategori</label>
                        <input type="color" name="color" required class="botImg"style="margin-top: 0%;margin-bottom: 3%;width:10%">
                    </div>
                    <div class="collab">
                        <label for="sl_custmMsg" class="label-gambar">Masukkan Icon</label>
                        <div class="botImg">
                            <input type="file" hidden="hidden" name="icon" required id="sl_file" accept="image/*">
                            <span id="sl_custmMsg" class="customMsg" style="margin-left: 3px">Tidak ada file yang
                                dipilih</span>
                            <button style="cursor: pointer" type="button" id="sl_upBtn" class="btn-gam">Pilih
                                file</button>
                        </div>
                        {{-- <div class="form-group">
                            <label for="iconKategori">Icon Kategori</label>
                            <input type="file" class="form-control-file" id="iconKategori" name="icon"
                                accept="image/*" required>
                        </div> --}}
                    </div>
                    <div class="submit">
                        <div class="btn-batal">
                            <button type="button" onclick="closeaddkategori()"
                                class="button_close btn-close">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button type="submit" class="button2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function add_kategori() {
            var add_kategori = document.getElementById("add_modal_kategori");
            add_kategori.style.display = "flex";
        }

        function closeaddkategori() {
            var add_kategori = document.getElementById("add_modal_kategori");
            add_kategori.style.display = "none";
        }

        function deleteItem() {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }

        // var modal = document.getElementById("myModal");
        // var btn = document.getElementById("myBtn");
        // var modal2 = document.getElementById("add_modal_collab");
        // var btn2 = document.getElementById("add_collab");
        // var modal_hapus = document.getElementById("hapus");
        // var btn_hapus = document.getElementById("btn-hapus");
        // var span1 = document.getElementsByClassName("close")[0];
        // var span = document.getElementsByClassName("close")[1];
        // var span_hapus = document.getElementsByClassName("close")[2];
        // var btn_close = document.getElementsByClassName("btn-close")[0];
        // var btn_close2 = document.getElementsByClassName("btn-close")[1];

        // btn.onclick = function() {
        //     modal.style.display = "flex";
        // }

        // span1.onclick = function() {
        //     modal.style.display = "none";
        // }

        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     }
        // }

        // btn2.onclick = function() {
        //     modal2.style.display = "flex";
        // }

        // span.onclick = function() {
        //     modal2.style.display = "none";
        // }

        // btn_close.onclick = function() {
        //     modal2.style.display = "none";
        // }

        // btn_hapus.onclick = function() {
        //     modal_hapus.style.display = "flex";
        // }

        // span_hapus.onclick = function() {
        //     modal_hapus.style.display = "none";
        // }

        // btn_close.onclick = function() {
        //     modal2.style.display = "none";
        // }

        // btn_close2.onclick = function() {
        //     modal_hapus.style.display = "none";
        // }

        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     } else if (event.target == modal2) {
        //         modal2.style.display = "none";
        //     } else if (event.target == modal_hapus) {
        //         modal_hapus.style.display = "none";
        //     }
        // }
    </script>
    <script>
        var Sl_filebtn = document.getElementById("sl_file");
        var Sl_customtxt = document.getElementById("sl_custmMsg");
        var Sl_upbtn = document.getElementById("sl_upBtn");

        Sl_upbtn.addEventListener("click", function() {
            Sl_filebtn.click();
        });

        Sl_customtxt.addEventListener("click", function() {
            Sl_filebtn.click();
        })

        Sl_filebtn.addEventListener("change", function() {
            if (Sl_filebtn.value) {
                Sl_customtxt.innerHTML = Sl_filebtn.value.match(
                    /[\/\\]([\w\d\s\.\-\(\)]+)$/
                )[1]
            } else {
                Sl_customtxt.innerHTML = "Tidak Ada File Yang Di Pilih.";
            }
        })
        

        //   // Submit form tambah kategori menggunakan AJAX
        //   $('#formTambahKategori').submit(function(e) {
        //     e.preventDefault();
        //     var formData = new FormData(this);
        //     $.ajax({
        //         url: $(this).attr('action'),
        //         type: 'POST',
        //         data: formData,
        //         processData: false,
        //         contentType: false,
        //         success: function(data) {
        //             // Refresh tabel
        //             $('#users-table').DataTable().ajax.reload();
        //             // Tutup modal
        //             $('#add_modal_kategori').modal('hide');
        //             // Reset form
        //             $('#formTambahKategori')[0].reset();
        //         },
        //         error: function(data) {
        //             console.log(data);
        //         }
        //     });
        // });
    </script>
@endsection
