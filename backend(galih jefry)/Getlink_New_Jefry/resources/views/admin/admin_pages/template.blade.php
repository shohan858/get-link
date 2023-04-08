@extends('admin.layout.base')

@section('admin_konten')
    <div class="button-kanan">
        <button class="button1" onclick="add_template()" id="add_template" style="cursor: pointer;margin:1% 1% 3% 2.5%"><i
                class="fa-solid fa-plus"></i> Tambah Template</button>
        {{-- <button class="button2" id="myBtn"><i class="fa-regular fa-eye"></i> Preview</button> --}}
    </div>

    <div class="adtemp">
        <table id="users-table" class="table table-striped table-bordered" style=" width: 100%;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Id kategory</th>
                    <th>Id komponen</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Background</th>
                    <th>Type background</th>
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
                // searchClass: 'my-custom-search-class',
                // table
                // .search(inputValue)
                // .draw();

                // $('#myTable_filter input[type="search"]').addClass('my-custom-search-class');

                // processing: true,
                // serverSide: true,
                ajax:  "{{ route('getdata_template') }}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'id_kategori'
                    },
                    {
                        data: 'id_komponen'
                    },
                    {
                        data: 'image',
                        render: function(data, type, full, meta) {
                            return '<img src="/gambar/' + data + '" width="100" height="100">';
                        }
                    },
                    {
                        data: 'title'
                    },
                    {
                        data: 'background',
                        type: 'type_background',
                        render: function(data, type, full, meta) {
                            if (type === 'display') {
                                if (full.type_background === 'image') {
                                    return '<img src="/gambar/' + data +
                                        '" width="100" height="100">';
                                } else if (full.type_background === 'color') {
                                    return '<div style="background-color:' + data +
                                        '; width:50px; height:50px;"></div>';
                                }
                            }
                            return data;
                        }
                    },
                    {
                        data: 'type_background',
                    },   
                    {
                        data: 'id',
                        title: 'Aksi',
                        render: function(data, type, full, meta) {
                            return '<button class="katHap" data-id="' + data +
                                '" data-nama="' + full.title +
                                '" onclick="deleteKategori(this)"><i class="fa-solid fa-trash" style="color:#fff;cursor: pointer;"></i></button>' 
                                // +
                                // '<a href="/edit_template/'+data+'" class="btn btn-warning btn-sm mx-1">Update</a>';
                        }
                    },
                ]
            });
        });

        function deleteKategori(button) {
            var id = $(button).data('id');
            var nama = $(button).data('nama');

            if (confirm("Apakah Anda yakin ingin menghapus kategori " + nama + "?")) {
                $.ajax({
                    url: "{{ url('template') }}/" + id,
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
                        swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Berhasil Hapus Link',
                            timer: '900',
                        });
                    }

                });
            }
        }
    </script>

    {{-- Modal template --}}
    <div id="add_modal_template" class="modal">
        <div class="modal-content-template" style="">
            <div class="modal-header">
                <p class="headP">Tambah Template</p>
                <span onclick="closeaddtemplate()" class="close">&times;</span>
            </div>
            <div class="modal-body-template">
                <form id="formTambahKategori" method="POST" action="{{ route('tambah_template') }}" style="margin: 15px"enctype="multipart/form-data">
                    @csrf
                    <div class="collab" style="display:block">
                        <label for="" class="label-gambar">Nama Template</label>
                        <input type="text" name="title" required class="botImg" style="margin-top: 0%;margin-bottom: 3%;outline:none">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1" class="label-gambar">Kategori</label>
                        <select class="botImg-temp" id="exampleSelect1"
                            style="margin-top: 0%;margin-bottom: 3%;outline:none" name="id_kategori" required>
                            @foreach ($kategori as $kategoris)
                                <option value="{{ $kategoris->id }}">{{ $kategoris->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="collab" style="display:block">
                        <label for="" class="label-gambar">Komponen</label><br>
                        <div class="" style="display: flex;color:grey">
                            <div class="" style="display: block;margin-right: 20%">
                                @foreach ($komponen as $komponens)
                                    <input type="checkbox" name="id_komponen[]" value="{{ $komponens->id }}" id="option{{ $komponens->id }}">
                                    <label for="option{{ $komponens->id }}"> {{ $komponens->name }}</label><br>
                                @endforeach
                                {{-- <input type="checkbox" name="fruit" value="apple">
                                <label for="fruit">Apple</label><br>
                                <input type="checkbox" name="fruit" value="apple">
                                <label for="fruit">Apple</label><br>
                                <input type="checkbox" name="fruit" value="apple">
                                <label for="fruit">Apple</label><br>
                                <input type="checkbox" name="fruit" value="apple">
                                <label for="fruit">Apple</label><br>
                                <input type="checkbox" name="fruit" value="apple">
                                <label for="fruit">Apple</label><br> --}}
                            </div>
                            {{-- <div class="" style="display: block">
                                <input type="checkbox" name="fruit" value="apple">
                                <label for="fruit">Apple</label><br>
                                <input type="checkbox" name="fruit" value="apple">
                                <label for="fruit">Apple</label><br>
                                <input type="checkbox" name="fruit" value="apple">
                                <label for="fruit">Apple</label><br>
                                <input type="checkbox" name="fruit" value="apple">
                                <label for="fruit">Apple</label><br>
                                <input type="checkbox" name="fruit" value="apple">
                                <label for="fruit">Apple</label><br>
                            </div> --}}
                        </div>
                    </div>
                    <div class="collab" style="display:block;margin-top:3%">
                        <label for="sl_custmMsg" class="label-gambar">Masukkan Gambar</label>
                        <div class="botImg" style="margin-top: 0%;margin-bottom: 3%;">
                            <input type="file" hidden="hidden" name="image" required id="sl_file">
                            <span id="sl_custmMsg" class="customMsg" style="margin-left: 3px">Tidak ada file yang
                                dipilih</span>
                            <button style="cursor: pointer" type="button" id="sl_upBtn" class="btn-gam">Pilih
                                file</button>
                        </div>
                    </div>
                    <div class="collab" style="display:block">
                        <label for="" class="label-gambar">Tipe Background</label><br>
                        <input class="form-check-input" type="radio" name="type_background" id="exampleRadios1"
                            value="color" onclick="showColorInput()">
                        <label class="form-check-label" for="exampleRadios1" class="label-gambar">
                            Color
                        </label>
                        <input class="form-check-input" type="radio" name="type_background" id="exampleRadios2"
                            value="image" onclick="showImageInput()">
                        <label class="form-check-label" for="exampleRadios2" class="label-gambar">
                            Image
                        </label>
                    </div>
                    <div class="collab" style="display:block">
                        <div class="collab" id="colorInput" style="display:none;margin-top:3%">
                            <label for="color" class="label-gambar">Background Color</label><br>
                            <input type="color" name="background" id="color" class="botImg"
                                style="margin-top: 0%;margin-bottom: 3%;">
                        </div>
                        <div class="collab" id="imageInput" style="display:none;margin-top:3%">
                            <label for="sl_custmMsg" class="label-gambar">Masukkan Gambar</label>
                            <div class="botImg-spes">
                                <input type="file" hidden="hidden" name="background" id="sl_file2">
                                <div class="divSpan">


                                    <span id="sl_custmMsg2" class="customMsg"
                                        >Tidak ada file yang
                                        dipilih</span>

                                </div>
                                <button style="cursor: pointer;" type="button"
                                    id="sl_upBtn2" class="btn-gam">Pilih
                                    file</button>
                            </div>
                        </div>
                    </div>
                    <div class="submit" id="submit">
                        <div class="btn-batal" style="margin-right:5%">
                            <button type="button" onclick="closeaddtemplate()"
                                class="button_close btn-close">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button type="submit" class="button2">Submit</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>

    <script>
        function add_template() {
            var add_template = document.getElementById("add_modal_template");
            add_template.style.display = "flex";
        }

        function closeaddtemplate() {
            var add_template = document.getElementById("add_modal_template");
            add_template.style.display = "none";
        }

        function deleteItem() {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }
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
    </script>
    <script>
        var Sl_filebtn2 = document.getElementById("sl_file2");
        var Sl_customtxt2 = document.getElementById("sl_custmMsg2");
        var Sl_upbtn2 = document.getElementById("sl_upBtn2");

        Sl_upbtn2.addEventListener("click", function() {
            Sl_filebtn2.click();
        });

        Sl_customtxt2.addEventListener("click", function() {
            Sl_filebtn2.click();
        })

        Sl_filebtn2.addEventListener("change", function() {
            if (Sl_filebtn2.value) {
                Sl_customtxt2.innerHTML = Sl_filebtn2.value.match(
                    /[\/\\]([\w\d\s\.\-\(\)]+)$/
                )[1]
            } else {
                Sl_customtxt2.innerHTML = "Tidak Ada File Yang Di Pilih.";
            }
        })
    </script>
    <script>
        function showColorInput() {
            document.getElementById("colorInput").style.display = "block";
            document.getElementById("imageInput").style.display = "none";
        }

        function showImageInput() {
            document.getElementById("colorInput").style.display = "none";
            document.getElementById("imageInput").style.display = "block";
        }
    </script>
@endsection
