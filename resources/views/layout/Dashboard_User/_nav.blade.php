<nav class="lazy">
    <div class="navbar navAni">
        <div class="navbar-kiri" loading="lazy">
            {{-- <button type="button" class="pages5-buttonside">
          <img
            loading="lazy"
            class="navbar-menu"
            src="assets/img/🦆 icon _menu_.png"
            alt=""
          />
          <img
              loading="lazy"
              class="pages5-navbar-menu"
              src="assets/img/🦆 icon _menu_.png"
              alt=""
            />
        </button> --}}
            <button loading="lazy" class="button-side">
                {{-- <img
                    loading="lazy"
            class="navbar-menu"
            src="{{ asset('assets/img/🦆 icon _menu_.png') }}"
            alt=""
          /> --}}
                <span class="navbar-menu">
                    <i id="bars" style="color: #fff" class="fa-solid fa-bars hahaha"></i>
                </span>
            </button>
            <img loading="lazy" class="navbar-img" src="{{ asset('assets/img/logo-text2 1.png') }}" alt="" />
        </div>
        <div loading="lazy" class="navKanan">
            {{-- @unless (route('langganan'))
                <a href="/langganan" class="navbar-upgrade lazyload">
                    <i class="fa-solid fa-file"></i>
                    Paket microsite
                </a>
            @endunless --}}

            {{-- TOlong jika di page langganan tidak tampil --}}
            <a href="/langganan" class="navbar-upgrade lazyload">
                <i class="fa-solid fa-file"></i>
                Paket microsite
            </a>

            <div  class="profil_div">
                <button loading="lazy" id="prov_btn" class="profil_nav">
                    @if (Auth::user()->img == null)
                        <img loading="lazy" src="{{ asset('assets/img/av.png') }}" alt="" class="lazyload img_nav">
                    @else
                        <img loading="lazy" src="{{ asset('gambar') . "/" .Auth::user()->img }}" alt="" class="img_nav lazyload">
                    @endif
                    <p id="teks" class="nama_nav">{{ Auth::user()->name }}</p>
                    <i id="drwon" class="fa-solid fa-chevron-up nama_nav"></i>
                </button>
                <div loading ="lazy" id="prof_drop" class="prof_dropdown">
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

document.addEventListener("DOMContentLoaded", function() {
  var lazyloadElements = document.querySelectorAll(".lazyload");

  function lazyload() {
    for (var i = 0; i < lazyloadElements.length; i++) {
      if (isElementInViewport(lazyloadElements[i])) {
        lazyloadElements[i].classList.add("loaded");
        lazyloadElements[i].style.padding = "10px"; // Ubah properti padding saat elemen menjadi terlihat
      }
    }
  }

  function isElementInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  lazyload();

  window.addEventListener("scroll", lazyload);
  window.addEventListener("resize", lazyload);
});

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
