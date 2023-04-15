@extends('layout.Dashboard_user.base')
@section('konten')
    <main>
        <div class="content">
            <div class="lang-content hidden">
                <div class="aniLeft btnprev">
                    <button class="pages5-tambah-prew">
                        preview ...
                        <i class="fa-solid fa-mobile-screen"></i>
                    </button>
                </div>
                <div class="pages5-bagi">
                    <div id="prew1" class="anim pages5-kiri hidden">
                        <div class="pages5-top-btn">
                            <button class="pages5-tambah-komponen" id="CCOpmBtn">
                                <i class="fa-solid fa-plus" style="color: #524799"></i>
                                Tambah Komponen Baru
                            </button>
                        </div>

                        <div id="pgKr" class="komponen-kkiri">
                            @foreach ($drag as $key => $item)
                                @if ($item->status === 'off')
                                    <div id="pages5Kom{{ $key }}" draggable="true" data-id="{{ $item->id }}"
                                        data-status="{{ $item->status }}" data-order="{{ $item->order }}"
                                        data-komponen="{{ $item->id_komponen }}" class="pages5-komponen-2"
                                        style="opacity: 0.5">
                                    @else
                                        <div id="pages5Kom{{ $key }}" draggable="true"
                                            data-id="{{ $item->id }}" data-status="{{ $item->status }}"
                                            data-order="{{ $item->order }}" data-komponen="{{ $item->id_komponen }}"
                                            class="pages5-komponen-2">
                                @endif
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="{{ asset('assets/img/Group 71.png') }}"
                                                alt="" />
                                        </button>
                                        <i class="fa-solid {{ $item['icon'] }}" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">{{ $item['title'] }}</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch{{ $key }}" class="btn-switch">
                                            {{-- <img class="pages5-isi" src="{{ asset('assets/img/Group 68 (1).png') }}"
                                            alt="" /> --}}
                                            @if ($item->status === 'off')
                                                <i id="icon{{ $key }}" class="fa-solid fa-eye-slash"
                                                    style="color: red"></i>
                                            @else
                                                <i id="icon{{ $key }}" class="fa-solid fa-eye"></i>
                                            @endif
                                        </button>
                                        <button id="del{{ $key }}" class="btn-trash">
                                            <i id="trash{{ $key }}" class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot{{ $key }}" class="btn-3dot">
                                                {{-- <img class="pages5-isi"
                                                    src="{{ asset('assets/img/🦆 icon _more vert_.png') }}"
                                                alt="" /> --}}
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot{{ $key }}" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
                                                </button>
                                            </div>
                                        </div>
                                        <button id="dropdown-btn-{{ $key }}" class="btn-drop">
                                            <i id="it{{ $key }}" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-{{ $key }}" class="pages5-komponen-inside-text1">
                                    <div class="pages5-input-file" data-id="{{ $item->id }}">

                                        {!! $item->code_input !!}
                                    </div>
                                    <div class="pages5-richa"></div>
                                </div>
                        </div>

                        <div id="DelComModal{{ $key }}" data-id_komponen="{{ $item->id }}"
                            class="del-com-modal navAni">
                            <!-- Modal content -->
                            <div class="del-conmo">
                                <span class="del-close">&times;</span>
                                <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
                                <p class="del-hapus-tulisan2">
                                    Apakah anda yakin ingin menghapus komponen ini
                                </p>
                                <div class="del-bungkus-hapusbutton">
                                    <button id="delbal{{ $key }}" class="del-batal-button">Batal</button>
                                    <button id="btnTrash{{ $key }}" class="del-hapus-button">Hapus</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div id="pages5Kom" draggable="true" class="pages5-komponen-2">
                            <div class="pages5-komponen-text">
                                <div class="pages5-komponen-text-kiri" style="margin-left: 10px;">
                                    <p class="pages5-isi">Pilih bg</p>
                                    <div class="milih">
                                        <div class="plh_wrn">
                                            <input type="radio" name="type" value="color" id="typecolor">
                                            <label for="typecolor">color</label>
                                        </div>
                                        <div class="plh_img">
                                            <input type="radio" name="type" value="image" id="typeimage">
                                            <label for="typeimage">image</label>
                                        </div>
                                    </div>
                                    <input type="text" style="display: none" name="backgroundcolor"
                                        id="backgroundcolor">
                                    <input type="file" style="display: none" name="backgroundimage"
                                        id="backgroundimage">
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="loop" value="{{ $drag->count() }}">

                    </div>


                    <div class="pages5-bungkusjajan">
                        <div class="pages5-lamnjut">
                            <a href="/page4" class="pages5-lanjutkan">
                                <i class="fa-solid fa-chevron-left"></i>
                                Kembali
                            </a>
                            <a href="/regular">
                                <button id="btnSudah" class="pages5-lanjutkan">
                                    Selesai
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
                <div id="prew2" class="pages5-kanan">
                    <a href class="pages5-preview">getlink/tautan microsite</a><br />
                    <div class="anim pages5-kanan-bung hidden">
                        <div id="kanan-bungkus" class="kanan-bungkus">

                            @if ($background->type_background == 'color')
                                <div class="bungkus" style='background: {{ $background->background }}'>
                                @else
                                    <div class="bungkus"
                                        style="background-image: url('{{ asset('microsite/background/' . $background->background) }}')">
                            @endif
                            <?php $non_bungkus = ''; ?>
                            <?php $kolom2 = ''; ?>
                            @foreach ($data as $i)
                                <?php $code = $i['code']; ?>
                                <?php $html = str_replace('src="microsite/medsos', 'src="' . asset('microsite/medsos/'), $i['code']); ?>
                                @if ($i['id'] === 9)
                                    <?php $kolom2 .= str_replace('src="microsite/konten', 'src="' . asset('microsite/konten/'), $i['code']); ?>
                                @else
                                    <?php $non_bungkus .= $html; ?>
                                @endif
                            @endforeach
                            <?php if (!empty($kolom2)) : ?>
                            <?php $non_bungkus .= '<div class="bungkus-anak" id="bungkus-template-konten">' . $kolom2 . '</div>'; ?>
                            <?php endif; ?>
                            {!! $non_bungkus !!}
                        </div>
                    </div>
                </div>
                <div class="pages3-lamnjut-prew">
                    <a href="/page4" style="margin: 0;" class="pages5-lanjutkan">
                        <i class="fa-solid fa-chevron-left"></i>
                        Kembali
                    </a>
                    <a href="/regular">
                        <button style="margin: 0;" id="btnSudah" class="pages5-lanjutkan">
                            Selesai
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        </div>
        @include('layout.Dashboard_User.footer')
        </div>
    </main>

    <div id="CompoModal" class="modal-compoas navAni" style="display: none;">
        <div class="modal-compo-barua">
            <div class="modal-atas">
                <h1 class="comp-text">Tambah komponen baru</h1>
                <span class="comp-x">&times;</span>
            </div>
            <div class="modal-bawah">
                @foreach ($tambah_komponen as $key => $tk)
                    <button class="comp-card btnKomponen sudahPilih" data-id="{{ $tk->id }}"
                        id="btnkomponen{{ $key + 1 }}">
                        <i class="fa-solid {{ $tk->icon }}" style="color: #524799;"></i>
                        <div class="comp-teks">
                            <p class="head-name">
                                {{ $tk->name }}
                            </p>
                            <p class="comp-penjes">
                                {{ $tk->desc }}
                            </p>
                        </div>
                    </button>
                @endforeach
            </div>
            <input type="hidden" id="komponenLoop" value="{{ $tambah_komponen->count() }}">
        </div>
    </div>

    <script>
        function refreshTemplate(data) {
            try {
                $(document).ready(function() {
                    console.log(data)
                    if ($('#title').length) {
                        var judulBaru = data[1];
                        $('h4#title').each(function(index) {
                            // Menambahkan nomor urut pada id
                            $(this).attr('id', 'title-' + (index));
                            $(this).text(judulBaru[index]);
                        });
                    }
                    if ($('#deskripsi').length) {
                        var judulBaru = data[3];
                        $('p#deskripsi').each(function(index) {
                            // Menambahkan nomor urut pada id
                            $(this).attr('id', 'deskripsi-' + (index));
                            $(this).text(judulBaru[index]);
                        });
                    }
                    if ($('#image').length) {
                        var gambarBaru = data[0];
                        $('img#image').each(function(index) {
                            $(this).attr('id', 'image-' + (index));
                            $(this).attr('src', 'http://localhost:8000/microsite/icon/' + gambarBaru[
                                index]);
                        });
                    }
                    if ($('.bungkus-anak .medsos-template').length) {
                        var linkBaru = data[2][0].split(',');
                        $('.bungkus-anak .medsos-template').each(function(index) {
                            if (index == 0) {
                                $(this).attr('href', 'https://www.instagram.com/' + linkBaru[index]);
                            } else if (index == 1) {
                                $(this).attr('href', 'https://www.twitter.com/' + linkBaru[index]);
                            } else if (index == 2) {
                                $(this).attr('href', 'https://www.facebook.com/' + linkBaru[index]);
                            } else if (index == 3) {
                                $(this).attr('href', 'https://www.youtube.com/' + linkBaru[index]);
                            } else if (index == 4) {
                                $(this).attr('href', 'https://www.tiktok.com/' + linkBaru[index]);
                            }
                        });
                    }
                    if ($('.bungkus-anak .konten-template').length) {
                        var kontenBaru = data[4];
                        for (var i = 0; i < kontenBaru.length; i++) {
                            // Memecah string di item ke-i berdasarkan koma
                            var splitItem = kontenBaru[i].split(',');

                            var img = document.getElementsByClassName('img-template')[i];

                            // Mengganti nilai atribut src pada elemen img
                            img.src = 'http://localhost:8000/microsite/konten/' + splitItem[0];

                            // Mengambil elemen HTML a
                            var a = document.getElementsByClassName('konten-template')[i];

                            // Mengganti nilai atribut href pada elemen a
                            a.href = splitItem[1];
                        }
                    }
                });
            } catch (e) {
                console.log('Error parsing JSON', e);
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $("input[name='linkkonten[]'], input[name='imagekonten[]']").on('change', function() {
                var konten = '';
                var lastParam = $(this).closest('.pages5-input-file').data('id');
                var formData = new FormData();

                // Cek apakah input background color tidak kosong
                if ($(this).attr('name') == 'imagekonten[]' && $(this).get(0).files[0]) {
                    konten = $(this).get(0).files[0];
                    // Jika background color tidak kosong, kosongkan input background image
                    $(this).closest('.pages5-input-file').find('input[name="linkkonten[]"]').val('');
                } else if ($(this).attr('name') == 'linkkonten[]' && $(this).val()) {
                    konten = $(this).val();
                    // Jika background image tidak kosong, kosongkan input background color
                    $(this).closest('.pages5-input-file').find('input[name="imagekonten[]"]').val('');
                }

                formData.append('konten', konten);
                formData.append('id', lastParam);

                // Kirim data menggunakan ajax
                $.ajax({
                    url: "{{ route('update_konten_microsite') }}",
                    method: 'POST',
                    processData: false, // Hindari pengolahan data otomatis oleh jQuery
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function(response) {
                        refreshTemplate(response.data);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>

    <script>
        var typecolor = document.getElementById("typecolor");
        var typeimage = document.getElementById("typeimage");
        var backgroundcolor = document.getElementById("backgroundcolor");
        var backgroundimage = document.getElementById("backgroundimage");

        if ({{ $background->type_background == 'color' ? 'true' : 'false' }}) {
            typecolor.checked = true;
            backgroundcolor.style.display = "block";
            backgroundimage.style.display = "none";
        } else {
            typeimage.checked = true;
            backgroundcolor.style.display = "none";
            backgroundimage.style.display = "block";
        }

        typecolor.addEventListener("change", function() {
            backgroundcolor.style.display = "block";
            backgroundimage.style.display = "none";
        });

        typeimage.addEventListener("change", function() {
            backgroundcolor.style.display = "none";
            backgroundimage.style.display = "block";
        });

        $(document).ready(function() {
            $('#backgroundcolor, #backgroundimage').on('change', function() {

                var backgroundPreview = '';

                if ($('#backgroundcolor').val() != '') {
                    var background = $('#backgroundcolor').val();

                    backgroundPreview = $('#backgroundcolor').val();

                    $('#backgroundimage').val('');

                    $('.bungkus').css('background', backgroundPreview);

                } else if ($('#backgroundimage').val() != '') {
                    var background = $('#backgroundimage')[0].files[0];

                    backgroundPreview = 'url(' + URL.createObjectURL($('#backgroundimage')[0].files[0]) +
                        ')';

                    $('#backgroundcolor').val('');

                    $('.bungkus').css('background-image', backgroundPreview);
                }

                var url = window.location.href;
                var lastParam = url.split('/').pop();
                var formData = new FormData();
                formData.append('background', background);
                formData.append('id', lastParam);
                // Kirim data menggunakan ajax
                $.ajax({
                    url: "{{ route('update_background_microsite') }}",
                    method: 'POST',
                    processData: false, // Hindari pengolahan data otomatis oleh jQuery
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>

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

        function updateImage(formData, dropifyElement) {
            $.ajax({
                url: "{{ route('update_image_microsite') }}",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    $('#kanan-bungkus').load(window.location.href + ' #kanan-bungkus');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(errorThrown);
                }
            });
        }
    </script>

    <script>
        var delayTimer;

        function handleInputChange() {
            if ($(this).hasClass('summernote')) {
                var inputValue = $(this).summernote('code');
            } else {
                var inputValue = $(this).val();
            }
            var parentID = $(this).parent().data('id');
            var inputName = $(this).attr('name')
            clearTimeout(delayTimer);
            delayTimer = setTimeout(function() {
                $.ajax({
                    url: "{{ route('update_value_microsite') }}",
                    method: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        value: inputValue,
                        id: parentID,
                        name: inputName
                    },
                    success: function(response) {
                        console.log(response);
                        $('#kanan-bungkus').load(window.location.href + ' #kanan-bungkus');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error(errorThrown);
                    }
                });
            }, 1000);
        }

        $(document).ready(function() {
            $('input[name^="icon"], input[name^="descripsi"], input[name^="instagram"], input[name^="link"], input[name^="twitter"], input[name^="tiktok"], input[name^="youtube"], input[name^="facebook"]')
                .on('keyup', handleInputChange);

            $('#summernote').summernote({
                callbacks: {
                    onChange: function(contents, $editable) {
                        handleInputChange.call($('#summernote')[0]);
                    }
                }
            });

            $('#summernote3').summernote({
                callbacks: {
                    onChange: function(contents, $editable) {
                        handleInputChange.call($('#summernote3')[0]);
                    }
                }
            });
        });
    </script>

    <script>
        var data = @json($value);
        $(document).ready(function() {
            console.log(data)
            if ($('#title').length) {
                var judulBaru = data[1];
                $('h4#title').each(function(index) {
                    // Menambahkan nomor urut pada id
                    $(this).attr('id', 'title-' + (index));
                    $(this).text(judulBaru[index]);
                });
            }
            if ($('#deskripsi').length) {
                var judulBaru = data[3];
                $('p#deskripsi').each(function(index) {
                    // Menambahkan nomor urut pada id
                    $(this).attr('id', 'deskripsi-' + (index));
                    $(this).text(judulBaru[index]);
                });
            }
            if ($('#image').length) {
                var gambarBaru = data[0];
                $('img#image').each(function(index) {
                    $(this).attr('id', 'image-' + (index));
                    $(this).attr('src', 'http://localhost:8000/microsite/icon/' + gambarBaru[index]);
                });
            }
            if ($('.bungkus-anak .medsos-template').length) {
                var linkBaru = data[2][0].split(',');
                $('.bungkus-anak .medsos-template').each(function(index) {
                    if (index == 0) {
                        $(this).attr('href', 'https://www.instagram.com/' + linkBaru[index]);
                    } else if (index == 1) {
                        $(this).attr('href', 'https://www.twitter.com/' + linkBaru[index]);
                    } else if (index == 2) {
                        $(this).attr('href', 'https://www.facebook.com/' + linkBaru[index]);
                    } else if (index == 3) {
                        $(this).attr('href', 'https://www.youtube.com/' + linkBaru[index]);
                    } else if (index == 4) {
                        $(this).attr('href', 'https://www.tiktok.com/' + linkBaru[index]);
                    }
                });
            }
            if ($('.bungkus-anak .konten-template').length) {
                var kontenBaru = data[4];
                for (var i = 0; i < kontenBaru.length; i++) {
                    // Memecah string di item ke-i berdasarkan koma
                    var splitItem = kontenBaru[i].split(',');

                    var img = document.getElementsByClassName('img-template')[i];

                    // Mengganti nilai atribut src pada elemen img
                    img.src = 'http://localhost:8000/microsite/konten/' + splitItem[0];

                    // Mengambil elemen HTML a
                    var a = document.getElementsByClassName('konten-template')[i];

                    // Mengganti nilai atribut href pada elemen a
                    a.href = splitItem[1];
                }
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            var url1 = window.location.href;
            var parameter = url1.substring(url1.lastIndexOf('/') + 1);

            var idVal = $('#komponenLoop').val();
            for (var i = 1; i <= idVal; i++) {

                var btnKomponen = $("#btnkomponen" + i);

                btnKomponen.click(function() {

                    $.ajax({
                        url: "{{ route('tambah_komponen_microsite') }}",
                        type: "POST",
                        data: {
                            id: $(this).data("id"),
                            id_microsite: parameter,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            console.log(response);
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.statusText);
                        }
                    });

                });

            }
        });
    </script>

    <script src="{{ asset('assets/summernote/summernote-lite.js') }}"></script>

    <script>
        function sendData() {
            var url = window.location.href;
            var parameterTerakhir = url.substring(url.lastIndexOf('/') + 1);

            var order = [];
            var komponen = [];
            var microdet = [];

            // Mengambil order dari setiap elemen
            $(".pages5-komponen-2").each(function() {
                order.push($(this).data("order"));
            });
            $(".pages5-komponen-2").each(function() {
                komponen.push($(this).data("komponen"));
            });
            $(".pages5-komponen-2").each(function() {
                microdet.push($(this).data("id"));
            });


            // Mengirim data-order ke server
            $.ajax({
                url: "{{ url('update_microsite/:id_microsite') }}".replace(':id_microsite', parameterTerakhir),
                method: "POST",
                data: {
                    order: order,
                    komponen: komponen,
                    microdet: microdet,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log("Data-order berhasil dikirim ke server");
                    $('#kanan-bungkus').load(window.location.href + ' #kanan-bungkus');
                },
                error: function(xhr, status, error) {
                    console.log("Terjadi kesalahan: " + error);
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $("#summernote").summernote({
                focus: true,

                toolbar: [
                    ["style", ["bold", "italic", "underline", "clear"]],
                    ["font", ["fontsize", "forecolor"]],
                    ["color", ["backcolor"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["height", ["height"]],
                    ["insert", ["link"]],
                    ["view", ["fullscreen", "codeview", "help"]],
                ],
                disablePicture: true,
                disableVideo: true,
            });
        });

        $(document).ready(function() {
            $("#summernote2").summernote({
                focus: true,

                toolbar: [
                    ["style", ["bold", "italic", "underline", "clear"]],
                    ["font", ["fontsize", "forecolor"]],
                    ["color", ["backcolor"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["height", ["height"]],
                    ["insert", ["link"]],
                    ["view", ["fullscreen", "codeview", "help"]],
                ],
                disablePicture: true,
                disableVideo: true,
            });
        });

        $(document).ready(function() {
            $("#summernote3").summernote({
                focus: true,

                toolbar: [
                    ["style", ["bold", "italic", "underline", "clear"]],
                    ["font", ["fontsize", "forecolor"]],
                    ["color", ["backcolor"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["height", ["height"]],
                    ["insert", ["link"]],
                    ["view", ["fullscreen", "codeview", "help"]],
                ],
                disablePicture: true,
                disableVideo: true,
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            const parent = document.getElementById("pgKr");
            const children = document.querySelectorAll(".pages5-komponen-2");

            let draggingChild = null;

            children.forEach((child) => {
                const grandchild = child.querySelector(".div3Dot-drop");
                if (grandchild) {
                    const upButton = grandchild.querySelector(".up");
                    const downButton = grandchild.querySelector(".down");

                    upButton.addEventListener("click", () => {
                        const prevSibling = child.previousElementSibling;
                        if (prevSibling) {
                            parent.insertBefore(child, prevSibling);
                        }
                        sendData()
                    });

                    downButton.addEventListener("click", () => {
                        const nextSibling = child.nextElementSibling;
                        if (nextSibling) {
                            parent.insertBefore(nextSibling, child);
                        } else {
                            parent.appendChild(child);
                        }
                        sendData()
                    });

                    grandchild.addEventListener("dragstart", () => {
                        draggingChild = child;
                        sendData();
                    });

                    grandchild.addEventListener("dragend", () => {
                        draggingChild = null;
                        sendData();
                    });

                    grandchild.addEventListener("dragover", (e) => {
                        e.preventDefault();
                        const target = e.target.closest(".pages5-komponen-2");
                        if (target && target !== draggingChild) {
                            const rect = target.getBoundingClientRect();
                            const y = e.clientY - rect.top;
                            if (y < rect.height / 2) {
                                parent.insertBefore(draggingChild, target);
                            } else {
                                parent.insertBefore(draggingChild, target.nextElementSibling);
                            }
                            sendData();
                        }
                    });
                }
            });
        });
    </script>

    <script>
        const buttonPrew = document.querySelector(".pages5-tambah-prew");
        const prew1 = document.getElementById("prew1");
        const prew2 = document.getElementById("prew2");

        buttonPrew.addEventListener("click", function() {
            prew1.classList.toggle("pages5kirPrew");
            prew2.classList.toggle("pages5Prew");
            buttonPrew.classList.add("preew");
        });

        window.onclick = function(event) {
            if (event.target == buttonPrew) {
                buttonPrew.classList.remove("preew");
            }
        };

        const elements = document.querySelectorAll(".pages5-komponen-2");

        let currentElement = null;

        elements.forEach((element) => {
            element.addEventListener("dragstart", () => {
                currentElement = element;
            });

            element.addEventListener("dragover", (event) => {
                event.preventDefault();
            });

            element.addEventListener("drop", () => {
                const dropZone = event.target.closest(".pages5-komponen-2");

                if (dropZone && dropZone !== currentElement) {
                    const parent = currentElement.parentNode;
                    const indexCurrentElement = Array.prototype.indexOf.call(
                        parent.children,
                        currentElement
                    );
                    const indexDropZone = Array.prototype.indexOf.call(
                        parent.children,
                        dropZone
                    );

                    if (indexCurrentElement < indexDropZone) {
                        parent.insertBefore(currentElement, dropZone.nextSibling);
                    } else {
                        parent.insertBefore(currentElement, dropZone);
                    }

                    sendData();
                }

                currentElement = null;
            });
        });

        var Commodal = document.getElementById("CompoModal");

        // Get the button that opens the modal
        var Combtn = document.getElementById("CCOpmBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("comp-x")[0];

        // When the user clicks the button, open the modal
        Combtn.onclick = function() {
            Commodal.style.display = "block";
        };

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Commodal.style.display = "none";
        };
    </script>

    <script>
        //dropdown

        $(document).ready(function() {
            var id = $('#loop').val();
            for (var i = 0; i < id; i++) {
                // Ubah ID setiap elemen HTML dengan menambahkan nomor iterasi
                var dropdownBtn = $("#dropdown-btn-" + i);
                var dropdownContent = $("#dropdown-content-" + i);
                var iit = $("#it" + i);

                // Lakukan sesuatu dengan elemen yang telah dimodifikasi
                // contoh: tambahkan event listener untuk dropdown button
                function createDropdownToggleListener(dropdownContent, iit) {
                    return function() {
                        dropdownContent.toggleClass("drop-tampil-1");
                        if (iit.hasClass("fa-chevron-down")) {
                            iit.removeClass("fa-chevron-down").addClass("fa-chevron-up");
                        } else {
                            iit.removeClass("fa-chevron-up").addClass("fa-chevron-down");
                        }
                    }
                }

                // Menambahkan event listener dengan fungsi closure
                dropdownBtn.on("click", createDropdownToggleListener(dropdownContent, iit));


                const btnSwitch = $("#btnSwitch" + i);
                const comp = $("#pages5Kom" + i);
                const icon = $("#icon" + i);

                function sendStatus(status) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('update_status_microsite') }}",
                        data: {
                            id: comp.attr("data-id"),
                            status: status,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            console.log(response);
                            $('#kanan-bungkus').load(window.location.href + ' #kanan-bungkus');
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });
                }

                // Definisikan fungsi event listener untuk button
                function createToggleListener(comp, icon) {
                    return function() {
                        if (comp.css("opacity") === "0.5") {
                            comp.css("opacity", "1");
                            icon.removeClass("fa-eye-slash");
                            icon.addClass("fa-eye");
                            icon.css("color", "");
                            sendStatus(comp.attr("data-status") === "on" ? "off" : "on");
                            comp.attr("data-status", "on");
                        } else {
                            comp.css("opacity", "0.5");
                            icon.removeClass("fa-eye");
                            icon.addClass("fa-eye-slash");
                            icon.css("color", "#c80000");
                            sendStatus(comp.attr("data-status") === "on" ? "off" : "on");
                            comp.attr("data-status", "off");
                        }
                    };
                }

                // Tambahkan event listener ke button dengan fungsi event listener yang telah dibuat
                btnSwitch.on("click", createToggleListener(comp, icon));


                // const divAc = $("#div3Dot" + i);
                // const acDiv = $("#btnDrop3Dot" + i);

                // // Tambahkan event listener ke button dengan fungsi event listener yang telah dibuat
                // acDiv.on("click", (function(div) {
                //     return function() {
                //         div.toggleClass("div3Dotact");
                //     };
                // })(divAc));

                const divAc = $("#div3Dot" + i);
                const acDiv = $("#btnDrop3Dot" + i);

                // Tambahkan event listener ke button dengan fungsi event listener yang telah dibuat
                acDiv.on("click", (function(div) {
                return function() {
                // Hilangkan kelas div3Dotact dari semua elemen dengan kelas tersebut
                $(".div3Dotact").not(div).removeClass("div3Dotact");
                // Tambahkan atau hapus kelas div3Dotact pada elemen yang diklik
                div.toggleClass("div3Dotact");
                };
                })(divAc));

                (function(index) {
                    var delmodal = $("#DelComModal" + index);
                    var delbtn1 = $("#del" + index);
                    var delspan = $(".del-close");
                    var delBal = $("#delbal" + index);

                    delbtn1.click(function() {
                        delmodal.show();
                    });

                    delspan.click(function() {
                        delmodal.hide();
                    });

                    delBal.click(function() {
                        delmodal.hide();
                    });

                    var delBtn = $("#btnTrash" + index);
                    delBtn.click(function() {
                        var idKomponen = delmodal.data("id_komponen");
                        $.ajax({
                            url: "{{ route('hapus_komponen_microsite') }}",
                            type: "POST",
                            data: {
                                id: idKomponen,
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                console.log(response);
                                delmodal.hide();
                                $('#kanan-bungkus').load(window.location.href +
                                    ' #kanan-bungkus');
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr.statusText);
                            }
                        });
                    });
                })(i);
            }

        });
    </script>
@endsection
