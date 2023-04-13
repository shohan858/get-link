@extends('layout.Dashboard_user.base')
@section('konten')
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
                        <div class="sl_bb">
                            <div class="sl_card">
                                <div class="sl_Ctop">
                                    <div class="sl_Ckan">
                                        <p class="sl_Cnama">Nama tautan</p>
                                        <p class="sl_Csl">getLink/shortLink</p>
                                        <a href="https://www.figma.com/file/JjdlyJxpsIMDbbf9RFU0xS/Website_"
                                            class="sl_Clink"></a>
                                    </div>
                                    <div class="sl_Ckir">
                                        <button class="sl_CbtnAksi">
                                            <i class="fa-solid fa-pen"></i>
                                            Edit
                                        </button>
                                        <button class="sl_CbtnAksi" id="del" onclick="openDelModal()">
                                            <i class="fa-solid fa-trash"></i>
                                            Hapus
                                        </button>
                                    </div>
                                </div>
                                <div class="sl_Cbot">
                                    <p class="sl_tang">10/04/2023</p>
                                </div>
                            </div>
                        </div>
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
