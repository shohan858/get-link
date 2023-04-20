@extends('admin.layout.base')

@section('admin_konten')
<main>
    <div style="margin-left: -800px" class="content">
        <div class="lang-content hidden">
            <div class="aniLeft btnprev">
                <button class="pages5-tambah-prew">
                    preview
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
                    @foreach($drag as $key => $item)
                        @if($item['status'] === "off")
                        <div id="pages5Kom{{$key}}" draggable="true" data-id="{{$item['id']}}" data-status="{{$item['status']}}" data-order="{{$item['order']}}" data-komponen="{{$item['id_komponen']}}" class="pages5-komponen-2" style="opacity: 0.5">
                            @else
                            <div id="pages5Kom{{$key}}" draggable="true" data-id="{{$item['id']}}" data-status="{{$item['status']}}" data-order="{{$item['order']}}" data-komponen="{{$item['id_komponen']}}" class="pages5-komponen-2">
                                @endif
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="{{ asset('assets/img/Group 71.png') }}" alt="" />
                                        </button>
                                        <i class="fa-regular fa-user" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">{{$item['title']}}</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch{{$key}}" class="btn-switch">
                                            @if($item['status'] === "off")
                                            <i id="icon{{$key}}" class="fa-solid fa-eye-slash" style="color: red"></i>
                                            @else
                                            <i id="icon{{$key}}" class="fa-solid fa-eye"></i>
                                            @endif
                                        </button>
                                        <button id="del{{$key}}" class="btn-trash">
                                            <i id=trash{{$key}} class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot{{$key}}" class="btn-3dot">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot{{$key}}" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z" fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z" fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="DelComModal{{$key}}" data-id_komponen="{{$item['id']}}" class="del-com-modal navAni">
                                    <!-- Modal content -->
                                    <div class="del-conmo">
                                        <span class="del-close">&times;</span>
                                        <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
                                        <p class="del-hapus-tulisan2">
                                            Apakah anda yakin ingin menghapus komponen ini
                                        </p>
                                        <div class="del-bungkus-hapusbutton">
                                            <button id="delbal{{$key}}" class="del-batal-button">Batal</button>
                                            <button id="btnTrash{{$key}}" class="del-hapus-button">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            @endforeach
                            <div id="pages5Kom" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri" style="margin-left: 30px">
                                        <p class="pages5-isi">fjdvfdegvb</p>
                                        <label for="typecolor">color</label>
                                        <input type="radio" name="type" value="color" id="typecolor">
                                        <label for="typeimage">image</label>
                                        <input type="radio" name="type" value="image" id="typeimage">
                                        <input type="color" style="display: none" name="backgroundcolor" id="backgroundcolor">
                                        <input type="file" style="display: none" name="backgroundimage" id="backgroundimage">
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" id="loop" value="{{count($drag)}}">

                        </div>


                        <div class="pages5-bungkusjajan">
                            <div class="pages5-lamnjut">
                                        <button id="btnSudah" class="pages5-lanjutkan">
                                            Selesai
                                            <svg class="finish" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.875 2.29169L6.37499 14.7917L0.645828 9.06252L2.11458 7.59377L6.37499 11.8438L17.4062 0.822937L18.875 2.29169Z" fill="#524799" />
                                            </svg>
                                        </button>
                            </div>
                        </div>

                    </div>
                    <div id="prew2" class="anim pages5-kanan hidden">
                        <a href="{{route('admin.preview_template', ['id' => $background->id])}}" class="pages5-preview">Preview Template</a><br />
                        <div id="kanan-bungkus" style="background-color: transparent" class="kanan-bungkus">

                        @if($background->type_background == 'color')
                            <div class="bungkus" style='background: {{ $background->background }}'>
                                @else
                                <div class="bungkus" style="background-image: url('{{ asset('microsite/background/'.$background->background) }}')">
                                    @endif
                                    <?php $non_bungkus = ''; ?>
                                    @foreach($data as $d)
                                        <?php
                                            // mengganti string "src=" pada folder "microsite/konten/"
                                            $html = str_replace('src="microsite/konten', 'src="' . asset('microsite/konten/'), $d['code']);
                                            // mengganti string "src=" pada folder "microsite/medsos/"
                                            $html = str_replace('src="microsite/medsos', 'src="' . asset('microsite/medsos/'), $html);
                                            $non_bungkus .= $html;
                                        ?>
                                    @endforeach
                                    {!! $non_bungkus !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
    </div>
</main>

<div id="CompoModal" class="modal-compoas navAni" style="display: none;">
    <div class="modal-compo-barua">
        <div class="modal-atas">
            <h1 class="comp-text">Tambah komponen baru</h1>
            <span class="comp-x">&times;</span>
        </div>
        <div class="modal-bawah">
            @foreach($tambah_komponen as $key => $tk)
            <button class="comp-card btnKomponen sudahPilih" data-id="{{$tk->id}}" id="btnkomponen{{$key + 1}}">
                <i class="fa-solid {{$tk->icon}}" style="color: #524799;"></i>
                <div class="comp-teks">
                    <p class="head-name">
                        {{$tk->name}}
                    </p>
                    <p class="comp-penjes">
                        {{$tk->desc}}
                    </p>
                </div>
            </button>
            @endforeach
        </div>
        <input type="hidden" id="komponenLoop" value="{{$tambah_komponen->count()}}">
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).on('click', '.hapusssss', function() {
        Swal.fire({
            icon:'question',
            title: 'Apakah Anda Yakin Menghapus Konten Ini??',
            showDenyButton: true,
            confirmButtonText: 'Iya',
            denyButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{route('hapus_konten_anak_microsite')}}",
                    type: "post",
                    dataType: "json",
                    data: {
                        "_token": "{{csrf_token()}}",
                        "id_microkon": $(this).data('id')
                    },
                    success: function(response) {
                        console.log(response);
                        $('#pgKr').load(window.location.href + ' #pgKr');
                        $('#kanan-bungkus').load(window.location.href + ' #kanan-bungkus');
                    }
                })
            }else{
                swal.fire({
                    icon: 'info',
                    title : 'Aksi dibatalkan',
                    timer: 800,
                });
            }
        });
    });
</script>

<script>
    $(document).on('click', '#btnSudah', function(){
        var url = window.location.href;
        var parameter = url.substring(url.lastIndexOf('/') + 1);
        $.ajax({
            url: "{{ url('admin/update_status_template_edit/:id') }}".replace(':id', parameter),
            type: 'POST',
            data: {"_token": "{{csrf_token()}}"},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log(response);
                window.location.href = "{{ route('table_template') }}";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Request failed. Status code: ' + jqXHR.status + '. Error message: ' + errorThrown);
            }
        });
    });
</script>

<script>
    var typecolor = document.getElementById("typecolor");
    var typeimage = document.getElementById("typeimage");
    var backgroundcolor = document.getElementById("backgroundcolor");
    var backgroundimage = document.getElementById("backgroundimage");

    if ({{$background->type_background == 'color' ? 'true' : 'false'}}) {
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

            } 
            else if ($('#backgroundimage').val() != '') {
                var background = $('#backgroundimage')[0].files[0];

                backgroundPreview = 'url(' + URL.createObjectURL($('#backgroundimage')[0].files[0]) + ')';
                
                $('#backgroundcolor').val('');

                $('.bungkus').css('background-image', backgroundPreview);
            }

            var url = window.location.href;
            var parameter = url.substring(url.lastIndexOf('/') + 1);
            var formData = new FormData();
            formData.append('background', background);
            formData.append('id', parameter);
            // Kirim data menggunakan ajax
            $.ajax({
                url: "{{ url('admin/update_background_template/:id') }}".replace(':id', parameter),
                method: 'POST',
                processData: false,
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
    $(document).ready(function() {
        var url1 = window.location.href;
        var parameter = url1.substring(url1.lastIndexOf('/') + 1);

        var idVal = $('#komponenLoop').val();
        for (var i = 1; i <= idVal; i++) {

            var btnKomponen = $("#btnkomponen" + i);

            btnKomponen.click(function() {

                $.ajax({
                    url: "{{ url('admin/tambah_komponen_template/:id') }}".replace(':id', parameter),
                    type: "POST",
                    data: {
                        id: $(this).data("id"),
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log(response);
                        document.querySelector('#CompoModal').style.display = 'none';
                        $('#pgKr').load(window.location.href + ' #pgKr');
                        $('#kanan-bungkus').load(window.location.href + ' #kanan-bungkus');
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
            url: "{{ url('admin/update_template_admin/:id') }}".replace(':id', parameterTerakhir),
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

            var url = window.location.href;
            var parameterTerakhir = url.substring(url.lastIndexOf('/') + 1);

            const btnSwitch = $("#btnSwitch" + i);
            const comp = $("#pages5Kom" + i);
            const icon = $("#icon" + i);

            function sendStatus(status) {
                $.ajax({
                    type: "POST",
                    url: "{{ url('admin/update_status_template/:id') }}".replace(':id', parameterTerakhir),
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


            const divAc = $("#div3Dot" + i);
            const acDiv = $("#btnDrop3Dot" + i);

            // Tambahkan event listener ke button dengan fungsi event listener yang telah dibuat
            acDiv.on("click", (function(div) {
                return function() {
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

                var url = window.location.href;
                var parameterTerakhir = url.substring(url.lastIndexOf('/') + 1);

                var delBtn = $("#btnTrash" + index);
                delBtn.click(function() {
                    var idKomponen = delmodal.data("id_komponen");
                    $.ajax({
                        url: "{{ url('admin/hapus_komponen_template/:id') }}".replace(':id', parameterTerakhir),
                        type: "POST",
                        data: {
                            id: idKomponen,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            console.log(response);
                            delmodal.hide();
                            $('#pgKr').load(window.location.href + ' #pgKr');
                            $('#kanan-bungkus').load(window.location.href + ' #kanan-bungkus');
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