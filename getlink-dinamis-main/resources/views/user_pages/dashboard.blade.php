<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Microsite</title>
    <link rel="stylesheet" href="{{ asset('assets_user/style.css') }} " />
    <script defer src="{{ asset('assets_user/main.js') }} "></script>
  </head>
  <body>
    <nav>
      <div class="navbar navAni">
        <div class="navbar-kiri">
          <button class="button-side">
            <img
              class="navbar-menu"
              src="{{ asset('assets_user/img/🦆 icon _menu_.png') }} "
              alt=""
            />
          </button>
          <img class="navbar-img" src="{{ asset('assets_user/img/logo-text2 1.png') }} " alt="" />
        </div>
        <a href="{{ url('microsite_langganan') }}" class="navbar-upgrade">
          <svg
            class="navbar-thumb-up"
            width="23"
            height="21"
            viewBox="0 0 23 21"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M22.9587 9.41663C22.9587 8.86409 22.7392 8.33419 22.3485 7.94349C21.9578 7.55279 21.4279 7.33329 20.8753 7.33329H14.292L15.292 2.57288C15.3128 2.46871 15.3232 2.35413 15.3232 2.23954C15.3232 1.81246 15.1462 1.41663 14.8649 1.13538L13.7607 0.041626L6.90658 6.89579C6.52116 7.28121 6.29199 7.80204 6.29199 8.37496V18.7916C6.29199 19.3442 6.51149 19.8741 6.90219 20.2648C7.29289 20.6555 7.82279 20.875 8.37533 20.875H17.7503C18.6149 20.875 19.3545 20.3541 19.667 19.6041L22.8128 12.2604C22.9066 12.0208 22.9587 11.7708 22.9587 11.5V9.41663ZM0.0419922 20.875H4.20866V8.37496H0.0419922V20.875Z"
              fill="#6B75E6"
            />
          </svg>
          Upgrade
        </a>
      </div>
    </nav>

    <main>
      <div class="content">
        <div class="ddaa-content hidden">
          <div class="anim dashboard-content-isi">
            <div class="content-kiri">
              <div class="dashboard-teks">
                <p class="dashboard-h1">SELAMAT DATANG,</p>
                <p class="dashboard-nama">QULBI KHUTSI AZZUMI</p>
                <p class="dashboard-p">
                  Lorem ipsum is placeholder text commonly used in the graphic,
                  print, and publishing industries for previewing layouts and
                  visual mockups.
                </p>
                <button class="dashboard-berlanggangan">
                  <svg
                    class="tp-top"
                    width="15"
                    height="14"
                    viewBox="0 0 15 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M14.375 6.25C14.375 5.91848 14.2433 5.60054 14.0089 5.36612C13.7745 5.1317 13.4565 5 13.125 5H9.175L9.775 2.14375C9.7875 2.08125 9.79375 2.0125 9.79375 1.94375C9.79375 1.6875 9.6875 1.45 9.51875 1.28125L8.85625 0.625L4.74375 4.7375C4.5125 4.96875 4.375 5.28125 4.375 5.625V11.875C4.375 12.2065 4.5067 12.5245 4.74112 12.7589C4.97554 12.9933 5.29348 13.125 5.625 13.125H11.25C11.7688 13.125 12.2125 12.8125 12.4 12.3625L14.2875 7.95625C14.3438 7.8125 14.375 7.6625 14.375 7.5V6.25ZM0.625 13.125H3.125V5.625H0.625V13.125Z"
                      fill="white"
                    />
                  </svg>
                  Berlangganan
                </button>
                <div class="dashboard-card">
                  <div class="dashboard-pengunjung">
                    <img src="{{ asset('assets_user/img/Vector (13).png') }} " alt="" />
                    <p class="pengunjung-1">Pengunjung</p>
                    <p class="pengunjung-p">100 Pengunjung</p>
                  </div>
                  <div class="dashboard-micro">
                    <img src="{{ asset('assets_user/img/Vector (15).png') }} " alt="" />
                    <p class="pengunjung-1">Microsite dibuat</p>
                    <p class="pengunjung-p">1/3 Microsite</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <aside class="aniLeft">
      <div class="aside">
        <a href="{{ url('dashboard') }}">
          <button class="aside-button">Dashboard</button>
        </a>
        <!-- <a href="index.html"> -->
        <div class="aside-drop">
          <button class="aside-button">
            Microsite
            <svg
              class="svg-micro"
              width="9"
              height="14"
              viewBox="0 0 9 14"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M1.94219 12.9998L7.37109 7.34309L1.94219 1.68643"
                stroke="#6B75E6"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
          <div class="dropdowncontent">
            <a class="drop-top" href="{{ url('microsite_reguler') }}">Microsite regular</a>
            <a class="drop-bottom" href="{{ url('microsite_langganan')}}">Microsite langganan</a>
          </div>
        </div>
        <!-- </a> -->
      </div>
    </aside>
  </body>
</html>
