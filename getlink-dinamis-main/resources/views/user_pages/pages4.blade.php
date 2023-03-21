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
        <div class="pages4-content">
          <div class="pages4-bagi">
            <div class="anim hidden pages4-kiri">
              <div class="content-top">
                <h2 class="pages4-buat">Buat Microsite</h2>
              </div>
              <p class="page4-tulisan1">
                Silahkan masukkan beberapa informasi untuk membuat <br />
                Microsite anda
              </p>
              <div class="pages2-garis">
                <div class="pages4-garis-1"></div>
                <div class="pages4-garis-2"></div>
                <div class="pages4-garis-3"></div>
              </div>
              <h4 class="pages4-jenis">1. Tentukan Jenis Microsite</h4>
              <h4 class="pages4-tema">2. Pilih Template dan Tema</h4>
              <h4 class="pages4-tema">3. Pilih Nama Microsite</h4>
              <div class="pages4-form">
                <form action="user_pages" method="POST">
                  @csrf
                  <div class="pages4-form1">
                    <input
                      class="pages4-input"
                      type="text"
                      id="nama"
                      name="title"
                      placeholder="Nama Microsite"
                    />
                  </div>
                  <div class="pages4-form2">
                    <div class="pages4-button1">
                      <a class="pages4-button1text" href="">getlink/</a>
                    </div>
                    <input
                      class="pages4-input"
                      type="text"
                      id="tautan"
                      name="link"
                      placeholder="Tautan Microsite"
                    />
                  </div>
                  <div class="pages4-lamnjut">
                    <a href="pages3.html" class="pages4-lanjutkan">Kembali</a>
                    <button class="pages4-lanjutkan" value="1">Selesai</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="anim hidden pages4-kanan">
              <div class="kanan-bungkus">
                <div class="pages3-bungkus-kanan">
                  <center>
                    <div id="div" class="template0">
                      <img src="{{ asset('assets_user/img/webdesin.png') }} " alt="" />
                    </div>
                    <div id="div1" class="template1" style="display: none">
                      <img
                        src="{{ asset('assets_user/preview-template/img/rai.png') }} "
                        alt=""
                        class="gambar1"
                      />
                      <h4 class="tulisan1">Quli Khutsi Azzumi</h4>
                      <div class="bungkusbunderan">
                        <div class="elipsetemplate1">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/ig.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                        <div class="elipsetemplate1">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/twit.png') }} "
                            alt=""
                            class="ikon1"
                          />
                        </div>
                        <div class="elipsetemplate1">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/fb.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                        <div class="elipsetemplate1">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/yt.png') }} "
                            alt=""
                            class="ikon1"
                          />
                        </div>
                        <div class="elipsetemplate1">
                          <p class="sembarang">p</p>
                          <img
                            src="{{ asset('assets_user/preview-template/img/tiktod.png') }} "
                            alt=""
                            class="ikon"
                          />
                        </div>
                      </div>
                      <div class="template1-kolom">
                        <img
                          src="{{ asset('assets_user/preview-template/img/ytred.png') }} "
                          alt=""
                          style="margin-top: 18%"
                        />
                      </div>
                      <div class="template1-kolom2"></div>
                      <div class="tulisan2">
                        <p>Saya, Qulbi Khutsi Azzumi</p>
                      </div>
                      <div class="tulisan3">
                        <p>
                          Lorem ipsum is placeholder text commonly used in the
                          graphic, print, and publishing industries for
                          previewing layouts and visual mockups.
                        </p>
                      </div>
                    </div>
                    <div id="div2" class="template2" style="display: none">
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
      const lastButtonClicked = sessionStorage.getItem("lastButtonClicked");
      const dav = document.getElementById("div");

      if (lastButtonClicked === "button1") {
        dav.style.display = "none";
        div1.style.display = "block";
      } else if (lastButtonClicked === "button2") {
        dav.style.display = "none";
        div2.style.display = "block";
      } else if (lastButtonClicked === "button3") {
        dav.style.display = "none";
        div3.style.display = "block";
      } else if (lastButtonClicked === "button4") {
        dav.style.display = "none";
        div4.style.display = "block";
      } else if (lastButtonClicked === "button5") {
        dav.style.display = "none";
        div5.style.display = "block";
      }
    </script>
  </body>
</html>
