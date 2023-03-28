<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET LINK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets_landing_page/styles/style.css') }} ">
</head>
<body>

  <!-- NavBar -->

  <nav class="navbar bg-body-tertiary shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('assets_landing_page/img/logo-text2.png') }} " alt="Logo" width="120" class="d-inline-block align-text-top ms-5">
      </a>
      @if (Auth::check())
      {{-- <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();" class="btn btn-outline-primary ms-auto rounded-pill me-5">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                {{ __('Log Out') }}
        </x-dropdown-link>
    </form> --}}
    <a href="/logout" class="btn btn-outline-primary ms-auto rounded-pill me-5">logout</a>
      @else
      <a href="/login" class="btn btn-outline-primary ms-auto rounded-pill me-5" type="button" style="width: 10%" >Login</a>
      @endif
    </div>
  </nav>

  <!-- End Navbar -->

  <!-- Hero -->

  <!-- <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="__landing_h1">Agar lebih enak, ringkas dilihat pilih GetLink</h1>
        <p class="__landing_p">Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.</p>
        <form action="">
          <input id="input_link" class="__landing_input" type="text" placeholder="Masukkan Link">
          <button id="button_link" class="__landing_button" type="submit">
            <img id="image_link" src=" assets_landing_page/img/Add-Link.png">
          </button>
        </form>
        <span id="copy_success_msg" class="copy-msg">Berhasil copy</span>
      </div>
      <div class="col-6">
        <div class="__landing_lingkaran">
          <img class="__landing_image" src=" assets_landing_page/img/firl2.png">
        </div>
      </div>
    </div>
  </div> -->

        <div class="hero_container">
          <div class="hero_kanan">
            <img class="__hero_lingkaran" src="{{ asset('assets_landing_page/img/Ellipse 1.png') }} " alt="eclipse">
              <img class="__hero_image" src="{{ asset('assets_landing_page/img/firl2.png') }} " />
          </div>
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
          <form action="">
            <input
              id="input_link"
              class="__hero_input"
              type="text"
              placeholder="Masukkan Link"
            />
            <button id="button_link" class="__hero_button" type="submit">
              <img id="image_link" src="{{ asset('assets_landing_page/img/Add-Link.png') }} " />
            </button>
          </form>
        </div>
      </div>

  <!-- End Hero -->

  <!-- Space -->

  <section style="background-color: #BFACE2;">
    <div class="space">
      <div class="spotify">
        @foreach ($data3 as $item)
        <div class="box_1">
          <img src="{{ asset('gambar/'. $item->image ) }}" style="width:130px;" xalt="">
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- End space -->

  <!-- Short link -->

      <section>
      <div class="short_link">
        @foreach ($data_getlink as $item)
          @if ($item->id == 2)
          <div class="sl_kanan">
            <img src="{{ asset('gambar/' . $item->image ) }} " class="img-fluid" alt="" />
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

  <!-- End Short link -->

  <!-- Microsit -->

  <!-- ======= Miicrosite Section ======= -->

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
            <img src="{{ asset('gambar/' . $item->image ) }} " alt="" />
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
              <img src="{{ asset('gambar/' . $item->image ) }} " alt="" />
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

  <!-- <section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
          <div class="content mb-3">
            <strong><h1>Microsite.</h1></strong>  
          </div>
          <div class="accordion-list">
            <ul>
              <li>
                <div class="card">
                  <div class="card-body bg-light">
                    <span>
                      <img src=" assets_landing_page/img/Gears.png" style="width:60px; height:70px;" alt="">
                    </span> 
                    <strong>Gratis Semua Pengguna</strong>          
                  </div>
                </div>
              </li>
              <li>
                <div class="card">
                  <div class="card-body bg-light">
                    <span>
                      <img src="assets_landing_page/img/People.png" style="width:60px; height:60px;" alt="">
                    </span> 
                    <strong>Gratis Semua Pengguna</strong>                                   
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets_landing_page/img/2 2.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
    </div>
  </section> -->
    
  <!-- End Microsite Section -->

  <!-- Banner -->

  <div class="banner_container">
    <img class="banner_arrow" src="{{ asset('assets_landing_page/img/Vector 7.png') }} " alt="">


    <div class="banner_kanan" style="margin-top: 100vh;">
      <h1 class="banner_h1">AYO SEGERA BERGABUNG!</h1>
      <h3 class="banner_h3">Daftar Sekarang Gratis!</h3>
      <p class="banner_p-1">Dapatkan akses seluruh fitur sengan bergabung dengan <br> Getlink.</p><br>
      <a href="" class="banner_button">
        Daftar Sekarang
      </a><br>  
      <p class="banner_small">Gratis tanpa biaya</small>
    </div>

    <div class="banner_kiri" style="margin-top: 100vh;"> 
      <img class="banner_gambar-kiri" src="{{ asset('assets_landing_page/img/woman in online meetings.png') }} " alt="">
      <img class="banner_eclippse" src="{{ asset('assets_landing_page/img/Ellipse 33.png') }} ">
    </div>
  </div>

  <!-- End banner -->

  <!-- ======= CMS Section == -->

  <section style="margin-top: 170px; margin-bottom: 50px;">
    <div align="center" class="center">
    <div class="box_on_dev">
      <p class="on_dev">on development</p>
    </div>
    </div>
    <div class="CMS">
      <div class="CMS_kiri">
        <img src="{{ asset('assets_landing_page/img/3 1.png') }} " alt="">
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
          <img class="CMS_img" src="{{ asset('assets_landing_page/img/Vector (1).png') }} " alt="">
          <p class="CMS_li_p">{{ $item->title }}</p>
        </div>
        @endif
      @endforeach
      @foreach ($data_getlink as $item)
      @if ($item->id == 7)
      <div class="CMS_li">
        <img class="CMS_img" src="{{ asset('assets_landing_page/img/Vector (1).png') }} " alt="">
        <p class="CMS_li_p">{{ $item->title }}</p>
      </div>
      @endif
      @endforeach
      @foreach ($data_getlink as $item)
      @if ($item->id == 8)
      <div class="CMS_li">
        <img class="CMS_img" src="{{ asset('assets_landing_page/img/Vector (1).png') }} " alt="">
        <p class="CMS_li_p">{{ $item->title }}</p>
      </div>
      @endif
      @endforeach
      </div>
    </div>
  </section>

  <!-- <section id="skills" class="skills">
    <div class="skills_container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
          <img src="assets_landing_page/img/3 1.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100" style="margin-top: 110px;">
          <h3>Content Management System</h3>
          <p class="fst-italic">
            Buat landing page anda tanpa perlu ngoding
          </p>
          <div class="skills-content">             
            <i class="fa-solid fa-check mb-2"></i><span class="ms-3 fs-6">Penggunaan yang mudah</span><br>
            <i class="fa-solid fa-check mb-2"></i><span class="ms-3 fs-6">Desain yang responsive</span><br>
            <i class="fa-solid fa-check"></i><span class="ms-3 fs-6">Banyak pilihan template</span>             
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End CMS Section -->

  <!-- List -->

  <section>
    <div align="center" style="margin-bottom: 30px;">
      <h1 class="list_top_h1">Keunggulan</h1>
      <p class="list_top_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
    </div>

    <div class="list_container">
      <div class="list_kanan">
        @foreach ($data_getlink as $item)
        @if ($item->id == 9)
          <div class="list-row">
            <div class="list_gmb">
              <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo" class="d-inline-block align-text-top">
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
              <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo" class="d-inline-block align-text-top">
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
            <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo" class="d-inline-block align-text-top">
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
                  <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo" class="d-inline-block align-text-top">
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
              <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo" class="d-inline-block align-text-top">
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
              <img src="{{ asset('gambar/' . $item->image) }} " alt="Logo" class="d-inline-block align-text-top">
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
    
  

  <!-- <div class="bungkus">
    <div class="container1">
      <div class="body_fitur">
        <div class="fitur_container">
          <div class="fitur_row">
            <div class="fitur_column" style="margin-left: 15px">
              <div class="fitur_section">
                <div class="image_fitur">
                  <img src=" assets_landing_page/img/Gears copy.png" alt="Logo" class="d-inline-block align-text-top">
                </div>
                <div class="fitur_text">
                  <h4>Mudah Digunakan</h4>
                  <p>
                    Tanpa perlu coding sedikitpun untuk membuat
                    website dan microsite anda.
                  </p>
                </div>
              </div>
            </div>
            <div class="fitur_column" style="margin-left: 15px">
              <div class="fitur_section">
                <div class="image_fitur">
                  <img src=" assets_landing_page/img/People_list.png" alt="Logo" class="d-inline-block align-text-top">
                </div>
                <div class="fitur_text">
                  <h4>10.000 + Pengguna</h4>
                  <p>
                    Lebih dari 10.000 pengguna dari segala
                    penjuru dunia.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="fitur_row">
            <div class="fitur_column" style="margin-left: 15px">
              <div class="fitur_section">
                <div class="image_fitur">
                  <img src=" assets_landing_page/img/Infinity.png" alt="Logo" class="d-inline-block align-text-top">
                </div>
                <div class="fitur_text">
                  <h4>Tanpa Batas</h4>
                  <p>
                    Tidak ada batasan apapun untuk link
                    anda.
                  </p>
                </div>
              </div>
            </div>
            <div class="fitur_column" style="margin-left: 15px">
              <div class="fitur_section">
                <div class="image_fitur">
                  <img src=" assets_landing_page/img/Link.png" alt="Logo" class="d-inline-block align-text-top">
                </div>
                <div class="fitur_text">
                  <h4>1M + Links Shorten</h4>
                  <p>
                    Jutaan Link telah dipendekkan.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="fitur_row">
            <div class="fitur_column" style="margin-left: 15px">
              <div class="fitur_section">
                <div class="image_fitur">
                <img src=" assets_landing_page/img/lightning bold.png" alt="Logo" class="d-inline-block align-text-top">
              </div>
              <div class="fitur_text">
                <h4>Cepat</h4>
                <p>
                  Kecepatan dalam membangun dan
                  mengakses link maupun website anda.
                </p>
              </div>
            </div>
          </div>
          <div class="fitur_column" style="margin-left: 15px">
            <div class="fitur_section">
              <div class="image_fitur">
                <img src=" assets_landing_page/img/Account.png" alt="Logo" class="d-inline-block align-text-top">
              </div>
              <div class="fitur_text">
                <h4>Manajemen Link</h4>
                <p>
                  Sangat mudah dan praktis dalam
                  memanajemen dan mengakses seluruh
                  link anda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->


  <!-- footer -->

  <div class="almost_footer">
    <img class="foot_arrow" src="{{asset('assets_landing_page/img/Vector 10.png')}}" alt="">
    <div class="box_foot_kiri">
      <div class="info">
        <div class="satu">
          <div class="image_footer me-2">
                  <img src="{{asset('assets_landing_page/img/dunia.png')}}" alt="Logo" class="bg-white rounded-circle">
                </div>
          <p>Jl.Anggrek No.200 Cepokomulyo <br> Kepanjen, Malang</p>
        </div>
        <div class="dua">
          <div class="image_footer me-2">
                  <img src="{{asset('assets_landing_page/img/telpon2.png')}}" alt="Logo" class="bg-white rounded-circle">
                </div>
          <p>+62 851-7332-1203</p>
        </div>
        <div class="tiga">
                          <div class="image_footer me-2">
                  <img src="{{asset('assets_landing_page/img/pesan.png')}}" alt="Logo" class="bg-white rounded-circle">
                </div>
          <p>getaplikasi@gmail.com</p>
        </div>
      </div>
    </div>
    <div class="box_foot_tengah">
      <p class="foot_p1">Quick link</p>
      <p class="foot_p2">Our Teams</p>
      <p class="foot_p3">Our Partners</p>
    </div>
    <div class="box_foot_kanan">
      <p class="foot_lokasi">Lokasi</p>
      <a href="https://goo.gl/maps/qTAXqypjJpA9Jxxo9" target="_blank">
      <img class="foot_lokasu_img" src="{{asset('assets_landing_page/img/map2.png')}}" alt="" style="width:300px;border-radius: 5px;"></a>
    </div>
          <img class="garis_foot" src="{{asset('assets_landing_page/img/Line 1.png')}}" alt="">
    <div class="foot_footer">
      <div class="foot_copyright">
        <p class="text-white">© 2023 Copyright : </p> 
        <a class="text-white" href="https://mdbootstrap.com/"><b>Get Aplikasi Indonesia</b></a>
      </div>
      <div class="social_media">
        <div class="social_box"><img src="{{asset('assets_landing_page/img/Vector (2).png')}}" alt=""></div>
        <div class="social_box"><img src="{{asset('assets_landing_page/img/Vector (3).png')}}" alt=""></div>
        <div class="social_box"><img src="{{asset('assets_landing_page/img/Vector (4).png')}}" alt=""></div>
        <div class="social_box"><img src="{{asset('assets_landing_page/img/Vector (5).png')}}" alt=""></div>
      </div>
    </div>
  </div>


  <!-- <div class="footer text-white">
  
    <footer class="text-center text-lg-start mt-xl-5">

      <div class="container p-1">

        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <ul class="list-unstyled mb-4">
              <li class="d-flex">
                <div class="image_footer me-2">
                  <img src=" assets_landing_page/img/dunia.png" alt="Logo" class="bg-white rounded-circle">
                </div>
                <p class="text-white">   21 Revolution Street
                  <b>Paris,France</b>
                </p>
              </li>
              <li class="d-flex">
                <div class="image_footer me-2">
                  <img src=" assets_landing_page/img/telpon2.png" alt="Logo" class="bg-white rounded-circle">
                </div>
                <p class="text-white">
                  <b>+62 851-8806-9007</b>
                </p>
              </li>
              <li class="d-flex">
                <div class="image_footer me-2">
                  <img src=" assets_landing_page/img/pesan.png" alt="Logo" class="bg-white rounded-circle">
                </div>
                <p class="text-white">
                  <b>user@gmail.com</b>
                </p>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-white"> </a>
              </li>
              <li>
                <a href="#!" class="text-white"> </a>
              </li>
              <li>
                <a href="#!" class="text-white"> </a>
              </li>
              <li>
                <a href="#!" class="text-white"> </a>
              </li>
              <li>
                <a href="#!" class="text-white"> </a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <h5 class="text-uppercase mb-4"><b>Quick Link</b></h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-white">Our Teams</a>
              </li>
              <li>
                <a href="#!" class="text-white">Our Partner</a>
              </li>
            </ul>
          </div>
          <div class="maap col-lg-3 col-md-6 mb-lg-0">
            <h5 class="text-uppercase mb-4"><b>Lokasi</b></h5>
            <div class="image_fitur">
            </div>
          </div>
        </div>
      </div>

  
      <div class="text-left p-3 border-top border-white">
        © 2023 Copyright : 
      <a class="text-white" href="https://mdbootstrap.com/"><b>Get Aplikasi Indonesia</b></a>
      </div>

    </footer>
  </div> -->

      
      
    <script>

      
      const jsonAPI = "Backend_Copy.postman_collection.json";

      fetch(jsonAPI)
        .then(function (response) {
          return response.json();
        })
        .then(function (obj) {
          console.log(obj);
        })
        .catch(function (error) {
          console.error('Someting went wrong');
          console.error(error);
        })

      const endPoint = "{{ asset('') }} assets_landing_page"
      const buttonImage = document.getElementById("image_link");
      const submitButton = document.getElementById("button_link");
      const copyButton = document.getElementById("button_copy");
      const copyMsg = document.getElementById("copy_success_msg");

      var newButton = document.createElement("button");
      newButton.id = "button_copy";
      newButton.type = "button";

      var img = document.createElement("img");
      img.id = "image_copy";
      img.src = "{{ asset('assets_landing_page/img/copy.png') }} ";

      newButton.appendChild(img);
      document.body.appendChild(newButton);

      function validateLink(link) {
        var pattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w.-]*)*\/?$/;
        return pattern.test(link);
      }

      submitButton.addEventListener("click", function(e) {
        e.preventDefault();
        const inputElement = document.getElementById("input_link");
        const link = inputElement.value.trim();

        if (link === "" || !validateLink(link)) {
          alert("Input tidak valid!");
          return;
        }

        if (buttonImage.src.includes("Refresh.png")) 
        {
          buttonImage.src = "{{ asset('assets_landing_page/img/Add-Link.png') }} ";
          newButton.parentNode.removeChild(newButton);
          submitButton.style.marginLeft = "10px";
          inputElement.value = "";
        }
        else
        {

          buttonImage.src = "{{ asset('assets_landing_page/img/Refresh.png  ') }} ";
          // var inputElement = document.getElementById("input_link");
          submitButton.style.marginLeft = "20px";
          inputElement.parentNode.insertBefore(newButton, inputElement.nextSibling);
        }
      });

      copyButton.addEventListener("click", function() {
        const inputElement = document.getElementById("input_link");
        inputElement.select();
        document.execCommand("copy");

        // Menampilkan pesan "Berhasil copy" pada elemen span selama 5 detik
        copyMsg.style.display = "inline";
        copyMsg.textContent = "Berhasil copy";
        setTimeout(function() {
          copyMsg.style.display = "none";
        }, 5000);
      });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>