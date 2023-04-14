@extends('layout.Dashboard_user.base')
@section('konten')
<style>
    .data {
        border-collapse: collapse;
        border-radius: 1em;
        overflow: hidden;
        height: auto;
        width: 100%;
        margin-top: 4%;
        align-items: center;
        align-content: center;
        text-align: center;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
            sans-serif;
    }

    .bottomtab {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        margin-top: 10px;
        height: 400px;
        background: #f5f5f5;
        border-radius: 10px;
        display: none;
    }

    .botHead,
    .botJud,
    .botSj,
    .botbtn {
        width: 95%;
        height: auto;
        margin-top: 30px;
    }

    .both1 {
        text-align: left;
        font-family: "Lato", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 24px;
        color: #1a2474;
    }

    .botImg {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 42px;
        margin-top: 30px;
        width: 95%;
        background: #ffffff;
        border-radius: 10px;
        font-family: "Lato", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 15px;
        line-height: 18px;
        color: #a5a5a5;
        position: relative;
    }
</style>
<main>
    <div class="content">
        <div class="sl-content hidden">
            <div class="anim sl-content-isi">
                <div class="sl_top">
                    {{-- <div class="sl_tl"> --}}
                    {{-- <button class="sl_btn"></button> --}}
                    <a href="/buat_tautan" class="sl_Abtn">
                        <div class="sl_tl">
                            Buat tautan</div>
                    </a>
                    {{-- </div> --}}
                    <div class="sl_tr">
                        <div class="sl_searchDiv">
                            <input type="text" name="search" id="search" class="sl_search">
                            <i class="fa-solid fa-magnifying-glass sl_icon"></i>
                        </div>
                    </div>
                </div>
                <div class="sl_bottom">
                    <div class="sl_bt">
                        <p class="sl_btP">Tautan Terakhir Dibuat</p>
                        <div class="sl_btBp">
                            <p class="sl_jum">1/10</p>
                        </div>
                    </div>
                    <table class="data">
                        <tr>
                            <th>No</th>
                            <th>Real Link</th>
                            <th>Short Link</th>
                            <th>aksi</th>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>https://github.com/milon/url-shortener</td>
                            <td>http://localhost:8000/dshadsk</td>
                            <td>
                                <button id="sl_btn" class="buttonA"><i class="fa-solid fa-pen-to-square"></i></button>
                            </td>
                        </tr>
                    </table>
                    <form class="bottomtab" action="" id="sl_edit" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="botHead">
                            <h1 class="both1">Edit Data</h1>
                        </div>
                        <div class="botJud">
                            <input type="text" name="title" value="" placeholder="Title 1" id="" class="inputJud" placeholder="Masukkan judul">
                        </div>
                        <div class="botSj">
                            <input type="text" name="subtitle" value="" placeholder="Subtitle 1" id="" class="SjSubjudu" placeholder="Masukkan sub judul">

                        </div>
                        <div class="botSj" style="width:93%;padding-right:3%">
                            <label for="" class="SjSubjudu" style="background: none">Masukkan Gambar</label>
                            <input type="file" name="image_landing" class="dropify" id="sl_file">
                        </div>
                        {{-- <div class="botImg" style="width: 100%;height:10%;margin-top:12%">
            </div> --}}
                        <div class="botbtn">
                            <button class="btnSj">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<div id="DelComModal" class="del-com-modal navAni">
    <div class="del-conmo">
        <span class="del-close" onclick="closeDelModal()">&times;</span>
        <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
        <p class="del-hapus-tulisan2">Apakah anda yakin ingin menghapus microsite ini</p>
        <div class="del-bungkus-hapusbutton">
            <button id="delbal" class="del-batal-button" onclick="closeDelModal()">Batal</button>
            <form action="" method="post">
                @csrf
                @method('DELETE')
                <button id="btnTrash" class="del-hapus-button" onclick="deleteItem()" type="submit">Hapus</button>
            </form>
        </div>
    </div>
</div>

<script>
    function openDelModal(index) {
        var delmodal = document.getElementById("DelComModal");
        delmodal.style.display = "block";
    }

    function closeDelModal(index) {
        var delmodal = document.getElementById("DelComModal");
        delmodal.style.display = "none";
    }

    function deleteItem(index) {
        // kode untuk menghapus item dari array atau database
        // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
    }
</script>

@endsection