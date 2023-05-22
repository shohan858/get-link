@extends('admin.layout.base')

@section('admin_konten')
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
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
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            /* Could be more or less, depending on screen size */
            height: 80%;
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

        .content {
            position: absolute;
            display: flex;
            width: 100%;
            /* height: 100vh; */
            /* top: 100px; */
            margin: 0px;
        }

        /* .content {
        height: 50vh;
    } */
        .profil-content {

            margin-left: 3%;
            width: 100%;
        }

        /* .hidden {
    opacity: 0;
    filter: blur(5px);
    transform: translateX(100%);
    transition: all 0.7s;
    } */
        .profil_kanan {
            align-items: center;
            justify-content: center;
            height: fit-content;
            width: 70%;
        }

        .profil_h1 {
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 32px;
            line-height: 38px;
            color: #aa0000;
        }

        .gmbTamp {
            /* align-items: center; */
            /* justify-content: center; */
            width: 80%;
            height: fit-content;
            display: flex;
        }

        .profil_img {
            object-fit: cover;
            width: 370px;
            height: 370px;
            border-radius: 15px;
            background-color: #aa0000
        }

        .profil_addGmb {
            cursor: pointer;
            margin: 12px 0px;
            width: 80%;
            height: 46px;
            background: #524799;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 16px;
            color: #ffffff;
        }

        .profil_addGmb:hover {
            background-color: #fff;
            color: #524799;
            border: 2px solid #524799;
        }

        .profil_hapusAkun {
            cursor: pointer;
            width: 80%;
            height: 46px;
            background: #aa0000;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 16px;
            color: #ffffff;
        }

        .profil_hapusAkun:hover {
            background-color: #fff;
            color: #aa0000;
            border: 2px solid #aa0000;
        }

        .profil_kiri {
            width: 55%;
            /* display: flex; */
            /* height: 100vh; */
            /* margin-top: 120px; */
        }

        .profil_form {
            margin-top: 25%;
            margin-left: 5px;
        }

        /* .profil_label {
    font-family: "Roboto", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 13px;
    line-height: 15px;
    color: #292929;
    }  */
        .profil_input {
            width: 95%;
            height: 42px;
            background: #fafafa;
            border: 1px solid #e1e1e1;
            border-radius: 10px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 15px;
            color: #949494;
            margin-bottom: 12px;
        }

        .form_bottom {
            width: 100%;
            height: fit-content;
            display: flex;
        }

        .profil_batal {
            cursor: pointer;
            width: 82px;
            height: 38px;
            background: #cccccc;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 16px;
            color: #ffffff;
            margin-right: 12px;
        }

        .profil_simpan {
            cursor: pointer;
            width: 82px;
            height: 38px;
            background: #524799;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 16px;
            color: #ffffff;
        }

        .del-com-modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .profil-content-isi {
            width: 100%;
            height: 100vh;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
        }

        .del-com-modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* .navAni {
    opacity: 0;
    filter: blur(5px);
    transform: translateY(-100%);
    transition: all 0.7s;
    } */
        .del-conmo {
            background-color: #fefefe;
            margin: auto;
            padding: 2%;
            border-radius: 5px;
            width: 50%;
        }

        .del-close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .del-hapus-tulisan1 {
            width: 186px;
            height: 17px;
            left: 26px;
            top: 28px;

            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            font-style: normal;
            font-weight: 750;
            font-size: 20px;
            line-height: 23px;

            color: #6b75e6;
        }

        .del-hapus-tulisan2 {
            width: 60%;
            height: 28%;
            left: 26px;
            top: 58px;

            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 18px;

            color: #cccccc;
        }

        .del-bungkus-hapusbutton {
            display: flex;
            margin-left: 50%;
        }

        .del-batal-button {
            margin-right: 5%;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 18px;

            color: #cccccc;
            width: 79px;
            height: 26px;
            left: 362px;
            top: 88px;
            cursor: pointer;
            background: #f4f4f4;
            border-radius: 5px;
            border-color: #f4f4f4;
        }

        .del-hapus-button {
            color: white;
            width: 79px;
            height: 26px;
            left: 500px;
            top: 86px;
            cursor: pointer;
            background: #524799;
            border-radius: 5px;
            border-color: #524799;
        }

        /* menyesuaikan lebar modal pada ukuran layar yang lebih kecil dari 600px */
        @media only screen and (max-width: 600px) {
            .modal-content {
                width: 70%;
                height: 110%;
            }

            .profil-content-isi {
                display: block;
                justify-content: center;
            }

            .profil_img {
                object-fit: cover;
                width: 170px;
                height: 170px;
                border-radius: 15px;
                margin-left: 50%;
            }

            .profil_form {
                margin-left: 50%;

            }

            .profil_input {
                width: 200%
            }
        }

        /* menyesuaikan tata letak modal pada ukuran layar yang lebih kecil dari 768px */
        @media only screen and (max-width: 768px) {
            .modal-content {
                width: 70%;
                height: 110%;
            }

            .profil-content-isi {
                display: block;
                justify-content: center;
            }

            .profil_img {
                object-fit: cover;
                width: 170px;
                height: 170px;
                border-radius: 15px;
                margin-left: 50%;
            }

            .profil_form {
                margin-left: 50%;

            }

            .profil_input {
                width: 200%
            }
        }
    </style>
    <style type="text/css">
        .paginate_button {
            border-radius: 10px;
            background-color: #fff !important;
            /* ubah warna latar belakang sesuai keinginan */
            border: 1px solid #cccccc !important;
            /* hilangkan garis pembatas jika tidak dibutuhkan */
        }

        .paginate_button.current {
            background-color: #cccccc !important;
            color: #fff !important;
        }

        .pagination .active a {
            background-color: #cccccc;
            /* ubah warna latar belakang tombol aktif */
            color: #fff !important;
            /* ubah warna teks tombol aktif */
        }

        .pagination a {
            color: #007bff;
            /* ubah warna teks tombol */
        }

        .paginate_button:hover {
            background-color: #cccccc !important;
            /* ubah warna latar belakang tombol saat dihover */
            color: #fff !important;
            /* ubah warna teks tombol saat dihover */
        }
    </style>

    <div class="adMicro">
        <table id="users-table" class="table table-striped table-bordered" style="width: 100%;">
            <thead style="position: sticky; top: 0;">
                <tr>
                    <th style="border-radius: 10px 0 0 0">Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th style="border-radius: 0 10px 0 0 ">Aksi</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script>

    <script>
        $(function() {
            $('#users-table').DataTable({
                ajax: {
                    url: "{{ route('getdata_akun') }}",
                },
                columns: [{
                        data: 'id',
                        orderable: false, // Menonaktifkan pengurutan untuk kolom ini
                        render: function(data, type, row, meta) {
                            // Mengembalikan nomor urut berdasarkan nomor indeks
                            return meta.row + 1;
                        },
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'role',
                        name: 'role'
                    },
                    {
                        data: null,
                        name: 'aksi',
                        render: function(data, type, row) {
                            return '<button onclick="showDetail(' + row.id +
                                ')" class="detail-btn"><i class="fas fa-info"></i></button>';
                        }
                    }
                ]
            });
        });

        function showDetail(id) {
            // Ambil data akun dari server
            $.ajax({
                url: '/users/' + id,
                type: 'GET',
                success: function(response) {
                    $('#username').val(response.data.name);
                    $('#email').val(response.data.email);
                    $('#jumlah_microsite').val(response.data.jumlah_microsite);
                    $('#jumlah_slot').val(response.data.batas_microsite);
                    $('#imgPreview').attr('src', response.data.img ? '/gambar/' + response.data.img :
                        '{{ asset('assets/img/av.png') }}');
                    let createdAt = new Date(response.data.created_at);
                    let createdDate = createdAt.toISOString().substring(0, 19);
                    $('#created_at').val(createdDate);


                },
                error: function(xhr) {
                    alert('Terjadi kesalahan: ' + xhr.responseText);
                }
            });

            // Tampilkan modal
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
        }

        // Event listener untuk menutup modal
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        // Event listener untuk menutup modal saat mengklik area di luar modal
        window.onclick = function(event) {
            var modal = document.getElementById("myModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="anim profil-content-isi">
                <div class="profil_kanan">
                    {{-- <span class="close">&times;</span> --}}
                    <h1 class="profil_h1">Detail Akun</h1>
                    <div class="gmbTamp">
                        <img src="" alt="image" class="profil_img" id="imgPreview">
                    </div>
                </div>
                <div class="profil_kiri">
                    <span class="close" onclick="btn_close()">&times;</span>
                    <form id="edit" class="profil_form">
                        <label class="profil_label" for="username">Username</label>
                        <input value="" type="text" disabled name="username" id="username" class="profil_input">
                        <label class="profil_label" for="email">Email</label>
                        <input value="" type="email" disabled name="email" id="email" class="profil_input">
                        <label class="profil_label" for="email">Akun Dibuat</label>
                        <input value="" type="datetime-local" disabled name="created_at" id="created_at"
                            class="profil_input">
                        <label class="profil_label" for="email">Jumlah Microsite</label><br>
                        <input value="" type="number" disabled name="jumlah" id="jumlah_microsite"
                            class="profil_input">
                        <label class="profil_label" for="email">Jumlah Slot Microsite</label>
                        <input value="" type="number" disabled name="jumlah_slot" id="jumlah_slot"
                            class="profil_input">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function btn_close() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>

    <div class="adMicro">
        <table id="users-table-user" class="table table-striped table-bordered" style="width: 100%;">
            <thead style="position: sticky; top: 0;">
                <tr>
                    <th style="border-radius: 10px 0 0 0">Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th style="border-radius: 0 10px 0 0 ">Aksi</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
    <script>
        $(function() {
            $('#users-table-user').DataTable({
                ajax: {
                    url: "{{ route('getdata_akun_user') }}",
                },
                columns: [{
                        data: 'id',
                        orderable: false, // Menonaktifkan pengurutan untuk kolom ini
                        render: function(data, type, row, meta) {
                            // Mengembalikan nomor urut berdasarkan nomor indeks
                            return meta.row + 1;
                        },
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'role',
                        name: 'role'
                    },
                    {
                        data: null,
                        name: 'aksi',
                        render: function(data, type, row) {
                            return '<button onclick="showDetail(' + row.id +
                                ')" class="detail-btn"><i class="fas fa-info"></i></button>';
                        }
                    }
                ]
            });
        });
    </script>
@endsection
