@extends('layout.Dashboard_user.base')
@section('konten')
<link rel="stylesheet" href="{{ asset('assets_landing_page/styles/style.css') }} ">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://www.google.com/recaptcha/api.js?render=6Lfesj4lAAAAAOub86hA8f8a1B7uI6GNeV59_2Ex"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<main style="margin-top: -3%;">
    <div  class="content">
        <div class="sl-content hidden">
            <div class="anim sl-content-isi">
                <div class="sl_buat_tautan">
                    <h1 class="bt_label">Buat link</h1>
                    <form id="form_link" method="POST" action="{{ route('generate.shorten.link.post') }}">
                        @csrf
                        <input style="width: 50%;" id="input_link" class="__hero_input" type="text" placeholder="Masukkan Link" />
                        <button id="button_link" class="__hero_button" type="submit">
                         <img id="image_link" src="{{ asset('assets_landing_page/img/Add-Link.png') }} " />
                    </button>   
                        <div id="cakecap" class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}" style="display: none">
                            <div class="col-md-6">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
        grecaptcha.ready(function() {
            grecaptcha.excute('', {
                action: 'contact'
            }).then(function(token) {
                if (token) {
                    document.getElementById('response').value = token;
                }
            });
        });
    </script>
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
                                timer: 800,
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
    </script>
@endsection


