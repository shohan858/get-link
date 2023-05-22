<nav>
    <div class="navbar navAni">
        <div class="navbar-kiri">
            {{-- <button type="button" class="pages5-buttonside">
          <img
            class="navbar-menu"
            src="assets/img/🦆 icon _menu_.png"
            alt=""
          />
          <img
              class="pages5-navbar-menu"
              src="assets/img/🦆 icon _menu_.png"
              alt=""
            />
        </button> --}}
            <button class="button-side">
                {{-- <img
            class="navbar-menu"
            src="{{ asset('assets/img/🦆 icon _menu_.png') }}"
            alt=""
          /> --}}
                <span class="navbar-menu">
                    <i id="bars" style="color: #fff" class="fa-solid fa-bars hahaha"></i>
                </span>
            </button>
            <img class="navbar-img" src="{{ asset('assets/img/logo-text2 1.png') }}" alt="" />
        </div>
        <div class="navKanan">
            {{-- @unless (route('langganan'))
                <a href="/langganan" class="navbar-upgrade">
                    <i class="fa-solid fa-file"></i>
                    Paket microsite
                </a>
            @endunless --}}

            {{-- TOlong jika di page langganan tidak tampil --}}
            <a href="/langganan" class="navbar-upgrade">
                <i class="fa-solid fa-file"></i>
                Paket microsite
            </a>

            <div class="profil_div">
                <button id="prov_btn" class="profil_nav">
                    @if (Auth::user()->img == null)
                        <img src="{{ asset('assets/img/av.png') }}" alt="" class="img_nav">
                    @else
                        <img src="{{ asset('gambar') . "/" .Auth::user()->img }}" alt="" class="img_nav">
                    @endif
                    <p id="teks" class="nama_nav">{{ Auth::user()->name }}</p>
                    <i id="drwon" class="fa-solid fa-chevron-up nama_nav"></i>
                </button>
                <div id="prof_drop" class="prof_dropdown">
                    <a href="/profile/edit/{{ Auth::user()->id }}" class="drop-is"
                        style="border-bottom: 1px solid #524799; border-radius: 10px 10px 0 0;">
                        <i class="fa-regular fa-user" style="margin-right: 10px"></i>
                        Profile
                    </a>
                    <a href="{{ url('logout') }}" class="drop-is" style="border-radius:0 0 10px 10px;">
                        <i class="fa-solid fa-arrow-right-from-bracket" style="margin-right: 10px"></i>
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    const btnProf = document.getElementById("prov_btn");
    const drown = document.getElementById("drwon");
    const dropProf = document.getElementById("prof_drop")

    btnProf.addEventListener("click", function() {
        btnProf.classList.toggle("profte");
        dropProf.classList.toggle("prof_tampil");
        if (drown.classList.contains("fa-chevron-down")) {
            drown.classList.remove("fa-chevron-down");
            drown.classList.add("fa-chevron-up");
        } else {
            drown.classList.remove("fa-chevron-up");
            drown.classList.add("fa-chevron-down");
        }
    })

    const teks = document.getElementById("teks");
    if (teks.innerText.length > 8) {
        teks.innerText = teks.innerText.slice(0, 8);
    }
</script>
