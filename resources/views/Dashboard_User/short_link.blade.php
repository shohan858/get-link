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

    button {`
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
        height: 275px;
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
      height: 175px;
        flex-direction: column;
      justify-content: space-between;
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

    .bat {
        cursor: pointer;
        margin-top: 15px;
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 19px;
        color: White;
        width: 104px;
        height: 41px;
        margin-right: 3px;
        background: rgb(164, 158, 158);
        border-radius: 20px;
    }

    .bat:hover {
        background-color: rgb(212, 204, 204);
        color: rgb(164, 158, 158);
        border: 2px solid rgb(164, 158, 158);
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


    .pag{
        margin-top:1%;
        margin-left:80%
    }
  
  .custom-Link {
            align-items: flex-start;
            flex-direction: column;
            width: fit-content;
            margin-top: 5px;
            display: flex;
        }
    .custom-Link-2 {
            align-items: flex-start;
            flex-direction: column;
            width: fit-content;
            margin-top: 5px;
            display: flex;
        }

        .custom-hide {
            justify-content: center;
            align-items: center;
            margin-right: 50px;
            margin-bottom: 5px;
            display: flex;
        }

        .custom-hide-2 {
            justify-content: center;
            align-items: center;
            margin-right: 50px;
            margin-bottom: 5px;
            display: flex;
        }

        .text-custom {
            font-family: "Roboto";
            font-style: normal;
            line-height: 23px;
            font-weight: 300;
            font-size: 15px;
            margin: 0;
        }

        .input-hide {
            border: 2px solid black;
            box-sizing: border-box;
            border-radius: 10px;
            text-indent: 5px;
            margin-left: 5px;
            height: 33px;
            width: 100px;
        }

        .custom-show {
            justify-content: center;
            font-family: "Roboto";
            align-items: center;
            margin-bottom: 20px;
            font-style: normal;
            line-height: 23px;
            font-weight: 300;
            font-size: 15px;
            display: flex;
            float: right;
            margin: 0;
        }

        .custom-tampil {
            justify-content: space-between;
        }

        .btn-custom {
            margin-left: 5px;
        }

  .sl_bottom {
    width: 96%;
    display: flex;
    margin-top: 20px;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    overflow: auto;
    /* justify-content: space-between; */
}
  
  .sl_bt {
    width: 100%;
    display: flex;
    margin-bottom: 17px;
    justify-content: space-between;
}
  
  .bungkus-penuh {
    flex-direction: column;
    display: flex;
    width: 100%;
    align-items: flex-end;
    justify-content: center;
}
  
  .bungkus-jumlah {
    align-items: center;
    width: 40%;
    display: flex;
    justify-content: flex-start;
}
  
  .endSl {
    width: 300px; background-color: #f15959; padding: 10px; color: white; display: inline-block; border-radius: 10px; text-align: center;
}

    @media screen and (max-width: 600px) {
      
      .endSl {
        width: 90%;
    }
      
      .sl_bt {
        flex-direction: column;
    }
      
      .bungkus-penuh {
        align-items: center;
    }
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

        .pag{
            margin-top:1%;
            margin-left:70%
        }

          .pag{
            margin-top:1%;
            margin-left:45%
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
    
    @media (min-width: 600px){
          .pag{
            margin-top:1%;
            margin-left:70%
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
                            <input type="text" name="search" placeholder="Search" id="cari" class="sl_search">
                            <i class="fa-solid fa-magnifying-glass sl_icon"></i>
                        </div>
                    </div>
                </div>
                <div class="sl_bottom">
                    <div class="sl_bt">
                      @if ($tautan == "berbayar")
                        <div class="bungkus-jumlah">
                            <p class="sl_btP">Tautan Terakhir Dibuat</p>
                            <div class="sl_btBp">
                                <p class="sl_jum">♾</p>
                            </div>
                          </div>
                      @else
                      	  <div class="bungkus-jumlah">
                            <p class="sl_btP">Tautan Terakhir Dibuat</p>
                            <div class="sl_btBp">
                                <p class="sl_jum">{{ $count }}/10</p>
                            </div>
                          </div>
                        @endif
                      @if ($count >= 10)
                            <div class="bungkus-penuh">
                                <p class="endSl">link yang anda short di luar batas tidak akan bisa di akses!</p>
                            </div>
                        @endif
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
                    <?php
                    // Variabel untuk menyimpan nomor
                    $nomor = 1;
                    ?>
                    @foreach($data as $index => $row)
                    <tr class="search-shortlink" data-nama="{{ strtolower($row->link) }}" data-name="{{ strtolower(config('app.url').'/g'.$row->code) }}">

                        <td><?= $nomor++; ?></td>
                        <td class="teks">{{ $row->link }}</td>
                        <td class="teks" id="copy-text">{{ config('app.url').'/'.$row->code }}</td>
                        <td>

                            <div class="aksi-wrapper">

                                <button onclick="copyText('{{ config('app.url').'/'.$row->code }}')" style="margin-right:5px; margin-bottom: 3px;" class="copy-btn">
                                    <i class="fa-regular fa-copy" style="color:#fff;"></i>
                                </button>

                                <button onclick="openModaledit({{ $index }}, {{$row->id}})" style="margin-right:5px; margin-bottom: 3px;" class="edit-btn">
                                    <i class="fa-solid fa-pen" style="color:#fff;"></i>
                                </button>

                                <button style="margin-right:5px;" class="katHap" data-id="" data-nama="" onclick="openDelModal({{ $index }})">
                                    <i class="fa-solid fa-trash" style="color:#fff;"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="pag">
                    {{ $data->links('pagination::bootstrap-4') }}
                </div>

                <script>
                    // mendapatkan elemen input dan konten mikrosite
                    const inputCari = document.getElementById('cari');
                    const kontenshortlink = document.querySelectorAll('.search-shortlink');

                    // menambahkan event input pada elemen input
                    inputCari.addEventListener('input', function() {
                        const kataKunci = inputCari.value.trim().toLowerCase(); // mendapatkan kata kunci pencarian

                        // loop untuk memfilter konten mikrosite berdasarkan kata kunci
                        kontenshortlink.forEach(function(el) {
                            const namashortlink = el.getAttribute('data-nama');
                            const namashortlink2 = el.getAttribute('data-name');
                            const cocok = namashortlink.includes(kataKunci);
                            const cocok2 = namashortlink2.includes(kataKunci);

                            if (cocok || cocok2) {
                                el.style.display = '';
                            } else {
                                el.style.display = 'none';
                            }
                        });
                    });
                </script>

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
    @include('layout.Dashboard_User.footer')
    </div>
</main>

@foreach ($data as $index => $item)
<div id="DelComModal{{ $index }}" class="del-com-modal navAni">
    <div class="del-conmo">
        <span class="del-close" onclick="closeDelModal({{ $index }})">&times;</span>
        <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
        <p class="del-hapus-tulisan2">Apakah anda yakin ingin menghapus microsite ini</p>
        <div class="del-bungkus-hapusbutton">
            <button id="delbal" class="del-batal-button" onclick="closeDelModal()">Batal</button>
            <form action="/shortlink_delete/{{ $item->id }}" method="post">
                @csrf
                @method('DELETE')
                <button id="btnTrash" class="del-hapus-button" onclick="deleteItem({{ $index }})" type="submit">Hapus</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="SlEditModal{{$index}}" class="modal" style="display: none">
    <div class="modal-content">
        <div class="slMtop">
            <p class="mtopP">Edit tautan</p>
            <span onclick="close_modaledit({{ $index }})" class="close">&times;</span>
        </div>

        <form class="sl_form" id="update_shotlink">
            <div class="bungkus-hide">
                <input class="sl_text" type="text" id="inputSL_edit" value="{{ $item->link }}" name="link_shortlink" placeholder="Tautan panjang">
                <input type="hidden" value="{{ $item->id }}" id="id_shortlink" name="id_shortlink">
                <div id="custom-link{{ $index }}" class="custom-Link">
                    <div id="custom-hide{{ $index }}" class="custom-hide" style="display: none">
                        <p class="text-custom">GetLink.id/ </p>
                        <input type="text" name="editsh" id="sleditcustom" class="input-hide" placeholder="custom-link">
                    </div>
                    <div id="custom_link{{$index}}" class="custom-show">
                        Atau gunakan
                        <a id="btn-custom" onclick="customHide({{$index}})" class="btn-custom" href="#"> custom link</a>
                        .
                    </div>
                    <div style="display: none;" id="default_link{{$index}}" class="custom-show">
                        Atau gunakan
                        <a id="btn-custom" onclick="defaultHide({{$index}})" class="btn-custom" href="#"> Default link</a>
                        .
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{$item->id}}" id="id_shortlink" name="id_shortlink">
            <div class="" style="display: flex">
                <button id="" onclick="close_modaledit({{ $index }})" class="bat" type="reset">Batal</button>
                <button id="SlEdit_kirim" data-id="{{$index}}" class="btn_msSL" type="submit">Submit</button>
            </div>
        </form>

    </div>
</div>
@endforeach

<!-- Modal -->
<div id="SlModal" class="modal">
    <div class="modal-content">
        <div class="slMtop">
            <p class="mtopP">Buat tautan</p>
            <span onclick="close_modal()" class="close">&times;</span>
        </div>

        <form id="form_link" method="POST" action="{{ route('generate.shorten.link.post') }}" class="sl_form">
            @csrf
            <div class="bungkus-hide">
                <input class="sl_text" type="text" id="input_link" name="sl" placeholder="Tautan panjang">
                <div class="custom-Link-2">
                    <div class="custom-hide-2" style="display: none">
                        <p class="text-custom">GetLink.id/ </p>
                        <input type="text" name="buat" id="value_custom" class="input-hide" placeholder="custom-link">
                    </div>
                    <div class="custom-show">
                        Atau gunakan
                        <a id="btn-custom-2" class="btn-custom" href="#"> custom link</a>
                        .
                    </div>
                </div>
            </div>
            <div class="" style="display: flex">
                <button id="" onclick="close_modal()" class="bat" type="reset">Batal</button>
                <button id="button_link" class="btn_msSL" type="submit">Submit</button>
            </div>
        </form>

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
        
        function customHide(index) {
            var customShow = document.getElementById('custom-Link' + index);
            var btnCustom = document.getElementById("btn-custom" + index);
            var customHide = document.getElementById("custom-hide" + index);
            var defaut_link = document.getElementById("default_link" + index);
            var custom_link = document.getElementById("custom_link" + index);

        customHide.style.display = '';
        defaut_link.style.display='flex';
        custom_link.style.display='none';
        // if (customHide.style.display === "none") {
        //         customShow.classList.add('custom-tampil');
        //         btnCustom.textContent = "default link";
        //         customHide.style.display = "flex";
        //     } else {
        //         customShow.classList.remove('custom-tampil');
        //         btnCustom.textContent = "custom link";
        //         customHide.style.display = "none";
        //     }

        // btnCustom.addEventListener("click", function(event) {
        //     event.preventDefault(); 

        //     if (customHide.style.display === "none") {
        //         customShow.classList.add('custom-tampil');
        //         btnCustom.textContent = "default link";
        //         customHide.style.display = "flex";
        //     } else {
        //         customShow.classList.remove('custom-tampil');
        //         btnCustom.textContent = "custom link";
        //         customHide.style.display = "none";
        //     }
        // });
        }


        function defaultHide(index){
            var customShow = document.getElementById('custom-Link' + index);
            var btnCustom = document.getElementById("btn-custom" + index);
            var customHide = document.getElementById("custom-hide" + index);
            var defaut_link = document.getElementById("default_link" + index);
            var custom_link = document.getElementById("custom_link" + index);

            customHide.style.display = 'none';
            defaut_link.style.display='none';
            custom_link.style.display='';
        }
        var customShow_2 = document.querySelector('.custom-Link-2');
        var btnCustom_2 = document.getElementById("btn-custom-2");
        var customHide_2 = document.querySelector(".custom-hide-2");

        btnCustom_2.addEventListener("click", function(event) {
            event.preventDefault(); // Mencegah perubahan URL saat mengklik tautan

            if (customHide_2.style.display === "none") {
                customShow_2.classList.add('custom-tampil');
                btnCustom_2.textContent = "default link";
                customHide_2.style.display = "flex";
            } else {
                customShow_2.classList.remove('custom-tampil');
                btnCustom_2.textContent = "custom link";
                customHide_2.style.display = "none";
            }
        });
    </script>

<script>
    $(document).on("click", "#SlEdit_kirim", function(e) {
        e.preventDefault();
        var index = $(this).data("id");
        // Menggunakan nilai index untuk mendapatkan elemen form yang sesuai
        var formData = new FormData($("#SlEditModal" + index + " #update_shotlink")[0]);
        console.log(formData);
        const inputElementsledit = document.getElementById("sleditcustom");
        const sleditcustom = inputElementsledit.value.trim();
        formData.append('sleditcustom', sleditcustom);
        $.ajax({
            url: "{{ url('shortlinks_update') }}",
            type: "post",
            dataType: "json",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            processData: false,
            contentType: false,
            data: formData,
            success: function(response) {
                $('#sleditcustom').val("");
                location.reload();
                if (sleditcustom != null && sleditcustom.trim() != "") {
                    swal.fire({
                        icon: "success",
                        title: "Link Berhasil Dicustom",
                        timer: 2500,
                    });
                } else {
                    swal.fire({
                        icon: "success",
                        title: "Link Berhasil Diedit",
                        timer: 2500,
                    });
                }
            },
            error: function(xhr) {
                swal.fire({
                    icon: "error",
                    title: "ada kesalahan sistem",
                    text: "Silahkan coba lagi",
                });
            },
        });
    });

    const jsonAPI = "Backend_Copy.postman_collection.json";

    fetch(jsonAPI)
        .then(function(response) {
            return response.json();
        })
        .then(function(obj) {
            console.log(obj);
        })
        .catch(function(error) {
            console.log(error);
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
        const inputElementcustom = document.getElementById("value_custom");
        const linkcustom = inputElementcustom.value.trim();

        if (validateLink(link)) {
            // Mengirimkan data ke server menggunakan AJAX
            var url_shortener = "{{ route('generate.shorten.link.post') }}";
            $.ajax({
                type: 'POST',
                url: url_shortener,
                data: {
                    _token: '{{ csrf_token() }}',
                    link: link,
                    linkcustom: linkcustom,
                },
                success: function(response) {
                    $('#input_link').val("{{ env('APP_URL') }}" + "/" + response.short_link);
                    showAlert('success', 'Berhasil', 'Tautan Berhasil Dipendekan', 1800);
                    location.reload();
                    // Menampilkan tombol copy dan refresh
                    if (buttonImage.src.includes("Refresh.png")) {
                        buttonImage.src = "{{ asset('assets_landing_page/img/Add-Link.png') }} ";
                        newButton.parentNode.removeChild(newButton);
                        submitButton.style.marginLeft = "10px";
                        inputElement.value = "";
                        let timerInterval
                        Swal.fire({
                            timer: 1000,
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
                    copyButton.addEventListener("click", function() {
                        const inputElement = document.getElementById("input_link");
                        inputElement.select();
                        document.execCommand("copy");
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
    function openDelModal(index) {
        var delmodal = document.getElementById("DelComModal"+index);
        delmodal.style.display = "block";
    }

    function closeDelModal(index) {
        var delmodal = document.getElementById("DelComModal"+index);
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

    function close_modal() {
        modalSl.style.display = "none";
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

    function openModaledit(index, id) {
            const ok = document.getElementById("SlEditModal"+index);
            ok.style.display = "flex";
            $('#id_shortlink').val(id);
            window.addEventListener('click', function(event) {
            // Ambil elemen modal
            const modaledit = document.getElementById("SlEditModal"+index);

            // Tutup modal jika terjadi klik di luar area modal
            if (event.target == modaledit) {
                ok.style.display = 'none';
            }
        });
    }

    function close_modaledit(index) {
        const ok = document.getElementById("SlEditModal"+index);
        ok.style.display = "none";
    }

    function copyText(text) {
    // Buat elemen textarea baru untuk menampung teks yang akan disalin
    var textarea = document.createElement("textarea");
    textarea.value = text;
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

<script>
    window.addEventListener('click', function(event) {
    // Ambil elemen modal
    const modal = document.getElementById('SlModal');

    // Tutup modal jika terjadi klik di luar area modal
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});
</script>
@endsection