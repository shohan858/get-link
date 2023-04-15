@extends('admin.layout.base')

@section('admin_konten')
    <div class="button-kanan">
        <button class="button1" onclick="add_paket()" id="add_kategori" style="cursor: pointer;margin:1% 1% 3% 2.5%"><i
                class="fa-solid fa-plus"></i> Tambah Paket</button>
        {{-- <button class="button2" id="myBtn"><i class="fa-regular fa-eye"></i> Preview</button> --}}
    </div>
    <div class="adMicro">
        <table id="users-table" class="table table-striped table-bordered" style=" width: 100%;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                    <th>Slot</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> --}}
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
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
                ajax: "{{ route('get_paket_microsite') }}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'type'
                    },
                    {
                        data: 'harga',
                        render: function(data) {
                            return parseInt(data).toLocaleString().replace(/,/g, '.');
                        }
                    },
                    {
                        data: 'slot'
                    },
                    {
                        data: 'id',
                        name: 'id',
                        render: function(data, type, full, meta) {
                            return '<button class="katHap" data-id="' + data +
                                '" data-nama="' + full.name +
                                '" onclick="delete_paket(this)"><i class="fa-solid fa-trash" style="color:#fff;cursor: pointer;"></i></button>';
                        }
                    }
                ]
            });
        });
    </script>

    {{-- Modal add_paket --}}
    <div id="add_modal_paket" class="modal">
        <div class="modal-content-paket" style="">
            <div class="modal-header">
                <p class="headP">Tambah Paket</p>
                <span onclick="closeaddpaket()" class="close">&times;</span>
            </div>
            <div class="modal-body-paket">
                <form id="formTambahKategori" method="POST" action="{{ route('tambah_paket_microsite') }}"
                enctype="multipart/form-data" style="margin: 15px">
                @csrf
                    <div class="collab">
                        <label for="" class="label-gambar-pak">Nama Paket</label>
                        <input type="text" class="botImg-pak" style="" name="name" required>
                    </div>
                    <label for="" class="label-gambar-pak" style="margin-top: 12px;">Tipe</label>
                    <div class="collab-radio">

                        <label for="" class="label-gambar-pak"><input type="radio" class=""
                                style="margin-left:15px"  name="type">Microsite</label>

                        <label for="" class="label-gambar-pak"><input type="radio" name="type" class=""
                                style="margin-left:15px">CMS Template</label>
                    </div>
                    <div class="collab">
                        <label for="" class="label-gambar-pak">Harga Paket</label>
                        <input type="number" class="botImg-pak" style="" name="harga" required>
                    </div>
                    <div class="collab">
                        <label for="" class="label-gambar-pak">Jumlah Slot</label>
                        <input type="number" class="botImg-pak" style="" name="slot" required>
                    </div>
                    <div class="submit">
                        <div class="btn-batal">
                            <button type="button" onclick="closeaddpaket()" class="button_close btn-close">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button type="submit" class="button2" style="margin-right: 15px;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function add_paket() {
            var add_paket = document.getElementById("add_modal_paket");
            add_paket.style.display = "flex";
        }

        function closeaddpaket() {
            var add_paket = document.getElementById("add_modal_paket");
            add_paket.style.display = "none";
        }

        function deleteItem() {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }

        function delete_paket(button) {
            var id = $(button).data('id');
            var nama = $(button).data('nama');
            console.log(id);
            if (confirm("Apakah Anda yakin ingin menghapus kategori " + nama + "?")) {
                $.ajax({
                    url: "{{ url('delete_paket_microsite') }}/" + id,
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(result) {
                        // alert(result.message);
                        $('#users_table').DataTable().ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        // alert(xhr.responseText);
                        $('#users-table').DataTable().ajax.reload();

                    }
                });
            }
        }

        // // Submit form tambah kategori menggunakan AJAX
        // $('#formTambahKategori').submit(function(e) {
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
        //             $('#users_table').DataTable().ajax.reload();
        //             // Tutup modal
        //             $('#modalTambahKategori').modal('hide');
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
