<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets_landing_page/styles/style.css') }} ">

    {{-- <script src="https://www.google.com/recaptcha/api.js?render=6Lfesj4lAAAAAOub86hA8f8a1B7uI6GNeV59_2Ex"></script> --}}

</head>

<body>

    @if (request()->is('preview/getlink'))
    <div class="hero_container">
        <div class="hero_kiri">
            @foreach ($data_getlink as $item)
                @if ($item->id == 1)
                    <h1 class="__hero_h1">
                        {{ $item->title }}
                    </h1>
                    <p class="__hero_p">
                        {{ $item->subtitle }}
                    </p>
                @endif
            @endforeach
            <form id="form_link" method="POST" action="{{ route('generate.shorten.link.post') }}">
                @csrf
                <label id="tampil_link">
                    <input id="input_link" class="__hero_input" type="text" placeholder="Masukkan Link" />
                </label>
                <button id="button_link" class="__hero_button" type="submit">
                    <img id="image_link" src="{{ asset('assets_landing_page/img/Add-Link.png') }} " />
                </button>
                <div id="cakecap" class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}"
                    style="display: none">
                    <div class="col-md-6">
                    </div>
                </div>
            </form>
            

        </div>
        <div class="hero_kanan" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
            data-aos-duration="500">
            <img class="__hero_lingkaran" src="{{ asset('assets_landing_page/img/Ellipse 1.png') }} " alt="eclipse">
            {{-- <img class="__hero_image" src="{{ asset('assets_landing_page/img/firl2.png') }} " /> --}}
            @foreach ($data_getlink as $item)
            @if ($item->id == 1)
                <img class="__hero_image" src="{{ asset('gambar/' . $item->image) }}" />
            @endif
        @endforeach
    </div>

    @elseif(request()->is('preview/sponsor'))
    <section style="background-color: #BFACE2;">
        <div class="space">
            <div class="spotify">
                @foreach ($data3 as $item)
                    <div class="box_1">
                        <img src="{{ asset('gambar/' . $item->image) }}" style="width:130px;" xalt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @elseif(request()->is('preview/shortlink'))

    <section>
        <div class="short_link">
            @foreach ($data_getlink as $item)
                @if ($item->id == 2)
                    <div class="sl_kanan">
                        <img src="{{ asset('gambar/' . $item->image) }} " class="img-fluid" alt="" />
                    </div>
                @endif
            @endforeach
 
            <div class="sl_kiri">
                @foreach ($data_getlink as $item)
                    @if ($item->id == 2)
                        <h1 class="heading-1">{{ $item->title }}</h1>
                        <p class="para">
                            {{ $item->subtitle }}
                        </p>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    @elseif(request()->is('preview/microsite'))

    <section>
        <div class="box_on_dev">
            <p class="on_dev">on development</p>
        </div>
        <div class="microsite">
            <div class="microsite_kiri">
                <h1 class="microsite_h1">Microsite</h1>
                <div class="gear">
                    @foreach ($data_getlink as $item)
                        @if ($item->id == 3)
                            <img src="{{ asset('gambar/' . $item->image) }} " alt="" />
                            <div class="microsite_text">
                                <h3 class="microsite_h3"><b>{{ $item->title }}</b></h3>
                                <p class="microsite_p">
                                    {{ $item->subtitle }}
                                </p>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="people">
                    @foreach ($data_getlink as $item)
                        @if ($item->id == 4)
                            <img src="{{ asset('gambar/' . $item->image) }} " alt="" />
                            <div class="microsite_text">
                                <h3 class="microsite_h3"><b>{{ $item->title }}</b></h3>
                                <p class="microsite_p">
                                    {{ $item->subtitle }}
                                </p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="microsite_kanan">
                <img class="incroGam" src="{{ asset('assets_landing_page/img/2 2.png') }} " alt="" />
            </div>
        </div>
    </section>

    @elseif(request()->is('preview/cms'))
    <section style="margin-top: 170px; margin-bottom: 50px;">
        <div align="center" class="center">
            <div class="box_on_dev">
                <p class="on_dev">on development</p>
            </div>
        </div>
        <div class="CMS">
            <div class="CMS_kiri">
                <img class="cms_gmb" src="{{ asset('assets_landing_page/img/3 1.png') }} " alt="">
            </div>
            <div class="CMS_kanan">
                @foreach ($data_getlink as $item)
                    @if ($item->id == 5)
                        <h1 class="CMS_h1">{{ $item->title }}</h1>
                        <p class="CMS_p">{{ $item->subtitle }}</p>
                    @endif
                @endforeach
 
 
                @foreach ($data_getlink as $item)
                    @if ($item->id == 6)
                        <div class="CMS_li">
                            <img class="CMS_img" src="{{ asset('assets_landing_page/img/Vector (1).png') }} "
                                alt="">
                            <p class="CMS_li_p">{{ $item->title }}</p>
                        </div>
                    @endif
                @endforeach
                @foreach ($data_getlink as $item)
                    @if ($item->id == 7)
                        <div class="CMS_li">
                            <img class="CMS_img" src="{{ asset('assets_landing_page/img/Vector (1).png') }} "
                                alt="">
                            <p class="CMS_li_p">{{ $item->title }}</p>
                        </div>
                    @endif
                @endforeach
                @foreach ($data_getlink as $item)
                    @if ($item->id == 8)
                        <div class="CMS_li">
                            <img class="CMS_img" src="{{ asset('assets_landing_page/img/Vector (1).png') }} "
                                alt="">
                            <p class="CMS_li_p">{{ $item->title }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    @elseif(request()->is('preview/keunggulan'))
    <section>
        <div align="center" style="margin-bottom: 30px;">
            <h1 class="list_top_h1">Keunggulan</h1>
            <p class="list_top_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
 
        <div class="list_container">
            <div class="list_kanan">
                @foreach ($data_getlink as $item)
                    @if ($item->id == 9)
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b>{{ $item->title }}</b></h4>
                                <p class="list_p">
                                    {{ $item->subtitle }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
 
                @foreach ($data_getlink as $item)
                    @if ($item->id == 11)
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b>{{ $item->title }}</b></h4>
                                <p class="list_p">
                                    {{ $item->subtitle }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
 
                @foreach ($data_getlink as $item)
                    @if ($item->id == 13)
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b>{{ $item->title }}</b></h4>
                                <p class="list_p">
                                    {{ $item->subtitle }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="list_kiri">
                @foreach ($data_getlink as $item)
                    @if ($item->id == 10)
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b>{{ $item->title }}</b></h4>
                                <p class="list_p">
                                    {{ $item->subtitle }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
 
                @foreach ($data_getlink as $item)
                    @if ($item->id == 12)
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b>{{ $item->title }}</b></h4>
                                <p class="list_p">
                                    {{ $item->subtitle }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
 
                @foreach ($data_getlink as $item)
                    @if ($item->id == 14)
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b>{{ $item->title }}</b></h4>
                                <p class="list_p">
                                    {{ $item->subtitle }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
   @endif

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

            $('#input_link').val("{{ env('APP_URL') }}" + "/short/" + response.short_link);
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
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
