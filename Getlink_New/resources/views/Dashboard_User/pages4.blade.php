@extends('layout.Dashboard_User.base')
@section('konten')
    <main>
        <div class="content">
            <div class="lang-content hidden">
                <div class="pages4-bagi">
                    <div class="anim hidden pages4-kiri">
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
                                    <input class="pages4-input" type="text" id="nama" name="name"
                                        placeholder="Nama Microsite" />
                                </div>
                                <div class="pages4-form2">
                                    <div class="pages4-button1">
                                        <a class="pages4-button1text" href="#">getlink/</a>
                                    </div>
                                    <input class="pages4-input" type="text" id="tautan" name="link"
                                        placeholder="Tautan Microsite" />
                                </div>
                        </div>
                        <div class="pages4-lamnjut">
                            <a href="/page3" class="pages4-lanjutkan">Kembali</a>
                            <button type="button" id="buat-micro" class="pages4-lanjutkan" value="1"
                                style="height:40px">Selesai</button>
                        </div>
                        </form>
                    </div>
                    <div class="anim hidden pages4-kanan">
                        <div class="kanan-bungkus">
                            <div class="pages3-bungkus-kanan">
                                <center>
                                    <div id="div" class="template0">
                                        <img src="{{ asset('assets/img/webdesin.png') }}" alt="" />
                                    </div>
                                    <div id="div1" class="template1" style="display: none">
                                        <img src="{{ asset('assets/preview-template/img/rai.png') }}" alt=""
                                            class="gambar1" />
                                        <h4 class="tulisan1">Quli Khutsi Azzumi</h4>
                                        <div class="bungkusbunderan">
                                            <div class="elipsetemplate1">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/ig.png') }}" alt=""
                                                    class="ikon" />
                                            </div>
                                            <div class="elipsetemplate1">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/twit.png') }}"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate1">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/fb.png') }}" alt=""
                                                    class="ikon" />
                                            </div>
                                            <div class="elipsetemplate1">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/yt.png') }}" alt=""
                                                    class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate1">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/tiktod.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                        </div>
                                        <div class="template1-kolom">
                                            <img src="{{ asset('assets/preview-template/img/ytred.png') }}" alt=""
                                                style="margin-top: 18%" />
                                        </div>
                                        <div class="template1-kolom2"></div>
                                        <div class="tulisan2">
                                            <p>Saya, Qulbi Khutsi Azzumi</p>
                                        </div>
                                        <div class="tulisan3">
                                            <p>
                                                Lorem ipsum is placeholder text commonly used in the
                                                graphic, print, and publishing industries for
                                                previewing layouts and visual mockups.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="div2" class="template2" style="display: none">
                                        <!-- <img src="assets/preview-template/img/garis2.png" alt="" class="gariss" /> -->
                                        <img src="{{ asset('assets/preview-template/img/rai.png') }}" alt=""
                                            class="gambar1" />
                                        <h4 class="tulisan1">PDI PERJUANGAN</h4>
                                        <div class="bungkusbunderan">
                                            <div class="elipsetemplate2">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/ig.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate2">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/twit.png') }}"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate2">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/fb.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate2">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/yt.png') }}"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate2">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/tiktod.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                        </div>
                                        <div class="template2-tulisan2">
                                            <p>Visi</p>
                                        </div>
                                        <div class="template2-tulisan3">
                                            <p>
                                                Lorem ipsum is placeholder text commonly used in the
                                                graphic
                                            </p>
                                        </div>
                                        <div class="template2-tulisan2">
                                            <p>Misi</p>
                                        </div>
                                        <div class="template2-tulisan3">
                                            <p>
                                                1. Lorem ipsum is placeholder text <br />
                                                2. Lorem ipsum is placeholder text <br />
                                                3. Lorem ipsum is placeholder text
                                            </p>
                                        </div>
                                        <div class="template2-kolom">
                                            <img src="{{ asset('assets/preview-template/img/ytred.png') }}"
                                                alt="" style="margin-top: 18%" />
                                        </div>
                                    </div>
                                    <div id="div3" class="template3" style="display: none">
                                        <img src="{{ asset('assets/preview-template/img/rai.png') }}" alt=""
                                            class="gambar1" />
                                        <h4 class="tulisan1">Quli Khutsi Azzumi</h4>
                                        <div class="tulisan3">
                                            <p>
                                                Lorem ipsum is placeholder text commonly used in the
                                                graphic, print, and publishing industries for
                                                previewing layouts and visual mockups.
                                            </p>
                                        </div>
                                        <div class="template1-kolom">
                                            <img src="{{ asset('assets/preview-template/img/ytred.png') }}"
                                                alt="" style="margin-top: 18%" />
                                        </div>
                                        <div class="bungkusbunderan2">
                                            <div class="elipsetemplate3">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/ig.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate3">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/twit.png') }}"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate3">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/fb.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate3">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/yt.png') }}"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate3">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/tiktod.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div id="div4" class="template4" style="display: none">
                                        <img src="{{ asset('assets/preview-template/img/rai.png') }}" alt=""
                                            class="gambar1" />
                                        <h4 class="template4-tulisan1">Quli Khutsi Azzumi</h4>
                                        <p class="template4-tulisan2">CEO</p>
                                        <div class="bungkusbunderan">
                                            <div class="elipsetemplate4">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/ig.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate4">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/twit.png') }}"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate4">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/fb.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate4">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/yt.png') }}"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate4">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/tiktod.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                        </div>
                                        <div class="template4-tulisan3">
                                            <p>Saya, Qulbi Khutsi Azzumi</p>
                                        </div>
                                        <div class="template4-tulisan4">
                                            <p>
                                                Lorem ipsum is placeholder text commonly used in the
                                                graphic, print, and publishing industries for
                                                previewing layouts and visual mockups.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="div5" class="template5" style="display: none">
                                        <img src="{{ asset('assets/preview-template/img/rai.png') }}" alt=""
                                            class="gambar1" />
                                        <h4 class="template5-tulisan1">Quli Khutsi Azzumi</h4>
                                        <div class="bungkusbunderan5">
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/ig.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/twit.png') }}"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/fb.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/yt.png') }}"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="{{ asset('assets/preview-template/img/tiktod.png') }}"
                                                    alt="" class="ikon" />
                                            </div>
                                        </div>
                                        <div class="template5-tulisan4">
                                            <p>
                                                Lorem ipsum is placeholder text commonly used in the
                                                graphic.
                                            </p>
                                        </div>
                                        <div class="template5-kolom"></div>
                                        <div class="template5-bungkuskolom">
                                            <div class="template5-kolom2"></div>
                                            <div class="template5-kolom2"></div>
                                            <div class="template5-kolom2"></div>
                                        </div>
                                        <div class="template5-bungkuskolom">
                                            <div class="template5-kolom2"></div>
                                            <div class="template5-kolom2"></div>
                                            <div class="template5-kolom2"></div>
                                        </div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '#buat-micro', function() {
                var urlParams = window.location.pathname.split('/');
                var Param1 = urlParams[urlParams.length - 2];
                var Param2 = urlParams[urlParams.length - 1];
                var formData = new FormData($('#form-micro')[0]);
                formData.append('id_template', Param2);
                formData.append('id_kategori', Param1);
                $.ajax({
                    type: 'POST',
                    url: '{{ route('nambah_microsite') }}',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function(response) {
                        var url = "{{ url('rubah_microsite/:id_kategori/:id_template') }}";
                        url = url.replace(':id_template', Param2);
                        url = url.replace(':id_kategori', Param1);
                        window.location.href = url;
                    }
                });
            });
        })
    </script>
    <script>
        const lastButtonClicked = sessionStorage.getItem("lastButtonClicked");
        const dav = document.getElementById("div");

        if (lastButtonClicked === "button1") {
            dav.style.display = "none";
            div1.style.display = "block";
        } else if (lastButtonClicked === "button2") {
            dav.style.display = "none";
            div2.style.display = "block";
        } else if (lastButtonClicked === "button3") {
            dav.style.display = "none";
            div3.style.display = "block";
        } else if (lastButtonClicked === "button4") {
            dav.style.display = "none";
            div4.style.display = "block";
        } else if (lastButtonClicked === "button5") {
            dav.style.display = "none";
            div5.style.display = "block";
        }
    </script>
@endpush
