<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GetLink</title>
  <link rel="shortcut icon" href="{{ url('landing_page/assets/image/logo/logo-getlink2.png')}}" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="{{asset('landing_page/assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{asset('landing_page/assets/fonts/icon-font/css/style.css') }}">
  <link rel="stylesheet" href="{{asset('landing_page/assets/fonts/typography-font/typo.css') }}">
  <link rel="stylesheet" href="{{asset('landing_page/assets/fonts/fontawesome-5/css/all.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="{{asset('landing_page/assets/plugins/aos/aos.min.css') }}">
  <link rel="stylesheet" href="{{asset('landing_page/assets/plugins/slick/slick.min.css') }}">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="{{asset('landing_page/assets/css/main.css') }}">
  <!-- Custom stylesheet -->
  <link rel="stylesheet" href="{{asset('landing_page/style.css')}}">

  {{-- {!! ReCaptcha::htmlScriptTagJsApi() !!} --}}
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
  <div class="site-wrapper overflow-hidden position-relative">
    <!-- Site Header -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader.gif" alt="preloader">
   </div>
   </div>    -->
    <!--Site Header Area -->
    <header class="site-header site-header--menu-left landing-11-menu site-header--absolute site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="#">
              <!-- light version logo (logo must be black)-->
              <img src="{{ url('landing_page/assets/image/logo/logo-text2.png')}}" style="height: 60px;" alt="">
              <!-- Dark version logo (logo must be White)-->
              {{-- <img src="{{ url('landing_page/assets/image/logo/logo-white.png')}}" alt="" class="dark-version-logo"> --}}
            </a>
          </div>
          <div class="menu-block-wrapper">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main logins">
                {{-- <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Dropdowns <i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu" id="submenu-9">
                    <li class="sub-menu--item">
                      <a href="#">Dropdown 01</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Dropdown 02</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Dropdown 03</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Dropdown 04</a>
                    </li>
                  </ul>
                </li> --}}
                
                @if (Auth::check())

                  @if (Auth::User()->usertype == 'superadmin')
                    <li class="nav-item">
                      <a class="btn log-in-btn login" href="/">
                      Dashboard
                    </a>
                    </li>
                  @endif
                
                <li class="nav-item">
                    <a class="btn log-in-btn login" href="/logout">
                        LogOut
                    </a>
                </li>

                @else
                  <li class="nav-item">
                    <a class="btn log-in-btn logins" href="/sesi">
                        Log in
                    </a>
                  </li>

                @endif

                <li class="nav-item">
                  <a href="https://uxtheme.net/product-support/" class="nav-link-item">Support</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="header-btns  header-btn-l11 ms-auto d-none d-xs-inline-flex align-items-center">
            @if (Auth::check()) 
                

                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();" class="btn log-in-btn login">
                            Log Out
                    </x-dropdown-link>
                  </form>
                
                  @if (Auth::User()->usertype == 'superadmin')
                      <a class="btn log-in-btn login" href="/">
                        Dashboard
                      </a>
                  @endif

            @else
                    <a class="btn log-in-btn login" href="/login">
                      Log in
                    </a>
            @endif
          </div>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!-- Hero Area -->
    @include('sweetalert::alert')
    <div class="hero-area-l11 position-relative z-index-1 overflow-hidden">
      <div class="container position-relative">
        <div class="row position-relative justify-content-center">
          <div class="col-xl-12 col-lg-12 col-md-12 order-lg-1 order-1" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
            <div class="content">
              <div class="row banner-l-11-bottom-content">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  @foreach ($data_getlink as $item)
                      @if ($item->id == 15)
                    <h1>{{ $item->title }}</h1>
                    @endif
                    @endforeach
                    @foreach ($data_getlink as $item)
                      @if ($item->id == 1)
                        <p class="hero-paragraph is-revealing">
                          {{ $item->title }}
                        </p>
                        <p>{{ $item->subtitle }}</p>
                      @endif
                    @endforeach
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 flex-y-center ">
                    <form id="link-short">
                        {{-- <div class="form-group" id="short_group">
                            <input type="url" id="short" placeholder="Https://Link-panjangmu-pendekkan-di-sini-lebih-cepat-praktis-dan-mudah" required>
                            <button id="buton_short" type="button">Short</button>
                        </div> --}}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button id="copy" type="button" ><i class="fas fa-copy"></i></button>
                              </div>
                            <input type="url" id="short" placeholder="Masukkan link panjangmu" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button id="buton_short" class="" type="button">Short</button>
                                <button id="reload" class="" type="button"><i class="fas fa-redo"></i></button>
                            </div>
                        </div>
                        <span id="error_link"></span>
                        <span id="sukses"></span>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-shape-l11-1 d-none d-md-block">
        <img src="{{ url('landing_page/assets/image/l2/hero-shape-1.svg')}}" alt="">
      </div>
      <div class="hero-shape-l11-2 d-none d-md-block">
        <img src="{{ url('landing_page/assets/image/l2/hero-shape-2.png')}}" alt="">
      </div>
    </div>
    <!-- Brand-area -->
    <div class="brand-area-l11">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <div class="brand-logos d-flex justify-content-center justify-content-xl-between align-items-center flex-wrap ">
              {{-- <div class="single-brand">
                <img src="{{ url('landing_page/assets/image/logo/5.png')}}" style="width:130px;" alt="">
              </div>
              <div class="single-brand">
                <img src="{{ url('landing_page/assets/image/logo/4.png')}}" style="width:130px;" xalt="">
              </div>
              <div class="single-brand">
                <img src="{{ url('landing_page/assets/image/logo/3.png')}}" style="width:130px;" xalt="">
              </div>
              <div class="single-brand">
                <img src="{{ url('landing_page/assets/image/logo/2.png')}}" style="width:130px;" xalt="">
              </div>
              <div class="single-brand">
                <img src="{{ url('landing_page/assets/image/logo/1.png')}}" style="width:130px;" xalt="">
              </div> --}}
              {{-- @foreach ($data_image  as $item)
                <div class="single-brand">
                  <img src="{{ asset('uploads/'. $item->image1 ) }}" style="width:130px;" xalt="">
                </div>
                <div class="single-brand">
                  <img src="{{ asset('uploads/'. $item->image2 ) }}" style="width:130px;" xalt="">
                </div>
                <div class="single-brand">
                  <img src="{{ asset('uploads/'. $item->image3 ) }}" style="width:130px;" xalt="">
                </div>
                <div class="single-brand">
                  <img src="{{ asset('uploads/'. $item->image4 ) }}" style="width:130px;" xalt="">
                </div>
                <div class="single-brand">
                  <img src="{{ asset('uploads/'. $item->image5 ) }}" style="width:130px;" xalt="">
                </div>
              @endforeach --}}
              @foreach ($data3 as $item)
              <div class="single-brand">
              <img src="{{ asset('uploads/'. $item->image ) }}" style="width:130px;" xalt="">
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Area-1 -->
    @foreach ($data_getlink as $item)
    @if ($item->id == 2)
    <div class="content-area-l-11-1">
      <div class="container">
        <div class="row align-items-center justify-content-lg-start justify-content-center">
          <div class="col-xl-6 col-md-5 col-md-10" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="content-img position-relative z-index-1">
              <img src="{{ asset("uploads/$item->image") }}" alt="" class="w-100">
            </div>
          </div>
          <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-7 col-md-9" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="content section-heading-5">
              <h2>
                {{ $item->title }}
              </h2>
              <p>{{ $item->subtitle }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @endforeach
    <!-- Content Area-2  -->
    <div class="content-area-l-11-2">
      <div class="container">
        <div class="row align-items-center justify-content-lg-between justify-content-center">
          <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-9 order-lg-1 order-1" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="content section-heading-5">
              @foreach ($data_getlink as $item)
                  @if ($item->id == 16)
              <h2>
                {{ $item->title }}
              </h2>
              @endif
                  @endforeach
              <h4> <i>(On Development)</i></h4>
              <div class="d-flex content-l-11-3-card">
                @foreach ($data_getlink as $item)
                  @if ($item->id == 3)
                <img src="{{ asset("uploads/$item->image") }}" width="25%" alt="">
                <div class="content-body">
                      <h5>{{ $item->title }}</h5>
                      <p>{{ $item->subtitle }}</p>
                    </div>
                    @endif
                  @endforeach
              </div>
              <div class="d-flex content-l-11-3-card">
                @foreach ($data_getlink as $item)
                  @if ($item->id == 4)
                  <img src="{{ asset("uploads/$item->image") }}" width="25%" alt="">
                <div class="content-body">
                      <h5>{{ $item->title }}</h5>
                      <p>{{ $item->subtitle }}</p>
                    </div>
                    @endif
                  @endforeach
              </div>
            </div>
          </div>
          <div class="col-xxl-6 offset-xxl-2 col-xl-6 col-lg-5 col-md-9 order-lg-1 order-0" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="content-img">
                <img src="{{url('landing_page/assets/image/content/2.png')}}" alt="" class="w-100">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Area -->
    <div class="content-area-l-11-3 position-relative">
      <div class="container">
        <div class="row align-items-center justify-content-center justify-content-lg-start">
          <div class="col-xl-6 col-lg-6 col-md-8 order-lg-1 order-0" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
            <div class="content-img">
                <img src="{{url('landing_page/assets/image/content/3.png')}}" alt="" class="w-100">
            </div>
          </div>
          <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-9 order-lg-1 order-1" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
            <div class="content section-heading-5">
              @foreach ($data_getlink as $item)
                @if ($item->id == 5)
                <h2>{{ $item->title }}</h2>
                <h4><i>(On Development)</i></h4>
                <p>{{ $item->subtitle }}</p>
                @endif
              @endforeach
              <ul class="list-unstyled pl-0">
                @foreach ($data_getlink as $item)
                  @if ($item->id == 6)
                    <li class="d-flex align-items-center">
                      <i class="fas fa-check"></i>{{ $item->title }}
                    </li>

                  @endif
                  @if ($item->id == 7)
                  <li class="d-flex align-items-center">
                    <i class="fas fa-check"></i>{{ $item->title }}
                  </li>
                  @endif

                  @if ($item->id == 8)
                  <li class="d-flex align-items-center">
                    <i class="fas fa-check"></i>{{ $item->title }}
                  </li>
                  @endif
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Area -->
    <section id="keunggulan">
    <div class="feature-l-11" >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-9 px-lg-12 col-md-12">
            <div class="row justify-content-center">
              <div class="col-lg-10 text-center">
                <div class="section-heading-5">
                </div>
              </div>
            </div>
            {{-- <div class="row feature-l-11-items justify-content-center">
              <div class="col-md-6" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                <div class="d-flex ">
                  @foreach ($data_getlink as $item)
                    @if ($item->id == 9)
                  <div class="icon-box">
                    <i><img src="{{ asset("uploads/$item->image") }}" width="25%" alt=""></i>
                  </div>
                  @endif
                  @endforeach
                  <div class="content-body">
                  @foreach ($data_getlink as $item)
                    @if ($item->id == 9)
                      <h5>{{ $item->title }}</h5>
                      <p>{{ $item->subtitle}}</p>
                    @endif
                  @endforeach
                  </div>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                <div class="d-flex ">
                  <div class="icon-box">
                    <i class="fas fa-users"></i>
                  </div>
                  <div class="content-body">
                    @foreach ($data_getlink as $item)
                    @if ($item->id == 10)
                    <h5>{{ $item->title }}</h5>
                    <p>{{ $item->subtitle}}</p>
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                <div class="d-flex ">
                  <div class="icon-box">
                    <i class="fas fa-infinity"></i>
                  </div>
                  <div class="content-body">
                    @foreach ($data_getlink as $item)
                    @if ($item->id == 11)
                    <h5>{{ $item->title }}</h5>
                    <p>{{ $item->subtitle}}</p>
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                <div class="d-flex ">
                  <div class="icon-box">
                    <i class="fas fa-link"></i>
                  </div>
                  <div class="content-body">
                    @foreach ($data_getlink as $item)
                    @if ($item->id == 12)
                    <h5>{{ $item->title }}</h5>
                    <p>{{ $item->subtitle}}</p>
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
                <div class="d-flex ">
                  <div class="icon-box"><i class="fas fa-bolt"></i>
                  </div>
                  <div class="content-body">
                    @foreach ($data_getlink as $item)
                    @if ($item->id == 13)
                    <h5>{{ $item->title }}</h5>
                    <p>{{ $item->subtitle}}</p>
                    @endif
                    @endforeach
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
                <div class="d-flex ">
                  <div class="icon-box">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <div class="content-body">
                    @foreach ($data_getlink as $item)
                    @if ($item->id == 14)
                    <h5>{{ $item->title }}</h5>
                    <p>{{ $item->subtitle}}</p>
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
            </div> --}}
            <div class="content d-flex row">
            <div class="col-md-6 col-6 mb-4">
              <div class="d-flex">
                @foreach ($data_getlink as $item)
                @if ($item->id == 9)
                  <img class="bg-primary mx-3" style="border-radius:10px " src="{{ asset("uploads/$item->image") }}" width="15%" height="15%" alt="">
                  <div class="text-white">
                    <h5>{{ $item->title }}</h5>
                      <h6 style="color:rgb(185, 176, 176)">{{ $item->subtitle}}</h6>
                  </div>
                @endif
                @endforeach
              </div>
            </div>
            <div class="col-md-6 col-6 mb-4">
              <div class="d-flex">
                @foreach ($data_getlink as $item)
                @if ($item->id == 10)
                  <img class="bg-primary mx-3" style="border-radius:10px " src="{{ asset("uploads/$item->image") }}" width="15%" height="15%" alt="">
                  <div class="text-white">
                    <h5>{{ $item->title }}</h5>
                      <h6 style="color:rgb(185, 176, 176)">{{ $item->subtitle}}</h6>
                  </div>
                @endif
                @endforeach
              </div>
            </div>
            <div class="col-md-6 col-6 mb-4">
              <div class="d-flex">
                @foreach ($data_getlink as $item)
                @if ($item->id == 11)
                  <img class="bg-primary mx-3" style="border-radius:10px " src="{{ asset("uploads/$item->image") }}" width="15%" height="15%" alt="">
                  <div class="text-white">
                    <h5>{{ $item->title }}</h5>
                      <h6 style="color:rgb(185, 176, 176)">{{ $item->subtitle}}</h6>
                  </div>
                @endif
                @endforeach
              </div>
            </div>
            <div class="col-md-6 col-6 mb-4">
              <div class="d-flex">
                @foreach ($data_getlink as $item)
                @if ($item->id == 12)
                  <img class="bg-primary mx-3" style="border-radius:10px " src="{{ asset("uploads/$item->image") }}" width="15%" height="15%" alt="">
                  <div class="text-white">
                    <h5>{{ $item->title }}</h5>
                      <h6 style="color:rgb(185, 176, 176)">{{ $item->subtitle}}</h6>
                  </div>
                @endif
                @endforeach
              </div>
            </div>
            <div class="col-md-6 col-6 mb-4">
              <div class="d-flex">
                @foreach ($data_getlink as $item)
                @if ($item->id == 13)
                  <img class="bg-primary mx-3" style="border-radius:10px " src="{{ asset("uploads/$item->image") }}" width="15%" height="15%" alt="">
                  <div class="text-white">
                    <h5>{{ $item->title }}</h5>
                      <h6 style="color:rgb(185, 176, 176)">{{ $item->subtitle}}</h6>
                  </div>
                @endif
                @endforeach
              </div>
            </div>
            <div class="col-md-6 col-6 mb-4">
              <div class="d-flex">
                @foreach ($data_getlink as $item)
                @if ($item->id == 14)
                  <img class="bg-primary mx-3" style="border-radius:10px " src="{{ asset("uploads/$item->image") }}" width="15%" height="15%" alt="">
                  <div class="text-white">
                    <h5>{{ $item->title }}</h5>
                      <h6 style="color:rgb(185, 176, 176)">{{ $item->subtitle}}</h6>
                  </div>
                @endif
                @endforeach
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- Testimonial Section -->
    {{-- <div class="testimonial-area-l-11">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
            <div class="section-heading-5 text-center">
              <h2>
                30,000+ Customers Trust Us
              </h2>
              <p>We designed and tested prototypes that helped
                identify pain points in the account creation process. Together, we shaped the new standard.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
          <div class="col-xl-10 col-lg-12 col-md-10">
            <div class="testimonial-slider-l-11 position-relative">
              <div class="single-slide focus-reset">
                <div class="testimonial-card">
                  <p>
                    <span class="d-inline-block quote-size-1">“</span> You made it so simple. My new site is
                    so much faster
                    and easier to work with than my old site. I just choose the page, make the change and
                    click save. Thanks, guys!”
                  </p>
                  <div class="d-flex user-details align-items-center">
                    <div class="customer-img">
                      <img src="{{ url('landing_page/assets/image/l2/client-img-2.png') }}" alt="">
                    </div>
                    <div class="user-identity">
                      <h5>Sallie Lawson</h5>
                      <span>Founder of Crips</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single-slide focus-reset">
                <div class="testimonial-card">
                  <p>
                    <span class="d-inline-block quote-size-1">“</span> You made it so simple. My new site is
                    so much faster
                    and easier to work with than my old site. I just choose the page, make the change and
                    click save. Thanks, guys!”
                  </p>
                  <div class="d-flex user-details  align-items-center">
                    <div class="customer-img">
                      <img src="{{ url('landing_page/assets/image/l2/client-img-1.png') }}" alt="">
                    </div>
                    <div class="user-identity">
                      <h5>Ella Brooks</h5>
                      <span>Founder of Crips</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single-slide focus-reset">
                <div class="testimonial-card rounded">
                  <p>
                    <span class="d-inline-block quote-size-1">“</span> You made it so simple. My new site is
                    so much faster
                    and easier to work with than my old site. I just choose the page, make the change and
                    click save. Thanks, guys!”
                  </p>
                  <div class="d-flex user-details  align-items-center">
                    <div class="customer-img">
                      <img src="{{ url('landing_page/assets/image/l2/client-img-2.png')}}" alt="">
                    </div>
                    <div class="user-identity">
                      <h5>Sallie Lawson</h5>
                      <span>Founder of Crips</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Newsletter-area start -->
    <div class="newsletter-l-11">
      <div class="container">
        <div class="row justify-content-center news-l-11-main-bg position-relative">
          <div class="news-l-11-second-bg w-100 h-100"></div>
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-11" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <div class="content text-center">
              <h5>Ayo Segera Bergabung!</h5>
              <h2>Daftar Sekarang Gratis!</h2>
              <p>
                Dapatkan akses seluruh fitur dengan bergabung dengan Getlink.
              </p>
              <div class="btn-area">
                <a href="/register" class="signin btn"><i class="fas fa-sign-in-alt"></i> Daftar Sekarang</a>
              </div>
              <span>Gratis tanpa biaya apapun</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Area -->
    <footer class="footer-l-11 text-center text-md-start">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-logo-l-11">
              <a href="#"><img src="{{ url('landing_page/assets/image/logo/logo-text2.png')}}" style="height: 30px;" alt="logo"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer-widget-l-11">
              <ul class="pl-0 list-unstyled d-flex flex-wrap justify-content-center align-items-end ">
                <li class="d-flex"><a href="">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="social-icons-l-11">
              <ul class="pl-0 list-unstyled d-flex  justify-content-center justify-content-md-end align-items-end ">
                <li class="d-flex flex-column justify-content-center">
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright-area-l-11">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p>© 2022 PT. Get Aplikasi Indonesia</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Vendor Scripts -->
  <script src="{{ asset('landing_page/assets/js/vendor.min.js') }}"></script>
  <!-- Plugin's Scripts -->
  <script src="{{ asset('landing_page/assets/plugins/aos/aos.min.js') }}"></script>
  <script src="{{ asset('landing_page/assets/plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset('landing_page/assets/plugins/menu/menu.js') }}"></script>
  <!-- Activation Script -->
  <script src="{{ asset('landing_page/assets/js/custom.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  {{-- <script>
    $(document).ready(function(){


        function shorten(length) {
            var result           = '';
            var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() *
        charactersLength));
        }
            return result;
        }


        // if( $("#short").val() == ""){
        //     $("#buton_short").prop("disabled",true);
        // }

        // if($("#link-short").valid() == true){
        //     console.log("oke");
        // }else{
        //     console.log("tidak oke");
        // }
        // $("#link-short").validate({
        //     submitHandler: function(form) {
        //        console.log("oke");
        //     }
        // })
        $("#short").change(function(){
            // if($("#link-short").valid() === true){
            // $("#buton_short").prop("disabled",false);
            // }else{
            //     console.log("tidak ok");
            // }
            // $("#buton_short").prop("disabled",false);
        })
        // $("#link-short").validate({
        //     submitHandler: function(form) {
        //          $("#buton_short").prop("disabled",false);
        //     }
        // });

        function isUrlValid(url) {
            return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
        }
        $("#copy").click(function(){
            var valueText = $("#short").select().val();
            document.execCommand("copy");
            swal.fire({
                icon:'success',
                title: valueText+' Berhasil di Salin',
                timer: 1000,
            })
        })

        $("#buton_short").click(function(){
            var new_linkq = $("#short").val();
            console.log(new_linkq);
            console.log(isUrlValid(new_linkq));
            if(isUrlValid(new_linkq) === false){
                $("#error_link").html('Masukan format link yang benar, Cth: Https://getschool.id');
                swal.fire({
                    icon:'error',
                    title:'Masukan format link yang benar',
                });
            }else{
                $("#error_link").html("");
                Swal.fire({
                title: 'Human Verification',
                html: '<div id="recaptcha"></div>',
                didOpen: () => {
                    grecaptcha.render('recaptcha', {
                    'sitekey': '6Lcg7QQhAAAAAB6d_Kzj8YWVushnEnLTgC2qYMX6'
                    })
                },
                preConfirm: function () {
                    if (grecaptcha.getResponse().length === 0) {
                        Swal.showValidationMessage(`Please verify that you're not a robot`)
                    }else{

                        var links = <?php echo json_encode($links); ?>;
                        console.log(links);
                        var shorten_link = shorten(5);
                        while(jQuery.inArray(shorten_link, links) != -1) {
                            shorten_link = shorten(5);
                        }

                        var data = {
                            'real_link': $('#short').val(),
                            'shorten_link': shorten_link,
                        }
                        $.ajax({
                            type: "POST",
                            url:"save-link",
                            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                            data: data,
                            dataType: "json",
                            success: function (response) {
                                // console.log(response);
                                if (response.status == 400) {
                                    swal.fire({
                                        icon: 'error',
                                    });

                                }else{
                                    swal.fire({
                                        icon: 'success',
                                        title: 'Linkmu berhasil di pendekkan !',
                                    })
                                    $("#short").val("getlink.id/"+shorten_link);
                                    $("#short").prop('readonly',true);
                                    $("#copy").css("display", "block");
                                    $("#buton_short").css('display','none');
                                    $("#reload").css('display','block');
                                    $("#sukses").html("Ingin mengubah nama link? Silahkan login");
                                }
                            }
                        })

                    }
                }
                })
            }
        })

        $("#reload").click(function(){
            $("#short").val("");
            $("#short").prop('readonly',false);
            $("#copy").css("display", "none");
            $("#buton_short").css('display','block');
            $("#reload").css('display','none');
            $("#sukses").html("");
        })
    });
  </script> --}}
</body>

</html>
