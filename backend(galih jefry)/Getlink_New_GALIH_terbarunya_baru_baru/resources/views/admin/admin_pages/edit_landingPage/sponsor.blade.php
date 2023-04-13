@extends('admin.layout.base')

@section('admin_konten')
<style>
    .dropify-wrapper {
    height: 100px;
}
.dropify-infos-message {
    font-size: 12px;
}



</style>
    <div class="adSpon">
        <div class="button-kanan">
            <button id="" onclick="add_sponsor()" class="button1"><i class="fa-solid fa-plus"></i> Tambah Collaboration</button>
            <button id="myBtn" onclick="preview()" class="button2"><i class="fa-regular fa-eye"></i> Preview</button>
        </div>
        <table class="data">
            <tr>
                <th>no</th>
                <th>image</th>
                <th>aksi</th>
            </tr>
            @foreach ($data3 as $index => $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td><img src="{{ url('gambar').'/'.$item->image }}" alt="not found" width="10%" height="10%"></td>
                <td>
                    <button class="buttonA" onclick="edit_sponsor({{ $index }})" id="spon_btn"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="buttonB" onclick="del_sponsor({{ $index }})" type="submit" id="btn-hapus"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
            {{-- <tr>
                <td colspan="3">
                    <form action="" class="spon_bottomtab" id="spon_edit">
                        <div class="botHead">
                            <h1 class="both1">Edit Data</h1>
                        </div>
                        <div class="botImg">
                            <input type="file" hidden="hidden" name="" id="spon_file">
                            <span id="spon_custmMsg" class="customMsg">No file chosen, yet.</span>
                            <button style="cursor: pointer" type="button" id="spon_upBtn" class="btn-gam">Select your
                                file</button>
                        </div>
                        <div class="botbtn">
                            <button class="btnSj">Update</button>
                        </div>
                    </form>
                </td>
            </tr> --}}
        </table>
    </div>

    {{-- Modal --}}
     {{-- Modal --}}
     <div id="iframe" class="modal">
        <div class="modal_preview" style="height: 10%"> 
            <div class="modal-header">
                <p class="headP">Preview</p>
                <span onclick="close_preview()" class="close">&times;</span>
            </div>
            <div class="modal-body" >
                <iframe src="/preview/sponsor" height="200%" width="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    {{-- Modal add_collab --}}
    <div id="add_modal_collab" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <p class="headP">Tambah Collaboration</p>
                <span onclick="closeaddsponsor()" class="close">&times;</span>
            </div>
            <div class="modal-body">
                <form action="collab" style="margin: 15px" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="collab">
                        <label for="sl_custmMsg" class="label-gambar">Masukkan Gambar</label>
                        <div class="botImg-spon" style="margin-top: 7%;margin-bottom:5%">
                            <input type="file" name="foto" class="dropify" id="sl_file">
                            {{-- <input type="file" hidden="hidden" name="foto" id="sl_file"> --}}
                            {{-- <span id="sl_custmMsg" class="customMsg" style="margin-left: 3px">Tidak ada file yang
                                dipilih</span>
                            <button style="cursor: pointer" type="button" id="sl_upBtn" class="btn-gam">Pilih
                                file</button> --}}
                        </div>
                    </div>
                    <div class="submit">
                        <div class="btn-batal" style="">
                            <button type="button" class="button_close btn-close" onclick="closeaddsponsor()">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button type="submit" class="button2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($data3 as $index => $item)
    {{-- Modal Hapus --}}
    <div id="hapus{{ $index }}" class="modal">
        <div class="modal-content" style="">
            <div class="modal-header">
                <p class="headP">Konfirmasi Hapus</p>
                <span class="close" onclick="closedelsponsor({{ $index }})">&times;</span>
            </div>
            <div class="modal-body">
                <form action="{{ '/collab/'.$item->id }}" method="POST" style="margin: 15px">
                    @csrf
                    @method('DELETE')
                    <div class="p">
                        <p class="confirm-hapus">Apakah Anda Yakin Ingin Menghapus Collaboration Ini ?</p>
                    </div>
                    <div class="submit" style="">
                        <div class="btn-batal">
                            <button type="button" onclick="closedelsponsor({{ $index }})" class="button_close btn-close">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button type="submit" class="button2">Hapus</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    @foreach ($data3 as $index => $item)
        {{-- Modal edit --}}
    <div id="edit{{ $index }}" class="modal">
        <div class="modal-content" style="">
            <div class="modal-header">
                <p class="headP">Edit Data {{ $item->id }}</p>
                <span class="close" onclick="closeeditsponsor({{ $index }})">&times;</span>
            </div>
            <div class="modal-body">
                <form action="{{ '/collab/'.$item->id }}" method="POST" id="spon_edit" style="margin: 15px" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="" class="label-gambar">Masukkan Gambar</label>
                    <div class="botImg" style="margin-top:0">
                        {{-- <input type="file" hidden="hidden" name="foto" id="spon_file{{ $index }}">
                        <span id="spon_custmMsg{{ $index }}" class="customMsg">No file chosen, yet.</span>
                        <button style="cursor: pointer" type="button" onclick="add_image()" id="spon_upBtn{{ $index }}" class="btn-gam">Select your
                            file</button> --}}
                        <input type="file" name="foto" id="">
                    </div>
                    <div class="submit" style="">
                        <div class="btn-batal">
                            <button type="button" onclick="closeeditsponsor({{ $index }})" class="button_close btn-close">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button type="submit" class="button2">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
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

        var sponBtn = document.getElementById("spon_btn");
        var sponEdit = document.getElementById("spon_edit");

        // sponBtn.addEventListener("click", function() {
        //     sponEdit.classList.toggle("bottomtab_show");
        // });


        var spon_filebtn = document.getElementById("spon_file"+index);
        var spon_customtxt = document.getElementById("spon_custmMsg"+index);
        var spon_upbtn = document.getElementById("spon_upBtn"+index);

        spon_upbtn.addEventListener("click", function() {
            spon_filebtn.click();
        });

        spon_customtxt.addEventListener("click", function() {
            spon_filebtn.click();
        })

        spon_filebtn.addEventListener("change", function() {
            if (spon_filebtn.value) {
                spon_customtxt.innerHTML = spon_filebtn.value.match(
                    /[\/\\]([\w\d\s\.\-\(\)]+)$/
                )[1]
            } else {
                spon_customtxt.innerHTML = "No file chosen, yet.";
            }
        })

        var Sl_filebtn = document.getElementById("sl_file");
        var Sl_customtxt = document.getElementById("sl_custmMsg");
        var Sl_upbtn = document.getElementById("sl_upBtn");

        Sl_upbtn.addEventListener("click", function() {
            Sl_filebtn.click();
        });

        Sl_customtxt.addEventListener("click", function(){
            Sl_filebtn.click();
        })

        Sl_filebtn.addEventListener("change", function() {
            if (Sl_filebtn.value) {
                Sl_customtxt.innerHTML = Sl_filebtn.value.match(
                    /[\/\\]([\w\d\s\.\-\(\)]+)$/
                )[1]
            } else {
                Sl_customtxt.innerHTML = "No file chosen, yet.";
            }
        })

        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var modal2 = document.getElementById("add_modal_collab");
        var btn2 = document.getElementById("add_collab");
        var modal_hapus = document.getElementById("hapus");
        var btn_hapus = document.getElementById("btn-hapus");
        var span1 = document.getElementsByClassName("close")[0];
        var span = document.getElementsByClassName("close")[1];
        var span_hapus = document.getElementsByClassName("close")[2];
        var btn_close = document.getElementsByClassName("btn-close")[0];
        var btn_close2 = document.getElementsByClassName("btn-close")[1];

        btn.onclick = function() {
            modal.style.display = "flex";
        }

        span1.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        btn2.onclick = function() {
            modal2.style.display = "flex";
        }

        span.onclick = function() {
            modal2.style.display = "none";
        }

        btn_close.onclick = function() {
            modal2.style.display = "none";
        }

        btn_hapus.onclick = function() {
            modal_hapus.style.display = "flex";
        }

        span_hapus.onclick = function() {
            modal_hapus.style.display = "none";
        }

        btn_close.onclick = function() {
            modal2.style.display = "none";
        }

        btn_close2.onclick = function() {
            modal_hapus.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            } else if (event.target == modal2) {
                modal2.style.display = "none";
            } else if (event.target == modal_hapus) {
                modal_hapus.style.display = "none";
            }
        }
    </script>
    <script>
        function del_sponsor(index) {
            var del_sponsor = document.getElementById("hapus" + index);
            del_sponsor.style.display = "flex";
        }

        function closedelsponsor(index) {
            var del_sponsor = document.getElementById("hapus" + index);
            del_sponsor.style.display = "none";
        }

        function deleteItem() {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }
    </script>
    <script>
        function edit_sponsor(index) {
            var edit_sponsor = document.getElementById("edit" + index);
            edit_sponsor.style.display = "flex";
        }

        function closeeditsponsor(index) {
            var edit_sponsor = document.getElementById("edit" + index);
            edit_sponsor.style.display = "none";
        }

        function editeteItem() {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }
    </script>
    <script>
        function add_sponsor() {
            var add_sponsor = document.getElementById("add_modal_collab");
            add_sponsor.style.display = "flex";
        }

        function closeaddsponsor() {
            var add_sponsor = document.getElementById("add_modal_collab");
            add_sponsor.style.display = "none";
        }

        function deteItem() {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }
    </script>
@endsection
