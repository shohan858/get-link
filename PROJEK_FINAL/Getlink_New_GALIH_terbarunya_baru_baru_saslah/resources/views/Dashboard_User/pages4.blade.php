@extends('layout.Dashboard_User.base')
@section('konten')
<main>
    <div class="content">
        <div class="lang-content hidden">
            <div class="page2-btnprev">
                <button class="pages5-tambah-prew">
                    preview ...
                    {{-- <img src="{{ asset('assets/img/Group 68 (1).png') }}" alt="" /> --}}
                    <i class="fa-solid fa-mobile-screen"></i>
                </button>
            </div>
            <div class="pages4-bagi">
                <div id="prew1" class="anim hidden pages4-kiri">
                    <div class="content-top">
                        <h2 class="pages4-buat">Buat Microsite</h2>
                    </div>
                    <p class="page4-tulisan1">
                        Silahkan masukkan beberapa informasi untuk membuat <br />
                        Microsite anda
                    </p>
                    <div class="pages2-garis">
                        <div class="pages4-garis-1"></div>
                        <div class="pages4-garis-2"></div>
                        <div class="pages4-garis-3"></div>
                    </div>
                    <h4 class="pages4-jenis">1. Tentukan Jenis Microsite</h4>
                    <h4 class="pages4-tema">2. Pilih Template dan Tema</h4>
                    <h4 class="pages4-tema">3. Pilih Nama Microsite</h4>
                    <div class="pages4-form">
                        <form id="form-micro" method="POST">
                            @csrf

                            <div class="pages4-form1">
                                <input class="pages4-input" type="text" id="nama" name="name" placeholder="Nama Microsite" />
                            </div>
                            <div class="pages4-form2">
                                <div class="pages4-button1">
                                    <a class="pages4-button1text" href="#">getlink.id/</a>
                                </div>
                                <input class="pages4-input" type="text" id="tautan" name="link" placeholder="Tautan Microsite" />
                            </div>
                    </div>
                    <div class="pages4-lamnjut">
                        <a href="{{ url()->previous() }}" class="pages4-lanjutkan">Kembali</a>
                        <button type="button" id="buat-micro" class="pages4-lanjutkan" value="1" style="height:40px">Selesai</button>
                    </div>
                    </form>
                </div>
                <div id="prew2" class="anim hidden pages4-kanan">
                    <div class="kanan-bungkus" id="kanan-bungkus">

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    const buttonPrew = document.querySelector(".pages5-tambah-prew");
    const prew1 = document.getElementById("prew1");
    const prew2 = document.getElementById("prew2");

    buttonPrew.addEventListener("click", function() {
        prew1.classList.toggle("pages5kirPrew");
        prew2.classList.toggle("pages5Prew");
        buttonPrew.classList.add("preew");
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

$(document).ready(function() {
    $(document).on('click', '#buat-micro', function() {
        var urlParams = window.location.pathname.split('/');
        var Param1 = urlParams[urlParams.length - 2];
        var Param2 = urlParams[urlParams.length - 1];
        var formData = new FormData($('#form-micro')[0]);
        formData.append('id_template', Param2);
        formData.append('id_kategori', Param1);

         // Validasi form
         if ($('#nama').val() == '' || $('#tautan').val() == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Peringatan',
                text: 'Silakan isi semua field terlebih dahulu.'
            });
            return false;
        }

        // Kirim permintaan AJAX ke server untuk memeriksa apakah link sudah ada di database
        $.ajax({
            type: 'POST',
            url: "{{ url('cek_link_unik') }}",
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            data: formData,
            success: function(response) {
                if (response.status === 'success') {
                    // Link unik, submit form
                    $.ajax({
                        type: 'POST',
                        url: "{{ url('buatmicrosite/nambah_microsite') }}",
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        processData: false,
                        contentType: false,
                        data: formData,
                        success: function(response) {
                            var url = "{{ url('rubah_microsite/:id_kategori/:id_template/:id_microsite') }}";
                            url = url.replace(':id_template', Param2);
                            url = url.replace(':id_kategori', Param1);
                            url = url.replace(':id_microsite', response.data.id);
                            window.location.href = url;
                        }
                    });
                } else {
                    // Link sudah ada di database, tampilkan pesan error
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Link sudah digunakan!'
                    });
                }
            }
        });
    });
});



//     $(document).ready(function() {
//     $(document).on('click', '#buat-micro', function() {
//         var urlParams = window.location.pathname.split('/');
//         var Param1 = urlParams[urlParams.length - 2];
//         var Param2 = urlParams[urlParams.length - 1];
//         var formData = new FormData($('#form-micro')[0]);
//         formData.append('id_template', Param2);
//         formData.append('id_kategori', Param1);
//         var name = $("#nama").val();
//         var link = $("#tautan").val();
//         if(name == '' || link == ''){
//             Swal.fire({
//                 icon: 'warning',
//                 title: 'Peringatan',
//                 text: 'Silakan isi semua field terlebih dahulu.'
//             });
//             return false;
//         } else {
//             $.ajax({
//                 type: 'POST',
//                 url: "{{ url('buatmicrosite/nambah_microsite') }}",
//                 dataType: 'json',
//                 headers: {
//                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                 },
//                 processData: false,
//                 contentType: false,
//                 data: formData,
//                 success: function(response) {
//                     var url = "{{ url('rubah_microsite/:id_kategori/:id_template/:id_microsite') }}";
//                     url = url.replace(':id_template', Param2);
//                     url = url.replace(':id_kategori', Param1);
//                     url = url.replace(':id_microsite', response.data.id);
//                     window.location.href = url;
//                 },
//                 error: function(jqXHR, textStatus, errorThrown) {
//                 Swal.fire({
//                     icon: 'error',
//                     title: 'Oops...',
//                     text: 'Terjadi kesalahan!'
//                 });
//             }
//             });
//         }
//     });
// })





    // $(document).ready(function() {
    //     $(document).on('click', '#buat-micro', function() {
    //         var urlParams = window.location.pathname.split('/');
    //         var Param1 = urlParams[urlParams.length - 2];
    //         var Param2 = urlParams[urlParams.length - 1];
    //         var formData = new FormData($('#form-micro')[0]);
    //         formData.append('id_template', Param2);
    //         formData.append('id_kategori', Param1);
    //         $.ajax({
    //             type: 'POST',
    //             url: "{{ url('buatmicrosite/nambah_microsite') }}",
    //             dataType: 'json',
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //             processData: false,
    //             contentType: false,
    //             data: formData,
    //             success: function(response) {
    //                 var url = "{{ url('rubah_microsite/:id_kategori/:id_template/:id_microsite') }}";
    //                 url = url.replace(':id_template', Param2);
    //                 url = url.replace(':id_kategori', Param1);
    //                 url = url.replace(':id_microsite', response.data.id);
    //                 window.location.href = url;
    //             }
    //         });
    //     });
    // })
</script>
<script>
    function generateHTML() {
        // Mengambil data JSON dari variabel data
        var data = @json($komponen);
        var background = @json($background);

        // Melakukan iterasi pada data menggunakan forEach
        var html = '';
        if (background.type_background === 'color') {
            html += '<div class="bungkus" style="background: ' + background.background + ';">';
        } else {
            html += '<div class="bungkus" style="background-image: url(\'http://localhost:8000/microsite/background/' + background.background + '\');">';
        }
        var non_bungkus = '';
        var kolom2 = '';
        data.forEach(function(i) {
            var code = i.code;
            var html_code = code.replace(/src="microsite\/medsos/g, 'src="http://localhost:8000/microsite/medsos/');
            html_code = html_code.replace(/src="microsite\/konten/g, 'src="http://localhost:8000/microsite/konten');
            if (i.id === 9) {
                kolom2 += html_code;
            } else {
                non_bungkus += html_code;
            }
        });
        if (kolom2 !== '') {
            non_bungkus += '<div class="bungkus-anak" id="bungkus-template-konten">' + kolom2 + '</div>';
        }
        html += non_bungkus + '</div>';

        // Menampilkan hasil elemen HTML pada div dengan id "kanan-bungkus"
        document.getElementById("kanan-bungkus").innerHTML = html;
    }

    // Memanggil fungsi generateHTML
    generateHTML();
</script>

@endsection