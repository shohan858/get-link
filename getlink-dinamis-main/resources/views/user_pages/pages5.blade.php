<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Microsite</title>
    <link rel="stylesheet" href="{{ asset('assets_user/style.css') }} " />
    <script defer src="{{ asset('assets_user/main.js') }} "></script>
    <script src="{{ asset('assets_user/jquery.min.js') }} "></script>
    <link rel="stylesheet" href="{{ asset('assets_user/summernote/summernote-lite.css') }} " />
  </head>
  <body>
    <nav>
      <div class="navbar navAni">
        <div class="navbar-kiri">
          <button class="pages5-button-side">
            <img
              class="pages5-navbar-menu"
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
        <div class="pages5-content">
          <div class="pages5-bagi">
            <div class="anim pages5-kiri hidden">
              <button class="pages5-tambah-komponen" id="myBtn">
                <img src="{{ asset('assets_user/img/Vector (6).png') }} " alt="" />
                Tambah Komponen Baru
              </button>
              <div class="komponen-kkiri">
                <div class="pages5-komponen-1">
                  <div class="pages5-komponen-gambar">
                    <div class="pages5-komponen-gambar-kiri">
                      <button class="btn-drag">
                        <img
                          class="pages5-isi"
                          src="{{ asset('assets_user/img/Group 71.png') }} "
                          alt=""
                        />
                      </button>
                      <img
                        class="pages5-isi"
                        src="{{ asset('assets_user/img/🦆 icon _media image_.png') }} "
                        alt=""
                      />
                      <p class="pages5-isi">Gambar</p>
                    </div>
                    <div class="pages5-komponen-gambar-kanan">
                      <button class="btn-switch">
                        <img
                          class="pages5-isi"
                          src="{{ asset('assets_user/img/🦆 icon _switch on outline_.png') }} "
                          alt=""
                        />
                      </button>
                      <button class="btn-trash">
                        <img
                          class="pages5-isi"
                          src="{{ asset('assets_user/img/🦆 icon _trash_.png') }} "
                          alt=""
                        />
                      </button>
                      <button class="btn-3dot">
                        <img
                          class="pages5-isi"
                          src="{{ asset('assets_user/img/🦆 icon _more vert_.png') }} "
                          alt=""
                        />
                      </button>
                      <button id="dropdown-btn0" class="btn-drop0">
                        <img
                          class="pages5-isi"
                          src="{{ asset('assets_user/img/Vector (8).png') }} "
                          alt=""
                        />
                      </button>
                    </div>
                  </div>
                </div>
                <div class="pages5-komponen-2">
                  <div class="pages5-komponen-text">
                    <div class="pages5-komponen-text-kiri">
                      <button class="btn-drag">
                        <img
                          class="pages5-isi"
                          src="{{ asset('assets_user/img/Group 71.png') }} "
                          alt=""
                        />
                      </button>
                      <img
                        class="pages5-isi"
                        src="{{ asset('assets_user/img/🦆 icon _edit pencil_.png') }} "
                        alt=""
                      />
                      <p class="pages5-isi">Teks : Preview Komponen</p>
                    </div>
                    <div class="pages5-komponen-text-kanan">
                      <img
                        class="pages5-isi"
                        src="{{ asset('assets_user/img/Group 68.png') }} "
                        alt=""
                      />
                      <button class="btn-switch">
                        <img
                          class="pages5-isi"
                          src="{{ asset('assets_user/img/🦆 icon _switch on outline_.png') }} "
                          alt=""
                        />
                      </button>
                      <button class="btn-trash">
                        <img
                          class="pages5-isi"
                          src="{{ asset('assets_user/img/🦆 icon _trash_.png') }} "
                          alt=""
                        />
                      </button>
                      <button class="btn-3dot">
                        <img
                          class="pages5-isi"
                          src="{{ asset('assets_user/img/🦆 icon _more vert_.png') }} "
                          alt=""
                        />
                      </button>
                      <button id="dropdown-btn-1" class="btn-drop">
                        <img
                          class="pages5-isi"
                          src="{{ asset('assets_user/img/Vector (7).png') }} "
                          alt=""
                        />
                      </button>
                    </div>
                  </div>
                  <div
                    id="dropdown-content-1"
                    class="pages5-komponen-inside-text1"
                  >
                    <div class="pages5-rich">
                      <div class="pages5-rich-text-top">
                        <button id="btn-bold" class="btn-bold">
                          <img
                            class="pages5-isi"
                            src="{{ asset('assets_user/img/Vector (9).png') }} "
                            alt=""
                          />
                        </button>
                        <button id="btn-italic" class="btn-italic">
                          <img
                            class="pages5-isi"
                            src="{{ asset('assets_user/img/Vector (10).png') }} "
                            alt=""
                          />
                        </button>
                        <button class="btn-align-left">
                          <img
                            class="pages5-isi"
                            src="{{ asset('assets_user/img/🦆 icon _align left_.png') }} "
                            alt=""
                          />
                        </button>
                        <button class="btn-align-center">
                          <img
                            class="pages5-isi"
                            src="{{ asset('assets_user/img/🦆 icon _align center_.png') }} "
                            alt=""
                          />
                        </button>
                        <button class="btn-align-right">
                          <img
                            class="pages5-isi"
                            src="{{ asset('assets_user/img/🦆 icon _align right_.png') }} "
                            alt=""
                          />
                        </button>
                      </div>
                      <div class="pages5-rich-text-bottom">
                        <input
                          type="text"
                          class="pages5-rich-text"
                          placeholder="Preview Konten"
                        />
                      </div>
                    </div>
                    <div class="pages5-komponen-ukuran">
                      <div class="pages5-text">
                        <p class="pages5-ukuran-text">Ukuran Teks</p>
                        <button id="dp-1" class="pages5-dropdown1">
                          <p class="pages5-dropdown-text">Custom</p>
                          <img
                            class="pages5-dropdown-icon"
                            src="{{ asset('assets_user/img/Vector (11).png') }} "
                            alt=""
                          />
                        </button>
                        <div id="di-1" class="dropdown-ukuran1">
                          <button class="dropdown-isi1">Normal</button>
                          <button class="dropdown-isi1">Medium</button>
                          <button class="dropdown-isi1">Large</button>
                        </div>
                      </div>
                      <div class="pages5-ukuran-custom">
                        <p class="pages5-ukuran-text">Ukuran Custom</p>
                        <input class="pages5-ukuran-number" type="number" />
                      </div>
                      <div class="pages5-font">
                        <p class="pages5-ukuran-text">Font</p>
                        <button id="dp-2" class="pages5-dropdown2">
                          <p class="pages5-dropdown-text">Roboto</p>
                          <img
                            class="pages5-dropdown-icon"
                            src="{{ asset('assets_user/img/Vector (11).png') }} "
                            alt=""
                          />
                        </button>
                        <div id="di-2" class="dropdown-ukuran2">
                          <button class="dropdown-isi2">Arial</button>
                          <button class="dropdown-isi2">Roboto</button>
                          <button class="dropdown-isi2">Times New Roman</button>
                        </div>
                      </div>
                    </div>
                    <div class="pages5-color-picker">
                      <p class="pages5-text-color">Teks Color</p>
                      <input
                        type="color"
                        class="pages5-color"
                        value="#FFFFFF"
                      />
                    </div>
                    <div class="pages5-color-picker">
                      <p class="pages5-text-color">Teks Color</p>
                      <input
                        type="color"
                        class="pages5-color"
                        value="#4BA3C0"
                      />
                    </div>
                  </div>
                  <div class="pages5-component">
                    <div class="pages5-component-top">
                      <div class="pages5-component-kiri">
                        <button>
                          <img src="{{ asset('assets_user/img/Group 71.png') }} " alt="" />
                        </button>
                        <button>
                          <img src="{{ asset('assets_user/img/g') }} " alt="" />
                        </button>
                        <p>gambar</p>
                      </div>
                      <div class="pages5-component-kanan">
                        <button>
                          <img
                            src="{{ asset('assets_user/img/🦆 icon _switch on outline_.png') }} "
                            alt=""
                          />
                        </button>
                        <button>
                          <img src="{{ asset('assets_user/img/🦆 icon _trash_.svg') }} " alt="" />
                        </button>
                        <button>
                          <img
                            src="{{ asset('assets_user/img/🦆 icon _more vert_.svg') }} "
                            alt=""
                          />
                        </button>
                        <button class="btn-drop1">
                          <img
                            src="{{ asset('assets_user/img/🦆 icon _nav arrow left_.svg') }} "
                            alt=""
                          />
                        </button>
                      </div>
                    </div>
                    <div class="component-bottom">
                      <textarea
                        name=""
                        id="summernote"
                        cols="30"
                        rows="10"
                      ></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pages5-bungkusjajan">
                <div class="pages5-lamnjut">
                  <a href="pages4.html" class="pages5-lanjutkan">< Kembali</a>
                  <a id="myBtn" class="pages5-lanjutkan">
                    Selesai
                    <svg
                      class="finish"
                      width="19"
                      height="15"
                      viewBox="0 0 19 15"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M18.875 2.29169L6.37499 14.7917L0.645828 9.06252L2.11458 7.59377L6.37499 11.8438L17.4062 0.822937L18.875 2.29169Z"
                        fill="#524799"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="anim pages5-kanan hidden">
              <button class="pages5-preview">getlink/tautan microsite</button
              ><br />
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
      <div class="pages5-aside">
        <a href="dashboard.html">
          <button class="pages5-aside-button">Dashboard</button>
        </a>
        <a href="index.html">
          <button class="pages5-aside-button">Microsite</button>
        </a>
      </div>
    </aside>

    <div id="myModal" class="modal-baru">
      <!-- Modal content -->
      <div class="modal-content-baru">
        <span class="close">&times;</span>
        <p class="baru-tulisan1">Tambah Komponen Baru</p>

        <div class="bungkus-utama-komponen">
          <!-- komponen -->
          <div class="komponen1">
            <div class="bungkus-komponen1" id="instagram">
              <img
                src="{{ asset('assets_user/img/modal/igungu.png') }} "
                alt=""
                class="gambar-komponen1"
              />
              <p class="tulisan-komponen">Instagram</p>
            </div>
            <p class="baru-tulisan2">
              Komponen untuk menambahkan sosial media instagram
            </p>
          </div>
          <div class="komponen1">
            <div class="bungkus-komponen1" id="twitter">
              <img
                src="{{ asset('assets_user/img/modal/twitungu.png') }} "
                alt=""
                class="gambar-komponen1"
              />
              <p class="tulisan-komponen">Twitter</p>
            </div>
            <p class="baru-tulisan2">
              Komponen untuk menambahkan sosial media Twitter
            </p>
          </div>
          <!-- komponen -->
        </div>

        <div class="bungkus-utama-komponen">
          <!-- komponen -->
          <div class="komponen1">
            <div class="bungkus-komponen1" id="youtube">
              <img
                src="{{ asset('assets_user/img/modal/ytungu.png') }} "
                alt=""
                class="gambar-komponen1"
              />
              <p class="tulisan-komponen">Youtube</p>
            </div>
            <p class="baru-tulisan2">
              Komponen untuk menambahkan sosial media youtube
            </p>
          </div>
          <div class="komponen1">
            <div class="bungkus-komponen1" id="facebook">
              <img
                src="{{ asset('assets_user/img/modal/fbungu.png') }} "
                alt=""
                class="gambar-komponen1"
              />
              <p class="tulisan-komponen">Facebook</p>
            </div>
            <p class="baru-tulisan2">
              Komponen untuk menambahkan sosial media facebook
            </p>
          </div>
          <!-- komponen -->
        </div>

        <div class="bungkus-utama-komponen">
          <!-- komponen -->
          <div class="komponen1">
            <div class="bungkus-komponen1" id="tiktok">
              <img
                src="{{ asset('assets_user/img/modal/ttungu.png') }} "
                alt=""
                class="gambar-komponen1"
              />
              <p class="tulisan-komponen">Tiktok</p>
            </div>
            <p class="baru-tulisan2">
              Komponen untuk menambahkan sosial media tiktok
            </p>
          </div>
          <div class="komponen1">
            <div class="bungkus-komponen1" id="img">
              <img
                src="{{ asset('assets_user/img/modal/glungu.png') }} "
                alt=""
                class="gambar-komponen1"
              />
              <p class="tulisan-komponen">Gambar</p>
            </div>
            <p class="baru-tulisan2">Komponen untuk menambahkan Gambar</p>
          </div>
          <!-- komponen -->
        </div>

        <div class="bungkus-utama-komponen">
          <!-- komponen -->
          <div class="komponen1">
            <div class="bungkus-komponen1" id="prev">
              <img
                src="{{ asset('assets_user/img/modal/linkungu.png') }} "
                alt=""
                class="gambar-komponen1"
              />
              <p class="tulisan-komponen">Tautan</p>
            </div>
            <p class="baru-tulisan2">Komponen untuk menambahkan tautan</p>
          </div>
          <div class="komponen1">
            <div class="bungkus-komponen1" id="desc">
              <img
                src="{{ asset('assets_user/img/modal/grsungu.png') }} "
                alt=""
                class="gambar-komponen1"
              />
              <p class="tulisan-komponen">Deskripsi</p>
            </div>
            <p class="baru-tulisan2">Komponen untuk menambahkan deskripsi</p>
          </div>
          <!-- komponen -->
        </div>
      </div>
    </div>

    <script src="{{ asset('') }} assets_user/summernote/summernote-lite.js"></script>

    <script>
      const pages5buttonSide = document.querySelector(".pages5-button-side");
      const pages5aside = document.querySelector(".pages5-aside");

      pages5buttonSide.addEventListener("click", function () {
        pages5aside.classList.toggle(".pages5-tampil");
      });

      $(document).ready(function () {
        $("#summernote").summernote({
          focus: true,

          toolbar: [
            ["style", ["bold", "italic", "underline", "clear"]],
            ["font", ["fontsize", "forecolor"]],
            ["color", ["backcolor"]],
            ["para", ["ul", "ol", "paragraph"]],
            ["height", ["height"]],
            ["insert", ["link"]],
            ["view", ["fullscreen", "codeview", "help"]],
          ],
          disablePicture: true,
          disableVideo: true,
        });
      });

      let btn1 = document.getElementById("btn-bold");
      let btn2 = document.getElementById("btn-italic");
      const btns = document.querySelectorAll(
        ".btn-align-left, .btn-align-center, .btn-align-right"
      );
      const specialAlign = ["align1", "align2", "align3"];

      // text-style
      btn1.addEventListener("click", function () {
        btn1.classList.toggle("text-hov");
      });
      btn2.addEventListener("click", function () {
        btn2.classList.toggle("text-hov");
      });
      // End text-style

      btns.forEach((button, index) => {
        button.addEventListener("click", () => {
          btns.forEach((btn) => {
            specialAlign.forEach((cls) => {
              btn.classList.remove(cls);
            });
          });
          button.classList.add(specialAlign[index]);
        });
      });

      // Dropdown

      var dropdownBtn0 = document.getElementById("dropdown-btn0");
      var dropdownContent0 = document.getElementById("dropdown-content0");
      var dropdownBtn1 = document.getElementById("dropdown-btn-1");
      var dropdownContent1 = document.getElementById("dropdown-content-1");

      dropdownBtn0.addEventListener("click", function () {
        dropdownContent0.classList.toggle("drop-tampil0");
      });

      window.addEventListener("click", function (event) {
        if (!event.target.matches("dropdown-btn")) {
          dropdownContent0.classList.remove("drop-tampil0");
        }
      });

      dropdownBtn1.addEventListener("click", function () {
        dropdownContent1.classList.toggle("drop-tampil-1");
      });

      window.addEventListener("click", function (event) {
        if (!event.target.matches("dropdown-btn-1")) {
          dropdownContent.classList.remove("drop-tampil-1");
        }
      });

      // End dropdown

      // dropdown ukuran

      var dp1 = document.getElementById("dp-1");
      var dp2 = document.getElementById("dp-2");
      var di1 = document.getElementById("di-1");
      var di2 = document.getElementById("di-2");

      dp1.addEventListener("click", function () {
        di1.classList.toggle("dp-tampil-1");
      });

      window.addEventListener("click", function (e) {
        if (!e.target.matches("dp-1")) {
          di1.classList.remove("dp-tampil");
        }
      });

      dp2.addEventListener("click", function () {
        di2.classList.toggle("dp-tampil-2");
      });

      window.addEventListener("click", function (event) {
        if (!event.target.matches("dp-2")) {
          di2.classList.remove("dp-tampil");
        }
      });

      // End dropdown ukuran

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

      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal
      btn.onclick = function () {
        modal.style.display = "block";
      };

      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      };

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    </script>
  </body>
</html>
