
<?php $__env->startSection('konten'); ?>
<main>
  <div class="content">
    <div class="lang-content hidden">
      <div class="aniLeft btnprev">
        <button class="pages5-tambah-prew">
          preview
          <img src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>" alt="" />
        </button>
      </div>
      <div class="pages5-bagi">
        <div id="prew1" class="anim pages5-kiri hidden">
          <div class="pages5-top-btn">
            <button class="pages5-tambah-komponen" id="CCOpmBtn">
              <img src="<?php echo e(asset('assets/img/Vector (6).png')); ?>" alt="" />
              Tambah Komponen Baru
            </button>
          </div>
          <div id="pgKr" class="komponen-kkiri">
            <div id="pages5Kom1" draggable="true" class="pages5-komponen-2">
              <div class="pages5-komponen-text">
                <div class="pages5-komponen-text-kiri">
                  <button class="btn-drag">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                      alt=""
                    />
                  </button>
                  <img
                    class="pages5-isi"
                    src="<?php echo e(asset('assets/img/🦆 icon _media image_.png')); ?>"
                    alt=""
                  />
                  <p class="pages5-isi">Profil</p>
                </div>
                <div class="pages5-komponen-text-kanan">
                  <button id="btnSwitch" class="btn-switch">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>"
                      alt=""
                    />
                  </button>
                  <button id="del1" class="btn-trash">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/🦆 icon _trash_.png')); ?>"
                      alt=""
                    />
                  </button>
                  <div class="drop-3dot">
                    <button id="btnDrop3Dot1" class="btn-3dot">
                      <img
                        class="pages5-isi"
                        src="<?php echo e(asset('assets/img/🦆 icon _more vert_.png')); ?>"
                        alt=""
                      />
                    </button>
                    <div id="div3Dot" class="div3Dot-drop">
                      <button class="up div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling atas
                      </button>
                      <button class="down div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling bawah
                      </button>
                      <!-- <button class="div3Dot-isi" >
                        <svg
                          width="25"
                          height="25"
                          viewBox="0 0 25 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.25033 16.6666H5.20866C4.93239 16.6666 4.66744 16.5569 4.47209 16.3615C4.27674 16.1662 4.16699 15.9012 4.16699 15.625V5.20829C4.16699 4.93203 4.27674 4.66707 4.47209 4.47172C4.66744 4.27637 4.93239 4.16663 5.20866 4.16663H15.6253C15.9016 4.16663 16.1665 4.27637 16.3619 4.47172C16.5572 4.66707 16.667 4.93203 16.667 5.20829V6.24996M9.37533 20.8333H19.792C20.0683 20.8333 20.3332 20.7235 20.5286 20.5282C20.7239 20.3328 20.8337 20.0679 20.8337 19.7916V9.37496C20.8337 9.09869 20.7239 8.83374 20.5286 8.63839C20.3332 8.44304 20.0683 8.33329 19.792 8.33329H9.37533C9.09906 8.33329 8.83411 8.44304 8.63876 8.63839C8.44341 8.83374 8.33366 9.09869 8.33366 9.37496V19.7916C8.33366 20.0679 8.44341 20.3328 8.63876 20.5282C8.83411 20.7235 9.09906 20.8333 9.37533 20.8333Z"
                            stroke="black"
                            stroke-width="2.08333"
                            stroke-linejoin="round"
                          />
                        </svg>
                        Duplikat
                      </button> -->
                    </div>
                  </div>
                  <button id="dropdown-btn-0" class="btn-drop">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Vector (7).png')); ?>"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div
                id="dropdown-content-0"
                class="pages5-komponen-inside-text1"
              >
                <div class="pages5-input-file">
                  <label class="Lbl-gmb" for="fileGMb">
                    <img
                      src="<?php echo e(asset('assets/img/🦆 icon _media image_.png')); ?>"
                      alt=""
                    />
                    Isi Gabar
                  </label>
                  <input
                    type="file"
                    class="gamb-inp"
                    name="fileGMb"
                    id="fileGMb"
                  />
                </div>
                <div class="pages5-richa"></div>
              </div>
            </div>

            <div id="pages5Kom2" draggable="true" class="pages5-komponen-2">
              <div class="pages5-komponen-text">
                <div class="pages5-komponen-text-kiri">
                  <button class="btn-drag">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                      alt=""
                    />
                  </button>
                  <img
                    class="pages5-isi"
                    src="<?php echo e(asset('assets/img/🦆 icon _edit pencil_.png')); ?>"
                    alt=""
                  />
                  <p class="pages5-isi">Teks : Title</p>
                </div>
                <div class="pages5-komponen-text-kanan">
                  <button id="btnSwitch2" class="btn-switch">
                    <img
                      id="btnEye"
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>"
                      alt=""
                    />
                  </button>
                  <button id="btnTrash2" class="btn-trash">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/🦆 icon _trash_.png')); ?>"
                      alt=""
                    />
                  </button>
                  <div class="drop-3dot">
                    <button id="btnDrop3Dot1" class="btn-3dot">
                      <img
                        class="pages5-isi"
                        src="<?php echo e(asset('assets/img/🦆 icon _more vert_.png')); ?>"
                        alt=""
                      />
                    </button>
                    <div id="div3Dot" class="div3Dot-drop">
                      <button class="up div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling atas
                      </button>
                      <button class="down div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling bawah
                      </button>
                      <!-- <button class="div3Dot-isi" >
                        <svg
                          width="25"
                          height="25"
                          viewBox="0 0 25 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.25033 16.6666H5.20866C4.93239 16.6666 4.66744 16.5569 4.47209 16.3615C4.27674 16.1662 4.16699 15.9012 4.16699 15.625V5.20829C4.16699 4.93203 4.27674 4.66707 4.47209 4.47172C4.66744 4.27637 4.93239 4.16663 5.20866 4.16663H15.6253C15.9016 4.16663 16.1665 4.27637 16.3619 4.47172C16.5572 4.66707 16.667 4.93203 16.667 5.20829V6.24996M9.37533 20.8333H19.792C20.0683 20.8333 20.3332 20.7235 20.5286 20.5282C20.7239 20.3328 20.8337 20.0679 20.8337 19.7916V9.37496C20.8337 9.09869 20.7239 8.83374 20.5286 8.63839C20.3332 8.44304 20.0683 8.33329 19.792 8.33329H9.37533C9.09906 8.33329 8.83411 8.44304 8.63876 8.63839C8.44341 8.83374 8.33366 9.09869 8.33366 9.37496V19.7916C8.33366 20.0679 8.44341 20.3328 8.63876 20.5282C8.83411 20.7235 9.09906 20.8333 9.37533 20.8333Z"
                            stroke="black"
                            stroke-width="2.08333"
                            stroke-linejoin="round"
                          />
                        </svg>
                        Duplikat
                      </button> -->
                    </div>
                  </div>
                  <button id="dropdown-btn-1" class="btn-drop">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Vector (7).png')); ?>"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div
                id="dropdown-content1"
                class="pages5-komponen-inside-text1"
              >
                <textarea name="" id="summernote" cols="30" rows="10">
                </textarea>
              </div>
            </div>

            <div id="pages5Kom3" draggable="true" class="pages5-komponen-2">
              <div class="pages5-komponen-text">
                <div class="pages5-komponen-text-kiri">
                  <button class="btn-drag">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                      alt=""
                    />
                  </button>
                  <img
                    class="pages5-isi"
                    src="<?php echo e(asset('assets/img/🦆 icon _edit pencil_.png')); ?>"
                    alt=""
                  />
                  <p class="pages5-isi">Teks : Bio</p>
                </div>
                <div class="pages5-komponen-text-kanan">
                  <button id="btnSwitch3" class="btn-switch">
                    <img
                      id="btnEye"
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>"
                      alt=""
                    />
                  </button>
                  <button id="btnTrash3" class="btn-trash">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/🦆 icon _trash_.png')); ?>"
                      alt=""
                    />
                  </button>
                  <div class="drop-3dot">
                    <button id="btnDrop3Dot1" class="btn-3dot">
                      <img
                        class="pages5-isi"
                        src="<?php echo e(asset('assets/img/🦆 icon _more vert_.png')); ?>"
                        alt=""
                      />
                    </button>
                    <div id="div3Dot" class="div3Dot-drop">
                      <button class="up div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling atas
                      </button>
                      <button class="down div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling bawah
                      </button>
                      <!-- <button class="div3Dot-isi" >
                        <svg
                          width="25"
                          height="25"
                          viewBox="0 0 25 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.25033 16.6666H5.20866C4.93239 16.6666 4.66744 16.5569 4.47209 16.3615C4.27674 16.1662 4.16699 15.9012 4.16699 15.625V5.20829C4.16699 4.93203 4.27674 4.66707 4.47209 4.47172C4.66744 4.27637 4.93239 4.16663 5.20866 4.16663H15.6253C15.9016 4.16663 16.1665 4.27637 16.3619 4.47172C16.5572 4.66707 16.667 4.93203 16.667 5.20829V6.24996M9.37533 20.8333H19.792C20.0683 20.8333 20.3332 20.7235 20.5286 20.5282C20.7239 20.3328 20.8337 20.0679 20.8337 19.7916V9.37496C20.8337 9.09869 20.7239 8.83374 20.5286 8.63839C20.3332 8.44304 20.0683 8.33329 19.792 8.33329H9.37533C9.09906 8.33329 8.83411 8.44304 8.63876 8.63839C8.44341 8.83374 8.33366 9.09869 8.33366 9.37496V19.7916C8.33366 20.0679 8.44341 20.3328 8.63876 20.5282C8.83411 20.7235 9.09906 20.8333 9.37533 20.8333Z"
                            stroke="black"
                            stroke-width="2.08333"
                            stroke-linejoin="round"
                          />
                        </svg>
                        Duplikat
                      </button> -->
                    </div>
                  </div>
                  <button id="dropdown-btn-2" class="btn-drop">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Vector (7).png')); ?>"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div
                id="dropdown-content-2"
                class="pages5-komponen-inside-text1"
              >
                <textarea name="" id="summernote2" cols="30" rows="10">
                </textarea>
              </div>
            </div>

            <div id="pages5Kom4" draggable="true" class="pages5-komponen-2">
              <div class="pages5-komponen-text">
                <div class="pages5-komponen-text-kiri">
                  <button class="btn-drag">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                      alt=""
                    />
                  </button>
                  <img
                    class="pages5-isi"
                    src="<?php echo e(asset('assets/img/🦆 icon _media image_.png')); ?>"
                    alt=""
                  />
                  <p class="pages5-isi">background image</p>
                </div>
                <div class="pages5-komponen-text-kanan">
                  <button id="btnSwitch4" class="btn-switch">
                    <img
                      id="btnEye"
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>"
                      alt=""
                    />
                  </button>
                  <button id="btnTrash4" class="btn-trash">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/🦆 icon _trash_.png')); ?>"
                      alt=""
                    />
                  </button>
                  <div class="drop-3dot">
                    <button id="btnDrop3Dot1" class="btn-3dot">
                      <img
                        class="pages5-isi"
                        src="<?php echo e(asset('assets/img/🦆 icon _more vert_.png')); ?>"
                        alt=""
                      />
                    </button>
                    <div id="div3Dot" class="div3Dot-drop">
                      <button class="up div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling atas
                      </button>
                      <button class="down div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling bawah
                      </button>
                      <!-- <button class="div3Dot-isi" >
                        <svg
                          width="25"
                          height="25"
                          viewBox="0 0 25 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.25033 16.6666H5.20866C4.93239 16.6666 4.66744 16.5569 4.47209 16.3615C4.27674 16.1662 4.16699 15.9012 4.16699 15.625V5.20829C4.16699 4.93203 4.27674 4.66707 4.47209 4.47172C4.66744 4.27637 4.93239 4.16663 5.20866 4.16663H15.6253C15.9016 4.16663 16.1665 4.27637 16.3619 4.47172C16.5572 4.66707 16.667 4.93203 16.667 5.20829V6.24996M9.37533 20.8333H19.792C20.0683 20.8333 20.3332 20.7235 20.5286 20.5282C20.7239 20.3328 20.8337 20.0679 20.8337 19.7916V9.37496C20.8337 9.09869 20.7239 8.83374 20.5286 8.63839C20.3332 8.44304 20.0683 8.33329 19.792 8.33329H9.37533C9.09906 8.33329 8.83411 8.44304 8.63876 8.63839C8.44341 8.83374 8.33366 9.09869 8.33366 9.37496V19.7916C8.33366 20.0679 8.44341 20.3328 8.63876 20.5282C8.83411 20.7235 9.09906 20.8333 9.37533 20.8333Z"
                            stroke="black"
                            stroke-width="2.08333"
                            stroke-linejoin="round"
                          />
                        </svg>
                        Duplikat
                      </button> -->
                    </div>
                  </div>
                  <button id="dropdown-btn-3" class="btn-drop">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Vector (7).png')); ?>"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div
                id="dropdown-content-3"
                class="pages5-komponen-inside-text1"
              >
                <div class="pages5-input-file">
                  <label class="Lbl-gmb" for="fileGMb">
                    <img
                      src="<?php echo e(asset('assets/img/🦆 icon _media image_.png')); ?>"
                      alt=""
                    />
                    Isi background
                  </label>
                  <input
                    type="file"
                    class="gamb-inp"
                    name="fileGMb"
                    id="fileGMb"
                  />
                </div>
                <div class="pages5-richa"></div>
              </div>
            </div>

            <div id="pages5Kom5" draggable="true" class="pages5-komponen-2">
              <div class="pages5-komponen-text">
                <div class="pages5-komponen-text-kiri">
                  <button class="btn-drag">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                      alt=""
                    />
                  </button>
                  <img
                    class="pages5-isi"
                    src="<?php echo e(asset('assets/img/🦆 icon _edit pencil_.png')); ?>"
                    alt=""
                  />
                  <p class="pages5-isi">Teks : Deskripsi</p>
                </div>
                <div class="pages5-komponen-text-kanan">
                  <button id="btnSwitch5" class="btn-switch">
                    <img
                      id="btnEye"
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>"
                      alt=""
                    />
                  </button>
                  <button id="btnTrash5" class="btn-trash">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/🦆 icon _trash_.png')); ?>"
                      alt=""
                    />
                  </button>
                  <div class="drop-3dot">
                    <button id="btnDrop3Dot1" class="btn-3dot">
                      <img
                        class="pages5-isi"
                        src="<?php echo e(asset('assets/img/🦆 icon _more vert_.png')); ?>"
                        alt=""
                      />
                    </button>
                    <div id="div3Dot" class="div3Dot-drop">
                      <button class="up div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling atas
                      </button>
                      <button class="down div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling bawah
                      </button>
                      <!-- <button class="div3Dot-isi" >
                        <svg
                          width="25"
                          height="25"
                          viewBox="0 0 25 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.25033 16.6666H5.20866C4.93239 16.6666 4.66744 16.5569 4.47209 16.3615C4.27674 16.1662 4.16699 15.9012 4.16699 15.625V5.20829C4.16699 4.93203 4.27674 4.66707 4.47209 4.47172C4.66744 4.27637 4.93239 4.16663 5.20866 4.16663H15.6253C15.9016 4.16663 16.1665 4.27637 16.3619 4.47172C16.5572 4.66707 16.667 4.93203 16.667 5.20829V6.24996M9.37533 20.8333H19.792C20.0683 20.8333 20.3332 20.7235 20.5286 20.5282C20.7239 20.3328 20.8337 20.0679 20.8337 19.7916V9.37496C20.8337 9.09869 20.7239 8.83374 20.5286 8.63839C20.3332 8.44304 20.0683 8.33329 19.792 8.33329H9.37533C9.09906 8.33329 8.83411 8.44304 8.63876 8.63839C8.44341 8.83374 8.33366 9.09869 8.33366 9.37496V19.7916C8.33366 20.0679 8.44341 20.3328 8.63876 20.5282C8.83411 20.7235 9.09906 20.8333 9.37533 20.8333Z"
                            stroke="black"
                            stroke-width="2.08333"
                            stroke-linejoin="round"
                          />
                        </svg>
                        Duplikat
                      </button> -->
                    </div>
                  </div>
                  <button id="dropdown-btn-4" class="btn-drop">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Vector (7).png')); ?>"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div
                id="dropdown-content-4"
                class="pages5-komponen-inside-text1"
              >
                <textarea name="" id="summernote3" cols="30" rows="10">
                </textarea>
              </div>
            </div>

            <div id="pages5Kom6" draggable="true" class="pages5-komponen-2">
              <div class="pages5-komponen-text">
                <div class="pages5-komponen-text-kiri">
                  <button class="btn-drag">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                      alt=""
                    />
                  </button>
                  <img
                    class="pages5-isi"
                    src="<?php echo e(asset('assets/img/🦆 icon _edit pencil_.png')); ?>"
                    alt=""
                  />
                  <p class="pages5-isi">Tautan</p>
                </div>
                <div class="pages5-komponen-text-kanan">
                  <button id="btnSwitch6" class="btn-switch">
                    <img
                      id="btnEye"
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>"
                      alt=""
                    />
                  </button>
                  <button id="btnTrash6" class="btn-trash">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/🦆 icon _trash_.png')); ?>"
                      alt=""
                    />
                  </button>
                  <div class="drop-3dot">
                    <button id="btnDrop3Dot1" class="btn-3dot">
                      <img
                        class="pages5-isi"
                        src="<?php echo e(asset('assets/img/🦆 icon _more vert_.png')); ?>"
                        alt=""
                      />
                    </button>
                    <div id="div3Dot" class="div3Dot-drop">
                      <button class="up div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling atas
                      </button>
                      <button class="down div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling bawah
                      </button>
                      <!-- <button class="div3Dot-isi" >
                        <svg
                          width="25"
                          height="25"
                          viewBox="0 0 25 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.25033 16.6666H5.20866C4.93239 16.6666 4.66744 16.5569 4.47209 16.3615C4.27674 16.1662 4.16699 15.9012 4.16699 15.625V5.20829C4.16699 4.93203 4.27674 4.66707 4.47209 4.47172C4.66744 4.27637 4.93239 4.16663 5.20866 4.16663H15.6253C15.9016 4.16663 16.1665 4.27637 16.3619 4.47172C16.5572 4.66707 16.667 4.93203 16.667 5.20829V6.24996M9.37533 20.8333H19.792C20.0683 20.8333 20.3332 20.7235 20.5286 20.5282C20.7239 20.3328 20.8337 20.0679 20.8337 19.7916V9.37496C20.8337 9.09869 20.7239 8.83374 20.5286 8.63839C20.3332 8.44304 20.0683 8.33329 19.792 8.33329H9.37533C9.09906 8.33329 8.83411 8.44304 8.63876 8.63839C8.44341 8.83374 8.33366 9.09869 8.33366 9.37496V19.7916C8.33366 20.0679 8.44341 20.3328 8.63876 20.5282C8.83411 20.7235 9.09906 20.8333 9.37533 20.8333Z"
                            stroke="black"
                            stroke-width="2.08333"
                            stroke-linejoin="round"
                          />
                        </svg>
                        Duplikat
                      </button> -->
                    </div>
                  </div>
                  <button id="dropdown-btn-5" class="btn-drop">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Vector (7).png')); ?>"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div
                id="dropdown-content-5"
                class="pages5-komponen-inside-text1"
              >
                <div class="component-input">
                  <input class="component-input-style" type="text" />
                </div>
              </div>
            </div>

            <div id="pages5Kom7" draggable="true" class="pages5-komponen-2">
              <div class="pages5-komponen-text">
                <div class="pages5-komponen-text-kiri">
                  <button class="btn-drag">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                      alt=""
                    />
                  </button>
                  <img
                    class="pages5-isi"
                    src="<?php echo e(asset('assets/img/🦆 icon _edit pencil_.png')); ?>"
                    alt=""
                  />
                  <p class="pages5-isi">Twitter</p>
                </div>
                <div class="pages5-komponen-text-kanan">
                  <button id="btnSwitch7" class="btn-switch">
                    <img
                      id="btnEye"
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>"
                      alt=""
                    />
                  </button>
                  <button id="btnTrash7" class="btn-trash">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/🦆 icon _trash_.png')); ?>"
                      alt=""
                    />
                  </button>
                  <div class="drop-3dot">
                    <button id="btnDrop3Dot1" class="btn-3dot">
                      <img
                        class="pages5-isi"
                        src="<?php echo e(asset('assets/img/🦆 icon _more vert_.png')); ?>"
                        alt=""
                      />
                    </button>
                    <div id="div3Dot" class="div3Dot-drop">
                      <button class="up div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling atas
                      </button>
                      <button class="down div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling bawah
                      </button>
                      <!-- <button class="div3Dot-isi" >
                        <svg
                          width="25"
                          height="25"
                          viewBox="0 0 25 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.25033 16.6666H5.20866C4.93239 16.6666 4.66744 16.5569 4.47209 16.3615C4.27674 16.1662 4.16699 15.9012 4.16699 15.625V5.20829C4.16699 4.93203 4.27674 4.66707 4.47209 4.47172C4.66744 4.27637 4.93239 4.16663 5.20866 4.16663H15.6253C15.9016 4.16663 16.1665 4.27637 16.3619 4.47172C16.5572 4.66707 16.667 4.93203 16.667 5.20829V6.24996M9.37533 20.8333H19.792C20.0683 20.8333 20.3332 20.7235 20.5286 20.5282C20.7239 20.3328 20.8337 20.0679 20.8337 19.7916V9.37496C20.8337 9.09869 20.7239 8.83374 20.5286 8.63839C20.3332 8.44304 20.0683 8.33329 19.792 8.33329H9.37533C9.09906 8.33329 8.83411 8.44304 8.63876 8.63839C8.44341 8.83374 8.33366 9.09869 8.33366 9.37496V19.7916C8.33366 20.0679 8.44341 20.3328 8.63876 20.5282C8.83411 20.7235 9.09906 20.8333 9.37533 20.8333Z"
                            stroke="black"
                            stroke-width="2.08333"
                            stroke-linejoin="round"
                          />
                        </svg>
                        Duplikat
                      </button> -->
                    </div>
                  </div>
                  <button id="dropdown-btn-6" class="btn-drop">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Vector (7).png')); ?>"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div
                id="dropdown-content-6"
                class="pages5-komponen-inside-text1"
              >
                <div class="component-input">
                  <input class="component-input-style" type="text" />
                </div>
              </div>
            </div>

            <div id="pages5Kom8" draggable="true" class="pages5-komponen-2">
              <div class="pages5-komponen-text">
                <div class="pages5-komponen-text-kiri">
                  <button class="btn-drag">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                      alt=""
                    />
                  </button>
                  <img
                    class="pages5-isi"
                    src="<?php echo e(asset('assets/img/🦆 icon _edit pencil_.png')); ?>"
                    alt=""
                  />
                  <p class="pages5-isi">Instagram</p>
                </div>
                <div class="pages5-komponen-text-kanan">
                  <button id="btnSwitch8" class="btn-switch">
                    <img
                      id="btnEye"
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>"
                      alt=""
                    />
                  </button>
                  <button id="btnTrash8" class="btn-trash">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/🦆 icon _trash_.png')); ?>"
                      alt=""
                    />
                  </button>
                  <div class="drop-3dot">
                    <button id="btnDrop3Dot1" class="btn-3dot">
                      <img
                        class="pages5-isi"
                        src="<?php echo e(asset('assets/img/🦆 icon _more vert_.png')); ?>"
                        alt=""
                      />
                    </button>
                    <div id="div3Dot" class="div3Dot-drop">
                      <button class="up div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling atas
                      </button>
                      <button class="down div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling bawah
                      </button>
                      <!-- <button class="div3Dot-isi" >
                        <svg
                          width="25"
                          height="25"
                          viewBox="0 0 25 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.25033 16.6666H5.20866C4.93239 16.6666 4.66744 16.5569 4.47209 16.3615C4.27674 16.1662 4.16699 15.9012 4.16699 15.625V5.20829C4.16699 4.93203 4.27674 4.66707 4.47209 4.47172C4.66744 4.27637 4.93239 4.16663 5.20866 4.16663H15.6253C15.9016 4.16663 16.1665 4.27637 16.3619 4.47172C16.5572 4.66707 16.667 4.93203 16.667 5.20829V6.24996M9.37533 20.8333H19.792C20.0683 20.8333 20.3332 20.7235 20.5286 20.5282C20.7239 20.3328 20.8337 20.0679 20.8337 19.7916V9.37496C20.8337 9.09869 20.7239 8.83374 20.5286 8.63839C20.3332 8.44304 20.0683 8.33329 19.792 8.33329H9.37533C9.09906 8.33329 8.83411 8.44304 8.63876 8.63839C8.44341 8.83374 8.33366 9.09869 8.33366 9.37496V19.7916C8.33366 20.0679 8.44341 20.3328 8.63876 20.5282C8.83411 20.7235 9.09906 20.8333 9.37533 20.8333Z"
                            stroke="black"
                            stroke-width="2.08333"
                            stroke-linejoin="round"
                          />
                        </svg>
                        Duplikat
                      </button> -->
                    </div>
                  </div>
                  <button id="dropdown-btn-7" class="btn-drop">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Vector (7).png')); ?>"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div
                id="dropdown-content-7"
                class="pages5-komponen-inside-text1"
              >
                <div class="component-input">
                  <input class="component-input-style" type="text" />
                </div>
              </div>
            </div>

            <div id="pages5Kom9" draggable="true" class="pages5-komponen-2">
              <div class="pages5-komponen-text">
                <div class="pages5-komponen-text-kiri">
                  <button class="btn-drag">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                      alt=""
                    />
                  </button>
                  <img
                    class="pages5-isi"
                    src="<?php echo e(asset('assets/img/🦆 icon _edit pencil_.png')); ?>"
                    alt=""
                  />
                  <p class="pages5-isi">Youtube</p>
                </div>
                <div class="pages5-komponen-text-kanan">
                  <button id="btnSwitch9" class="btn-switch">
                    <img
                      id="btnEye"
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>"
                      alt=""
                    />
                  </button>
                  <button id="btnTrash9" class="btn-trash">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/🦆 icon _trash_.png')); ?>"
                      alt=""
                    />
                  </button>
                  <div class="drop-3dot">
                    <button id="btnDrop3Dot1" class="btn-3dot">
                      <img
                        class="pages5-isi"
                        src="<?php echo e(asset('assets/img/🦆 icon _more vert_.png')); ?>"
                        alt=""
                      />
                    </button>
                    <div id="div3Dot" class="div3Dot-drop">
                      <button class="up div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling atas
                      </button>
                      <button class="down div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling bawah
                      </button>
                      <!-- <button class="div3Dot-isi" >
                        <svg
                          width="25"
                          height="25"
                          viewBox="0 0 25 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.25033 16.6666H5.20866C4.93239 16.6666 4.66744 16.5569 4.47209 16.3615C4.27674 16.1662 4.16699 15.9012 4.16699 15.625V5.20829C4.16699 4.93203 4.27674 4.66707 4.47209 4.47172C4.66744 4.27637 4.93239 4.16663 5.20866 4.16663H15.6253C15.9016 4.16663 16.1665 4.27637 16.3619 4.47172C16.5572 4.66707 16.667 4.93203 16.667 5.20829V6.24996M9.37533 20.8333H19.792C20.0683 20.8333 20.3332 20.7235 20.5286 20.5282C20.7239 20.3328 20.8337 20.0679 20.8337 19.7916V9.37496C20.8337 9.09869 20.7239 8.83374 20.5286 8.63839C20.3332 8.44304 20.0683 8.33329 19.792 8.33329H9.37533C9.09906 8.33329 8.83411 8.44304 8.63876 8.63839C8.44341 8.83374 8.33366 9.09869 8.33366 9.37496V19.7916C8.33366 20.0679 8.44341 20.3328 8.63876 20.5282C8.83411 20.7235 9.09906 20.8333 9.37533 20.8333Z"
                            stroke="black"
                            stroke-width="2.08333"
                            stroke-linejoin="round"
                          />
                        </svg>
                        Duplikat
                      </button> -->
                    </div>
                  </div>
                  <button id="dropdown-btn-8" class="btn-drop">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Vector (7).png')); ?>"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div
                id="dropdown-content-8"
                class="pages5-komponen-inside-text1"
              >
                <div class="component-input">
                  <input class="component-input-style" type="text" />
                </div>
              </div>
            </div>

            <div
              id="pages5Kom10"
              draggable="true"
              class="pages5-komponen-2"
            >
              <div class="pages5-komponen-text">
                <div class="pages5-komponen-text-kiri">
                  <button class="btn-drag">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                      alt=""
                    />
                  </button>
                  <img
                    class="pages5-isi"
                    src="<?php echo e(asset('assets/img/🦆 icon _edit pencil_.png')); ?>"
                    alt=""
                  />
                  <p class="pages5-isi">Tiktok</p>
                </div>
                <div class="pages5-komponen-text-kanan">
                  <button id="btnSwitch10" class="btn-switch">
                    <img
                      id="btnEye"
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>"
                      alt=""
                    />
                  </button>
                  <button id="btnTrash10" class="btn-trash">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/🦆 icon _trash_.png')); ?>"
                      alt=""
                    />
                  </button>
                  <div class="drop-3dot">
                    <button id="btnDrop3Dot1" class="btn-3dot">
                      <img
                        class="pages5-isi"
                        src="<?php echo e(asset('assets/img/🦆 icon _more vert_.png')); ?>"
                        alt=""
                      />
                    </button>
                    <div id="div3Dot" class="div3Dot-drop">
                      <button class="up div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling atas
                      </button>
                      <button class="down div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling bawah
                      </button>
                      <!-- <button class="div3Dot-isi" >
                        <svg
                          width="25"
                          height="25"
                          viewBox="0 0 25 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.25033 16.6666H5.20866C4.93239 16.6666 4.66744 16.5569 4.47209 16.3615C4.27674 16.1662 4.16699 15.9012 4.16699 15.625V5.20829C4.16699 4.93203 4.27674 4.66707 4.47209 4.47172C4.66744 4.27637 4.93239 4.16663 5.20866 4.16663H15.6253C15.9016 4.16663 16.1665 4.27637 16.3619 4.47172C16.5572 4.66707 16.667 4.93203 16.667 5.20829V6.24996M9.37533 20.8333H19.792C20.0683 20.8333 20.3332 20.7235 20.5286 20.5282C20.7239 20.3328 20.8337 20.0679 20.8337 19.7916V9.37496C20.8337 9.09869 20.7239 8.83374 20.5286 8.63839C20.3332 8.44304 20.0683 8.33329 19.792 8.33329H9.37533C9.09906 8.33329 8.83411 8.44304 8.63876 8.63839C8.44341 8.83374 8.33366 9.09869 8.33366 9.37496V19.7916C8.33366 20.0679 8.44341 20.3328 8.63876 20.5282C8.83411 20.7235 9.09906 20.8333 9.37533 20.8333Z"
                            stroke="black"
                            stroke-width="2.08333"
                            stroke-linejoin="round"
                          />
                        </svg>
                        Duplikat
                      </button> -->
                    </div>
                  </div>
                  <button id="dropdown-btn-9" class="btn-drop">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Vector (7).png')); ?>"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div
                id="dropdown-content-9"
                class="pages5-komponen-inside-text1"
              >
                <div class="component-input">
                  <input class="component-input-style" type="text" />
                </div>
              </div>
            </div>

            <div
              id="pages5Kom11"
              draggable="true"
              class="pages5-komponen-2"
            >
              <div class="pages5-komponen-text">
                <div class="pages5-komponen-text-kiri">
                  <button class="btn-drag">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                      alt=""
                    />
                  </button>
                  <img
                    class="pages5-isi"
                    src="<?php echo e(asset('assets/img/🦆 icon _edit pencil_.png')); ?>"
                    alt=""
                  />
                  <p class="pages5-isi">Facebook</p>
                </div>
                <div class="pages5-komponen-text-kanan">
                  <button id="btnSwitch11" class="btn-switch">
                    <img
                      id="btnEye"
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Group 68 (1).png')); ?>"
                      alt=""
                    />
                  </button>
                  <button id="btnTrash11" class="btn-trash">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/🦆 icon _trash_.png')); ?>"
                      alt=""
                    />
                  </button>
                  <div class="drop-3dot">
                    <button id="btnDrop3Dot1" class="btn-3dot">
                      <img
                        class="pages5-isi"
                        src="<?php echo e(asset('assets/img/🦆 icon _more vert_.png')); ?>"
                        alt=""
                      />
                    </button>
                    <div id="div3Dot" class="div3Dot-drop">
                      <button class="up div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling atas
                      </button>
                      <button class="down div3Dot-isi">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                            fill="#A5A5A5"
                          />
                        </svg>
                        Pindah ke paling bawah
                      </button>
                      <!-- <button class="div3Dot-isi" >
                        <svg
                          width="25"
                          height="25"
                          viewBox="0 0 25 25"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.25033 16.6666H5.20866C4.93239 16.6666 4.66744 16.5569 4.47209 16.3615C4.27674 16.1662 4.16699 15.9012 4.16699 15.625V5.20829C4.16699 4.93203 4.27674 4.66707 4.47209 4.47172C4.66744 4.27637 4.93239 4.16663 5.20866 4.16663H15.6253C15.9016 4.16663 16.1665 4.27637 16.3619 4.47172C16.5572 4.66707 16.667 4.93203 16.667 5.20829V6.24996M9.37533 20.8333H19.792C20.0683 20.8333 20.3332 20.7235 20.5286 20.5282C20.7239 20.3328 20.8337 20.0679 20.8337 19.7916V9.37496C20.8337 9.09869 20.7239 8.83374 20.5286 8.63839C20.3332 8.44304 20.0683 8.33329 19.792 8.33329H9.37533C9.09906 8.33329 8.83411 8.44304 8.63876 8.63839C8.44341 8.83374 8.33366 9.09869 8.33366 9.37496V19.7916C8.33366 20.0679 8.44341 20.3328 8.63876 20.5282C8.83411 20.7235 9.09906 20.8333 9.37533 20.8333Z"
                            stroke="black"
                            stroke-width="2.08333"
                            stroke-linejoin="round"
                          />
                        </svg>
                        Duplikat
                      </button> -->
                    </div>
                  </div>
                  <button id="dropdown-btn-10" class="btn-drop">
                    <img
                      class="pages5-isi"
                      src="<?php echo e(asset('assets/img/Vector (7).png')); ?>"
                      alt=""
                    />
                  </button>
                </div>
              </div>
              <div
                id="dropdown-content-10"
                class="pages5-komponen-inside-text1"
              >
                <div class="component-input">
                  <input class="component-input-style" type="text" />
                </div>
              </div>
            </div>
          </div>
          <div class="pages5-bungkusjajan">
            <div class="pages5-lamnjut">
              <a href="/page4" class="pages5-lanjutkan">< Kembali</a>
              <button id="btnSudah" class="pages5-lanjutkan">
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
              </button>
            </div>
          </div>
        </div>
        <div id="prew2" class="anim pages5-kanan hidden">
          <button class="pages5-preview">getlink/tautan microsite</button
          ><br />
          <div class="kanan-bungkus">
            <div class="pages3-bungkus-kanan">
              <center>
                <div id="div" class="template0">
                  <img src="<?php echo e(asset('assets/img/webdesin.png')); ?>" alt="" />
                </div>
                <div id="div1" class="template1" style="display: none">
                  <img
                    src="<?php echo e(asset('assets/preview-template/img/rai.png')); ?>"
                    alt=""
                    class="gambar1"
                  />
                  <h4 class="tulisan1">Quli Khutsi Azzumi</h4>
                  <div class="bungkusbunderan">
                    <div class="elipsetemplate1">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/ig.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                    <div class="elipsetemplate1">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/twit.png')); ?>"
                        alt=""
                        class="ikon1"
                      />
                    </div>
                    <div class="elipsetemplate1">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/fb.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                    <div class="elipsetemplate1">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/yt.png')); ?>"
                        alt=""
                        class="ikon1"
                      />
                    </div>
                    <div class="elipsetemplate1">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/tiktod.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                  </div>
                  <div class="template1-kolom">
                    <img
                      src="<?php echo e(asset('assets/preview-template/img/ytred.png')); ?>"
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
                  <!-- <img src="assets/preview-template/img/garis2.png" alt="" class="gariss" /> -->
                  <img
                    src="<?php echo e(asset('assets/preview-template/img/rai.png')); ?>"
                    alt=""
                    class="gambar1"
                  />
                  <h4 class="tulisan1">PDI PERJUANGAN</h4>
                  <div class="bungkusbunderan">
                    <div class="elipsetemplate2">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/ig.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                    <div class="elipsetemplate2">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/twit.png')); ?>"
                        alt=""
                        class="ikon1"
                      />
                    </div>
                    <div class="elipsetemplate2">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/fb.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                    <div class="elipsetemplate2">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/yt.png')); ?>"
                        alt=""
                        class="ikon1"
                      />
                    </div>
                    <div class="elipsetemplate2">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/tiktod.png')); ?>"
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
                      src="<?php echo e(asset('assets/preview-template/img/ytred.png')); ?>"
                      alt=""
                      style="margin-top: 18%"
                    />
                  </div>
                </div>
                <div id="div3" class="template3" style="display: none">
                  <img
                    src="<?php echo e(asset('assets/preview-template/img/rai.png')); ?>"
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
                      src="<?php echo e(asset('assets/preview-template/img/ytred.png')); ?>"
                      alt=""
                      style="margin-top: 18%"
                    />
                  </div>
                  <div class="bungkusbunderan2">
                    <div class="elipsetemplate3">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/ig.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                    <div class="elipsetemplate3">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/twit.png')); ?>"
                        alt=""
                        class="ikon1"
                      />
                    </div>
                    <div class="elipsetemplate3">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/fb.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                    <div class="elipsetemplate3">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/yt.png')); ?>"
                        alt=""
                        class="ikon1"
                      />
                    </div>
                    <div class="elipsetemplate3">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/tiktod.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                  </div>
                </div>
                <div id="div4" class="template4" style="display: none">
                  <img
                    src="<?php echo e(asset('assets/preview-template/img/rai.png')); ?>"
                    alt=""
                    class="gambar1"
                  />
                  <h4 class="template4-tulisan1">Quli Khutsi Azzumi</h4>
                  <p class="template4-tulisan2">CEO</p>
                  <div class="bungkusbunderan">
                    <div class="elipsetemplate4">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/ig.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                    <div class="elipsetemplate4">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/twit.png')); ?>"
                        alt=""
                        class="ikon1"
                      />
                    </div>
                    <div class="elipsetemplate4">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/fb.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                    <div class="elipsetemplate4">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/yt.png')); ?>"
                        alt=""
                        class="ikon1"
                      />
                    </div>
                    <div class="elipsetemplate4">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/tiktod.png')); ?>"
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
                    src="<?php echo e(asset('assets/preview-template/img/rai.png')); ?>"
                    alt=""
                    class="gambar1"
                  />
                  <h4 class="template5-tulisan1">Quli Khutsi Azzumi</h4>
                  <div class="bungkusbunderan5">
                    <div class="elipsetemplate5">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/ig.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                    <div class="elipsetemplate5">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/twit.png')); ?>"
                        alt=""
                        class="ikon1"
                      />
                    </div>
                    <div class="elipsetemplate5">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/fb.png')); ?>"
                        alt=""
                        class="ikon"
                      />
                    </div>
                    <div class="elipsetemplate5">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/yt.png')); ?>"
                        alt=""
                        class="ikon1"
                      />
                    </div>
                    <div class="elipsetemplate5">
                      <p class="sembarang">p</p>
                      <img
                        src="<?php echo e(asset('assets/preview-template/img/tiktod.png')); ?>"
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

<div id="CompoModal" class="modal-compo navAni">
  <!-- Modal content -->
  <div class="modal-compo-baru">
    <span class="compo-close">&times;</span>
    <p class="compo-tulisan1">Tambah Komponen Baru</p>

    <div class="bungkus-compo">
      <!-- komponen -->
      <div id="sudahPilih" class="komponen1">
        <button class="inst-modal" id="btnModalIns">
          <div class="bungkus-komponen1" id="instagram">
            <img
              src="assets/img/modal/igungu.png"
              alt=""
              class="gambar-komponen1"
            />
            <p class="tulisan-komponen">Instagram</p>
          </div>
          <p class="baru-tulisan2">
            Komponen untuk menambahkan sosial media instagram
          </p>
        </button>
      </div>
      <div id="sudahPilih" class="komponen1">
        <button class="tw-modal" id="btnModaltw">
          <div class="bungkus-komponen1" id="twitter">
            <img
              src="assets/img/modal/twitungu.png"
              alt=""
              class="gambar-komponen1"
            />
            <p class="tulisan-komponen">Twitter</p>
          </div>
          <p class="baru-tulisan2">
            Komponen untuk menambahkan sosial media Twitter
          </p>
        </button>
      </div>
      <!-- komponen -->
    </div>

    <div class="bungkus-compo">
      <!-- komponen -->
      <div id="sudahPilih" class="komponen1">
        <button class="yt-modal" id="btnModalyt">
          <div class="bungkus-komponen1" id="youtube">
            <img
              src="assets/img/modal/ytungu.png"
              alt=""
              class="gambar-komponen1"
            />
            <p class="tulisan-komponen">Youtube</p>
          </div>
          <p class="baru-tulisan2">
            Komponen untuk menambahkan sosial media youtube
          </p>
        </button>
      </div>
      <div id="sudahPilih" class="komponen1">
        <button class="fb-modal" id="btnModalfb">
          <div class="bungkus-komponen1" id="facebook">
            <img
              src="assets/img/modal/fbungu.png"
              alt=""
              class="gambar-komponen1"
            />
            <p class="tulisan-komponen">Facebook</p>
          </div>
          <p class="baru-tulisan2">
            Komponen untuk menambahkan sosial media facebook
          </p>
        </button>
      </div>
      <!-- komponen -->
    </div>

    <div class="bungkus-compo">
      <!-- komponen -->
      <div id="sudahPilih" class="komponen1">
        <button class="tt-modal" id="btnModaltt">
          <div class="bungkus-komponen1" id="tiktok">
            <img
              src="assets/img/modal/ttungu.png"
              alt=""
              class="gambar-komponen1"
            />
            <p class="tulisan-komponen">Tiktok</p>
          </div>
          <p class="baru-tulisan2">
            Komponen untuk menambahkan sosial media tiktok
          </p>
        </button>
      </div>
      <div id="sudahPilih" class="komponen1">
        <div class="bungkus-komponen1" id="img">
          <img
            src="assets/img/modal/glungu.png"
            alt=""
            class="gambar-komponen1"
          />
          <p class="tulisan-komponen">Gambar</p>
        </div>
        <p class="baru-tulisan2">Komponen untuk menambahkan Gambar</p>
      </div>
      <!-- komponen -->
    </div>

    <div class="bungkus-compo">
      <!-- komponen -->
      <div id="sudahPilih" class="komponen1">
        <button class="tau-modal" id="btnModaltau">
          <div class="bungkus-komponen1" id="prev">
            <img
              src="assets/img/modal/linkungu.png"
              alt=""
              class="gambar-komponen1"
            />
            <p class="tulisan-komponen">Tautan</p>
          </div>
          <p class="baru-tulisan2">Komponen untuk menambahkan tautan</p>
        </button>
      </div>
      <div id="sudahPilih" class="komponen1">
        <div class="bungkus-komponen1" id="desc">
          <img
            src="assets/img/modal/grsungu.png"
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

<!-- The Modal -->
<div id="DelComModal" class="del-com-modal navAni">
  <!-- Modal content -->
  <div class="del-conmo">
    <span class="del-close">&times;</span>
    <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
    <p class="del-hapus-tulisan2">
      Apakah anda yakin ingin menghapus komponen ini
    </p>
    <div class="del-bungkus-hapusbutton">
      <button class="del-batal-button">Batal</button>
      <button id="btnTrash1" class="del-hapus-button">Hapus</button>
    </div>
  </div>
</div>

<!-- <div id="finModal" class="fin-modal">
  <div class="fin-jadi">
    <span class="fin-close">&times;</span>
    <img src="img/pinkphone.png" alt="" class="hppink" />
    <p class="fin-tulisan2">Selamat!! Microsite anda sudah jadi</p>
    <button class="fin-oke">Oke</button>
  </div>
</div> -->

<script>
  const parent = document.getElementById("pgKr");
  const children = document.querySelectorAll(".pages5-komponen-2");

  let draggingChild = null;

  children.forEach((child) => {
    const grandchild = child.querySelector(".div3Dot-drop");
    if (grandchild) {
      const upButton = grandchild.querySelector(".up");
      const downButton = grandchild.querySelector(".down");

      upButton.addEventListener("click", () => {
        const prevSibling = child.previousElementSibling;
        if (prevSibling) {
          parent.insertBefore(child, prevSibling);
        }
      });

      downButton.addEventListener("click", () => {
        const nextSibling = child.nextElementSibling;
        if (nextSibling) {
          parent.insertBefore(nextSibling, child);
        } else {
          parent.appendChild(child);
        }
      });

      grandchild.addEventListener("dragstart", () => {
        draggingChild = child;
      });

      grandchild.addEventListener("dragend", () => {
        draggingChild = null;
      });

      grandchild.addEventListener("dragover", (e) => {
        e.preventDefault();
        const target = e.target.closest(".pages5-komponen-2");
        if (target && target !== draggingChild) {
          const rect = target.getBoundingClientRect();
          const y = e.clientY - rect.top;
          if (y < rect.height / 2) {
            parent.insertBefore(draggingChild, target);
          } else {
            parent.insertBefore(draggingChild, target.nextElementSibling);
          }
        }
      });
    }
  });
</script>

<script>
  const buttonPrew = document.querySelector(".pages5-tambah-prew");
  const prew1 = document.getElementById("prew1");
  const prew2 = document.getElementById("prew2");

  buttonPrew.addEventListener("click", function () {
    prew1.classList.toggle("pages5kirPrew");
    prew2.classList.toggle("pages5Prew");
    buttonPrew.classList.add("preew");
  });

  window.onclick = function (event) {
    if (event.target == buttonPrew) {
      buttonPrew.classList.remove("preew");
    }
  };

  const buttonSide = document.querySelector(".pages5-buttonside");
  const aside = document.querySelector(".pages5-aside");

  buttonSide.addEventListener("click", function () {
    aside.classList.toggle("pages5-tampil");
  });

  var delmodal = document.getElementById("DelComModal");

  // Get the button that opens the modal
  var delbtn1 = document.getElementById("del1");

  // Get the <span> element that closes the modal
  var delspan = document.getElementsByClassName("del-close")[0];

  // When the user clicks the button, open the modal
  delbtn1.onclick = function () {
    delmodal.style.display = "block";
  };

  // When the user clicks on <span> (x), close the modal
  delspan.onclick = function () {
    delmodal.style.display = "none";
  };

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == delmodal) {
      delmodal.style.display = "none";
    }
  };

  const elements = document.querySelectorAll(".pages5-komponen-2");

  let currentElement = null;

  elements.forEach((element) => {
    element.addEventListener("dragstart", () => {
      currentElement = element;
    });

    element.addEventListener("dragover", (event) => {
      event.preventDefault();
    });

    element.addEventListener("drop", () => {
      const dropZone = event.target.closest(".pages5-komponen-2");

      if (dropZone && dropZone !== currentElement) {
        const parent = currentElement.parentNode;
        const indexCurrentElement = Array.prototype.indexOf.call(
          parent.children,
          currentElement
        );
        const indexDropZone = Array.prototype.indexOf.call(
          parent.children,
          dropZone
        );

        if (indexCurrentElement < indexDropZone) {
          parent.insertBefore(currentElement, dropZone.nextSibling);
        } else {
          parent.insertBefore(currentElement, dropZone);
        }
      }

      currentElement = null;
    });
  });

  var Commodal = document.getElementById("CompoModal");

  // Get the button that opens the modal
  var Combtn = document.getElementById("CCOpmBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("compo-close")[0];

  var sdhPlh = document.getElementById("sudahPilih");

  // When the user clicks the button, open the modal
  Combtn.onclick = function () {
    Commodal.style.display = "block";
  };

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    Commodal.style.display = "none";
  };

  sdhPlh.onclick = function () {
    console.log("098");
    Commodal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == Commodal) {
      Commodal.style.display = "none";
    }
  };

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

  $(document).ready(function () {
    $("#summernote2").summernote({
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

  $(document).ready(function () {
    $("#summernote3").summernote({
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

  // Dropdown

  var dropdownBtn0 = document.getElementById("dropdown-btn-0");
  var dropdownBtn1 = document.getElementById("dropdown-btn-1");
  var dropdownBtn3 = document.getElementById("dropdown-btn-2");
  var dropdownBtn4 = document.getElementById("dropdown-btn-3");
  var dropdownBtn5 = document.getElementById("dropdown-btn-4");
  var dropdownBtn6 = document.getElementById("dropdown-btn-5");
  var dropdownBtn7 = document.getElementById("dropdown-btn-6");
  var dropdownBtn8 = document.getElementById("dropdown-btn-7");
  var dropdownBtn9 = document.getElementById("dropdown-btn-8");
  var dropdownBtn10 = document.getElementById("dropdown-btn-9");
  var dropdownBtn11 = document.getElementById("dropdown-btn-10");
  var dropdownContent0 = document.getElementById("dropdown-content-0");
  var dropdownContent1 = document.getElementById("dropdown-content1");
  var dropdownContent3 = document.getElementById("dropdown-content-2");
  var dropdownContent4 = document.getElementById("dropdown-content-3");
  var dropdownContent5 = document.getElementById("dropdown-content-4");
  var dropdownContent6 = document.getElementById("dropdown-content-5");
  var dropdownContent7 = document.getElementById("dropdown-content-6");
  var dropdownContent8 = document.getElementById("dropdown-content-7");
  var dropdownContent9 = document.getElementById("dropdown-content-8");
  var dropdownContent10 = document.getElementById("dropdown-content-9");
  var dropdownContent11 = document.getElementById("dropdown-content-10");

  dropdownBtn1.addEventListener("click", function () {
    dropdownContent1.classList.toggle("drop-tampil-1");
  });

  dropdownBtn0.addEventListener("click", function () {
    dropdownContent0.classList.toggle("drop-tampil-1");
  });

  dropdownBtn3.addEventListener("click", function () {
    dropdownContent3.classList.toggle("drop-tampil-1");
  });

  dropdownBtn4.addEventListener("click", function () {
    dropdownContent4.classList.toggle("drop-tampil-1");
  });

  dropdownBtn5.addEventListener("click", function () {
    dropdownContent5.classList.toggle("drop-tampil-1");
  });

  dropdownBtn6.addEventListener("click", function () {
    dropdownContent6.classList.toggle("drop-tampil-1");
  });
  dropdownBtn7.addEventListener("click", function () {
    dropdownContent7.classList.toggle("drop-tampil-1");
  });

  dropdownBtn8.addEventListener("click", function () {
    dropdownContent8.classList.toggle("drop-tampil-1");
  });
  dropdownBtn9.addEventListener("click", function () {
    dropdownContent9.classList.toggle("drop-tampil-1");
  });
  dropdownBtn10.addEventListener("click", function () {
    dropdownContent10.classList.toggle("drop-tampil-1");
  });
  dropdownBtn11.addEventListener("click", function () {
    dropdownContent11.classList.toggle("drop-tampil-1");
  });

  // End dropdown

  // Switch

  const btnSwitch1 = document.getElementById("btnSwitch");
  const btnSwitch2 = document.getElementById("btnSwitch2");
  const btnSwitch3 = document.getElementById("btnSwitch3");
  const btnSwitch4 = document.getElementById("btnSwitch4");
  const btnSwitch5 = document.getElementById("btnSwitch5");
  const btnSwitch6 = document.getElementById("btnSwitch6");
  const btnSwitch7 = document.getElementById("btnSwitch7");
  const btnSwitch8 = document.getElementById("btnSwitch8");
  const btnSwitch9 = document.getElementById("btnSwitch9");
  const btnSwitch10 = document.getElementById("btnSwitch10");
  const btnSwitch11 = document.getElementById("btnSwitch11");
  const comp1 = document.getElementById("pages5Kom1");
  const comp2 = document.getElementById("pages5Kom2");
  const comp3 = document.getElementById("pages5Kom3");
  const comp4 = document.getElementById("pages5Kom4");
  const comp5 = document.getElementById("pages5Kom5");
  const comp6 = document.getElementById("pages5Kom6");
  const comp7 = document.getElementById("pages5Kom7");
  const comp8 = document.getElementById("pages5Kom8");
  const comp9 = document.getElementById("pages5Kom9");
  const comp10 = document.getElementById("pages5Kom10");
  const comp11 = document.getElementById("pages5Kom11");

  btnSwitch1.addEventListener("click", function () {
    if (comp1.style.opacity === "0.5") {
      comp1.style.opacity = "1";
    } else {
      comp1.style.opacity = "0.5";
    }
  });

  btnSwitch2.addEventListener("click", function () {
    if (comp2.style.opacity === "0.5") {
      comp2.style.opacity = "1";
    } else {
      comp2.style.opacity = "0.5";
    }
  });

  btnSwitch3.addEventListener("click", function () {
    if (comp3.style.opacity === "0.5") {
      comp3.style.opacity = "1";
    } else {
      comp3.style.opacity = "0.5";
      eye.src = "assets/img/";
    }
  });

  btnSwitch4.addEventListener("click", function () {
    if (comp4.style.opacity === "0.5") {
      comp4.style.opacity = "1";
    } else {
      comp4.style.opacity = "0.5";
    }
  });

  btnSwitch5.addEventListener("click", function () {
    if (comp5.style.opacity === "0.5") {
      comp5.style.opacity = "1";
    } else {
      comp5.style.opacity = "0.5";
      btnSwitch1;
    }
  });

  btnSwitch6.addEventListener("click", function () {
    if (comp6.style.opacity === "0.5") {
      comp6.style.opacity = "1";
    } else {
      comp6.style.opacity = "0.5";
    }
  });

  btnSwitch7.addEventListener("click", function () {
    if (comp7.style.opacity === "0.5") {
      comp7.style.opacity = "1";
    } else {
      comp7.style.opacity = "0.5";
    }
  });

  btnSwitch8.addEventListener("click", function () {
    if (comp8.style.opacity === "0.5") {
      comp8.style.opacity = "1";
    } else {
      comp8.style.opacity = "0.5";
    }
  });
  btnSwitch9.addEventListener("click", function () {
    if (comp9.style.opacity === "0.5") {
      comp9.style.opacity = "1";
    } else {
      comp9.style.opacity = "0.5";
    }
  });
  btnSwitch10.addEventListener("click", function () {
    if (comp10.style.opacity === "0.5") {
      comp10.style.opacity = "1";
    } else {
      comp10.style.opacity = "0.5";
    }
  });
  btnSwitch11.addEventListener("click", function () {
    if (comp11.style.opacity === "0.5") {
      comp11.style.opacity = "1";
    } else {
      comp11.style.opacity = "0.5";
    }
  });

  // End Switch

  // Trash

  const trash1 = document.getElementById("btnTrash1");
  const trash2 = document.getElementById("btnTrash2");
  const trash3 = document.getElementById("btnTrash3");
  const trash4 = document.getElementById("btnTrash4");
  const trash5 = document.getElementById("btnTrash5");
  const trash6 = document.getElementById("btnTrash6");
  const trash7 = document.getElementById("btnTrash7");
  const trash8 = document.getElementById("btnTrash8");
  const trash9 = document.getElementById("btnTrash9");
  const trash10 = document.getElementById("btnTrash10");
  const trash11 = document.getElementById("btnTrash11");

  trash1.addEventListener("click", function () {
    comp1.style.display = "none";
    delmodal.style.display = "none";
  });
  trash2.addEventListener("click", function () {
    comp2.style.display = "none";
  });
  trash3.addEventListener("click", function () {
    comp3.style.display = "none";
  });
  trash4.addEventListener("click", function () {
    comp4.style.display = "none";
  });
  trash5.addEventListener("click", function () {
    comp5.style.display = "none";
  });
  trash6.addEventListener("click", function () {
    comp6.style.display = "none";
  });
  trash7.addEventListener("click", function () {
    comp7.style.display = "none";
  });
  trash8.addEventListener("click", function () {
    comp8.style.display = "none";
  });
  trash9.addEventListener("click", function () {
    comp9.style.display = "none";
  });
  trash10.addEventListener("click", function () {
    comp10.style.display = "none";
  });
  trash11.addEventListener("click", function () {
    comp11.style.display = "none";
  });

  // End trash

  // 3 Dot

  // End 3 Dot

  // Add Comp

  const addtau = document.getElementById("btnModaltau");
  const addtw = document.getElementById("btnModaltw");
  const addInst = document.getElementById("btnModalIns");
  const addyt = document.getElementById("btnModalyt");
  const addtt = document.getElementById("btnModaltt");
  const addfb = document.getElementById("btnModalfb");

  addtau.addEventListener("click", function () {
    comp6.style.display = "block";
  });
  addtw.addEventListener("click", function () {
    comp7.style.display = "block";
  });
  addInst.addEventListener("click", function () {
    comp8.style.display = "block";
  });
  addyt.addEventListener("click", function () {
    comp9.style.display = "block";
  });
  addtt.addEventListener("click", function () {
    comp10.style.display = "block";
  });
  addfb.addEventListener("click", function () {
    comp11.style.display = "block";
  });

  // End add comp

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.Dashboard_user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Getlink_New\resources\views/Dashboard_User/pages5.blade.php ENDPATH**/ ?>