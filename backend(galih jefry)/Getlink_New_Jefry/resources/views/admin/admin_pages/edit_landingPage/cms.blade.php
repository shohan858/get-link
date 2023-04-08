@extends('admin.layout.base')

@section('admin_konten')

@section('admin_konten')
@foreach ($data_getlink as $item)
        @if ($item->id == 5)
    <div class="adkw">
        <div class="button-kanan">
            <button onclick="preview()" id="myBtn" class="button2"><i class="fa-regular fa-eye"></i> Preview</button>
        </div>

        <table class="data">
            <tr>
                <th>judul</th>
                <th>sub judul</th>
                <th>aksi</th>

            </tr>
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->subtitle }}</td>
                <td>
                    <button id="cms_btn" class="buttonA"><i class="fa-solid fa-pen-to-square"></i></button>
                </td>
            </tr>
        </table>

        <form action="update_landing_page/{{ $item->id }}" method="POST"
            enctype="multipart/form-data" class="bottomtab-cms" id="cms_edit" data-aos="fade-down">
            @csrf
            <div class="botHead">
                <h1 class="both1">Edit Data</h1>
            </div>
            <div class="botJud">
                <input type="text" name="title"
                value="{{ $item->title }}" id="" class="inputJud" placeholder="Masukkan judul">
            </div>
            <div class="botSj">
                <input type="text" name="subtitle"
                value="{{ $item->subtitle }}"  id="" class="SjSubjudu" placeholder="Masukkan sub judul">
            </div>
            {{-- <div class="botImg">
                <input type="file" hidden="hidden" name="" id="cms_file">
                <span id="cms_custmMsg" class="customMsg">No file chosen, yet.</span>
                <button style="cursor: pointer" type="button" id="cms_upBtn" class="btn-gam">Select your file</button>
            </div> --}}
            <div class="botbtn">
                <button type="submit" class="btnSj">Update</button>
            </div>
        </form>

        <table class="data">
            @php
                $no = 1;
            @endphp
            <tr>
                <th>No</th>
                <th>Keunggulan</th>
                <th>Edit</th>
            </tr>
            @foreach ($data_getlink as $item)
            @if ($item->id == 6 || $item->id == 7 || $item->id == 8)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->title }}</td>
                <td>
                    {{-- <button class="buttonA"><i class="fa-solid fa-pen-to-square"></i></button> --}}
                    <div class="editkeung">
                        <form action="update_landing_page/{{ $item->id }}" method="POST"
                            enctype="multipart/form-data" class="editkeung">
                            @csrf
                            <input type="text" name="title"
                            value="{{ $item->title }}" class="inputKeung" placeholder="Penggunaan yang mudah">
                            <button type="submit" style="cursor: pointer" class="ref"><i class="fa-solid fa-rotate"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @endif
            @endforeach
        </table>
    </div>

     {{-- Modal --}}
     <div id="iframe" class="modal">
        <div class="modal_preview" style="height: 80%"> 
            <div class="modal-header">
                <p class="headP">Preview</p>
                <span onclick="close_preview()" class="close">&times;</span>
            </div>
            <div class="modal-body" >
                <iframe src="/preview/cms" height="200%" width="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <script>
        var cmsBtn = document.getElementById("cms_btn");
        var cmsEdit = document.getElementById("cms_edit");

        cmsBtn.addEventListener("click", function() {
            cmsEdit.classList.toggle("bottomtab_show");
        });

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
    @endif
@endforeach
@endsection
