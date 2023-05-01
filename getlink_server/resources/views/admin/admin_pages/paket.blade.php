@extends('admin.layout.base')

@section('admin_konten')
<style>
    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 10% auto; /* 10% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
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
    <div class="button-kanan">
        <button class="button1" onclick="add_paket()" id="add_kategori" style="cursor: pointer;margin:1% 1% 3% 2.5%"><i
                class="fa-solid fa-plus"></i> Tambah Paket</button>
    </div>
    <div class="adMicro">
        <table id="users-table" class="table table-striped table-bordered" style=" width: 100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                    <th>Slot</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
    <script>
        $(function() {
            $('#users-table').DataTable({
                ajax: "{{ route('get_paket_microsite') }}",
                columns: [
                    {
                        data: 'id',
                        orderable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        },
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
                                    '" onclick="delete_paket(this)"><i class="fa-solid fa-trash" style="color:#fff;cursor: pointer;"></i></button>'+
                                    '<button class="edit-btn" onclick="editPaket(' + data + ')"><i class="fa-solid fa-pen"></i></button>';
                        }
                    }
                ]
            });
        });
    </script>



    {{-- Modal Edit_paket --}}
    <div id="edit-paket-modal" class="modal">
        <div class="modal-content-paket" style="">
            <div class="modal-header">
                <p class="headP">Tambah Paket</p>
                <span onclick="closeEdit()" class="close">&times;</span>
            </div>
            <div class="modal-body-paket">
                <form id="formEditPaket" method="POST" action=""
                enctype="multipart/form-data" style="margin: 15px" onsubmit="validateFormEdit()">
                @csrf
                @method('put')
                <input type="number" hidden name="id" id="edit-paket-id">
                    <div class="collab">
                        <label for="" class="label-gambar-pak">Nama Paket</label>
                        <input type="text" id="edit-paket-name" class="botImg-pak" style="" name="name" required>
                    </div>
                    <label for="" class="label-gambar-pak" style="margin-top: 12px;">Tipe</label>
                    <div class="collab-radio">

                        <label for="" class="label-gambar-pak"><input type="radio" class=""
                                style="margin-left:15px"  name="type" id="tipe-microsite" value="microsite">Microsite</label>

                        <label for="" class="label-gambar-pak"><input type="radio" name="type" class=""
                                style="margin-left:15px" id="tipe-cms" value="cms">CMS Template</label>
                        <label for="" class="label-gambar-pak"><input type="radio" name="type" class=""
                                style="margin-left:15px" id="tipe-shortlink" value="shortlink">Short Link</label>
                    </div>
                    <div class="collab">
                        <label for="" class="label-gambar-pak">Harga Paket</label>
                        <input type="number" class="botImg-pak" style="" name="harga" required id="edit-paket-harga">
                    </div>
                    <div class="collab">
                        <label for="" class="label-gambar-pak">Jumlah Slot</label>
                        <input type="number" class="botImg-pak" style="" name="slot" required id="edit-paket-jumlah">
                    </div>
                    <div class="submit">
                        <div class="btn-batal">
                            <button type="button" onclick="closeEdit()" class="button_close btn-close">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button type="submit" class="button2" style="margin-right: 15px;">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- Modal add_paket --}}
    <div id="add_modal_paket" class="modal">
        <div class="modal-content-paket" style="">
            <div class="modal-header">
                <p class="headP">Tambah Paket</p>
                <span onclick="closeaddpaket()" class="close">&times;</span>
            </div>
            <div class="modal-body-paket">
                <form id="tambah_paket" onsubmit="return validateForm()" method="POST" action="{{ route('tambah_paket_microsite') }}"
                enctype="multipart/form-data" style="margin: 15px">
                @csrf
                    <div class="collab">
                        <label for="" class="label-gambar-pak">Nama Paket</label>
                        <input type="text" class="botImg-pak" style="" name="name" required>
                    </div>
                    <label for="" class="label-gambar-pak" style="margin-top: 12px;">Tipe</label>
                    <div class="collab-radio">

                        <label for="" class="label-gambar-pak"><input type="radio" class=""
                                style="margin-left:15px"  name="type" value="microsite">Microsite</label>

                        <label for="" class="label-gambar-pak"><input type="radio" name="type" class=""
                                style="margin-left:15px" value="cms">CMS Template</label>
                        <label for="" class="label-gambar-pak"><input type="radio" name="type" class=""
                                style="margin-left:15px" value="short link">Short Link</label>
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
        function validateForm() {
            var nama = document.forms["tambah_paket"]["name"].value;
            var tipe = document.forms["tambah_paket"]["type"].value;
            var harga_paket = document.forms["tambah_paket"]["harga"].value;
            var slot_paket = document.forms["tambah_paket"]["slot"].value;

            if (nama == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Nama Paket harus diisi",
                });
                return false;
            }

            if (tipe == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Type harus diisi",
                });
                return false;
            }

            if (harga_paket == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Harga Paket harus diisi",
                });
                return false;
            } else if (harga_paket < 1000) {

                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Harga Tidak Boleh Kurang Dari 1000 Rupiah",
                });
                return false;
            }

            if (slot_paket == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Jumlah Slot Paket harus diisi",
                });
                return false;
            } else if (slot_paket < 1) {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Slot Tidak Boleh Kurang Dari 1",
                });
                return false;
            }

            Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "Berhasil Tambah Paket "+name,
                });
            return true;
        }

        function validateFormEdit() {
            var editnama = document.forms["formEditPaket"]["name"].value;
            var edittipe = document.forms["formEditPaket"]["type"].value;
            var editharga_paket = document.forms["formEditPaket"]["harga"].value;
            var editslot_paket = document.forms["formEditPaket"]["slot"].value;

            if (editnama == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Nama Paket harus diisi",
                });
                return false;
            }

            if (edittipe == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Type harus diisi",
                });
                return false;
            }

            if (editharga_paket == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Harga Paket harus diisi",
                });
                return false;
            } else if (editharga_paket < 1000) {

                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Harga Tidak Boleh Kurang Dari 1000 Rupiah",
                });
                return false;
            }

            if (editslot_paket == "") {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Jumlah Slot Paket harus diisi",
                });
                return false;
            } else if (editslot_paket < 1) {
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Slot Tidak Boleh Kurang Dari 1",
                });
                return false;
            }

            Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "Berhasil Edit Paket "+name,
                });
            return true;
            
        }
    </script>

<script>
    function editPaket(id) {  
      // Ambil data kategori berdasarkan id dari server
      $.ajax({
        url: "{{ url('paket') }}/" + id,
        type: 'GET',
        dataType: 'json',
        success: function(result) {
            // alert(id)
          // Tampilkan modal edit kategori
          var url = "{{ url('paket/edit') }}/" + id;
        //   alert(url)
        document.getElementById("formEditPaket").action = url;
          $('#edit-paket-id').val(result.id);
          $('#edit-paket-name').val(result.name);
          $('#edit-paket-tipe').val(result.type);
          $('#edit-paket-harga').val(result.harga);
          $('#edit-paket-jumlah').val(result.slot);
          
          if (result.type === 'microsite') {
            // alert(id)
            $('#tipe-microsite').prop('checked', true);
        }else if (result.type === 'cms') {
            $('#tipe-cms').prop('checked', true);
        }else if (result.type === 'shortlink') {
            $('#tipe-shortlink').prop('checked', true);
        } 
          $('#edit-paket-modal').css('display', 'flex');
        // Validasi form
        $('#formEditPaket').submit(function(event) {
    event.preventDefault();
    if (validateFormEdit()) {
      this.submit();
    }
  });
       
        },

        
        error: function(xhr, status, error) {
          console.log(error);
        }
      });
    }

    function closeEdit() {
    $('#edit-paket-modal').css('display', 'none');
    }
</script>

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
                        Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "Berhasil Hapus Template "+nama,
                });
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