<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Microsite</title>
    <link rel="stylesheet" href="{{ asset('assets_user/style.css') }}" />
    <script defer src="{{ asset('assets_user/main.js') }}"></script>
  </head>
  <body>
    <nav>
      <div class="navbar navAni">
        <div class="navbar-kiri">
          <button class="button-side">
            <img
              class="navbar-menu"
              src="{{ asset('assets_user/img/🦆 icon _menu_.png') }}"
              alt=""
            />
          </button>
          <img class="navbar-img" src="{{ asset('assets_user/img/logo-text2 1.png') }}" alt="" />
        </div>
        <button class="navbar-upgrade">
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
        </button>
      </div>
    </nav>

    <main>
      <div class="content">
        <div class="pages1-content hidden">
          <div class="anim content-top">
            <a class="content-tambah" href="{{ url('tambah_microsite') }}"> tambah microsite </a>
            <input
              type="search"
              name="cari"
              id="cari"
              class="content-cari"
              placeholder="Cari microsite"
            />
          </div>
          <div class="tenggah">
            <p class="st">{{ Auth::user()->jumlah_microsite }}/{{ Auth::user()->batas_microsite}}</p>
          </div>
          @foreach ($microsite as $item)
          <div class="anim content-isi-regu">
            <div class="content-kiri">
              <div class="content-box"></div>
              <div class="box-text">
                <p class="nama-microsite">{{ $item->title }}</p>
                <a class="link-microsite">getlink/tautanmicrosite</a>
                <p class="pb-microsite">Personal Branding</p>
              </div>
            </div>
            <div class="content-kanan">
              <button class="content-crud">
                <img src="{{ asset('assets_user/img/Vector (3).svg') }}" alt="" />
                <a class="content-edit-text" href="">Bagikan</a>
              </button>
              <button class="content-crud">
                <img src="{{ asset('assets_user/img/🦆 icon _edit_.png') }}" alt="" />
                <a class="content-edit-text" href="{{ url('') }}">Edit</a>
              </button>
              <div class="content-crud">
                <form action="delete_microsite/{{ $item->id }}" method="POST">
                  @method('delete')
                  @csrf
                  <img src="{{ asset('assets_user/img/Vector (2).svg') }}" alt="" />
                <button style="background-color: transparent;" class="content-edit-text" onclick="return confirm('Apakah anda yakin inggin menghapus?')">Hapus</button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </main>

    <aside class="aniLeft">
      <div class="aside">
        <a href="dashboard.html">
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
            <a class="drop-top" href="regular.html">Microsite regular</a>
            <a class="drop-bottom" href="langganan.html">Microsite langganan</a>
          </div>
        </div>
        <!-- </a> -->
      </div>
    </aside>
  </body>
</html>
