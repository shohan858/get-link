@extends('layout.Dashboard_User.base')
@section('konten')
<style>
    .empty {
        width: 100%;
        height: 80vh;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
    }

    button {
        cursor: pointer;
    }

    .data {
        border-collapse: collapse;
        border-radius: 10px;
        overflow: hidden;
        height: auto;
        width: 100%;
        /* margin-top: 4%; */
        align-items: center;
        align-content: center;
        text-align: center;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
            sans-serif;
        margin-bottom: 10px
    }

    .data tr th {
        padding: 12px;
        background: #a5a5a5;
        color: #ffffff;
        width: auto;
    }

    .data tr td {
        padding: 12px;
        background: #f5f5f5;
        color: #a5a5a5;
        width: auto;
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

    .copy-btn {
        width: 35px;
        height: 35px;
        background: #2DEB90;
        border-radius: 50%
    }

    .edit-btn {
        width: 35px;
        height: 35px;
        background: #EBB02D;
        border-radius: 50%
    }

    .katHap {
        width: 35px;
        height: 35px;
        background: #EB2D2D;
        border-radius: 50%
    }

    /* @media screen and (max-width: 768px) {
                                                                                                                                                        .data {
                                                                                                                                                            widows: 80%;
                                                                                                                                                        }
                                                                                                                                                    } */

    .teks {
        white-space: nowrap;
        /* mencegah teks pindah baris */
        overflow: hidden;
        /* memotong teks yang keluar dari kontainer */
        text-overflow: ellipsis;
        /* menampilkan elipsis (...) untuk teks yang terpotong */
    }

    /* media query untuk lebar viewport 500px atau lebih */


    /* CSS */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        /* background-color: #fefefe; */
        /* margin: 15% auto; */
        /* padding: 20px; */
        /* border: 1px solid #888; */
        /* width: 80%; */
        /* max-width: 600px; */
        width: 80%;
        height: 199px;
        background: #FFFFFF;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .slMtop {
        display: flex;
        width: 90%;
        justify-content: space-between
    }

    .mtopP {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 23px;
        color: #6B75E6;
    }

    .sl_text {
        width: 100%;
        height: 42px;
        background: #FAFAFA;
        border: 1px solid #E1E1E1;
        border-radius: 10px;
    }

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

    .sl_form {
        width: 90%;
        display: flex;
        flex-direction: column;
    }

    .btn_msSL {
        /* background-color: #4CAF50; */
        /* color: white; */
        /* padding: 12px 20px; */
        /* border: none; */
        /* border-radius: 4px; */
        cursor: pointer;
        /* width: 100%; */
        /* font-size: 16px; */
        margin-top: 15px;

        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 19px;
        color: #524799;
        width: 104px;
        height: 41px;
        background: #FFFFFF;
        border: 2px solid #524799;
        border-radius: 20px;
    }

    .btn_msSL:hover {
        background-color: #524799;
        color: #FFFFFF;
    }

    .sl_Abtn {
        background: transparent;
    }

    .emptyImg {
        width: 627px;
        height: 353px;
    }

    .emptyP {
        font-family: 'Roboto', sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 32px;
        line-height: 38px;
        text-align: center;
        color: #A5A5A5;
        margin: 0;
    }



    @media screen and (max-width: 600px) {
        .empty {
            height: 60vh;
        }

        .emptyImg {
            width: 313.5px;
            height: 176.5px;
        }

        .emptyP {
            font-size: 22px;
        }
    }

    @media (min-width: 300px) {
        .teks {
            max-width: 50px;
            /* menentukan lebar maksimum kontainer */
            text-overflow: clip;
            /* menampilkan teks penuh tanpa elipsis */
        }
    }
</style>
<main>
    <div class="content">
        <div class="sl-content hidden">
            <div class="anim sl-content-isi">
                <div class="sl_top">

                    <button onclick="openModal()" class="sl_tl">
                        Buat tautan</button>
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

                    {{-- <div class="empty">
                            <img src="{{ asset('assets/img/Education.png') }}" alt="" class="emptyImg">
                    <p class="emptyP">Anda belum membuat microsite</p>
                </div> --}}

                <table class="data">
                    <tr>
                        <th>No</th>
                        <th>Real Link</th>
                        <th>Short Link</th>
                        <th>aksi</th>

                    </tr>
                    <tr>
                        <?php
                        // Variabel untuk menyimpan nomor
                        $nomor = 1;
                        ?>
                        @foreach($data as $row)
                        <td><?= $nomor++; ?></td>
                        <td class="teks">{{ $row->link }}</td>
                        <td class="teks" id="copy-text">{{ config('app.url').'/g'.$row->code }}</td>
                        <td>

                            <div class="aksi-wrapper">

                                <button onclick="copyText()" style="margin-right:5px; margin-bottom: 3px;" class="copy-btn">
                                    <i class="fa-regular fa-copy" style="color:#fff;"></i>
                                </button>

                                <button onclick="openModaledit()" style="margin-right:5px; margin-bottom: 3px;" class="edit-btn">
                                    <i class="fa-solid fa-pen" style="color:#fff;"></i>
                                </button>

                                <button style="margin-right:5px;" class="katHap" data-id="" data-nama="" onclick="openDelModal()">
                                    <i class="fa-solid fa-trash" style="color:#fff;"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
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

<!-- Modal -->
<div id="SlModal" class="modal">
    <div class="modal-content">
        <div class="slMtop">
            <p class="mtopP">Buat tautan</p>
            <span class="close">&times;</span>
        </div>

        <form id="form_link" method="POST" action="{{ route('generate.shorten.link.post') }}" class="sl_form">
            @csrf
            {{-- <label class="sl_label" for="nama">Nama</label> --}}
            <input class="sl_text" type="text" id="input_link" name="sl" placeholder="Tautan panjang">
            <button id="button_link" class="btn_msSL" type="submit">Submit</button>
        </form>

    </div>
</div>

<!-- Modal -->
<div id="SlEditModal" class="modal" style="display: none">
    <div class="modal-content">
        <div class="slMtop">
            <p class="mtopP">Buat tautan</p>
            <span class="close-slEdit">&times;</span>
        </div>

        <form class="sl_form">
            {{-- <label class="sl_label" for="nama">Nama</label> --}}
            <input class="sl_text" type="text" id="inputSL_edit" name="edit_sl" placeholder="Tautan panjang">
            <button id="SlEdit_kirim" class="btn_msSL" type="submit">Submit</button>
        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const jsonAPI = "Backend_Copy.postman_collection.json";

    fetch(jsonAPI)
        .then(function(response) {
            return response.json();
        })
        .then(function(obj) {
            console.log(obj);
        })
        .catch(function(error) {
            console.error('Someting went wrong');
            console.error(error);
        })

    const endPoint = "{{ asset('') }} assets_landing_page"
    const buttonImage = document.getElementById("image_link");
    const submitButton = document.getElementById("button_link");


    var newButton = document.createElement("button");
    newButton.id = "button_copy";
    newButton.type = "button";

    var img = document.createElement("img");
    img.id = "image_copy";
    onclick = "copy_clip()"
    img.src = "{{ asset('assets_landing_page/img/copy.png') }} ";

    newButton.appendChild(img);
    document.body.appendChild(newButton);

    const copyButton = document.getElementById("button_copy");

    // Close modal saat tombol close diklik
    const closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.addEventListener("click", () => {
        modalSl.style.display = "none";
    });

    function validateLink(link) {
        var pattern = /^https?:\/\/[^\s/$.?#].[^\s]*$/i;
        return pattern.test(link);
    }

    submitButton.addEventListener("click", function(e) {
        e.preventDefault();
        const inputElement = document.getElementById("input_link");
        const link = inputElement.value.trim();

        if (validateLink(link)) {
            // Mengirimkan data ke server menggunakan AJAX
            var url_shortener = "{{ route('generate.shorten.link.post') }}";
            $.ajax({
                type: 'POST',
                url: url_shortener,
                data: {
                    _token: '{{ csrf_token() }}',
                    link: link,
                },
                success: function(response) {

                    $('#input_link').val("{{ env('APP_URL') }}" + "/g" + response.short_link);
                    showAlert('success', 'Berhasil', 'Tautan Berhasil Dipendekan', 1800);
                    // Menampilkan tombol copy dan refresh
                    if (buttonImage.src.includes("Refresh.png")) {
                        buttonImage.src = "{{ asset('assets_landing_page/img/Add-Link.png') }} ";
                        newButton.parentNode.removeChild(newButton);
                        submitButton.style.marginLeft = "10px";
                        inputElement.value = "";
                        let timerInterval
                        Swal.fire({
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })
                    } else {
                        buttonImage.src = "{{ asset('assets_landing_page/img/Refresh.png  ') }} ";
                        submitButton.style.marginLeft = "20px";
                        inputElement.parentNode.insertBefore(newButton, inputElement.nextSibling);
                    }

                    // Mengubah nilai atribut href dan text dari tombol copy
                    // copyButton.href = $('#input_link').val();
                    // copyButton.textContent = $('#input_link').val();

                    // Menambahkan event listener pada tombol copy
                    copyButton.addEventListener("click", function() {
                        // document.getElementById("input_link").val().select();
                        // document.execCommand("copy");
                        const inputElement = document.getElementById("input_link");
                        inputElement.select();
                        document.execCommand("copy");
                        // alert("berhasil copy!");
                        showAlert('success', 'Berhasil', 'Tautan Berhasil Dicopy', 1800);
                    });
                },
                error: function() {
                    showAlert('error', 'Ooops!', 'Terjadi Kesalahan Saat Memperpendek Link', 1800);
                }
            });
        } else {
            showAlert('error', 'Ooops!', 'Link Tidak Valid!', 1800);
            return;
        }
    });

    function showAlert(icon, title, text, timer) {
        swal.fire({
            icon: icon,
            title: title,
            text: text,
            timer: timer,
        });

    }

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // Kembali ke atas halaman ketika pengguna mengklik tombol "To Top"
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    // ==========================================================================================
    // modal hapus short link
    function openDelModal() {
        var delmodal = document.getElementById("DelComModal");
        delmodal.style.display = "block";
    }

    function closeDelModal() {
        var delmodal = document.getElementById("DelComModal");
        delmodal.style.display = "none";
    }

    function deleteItem() {
        // kode untuk menghapus item dari array atau database
        // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
    }

    // Tambah data short link
    const modalSl = document.getElementById("SlModal");
    const inputSL = document.getElementById("inputSL");

    // Ambil data dari localStorage saat halaman dimuat
    window.addEventListener("load", () => {
        const savedNama = localStorage.getItem("sl");
        if (savedNama) {
            inputSL.value = savedNama;
        }
    });

    // Simpan nilai input ke localStorage setiap kali ada perubahan pada input
    inputSL.addEventListener("input", () => {
        localStorage.setItem("sl", inputSL.value);
    });


    window.addEventListener("click", function(event) {
        if (event.target == modalSl) {
            modalSl.style.display = "none";
        }
    });

    // Open modal saat tombol submit diklik
    const submitBtn = document.getElementById("Sl_kirim");
    submitBtn.addEventListener("click", (event) => {
        event.preventDefault();
        // Lakukan validasi input
        // Jika input valid, simpan data ke database atau lakukan tindakan lainnya
        // Setelah itu, kosongkan nilai input dan hapus data dari localStorage
        inputSL.value = "";
        localStorage.removeItem("sl");
        modalSl.style.display = "none";
    });

    function openModal() {
        modalSl.style.display = "flex";
    }


    // Edit data short link
    const modalSlEdit = document.getElementById("SlEditModal");
    const inputSLEdit = document.getElementById("inputSL_edit");

    // Ambil data dari localStorage saat halaman dimuat
    window.addEventListener("load", () => {
        const savedNama = localStorage.getItem("edit_sl");
        if (savedNama) {
            inputSLEdit.value = savedNama;
        }
    });

    // Simpan nilai input ke localStorage setiap kali ada perubahan pada input
    inputSLEdit.addEventListener("input", () => {
        localStorage.setItem("edit_sl", inputSLEdit.value);
    });

    // Close modal saat tombol close diklik
    const closeBtnedit = document.getElementsByClassName("close-slEdit")[0];
    closeBtnedit.addEventListener("click", () => {
        modalSlEdit.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target == modalSlEdit) {
            modalSlEdit.style.display = "none";
        }
    });

    // Open modal saat tombol submit diklik
    const submitBtnedit = document.getElementById("Sl_kirim");
    submitBtnedit.addEventListener("click", (event) => {
        event.preventDefault();
        // Lakukan validasi input
        // Jika input valid, simpan data ke database atau lakukan tindakan lainnya
        // Setelah itu, kosongkan nilai input dan hapus data dari localStorage
        inputSLEdit.value = "";
        localStorage.removeItem("edit_sl");
        modalSlEdit.style.display = "none";
    });

    function openModaledit() {
        modalSlEdit.style.display = "flex";
    }

    function copyText() {
        // Dapatkan teks dari elemen dengan ID "copy-text"
        var copyText = document.getElementById("copy-text");

        // Buat elemen textarea baru untuk menampung teks yang akan disalin
        var textarea = document.createElement("textarea");
        textarea.value = copyText.textContent;
        document.body.appendChild(textarea);

        // Pilih teks dalam elemen textarea
        textarea.select();

        // Salin teks yang telah dipilih ke clipboard
        document.execCommand("copy");

        // Hapus elemen textarea
        document.body.removeChild(textarea);

        // Berikan pesan bahwa teks telah disalin       
        showAlert('success', 'Berhasil', 'Tautan Berhasil Dicopy', 1800);
    }
</script>
@endsection