<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
      </div>
    </nav>

    <main>
      <div class="content">
        <div class="pages3-content">
          <div class="pages3-bagi">
            <div class="pages3-kiri anim hidden">
              <div class="content-top">
                <h2 class="pages3-buat">Buat Microsite</h2>
              </div>
              <p class="page3-tulisan1">
                Silahkan masukkan beberapa informasi untuk membuat <br />
                Microsite anda
              </p>
              <div class="pages2-garis">
                <div class="pages3-garis-1"></div>
                <div class="pages3-garis-2"></div>
                <div class="pages3-garis-3"></div>
              </div>
              <h4 class="pages3-jenis">1. Tentukan Jenis Microsite</h4>
              <h4 class="pages3-tema">2. Pilih Template dan Tema</h4>
                <div class="kiri-bungkus">
                  <div class="pages3-bungkuscard">
                    @foreach ($data as $item)
                    <button id="btn-1" value="1" class="pages3-card1">
                      <img
                        class="card-img"
                        src="{{ asset('assets_user/img/Group 86.png') }} "
                        alt="card"
                      />
                      <div class="pages3-container">
                        <h4 class="pages3-tulis">{{ $item->nama_template}}</h4>
                      </div>
                    </button>
                    @endforeach
                    {{-- <button id="btn-1" value="1" class="pages3-card1">
                      <img
                        class="card-img"
                        src="{{ asset('assets_user/img/Group 86.png') }} "
                        alt="card"
                      />
                      <div class="pages3-container">
                        <h4 class="pages3-tulis">Basic</h4>
                      </div>
                    </button>
                    <button id="btn-2" class="pages3-card2">
                      <img
                        class="card-img"
                        src="{{ asset('assets_user/img/Group 89.png') }} "
                        alt="card"
                      />
                      <div class="pages3-container">
                        <h4 class="pages3-tulis">Partai</h4>
                      </div>
                    </button>
                    <button id="btn-3" class="pages3-card3">
                      <img
                        class="card-img"
                        src="{{ asset('assets_user/img/Group 90.png') }} "
                        alt="card"
                      />
                      <div class="pages3-container">
                        <h4 class="pages3-tulis">Gamer</h4>
                      </div>
                    </button>
                    <button id="btn-4" class="pages3-card4">
                      <img
                        class="card-img"
                        src="{{ asset('assets_user/img/Group 88.png') }} "
                        alt="card"
                      />
                      <div class="pages3-container">
                        <h4 class="pages3-tulis">Name Card</h4>
                      </div>
                    </button>
                    <button id="btn-5" class="pages3-card5">
                      <img
                        class="card-img"
                        src="{{ asset('assets_user/img/Group 91.png') }} "
                        alt="card"
                      />
                      <h4 class="pages3-tulis">Portofolio</h4>
                    </button> --}}
                  </div>
                </div>
              <div class="pages3-bungkusjajan">
                <h4 class="pages3-namo">3. Pilih Nama Microsite</h4>
                <div class="pages3-lamnjut">
                  <a href="pages2.html" class="pages3-lanjutkan">Kembali</a>
                  <a id="lanjut" href="{{ url('buat_microsite') }}" class="pages3-lanjutkan"
                    >Selesai</a
                  >
                </div>
              </div>
            </div>
            <div class="pages3-kanan anim hidden">
              <div class="kanan-bungkus">
                <div class="pages3-bungkus-kanan">
                  <center>
                    <div id="div" class="template0">
                      <img src="{{ asset('assets_user/img/webdesin.png') }} " alt="" />
                    </div>
                    @foreach ($data as $item)
                    <div id="div1" class="template1" style="display: none">
                      <iframe src="{{ asset('microsite_template/template1.blade.php') }}" width="360" height="640" style="border: none;"></iframe>
                    </div>
                    @endforeach
                    <div id="div" class="template2" style="display: none">
                      <!-- <img src="assets_user/preview-template/img/garis2.png" alt="" class="gariss" /> -->
                      <img
                        src="{{ asset('assets_user/preview-template/img/rai.png') }} "
                        alt=""
                        class="gambar1"
                      />
                      <h4 class="tulisan1">PDI PERJUANGAN</h4>
                      <div class="bungkusbunderan">
                        <div class="elipsetemplate2">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/ig.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                        <div class="elipsetemplate2">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/twit.png') }} "
                            alt=""
                            class="ikon1"
                          />
                        </div>
                        <div class="elipsetemplate2">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/fb.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                        <div class="elipsetemplate2">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/yt.png') }} "
                            alt=""
                            class="ikon1"
                          />
                        </div>
                        <div class="elipsetemplate2">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/tiktod.png') }} "
                            alt=""
                            class="ikon"
                          />
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
                        <img
                          src="{{ asset('assets_user/preview-template/img/ytred.png') }} "
                          alt=""
                          style="margin-top: 18%"
                        />
                      </div>
                    </div>
                    <div id="div3" class="template3" style="display: none">
                      <img
                        src="{{ asset('assets_user/preview-template/img/rai.png') }} "
                        alt=""
                        class="gambar1"
                      />
                      <h4 class="tulisan1">Quli Khutsi Azzumi</h4>
                      <div class="tulisan3">
                        <p>
                          Lorem ipsum is placeholder text commonly used in the
                          graphic, print, and publishing industries for
                          previewing layouts and visual mockups.
                        </p>
                      </div>
                      <div class="template1-kolom">
                        <img
                          src="{{ asset('assets_user/preview-template/img/ytred.png') }} "
                          alt=""
                          style="margin-top: 18%"
                        />
                      </div>
                      <div class="bungkusbunderan2">
                        <div class="elipsetemplate3">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/ig.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                        <div class="elipsetemplate3">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/twit.png') }} "
                            alt=""
                            class="ikon1"
                          />
                        </div>
                        <div class="elipsetemplate3">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/fb.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                        <div class="elipsetemplate3">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/yt.png') }} "
                            alt=""
                            class="ikon1"
                          />
                        </div>
                        <div class="elipsetemplate3">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/tiktod.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                      </div>
                    </div>
                    <div id="div4" class="template4" style="display: none">
                      <img
                        src="{{ asset('assets_user/preview-template/img/rai.png') }} "
                        alt=""
                        class="gambar1"
                      />
                      <h4 class="template4-tulisan1">Quli Khutsi Azzumi</h4>
                      <p class="template4-tulisan2">CEO</p>
                      <div class="bungkusbunderan">
                        <div class="elipsetemplate4">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/ig.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                        <div class="elipsetemplate4">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/twit.png') }} "
                            alt=""
                            class="ikon1"
                          />
                        </div>
                        <div class="elipsetemplate4">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/fb.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                        <div class="elipsetemplate4">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/yt.png') }} "
                            alt=""
                            class="ikon1"
                          />
                        </div>
                        <div class="elipsetemplate4">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/tiktod.png') }} "
                            alt=""
                            class="ikon"
                          />
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
                      <img
                        src="{{ asset('assets_user/preview-template/img/rai.png') }} "
                        alt=""
                        class="gambar1"
                      />
                      <h4 class="template5-tulisan1">Quli Khutsi Azzumi</h4>
                      <div class="bungkusbunderan5">
                        <div class="elipsetemplate5">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/ig.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                        <div class="elipsetemplate5">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/twit.png') }} "
                            alt=""
                            class="ikon1"
                          />
                        </div>
                        <div class="elipsetemplate5">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/fb.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                        <div class="elipsetemplate5">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/yt.png') }} "
                            alt=""
                            class="ikon1"
                          />
                        </div>
                        <div class="elipsetemplate5">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/tiktod.png') }} "
                            alt=""
                            class="ikon"
                          />
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

    <aside class="aniLeft">
      <div class="aside">
        <a href="dashboard.html">
          <button class="aside-button">Dashboard</button>
        </a>
        <a href="index.html">
          <button class="aside-button">Microsite</button>
        </a>
      </div>
    </aside>

    <script>
      const button1 = document.getElementById("btn-1");
      const button2 = document.getElementById("btn-2");
      const button3 = document.getElementById("btn-3");
      const button4 = document.getElementById("btn-4");
      const button5 = document.getElementById("btn-5");

      const div = document.getElementById("div");
      const div1 = document.getElementById("div1");
      const div2 = document.getElementById("div2");
      const div3 = document.getElementById("div3");
      const div4 = document.getElementById("div4");
      const div5 = document.getElementById("div5");

      const buttons = document.querySelectorAll(".pages3-card1, .pages3-card2, .pages3-card3, .pages3-card4, .pages3-card5");

      const specialClasses = ["spec1", "spec2", "spec3", "spec4", "spec5"];

      buttons.forEach((button, index) => {
        button.addEventListener("click", () => {
          buttons.forEach((btn) => {
            specialClasses.forEach((cls) => {
              btn.classList.remove(cls);
            });
          });
          button.classList.add(specialClasses[index]);
        });
      });

      button1.addEventListener("click", () => {
        div.style.display = "none";
        div1.style.display = "block";
        // button1.classList.add("spec1");
        div2.style.display = "none";
        div3.style.display = "none";
        div4.style.display = "none";
        div5.style.display = "none";
        sessionStorage.setItem("lastButtonClicked", "button1");
      });

      button2.addEventListener("click", () => {
        div.style.display = "none";
        div1.style.display = "none";
        div2.style.display = "block";
        // button2.classList.add("spec2");
        div3.style.display = "none";
        div4.style.display = "none";
        div5.style.display = "none";
        sessionStorage.setItem("lastButtonClicked", "button2");
      });

      button3.addEventListener("click", () => {
        div.style.display = "none";
        div1.style.display = "none";
        div2.style.display = "none";
        div3.style.display = "block";
        // button3.classList.add("spec3");
        div4.style.display = "none";
        div5.style.display = "none";
        sessionStorage.setItem("lastButtonClicked", "button3");
      });

      button4.addEventListener("click", () => {
        div.style.display = "none";
        div1.style.display = "none";
        div2.style.display = "none";
        div3.style.display = "none";
        div4.style.display = "block";
        // button4.classList.add("spec4");
        div5.style.display = "none";
        sessionStorage.setItem("lastButtonClicked", "button4");
      });

      button5.addEventListener("click", () => {
        div.style.display = "none";
        div1.style.display = "none";
        div2.style.display = "none";
        div3.style.display = "none";
        div4.style.display = "none";
        div5.style.display = "block";
        // button5.classList.add("spec5");
        sessionStorage.setItem("lastButtonClicked", "button5");
      });
    </script>
  </body>
</html>
