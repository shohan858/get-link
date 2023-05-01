@extends('admin.layout.base')

@section('admin_konten')
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 9999;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            /* 10% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .swal2-container {
  z-index: 99999;
}

    </style>
    <style type="text/css">
        .paginate_button {
            border-radius: 10px;
            background-color: #fff !important;
            /* ubah warna latar belakang sesuai keinginan */
            border: 1px solid #A5A5A5 !important;
            /* hilangkan garis pembatas jika tidak dibutuhkan */
        }

        .paginate_button.current {
            background-color: #A5A5A5 !important;
            color: #fff !important;
        }

        .pagination .active a {
            background-color: #A5A5A5;
            /* ubah warna latar belakang tombol aktif */
            color: #fff !important;
            /* ubah warna teks tombol aktif */
        }

        .pagination a {
            color: #007bff;
            /* ubah warna teks tombol */
        }

        .paginate_button:hover {
            background-color: #A5A5A5 !important;
            /* ubah warna latar belakang tombol saat dihover */
            color: #fff !important;
            /* ubah warna teks tombol saat dihover */
        }
    </style>
    <div class="button-kanan">
        <button class="button1" onclick="add_kategori()" id="add_kategori" style="cursor: pointer;margin:1% 1% 3% 2.5%"><i
                class="fa-solid fa-plus"></i> Tambah Kategori</button>
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

    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
    <script>
        $(function() {
            $('#users-table').DataTable({
                ajax: "{{ route('getdata_kategori') }}",
                columns: [{
                        data: 'id',
                        orderable: false, // Menonaktifkan pengurutan untuk kolom ini
                        render: function(data, type, row, meta) {
                            // Mengembalikan nomor urut berdasarkan nomor indeks
                            return meta.row + 1;
                        },
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
                            return '<img src="/microsite/kategori/' + data +
                                '" width="50" height="50">';
                        }
                    },
                    {
                        data: 'id',
                        name: 'aksi',
                        render: function(data, type, full, meta) {
                            return '<button id="btn-hapus" class="katHap" data-id="' + data +
                                '" data-nama="' + full.name +
                                '" onclick="deleteKategori(this)"style="cursor: pointer;"><i class="fa-solid fa-trash" style="color:#fff"></i></button>' +
                                '<button class="edit-btn" onclick="editKategori(' + data +
                                ')"><i class="fa-solid fa-pen"></i></button>';
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
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Berhasil Edit Data',
                        });
                    },
                    error: function(xhr, status, error) {
                        $('#users-table').DataTable().ajax.reload();
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Berhasil Hapus Data '+nama,
                        });
                    }
                });
            }
        }
    </script>

    <script>
        function editKategori(id) {
            // Ambil data kategori berdasarkan id dari server
            $.ajax({
                url: "{{ url('kategori') }}/" + id,
                type: 'GET',
                dataType: 'json',
                success: function(result) {
                    // alert(id)
                    // Tampilkan modal edit kategori
                    var url = "{{ url('kategori/edit') }}/" + id;
                    //   alert(url)
                    document.getElementById("formTambahKategori").action = url;
                    $('#edit-kategori-id').val(result.id);
                    $('#edit-kategori-name').val(result.name);
                    $('#edit-kategori-color').val(result.color);
                    $('#edit-kategori-modal').css('display', 'flex');
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }


        function updateKategori() {
            var id = $('#edit-kategori-id').val();
            var name = $('#edit-kategori-name').val();
            var color = $('#edit-kategori-color').val();

            // Lakukan request update data kategori ke server
            $.ajax({
                url: "{{ url('kategori/edit') }}/" + id,
                type: 'PUT',
                data: {
                    name: name,
                    color: color
                },
                dataType: 'json',
                success: function(result) {
                    // Tampilkan pesan berhasil diupdate dan reload halaman
                    alert('Data kategori berhasil diupdate!');
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }


        function closeEdit() {
            $('#edit-kategori-modal').css('display', 'none');
        }
    </script>

    {{-- <div id="edit-kategori-modal" class="modal">
    <div class="modal-content">
      <span onclick="closeEdit()" class="close">&times;</span>
      <input type="hidden" id="edit-kategori-id">
      <label for="edit-kategori-name">Name:</label>
      <input type="text" id="edit-kategori-name">
      <label for="edit-kategori-color">Color:</label>
      <input type="color" id="edit-kategori-color">
      <label for="edit-kategori-icon">Icon:</label>
      <input type="file" id="edit-kategori-icon">
      <button onclick="updateKategori()">Simpan</button>
      <button onclick="closeEdit()" class="close-btn">Batal</button>
    </div>
  </div> --}}

    {{-- Modal edit_kategori --}}
    <div id="edit-kategori-modal" class="modal">
        <div class="modal-content-kategori">
            <div class="modal-header">
                <p class="headP">Edit Kategori</p>
                <span onclick="closeEdit()" class="close">&times;</span>
            </div>
            <div class="modal-body-kategori">
                <form id="formTambahKategori" action="" enctype="multipart/form-data" method="POST"
                    style="margin: 15px" onsubmit="return validateFormEdit()">
                    @csrf
                    @method('put')
                    {{-- @method('put') --}}
                    <input type="number" hidden name="id" id="edit-kategori-id">
                    <div class="collab">
                        <label for="" class="label-gambar">Nama Kategori</label>
                        <input type="text" id="edit-kategori-name" name="name" class="botImg" required>
                    </div>
                    <div class="collab">
                        <label for="" class="label-gambar">Warna Kategori</label>
                        <input type="color" id="edit-kategori-color" name="color" required
                            class="botImg"style="margin-top: 0%;margin-bottom: 3%;width:10%">
                    </div>
                    <div class="collab">
                        <label for="sl_custmMsg" class="label-gambar">Masukkan Icon</label>
                        <div class="botImg" style="margin-top:10%;border:none">
                            <input type="file" id="edit-kategori-icon" name="icon" class="dropify" data-height="200"
                                style="width: 300px;" />
                        </div>
                    </div>
                    <div class="submit" style="margin-top:20%">
                        <div class="btn-batal">
                            <button type="button" onclick="closeEdit()" class="button_close btn-close">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button type="submit" onclick="updateKategori()" class="button2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


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
                            <button onclick="closedeletekategori()" type="button"
                                class="button_close btn-close">Batal</button>
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
                <form id="tam_kat" method="POST" action="/kategori/tambah" enctype="multipart/form-data"
                    style="margin: 15px" onsubmit="return validateForm()">
                    @csrf
                    <div class="collab">
                        <label for="" class="label-gambar">Nama Kategori</label>
                        <input type="text" name="name" class="botImg" required>
                    </div>
                    <div class="collab">
                        <label for="" class="label-gambar">Warna Kategori</label>
                        <input type="color" name="color" required
                            class="botImg"style="margin-top: 0%;margin-bottom: 3%;width:10%">
                    </div>
                    <div class="collab">
                        <label for="sl_custmMsg" class="label-gambar">Masukkan Icon</label>
                        <div class="botImg" style="margin-top:10%;border:none">
                            {{-- <input type="file" hidden="hidden" name="icon" required id="sl_file" accept="image/*">
                            <span id="sl_custmMsg" class="customMsg" style="margin-left: 3px">Tidak ada file yang
                                dipilih</span>
                            <button style="cursor: pointer" type="button" id="sl_upBtn" class="btn-gam">Pilih
                                file</button> --}}
                            <input type="file" name="icon" class="dropify" data-height="200"
                                style="width: 300px;" />

                        </div>
                        {{-- <div class="form-group">
                            <label for="iconKategori">Icon Kategori</label>
                            <input type="file" class="form-control-file" id="iconKategori" name="icon"
                                accept="image/*" required>
                        </div> --}}

                    </div>
                    <div class="submit" style="margin-top:20%">
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
        function validateForm() {
            var name = document.forms["tam_kat"]["name"].value;
            var color = document.forms["tam_kat"]["color"].value;
            var icon = document.forms["tam_kat"]["icon"].value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.svg)$/i;

            if (name == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Nama kategori harus diisi",
                });
                return false;
            }

            if (color == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Warna kategori harus diisi",
                });
                return false;
            }

            if (icon == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Icon kategori harus diisi",
                });
                return false;
            } else if (!allowedExtensions.exec(icon)) {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Format file icon tidak sesuai (jpg, jpeg, png, svg)",
                });
                return false;
            }

            Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "Berhasil Tambah Kategori "+name,
                });
            return true;
        }


        function validateFormEdit() {
            var name = document.forms["formTambahKategori"]["name"].value;
            var color = document.forms["formTambahKategori"]["color"].value;
            var icon = document.forms["formTambahKategori"]["icon"].value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.svg)$/i;

            if (name == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Nama kategori harus diisi",
                });
                return false;
            }

            if (color == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Warna kategori harus diisi",
                });
                return false;
            }

            if (icon && !allowedExtensions.exec(icon)) {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Format file icon tidak sesuai (jpg, jpeg, png, svg)",
                });
                return false;
            }

            Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "Berhasil Edit Kategori " + name,
                });
            return true;
        }

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        var dropify = $('.dropify').dropify();

        dropify.on('change', function() {
            var input = this;
            var parentID = $(this).closest('[data-id]').data('id');
            var formData = new FormData();
            formData.append('file', input.files[0]); // Ambil file yang dipilih
            formData.append('id', parentID);

            updateImage(formData, $(this));
        });
    </script>

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
