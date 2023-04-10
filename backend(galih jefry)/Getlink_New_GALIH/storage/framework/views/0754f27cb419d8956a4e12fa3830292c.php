<?php $__env->startSection('konten'); ?>
    <main>
        <div class="content">
            <div class="lang-content hidden">
                <div class="aniLeft btnprev">
                    <button class="pages5-tambah-prew">
                        preview
                        
                        <i class="fa-solid fa-mobile-screen"></i>
                    </button>
                </div>
                <div class="pages5-bagi">
                    <div id="prew1" class="anim pages5-kiri hidden">
                        <div class="pages5-top-btn">
                            <button class="pages5-tambah-komponen" id="CCOpmBtn">
                                
                                <i class="fa-solid fa-plus" style="color: #524799"></i>
                                Tambah Komponen Baru
                            </button>
                        </div>
                        <div id="pgKr" class="komponen-kkiri">
                            <div id="pages5Kom1" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-regular fa-user" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">Profil</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch" class="btn-switch">
                                            
                                            <i id="icon1" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="del1" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot1" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot1" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                            
                                            <i id="it1" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-0" class="pages5-komponen-inside-text1">
                                    <div class="pages5-input-file">
                                        <label class="Lbl-gmb" for="fileGMb">
                                            
                                            <i class="fa-solid fa-image" style="margin-left: 10px"></i>
                                            Isi Gambar
                                        </label>
                                        <input type="file" class="gamb-inp" name="fileGMb" id="fileGMb" />
                                    </div>
                                    <div class="pages5-richa"></div>
                                </div>
                            </div>

                            <div id="pages5Kom2" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-solid fa-align-justify" style="margin-left: 10px;;"></i>
                                        <p class="pages5-isi">Teks : Title</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch2" class="btn-switch">
                                            
                                            <i id="icon2" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="btnTrash2" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot2" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot2" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                            
                                            <i id="it2" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content1" class="pages5-komponen-inside-text1">
                                    <textarea name="" id="summernote" cols="30" rows="10">
                </textarea>
                                </div>
                            </div>

                            <div id="pages5Kom3" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-solid fa-pencil" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">Teks : Bio</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch3" class="btn-switch">
                                            
                                            <i id="icon3" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="btnTrash3" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot3" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot3" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                            
                                            <i id="it3" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-2" class="pages5-komponen-inside-text1">
                                    <textarea name="" id="summernote2" cols="30" rows="10">
                </textarea>
                                </div>
                            </div>

                            <div id="pages5Kom4" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-solid fa-image" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">background image</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch4" class="btn-switch">
                                            
                                            <i id="icon4" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="btnTrash4" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot4" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot4" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                            
                                            <i id="it4" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-3" class="pages5-komponen-inside-text1">
                                    <div class="pages5-input-file">
                                        <label class="Lbl-gmb" for="fileGMb">
                                            
                                            <i class="fa-solid fa-image" style="margin-left: 10px"></i>
                                            Isi background
                                        </label>
                                        <input type="file" class="gamb-inp" name="fileGMb" id="fileGMb" />
                                    </div>
                                    <div class="pages5-richa"></div>
                                </div>
                            </div>

                            <div id="pages5Kom5" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-solid fa-align-justify" style="margin-left: 10px;;"></i>
                                        <p class="pages5-isi">Teks : Deskripsi</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch5" class="btn-switch">
                                            
                                            <i id="icon5" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="btnTrash5" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot5" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot5" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                            
                                            <i id="it5" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-4" class="pages5-komponen-inside-text1">
                                    <textarea name="" id="summernote3" cols="30" rows="10">
                </textarea>
                                </div>
                            </div>

                            <div id="pages5Kom6" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-solid fa-link" style="margin-left: 10px;;"></i>
                                        <p class="pages5-isi">Tautan</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch6" class="btn-switch">
                                            
                                            <i id="icon6" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="btnTrash6" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot6" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot6" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                            
                                            <i id="it6" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-5" class="pages5-komponen-inside-text1">
                                    <div class="component-input">
                                        <input class="component-input-style" type="text" />
                                    </div>
                                </div>
                            </div>

                            <div id="pages5Kom7" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-brands fa-twitter" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">Twitter</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch7" class="btn-switch">
                                            
                                            <i id="icon7" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="btnTrash7" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot7" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot7" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                            
                                            <i id="it7" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-6" class="pages5-komponen-inside-text1">
                                    <div class="component-input">
                                        <input class="component-input-style" type="text" />
                                    </div>
                                </div>
                            </div>

                            <div id="pages5Kom8" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-brands fa-instagram" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">Instagram</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch8" class="btn-switch">
                                            
                                            <i id="icon8" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="btnTrash8" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot8" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot8" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                            
                                            <i id="it8" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-7" class="pages5-komponen-inside-text1">
                                    <div class="component-input">
                                        <input class="component-input-style" type="text" />
                                    </div>
                                </div>
                            </div>

                            <div id="pages5Kom9" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-brands fa-youtube" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">Youtube</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch9" class="btn-switch">
                                            
                                            <i id="icon9" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="btnTrash9" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot9" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot9" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                            
                                            <i id="it9" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-8" class="pages5-komponen-inside-text1">
                                    <div class="component-input">
                                        <input class="component-input-style" type="text" />
                                    </div>
                                </div>
                            </div>

                            <div id="pages5Kom10" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-brands fa-tiktok" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">Tiktok</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch10" class="btn-switch">
                                            
                                            <i id="icon10" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="btnTrash10" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot10" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot10" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                            
                                            <i id="it10" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-9" class="pages5-komponen-inside-text1">
                                    <div class="component-input">
                                        <input class="component-input-style" type="text" />
                                    </div>
                                </div>
                            </div>

                            <div id="pages5Kom11" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-brands fa-facebook" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">Facebook</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch11" class="btn-switch">
                                            
                                            <i id="icon11" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="btnTrash11" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot11" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot11" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                            
                                            <i id="it11" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-10" class="pages5-komponen-inside-text1">
                                    <div class="component-input">
                                        <input class="component-input-style" type="text" />
                                    </div>
                                </div>
                            </div>

                            <div id="pages5Kom12" draggable="true" class="pages5-komponen-2">
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="<?php echo e(asset('assets/img/Group 71.png')); ?>"
                                                alt="" />
                                        </button>
                                        
                                        <i class="fa-solid fa-image" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">Image</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch12" class="btn-switch">
                                            
                                            <i id="icon12" class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="btnTrash12" class="btn-trash">
                                            
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot12" class="btn-3dot">
                                                
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot12" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
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
                                        <button id="dropdown-btn-11" class="btn-drop">
                                            
                                            <i id="it12" class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdown-content-11" class="pages5-komponen-inside-text1">
                                    <div class="pages5-input-file">
                                        <label class="Lbl-gmb" for="fileGMb">
                                            
                                            <i class="fa-solid fa-image"></i>
                                            Isi Image
                                        </label>
                                        <input type="file" class="gamb-inp" name="fileGMb" id="fileGMb" />
                                    </div>
                                    <div class="pages5-richa"></div>
                                </div>
                            </div>

                        </div>
                        <div class="pages5-bungkusjajan">
                            <div class="pages5-lamnjut">
                                <a href="/page4" class="pages5-lanjutkan">
                                    < Kembali</a>
                                        <button id="btnSudah" class="pages5-lanjutkan">
                                            Selesai
                                            <svg class="finish" width="19" height="15" viewBox="0 0 19 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.875 2.29169L6.37499 14.7917L0.645828 9.06252L2.11458 7.59377L6.37499 11.8438L17.4062 0.822937L18.875 2.29169Z"
                                                    fill="#524799" />
                                            </svg>
                                        </button>
                            </div>
                        </div>
                    </div>
                    <div id="prew2" class="anim pages5-kanan hidden">
                        <a href class="pages5-preview">getlink/tautan microsite</a><br />
                        <div class="kanan-bungkus">
                            <center>
                                <?php if($background->type_background == 'color'): ?>
                  <div class="template4" style="background-color: <?php echo e($background->background); ?>">
                <?php else: ?>
                  <div class="template4" style="background-image: url('<?php echo e(asset('gambar/'.$background->background)); ?>')">
                <?php endif; ?>
                    <?php $non_bungkus = ''; ?>
                    <?php $kolom2 = ''; ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $code = $i['code']; ?>
                    <?php $html = str_replace('src="gambar/', 'src="' . asset('gambar/'), $i['code']); ?>
                    <?php if($i['id'] === 9): ?>
                    <?php $kolom2 .= '<div class="template5-kolom2"><img src="' . asset('gambar/' . $konten[0]['image']) . '" class="konten"></div>'; ?>
                    <?php else: ?>
                    <?php $non_bungkus .= $html; ?>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if (!empty($kolom2)) : ?>
                      <?php $non_bungkus .= '<div class="template5-bungkuskolom">' . $kolom2 . '</div>'; ?>
                    <?php endif; ?>
                    <?php echo $non_bungkus; ?>

                  </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="CompoModal" class="modal-compoas navAni" style="display: none;">
        <div class="modal-compo-barua">
            <div class="modal-atas">
                <h1 class="comp-text">Tambah komponen baru</h1>
                <span class="comp-x">&times;</span>
            </div>
            <div class="modal-bawah">
                <button class="comp-card btnCompos sudahPilih" id="btnModalIns">
                    <i class="fa-brands fa-instagram" style="color: #524799;"></i>
                    <div class="comp-teks">
                        <p class="head-name">
                            Instagram
                        </p>
                        <p class="comp-penjes">
                            Komponen untuk menambahkan tautan sosial media instagram
                        </p>
                    </div>
                </button>
                <button class="comp-card btnCompos sudahPilih" id="btnModaltw">
                    <i class="fa-brands fa-twitter" style="color: #524799;"></i>
                    <div class="comp-teks">
                        <p class="head-name">
                            Twitter
                        </p>
                        <p class="comp-penjes">
                            Komponen untuk menambahkan tautan sosial media twitter
                        </p>
                    </div>
                </button>
                <button class="comp-card btnCompos sudahPilih" id="btnModalyt">
                    <i class="fa-brands fa-youtube" style="color: #524799;"></i>
                    <div class="comp-teks">
                        <p class="head-name">
                            Youtube
                        </p>
                        <p class="comp-penjes">
                            Komponen untuk menambahkan tautan sosial media youtube
                        </p>
                    </div>
                </button>
                <button class="comp-card btnCompos sudahPilih" id="btnModalfb">
                    <i class="fa-brands fa-facebook" style="color: #524799;"></i>
                    <div class="comp-teks">
                        <p class="head-name">
                            Facebook
                        </p>
                        <p class="comp-penjes">
                            Komponen untuk menambahkan tautan sosial media facebook
                        </p>
                    </div>
                </button>
                <button class="comp-card btnCompos sudahPilih" id="btnModaltt">
                    <i class="fa-brands fa-tiktok" style="color: #524799;"></i>
                    <div class="comp-teks">
                        <p class="head-name">
                            Tiktok
                        </p>
                        <p class="comp-penjes">
                            Komponen untuk menambahkan tautan sosial media tiktok
                        </p>
                    </div>
                </button>
                <button class="comp-card btnCompos sudahPilih" id="btnModalgmb">
                    <i class="fa-solid fa-image" style="color: #524799;"></i>
                    <div class="comp-teks">
                        <p class="head-name">
                            Gambar
                        </p>
                        <p class="comp-penjes">
                            Komponen untuk menambahkan tautan sosial media gambar
                        </p>
                    </div>
                </button>
                <button class="comp-card btnCompos sudahPilih" id="btnModaltau">
                    <i class="fa-solid fa-link" style="color: #524799;"></i>
                    <div class="comp-teks">
                        <p class="head-name">
                            Tautan
                        </p>
                        <p class="comp-penjes">
                            Komponen untuk menambahkan tautan sosial media tautan
                        </p>
                    </div>
                </button>
                <button class="comp-card btnCompos sudahPilih" id="btnModaldes">
                    <i class="fa-solid fa-align-justify" style="color: #524799;"></i>
                    <div class="comp-teks">
                        <p class="head-name">
                            Deskripsi
                        </p>
                        <p class="comp-penjes">
                            Komponen untuk menambahkan tautan sosial media deskripsi
                        </p>
                    </div>
                </button>
                <button class="comp-card btnCompos sudahPilih" id="btnModalbg">
                    <i class="fa-solid fa-image" style="color: #524799;"></i>
                    <div class="comp-teks">
                        <p class="head-name">
                            Background image
                        </p>
                        <p class="comp-penjes">
                            Komponen untuk menambahkan tautan sosial media background image
                        </p>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <div id="DelComModal" class="del-com-modal navAni">
        <!-- Modal content -->
        <div class="del-conmo">
            <span class="del-close">&times;</span>
            <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
            <p class="del-hapus-tulisan2">
                Apakah anda yakin ingin menghapus komponen ini
            </p>
            <div class="del-bungkus-hapusbutton">
                <button id="delbal" class="del-batal-button">Batal</button>
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

        buttonPrew.addEventListener("click", function() {
            prew1.classList.toggle("pages5kirPrew");
            prew2.classList.toggle("pages5Prew");
            buttonPrew.classList.add("preew");
        });

        window.onclick = function(event) {
            if (event.target == buttonPrew) {
                buttonPrew.classList.remove("preew");
            }
        };

        //   const buttonSide = document.querySelector(".pages5-buttonside");
        //   const aside = document.querySelector(".pages5-aside");

        //   buttonSide.addEventListener("click", function () {
        //     aside.classList.toggle("pages5-tampil");
        //   });

        var delmodal = document.getElementById("DelComModal");

        // Get the button that opens the modal
        var delbtn1 = document.getElementById("del1");

        // Get the <span> element that closes the modal
        var delspan = document.getElementsByClassName("del-close")[0];

        var delBal = document.getElementById("delbal")

        // When the user clicks the button, open the modal
        delbtn1.onclick = function() {
            delmodal.style.display = "block";
        };
        delBal.onclick = function() {
            delmodal.style.display = "none";
        };

        // When the user clicks on <span> (x), close the modal
        delspan.onclick = function() {
            delmodal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
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
        var span = document.getElementsByClassName("comp-x")[0];

        var sdhPlh = document.querySelectorAll(".sudahPilih");

        // When the user clicks the button, open the modal
        Combtn.onclick = function() {
            Commodal.style.display = "block";
        };

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Commodal.style.display = "none";
        };

        sdhPlh.onclick = function() {
            Commodal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Commodal) {
                Commodal.style.display = "none";
            }
        };

        const btnAcctr = document.querySelectorAll(".btnCompos");

        btnAcctr.forEach(btn => {
            btn.addEventListener("click", function() {
                btn.classList.toggle("comp-card-active");
                Commodal.style.display = "none";
            });
        })

        $(document).ready(function() {
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

        $(document).ready(function() {
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

        $(document).ready(function() {
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
        var dropdownBtn12 = document.getElementById("dropdown-btn-11");
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
        var dropdownContent12 = document.getElementById("dropdown-content-11");
        var iit1 = document.getElementById("it1")
        var iit2 = document.getElementById("it2")
        var iit3 = document.getElementById("it3")
        var iit4 = document.getElementById("it4")
        var iit5 = document.getElementById("it5")
        var iit6 = document.getElementById("it6")
        var iit7 = document.getElementById("it7")
        var iit8 = document.getElementById("it8")
        var iit9 = document.getElementById("it9")
        var iit10 = document.getElementById("it10")
        var iit11 = document.getElementById("it11")
        var iit12 = document.getElementById("it12")

        dropdownBtn0.addEventListener("click", function() {
            dropdownContent0.classList.toggle("drop-tampil-1");
            if (iit1.classList.contains("fa-chevron-down")) {
                iit1.classList.remove("fa-chevron-down");
                iit1.classList.add("fa-chevron-up");
            } else {
                iit1.classList.remove("fa-chevron-up");
                iit1.classList.add("fa-chevron-down");
            }
        });

        dropdownBtn1.addEventListener("click", function() {
            dropdownContent1.classList.toggle("drop-tampil-1");
            if (iit2.classList.contains("fa-chevron-down")) {
                iit2.classList.remove("fa-chevron-down");
                iit2.classList.add("fa-chevron-up");
            } else {
                iit2.classList.remove("fa-chevron-up");
                iit2.classList.add("fa-chevron-down");
            }
        });

        dropdownBtn3.addEventListener("click", function() {
            dropdownContent3.classList.toggle("drop-tampil-1");
            if (iit3.classList.contains("fa-chevron-down")) {
                iit3.classList.remove("fa-chevron-down");
                iit3.classList.add("fa-chevron-up");
            } else {
                iit3.classList.remove("fa-chevron-up");
                iit3.classList.add("fa-chevron-down");
            }
        });

        dropdownBtn4.addEventListener("click", function() {
            dropdownContent4.classList.toggle("drop-tampil-1");
            if (iit4.classList.contains("fa-chevron-down")) {
                iit4.classList.remove("fa-chevron-down");
                iit4.classList.add("fa-chevron-up");
            } else {
                iit4.classList.remove("fa-chevron-up");
                iit4.classList.add("fa-chevron-down");
            }
        });

        dropdownBtn5.addEventListener("click", function() {
            dropdownContent5.classList.toggle("drop-tampil-1");
            if (iit5.classList.contains("fa-chevron-down")) {
                iit5.classList.remove("fa-chevron-down");
                iit5.classList.add("fa-chevron-up");
            } else {
                iit5.classList.remove("fa-chevron-up");
                iit5.classList.add("fa-chevron-down");
            }
        });

        dropdownBtn6.addEventListener("click", function() {
            dropdownContent6.classList.toggle("drop-tampil-1");
            if (iit6.classList.contains("fa-chevron-down")) {
                iit6.classList.remove("fa-chevron-down");
                iit6.classList.add("fa-chevron-up");
            } else {
                iit6.classList.remove("fa-chevron-up");
                iit6.classList.add("fa-chevron-down");
            }
        });
        dropdownBtn7.addEventListener("click", function() {
            dropdownContent7.classList.toggle("drop-tampil-1");
            if (iit7.classList.contains("fa-chevron-down")) {
                iit7.classList.remove("fa-chevron-down");
                iit7.classList.add("fa-chevron-up");
            } else {
                iit7.classList.remove("fa-chevron-up");
                iit7.classList.add("fa-chevron-down");
            }
        });

        dropdownBtn8.addEventListener("click", function() {
            dropdownContent8.classList.toggle("drop-tampil-1");
            if (iit8.classList.contains("fa-chevron-down")) {
                iit8.classList.remove("fa-chevron-down");
                iit8.classList.add("fa-chevron-up");
            } else {
                iit8.classList.remove("fa-chevron-up");
                iit8.classList.add("fa-chevron-down");
            }
        });
        dropdownBtn9.addEventListener("click", function() {
            dropdownContent9.classList.toggle("drop-tampil-1");
            if (iit9.classList.contains("fa-chevron-down")) {
                iit9.classList.remove("fa-chevron-down");
                iit9.classList.add("fa-chevron-up");
            } else {
                iit9.classList.remove("fa-chevron-up");
                iit9.classList.add("fa-chevron-down");
            }
        });
        dropdownBtn10.addEventListener("click", function() {
            dropdownContent10.classList.toggle("drop-tampil-1");
            if (iit10.classList.contains("fa-chevron-down")) {
                iit10.classList.remove("fa-chevron-down");
                iit10.classList.add("fa-chevron-up");
            } else {
                iit10.classList.remove("fa-chevron-up");
                iit10.classList.add("fa-chevron-down");
            }
        });
        dropdownBtn11.addEventListener("click", function() {
            dropdownContent11.classList.toggle("drop-tampil-1");
            if (iit11.classList.contains("fa-chevron-down")) {
                iit11.classList.remove("fa-chevron-down");
                iit11.classList.add("fa-chevron-up");
            } else {
                iit11.classList.remove("fa-chevron-up");
                iit11.classList.add("fa-chevron-down");
            }
        });
        dropdownBtn12.addEventListener("click", function() {
            dropdownContent12.classList.toggle("drop-tampil-1");
            if (iit12.classList.contains("fa-chevron-down")) {
                iit12.classList.remove("fa-chevron-down");
                iit12.classList.add("fa-chevron-up");
            } else {
                iit12.classList.remove("fa-chevron-up");
                iit12.classList.add("fa-chevron-down");
            }
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
        const btnSwitch12 = document.getElementById("btnSwitch12");
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
        const comp12 = document.getElementById("pages5Kom12");

        btnSwitch1.addEventListener("click", function() {
            if (comp1.style.opacity === "0.5") {
                var icon1 = document.getElementById("icon1");
                comp1.style.opacity = "1";
                icon1.classList.remove("fa-eye-slash");
                icon1.classList.add("fa-eye");
                icon1.style.color = ""; // reset warna icon mata menjadi hitam
            } else {
                var icon1 = document.getElementById("icon1");
                comp1.style.opacity = "0.5";
                icon1.classList.remove("fa-eye-slash");
                icon1.classList.remove("fa-eye");
                icon1.classList.add("fa-eye-slash");
                icon1.style.color = "#c80000"; // ubah warna icon mata menjadi merah
            }
        });

        btnSwitch2.addEventListener("click", function() {
            if (comp2.style.opacity === "0.5") {
                var icon2 = document.getElementById("icon2");
                comp2.style.opacity = "1";
                icon2.classList.remove("fa-eye-slash");
                icon2.classList.add("fa-eye");
                icon2.style.color = ""; // reset warna icon mata menjadi hitam
            } else {
                var icon2 = document.getElementById("icon2");
                comp2.style.opacity = "0.5";
                icon2.classList.remove("fa-eye-slash");
                icon2.classList.remove("fa-eye");
                icon2.classList.add("fa-eye-slash");
                icon2.style.color = "#c80000"; // ubah warna icon mata menjadi merah
            }
        });

        btnSwitch3.addEventListener("click", function() {
            if (comp3.style.opacity === "0.5") {
                var icon3 = document.getElementById("icon3");
                comp3.style.opacity = "1";
                icon3.classList.remove("fa-eye-slash");
                icon3.classList.add("fa-eye");
                icon3.style.color = ""; // reset warna icon mata menjadi hitam
            } else {
                var icon3 = document.getElementById("icon3");
                comp3.style.opacity = "0.5";
                icon3.classList.remove("fa-eye-slash");
                icon3.classList.remove("fa-eye");
                icon3.classList.add("fa-eye-slash");
                icon3.style.color = "#c80000"; // ubah warna icon mata menjadi merah
            }
        });

        btnSwitch4.addEventListener("click", function() {
            if (comp4.style.opacity === "0.5") {
                var icon4 = document.getElementById("icon4");
                comp4.style.opacity = "1";
                icon4.classList.remove("fa-eye-slash");
                icon4.classList.add("fa-eye");
                icon4.style.color = ""; // reset warna icon mata menjadi hitam
            } else {
                var icon4 = document.getElementById("icon4");
                comp4.style.opacity = "0.5";
                icon4.classList.remove("fa-eye-slash");
                icon4.classList.remove("fa-eye");
                icon4.classList.add("fa-eye-slash");
                icon4.style.color = "#c80000"; // ubah warna icon mata menjadi merah
            }
        });

        btnSwitch5.addEventListener("click", function() {
            if (comp5.style.opacity === "0.5") {
                var icon5 = document.getElementById("icon5");
                comp5.style.opacity = "1";
                icon5.classList.remove("fa-eye-slash");
                icon5.classList.add("fa-eye");
                icon5.style.color = ""; // reset warna icon mata menjadi hitam
            } else {
                var icon5 = document.getElementById("icon5");
                comp5.style.opacity = "0.5";
                icon5.classList.remove("fa-eye-slash");
                icon5.classList.remove("fa-eye");
                icon5.classList.add("fa-eye-slash");
                icon5.style.color = "#c80000"; // ubah warna icon mata menjadi merah
            }
        });

        btnSwitch6.addEventListener("click", function() {
            if (comp6.style.opacity === "0.5") {
                var icon6 = document.getElementById("icon6");
                comp6.style.opacity = "1";
                icon6.classList.remove("fa-eye-slash");
                icon6.classList.add("fa-eye");
                icon6.style.color = ""; // reset warna icon mata menjadi hitam
            } else {
                var icon6 = document.getElementById("icon6");
                comp6.style.opacity = "0.5";
                icon6.classList.remove("fa-eye-slash");
                icon6.classList.remove("fa-eye");
                icon6.classList.add("fa-eye-slash");
                icon6.style.color = "#c80000"; // ubah warna icon mata menjadi merah
            }
        });

        btnSwitch7.addEventListener("click", function() {
            if (comp7.style.opacity === "0.5") {
                var icon7 = document.getElementById("icon7");
                comp7.style.opacity = "1";
                icon7.classList.remove("fa-eye-slash");
                icon7.classList.add("fa-eye");
                icon7.style.color = ""; // reset warna icon mata menjadi hitam
            } else {
                var icon7 = document.getElementById("icon7");
                comp7.style.opacity = "0.5";
                icon7.classList.remove("fa-eye-slash");
                icon7.classList.remove("fa-eye");
                icon7.classList.add("fa-eye-slash");
                icon7.style.color = "#c80000"; // ubah warna icon mata menjadi merah
            }
        });

        btnSwitch8.addEventListener("click", function() {
            if (comp8.style.opacity === "0.5") {
                var icon8 = document.getElementById("icon8");
                comp8.style.opacity = "1";
                icon8.classList.remove("fa-eye-slash");
                icon8.classList.add("fa-eye");
                icon8.style.color = ""; // reset warna icon mata menjadi hitam
            } else {
                var icon8 = document.getElementById("icon8");
                comp8.style.opacity = "0.5";
                icon8.classList.remove("fa-eye-slash");
                icon8.classList.remove("fa-eye");
                icon8.classList.add("fa-eye-slash");
                icon8.style.color = "#c80000"; // ubah warna icon mata menjadi merah
            }
        });
        btnSwitch9.addEventListener("click", function() {
            if (comp9.style.opacity === "0.5") {
                var icon9 = document.getElementById("icon9");
                comp9.style.opacity = "1";
                icon9.classList.remove("fa-eye-slash");
                icon9.classList.add("fa-eye");
                icon9.style.color = ""; // reset warna icon mata menjadi hitam
            } else {
                var icon9 = document.getElementById("icon9");
                comp9.style.opacity = "0.5";
                icon9.classList.remove("fa-eye-slash");
                icon9.classList.remove("fa-eye");
                icon9.classList.add("fa-eye-slash");
                icon9.style.color = "#c80000"; // ubah warna icon mata menjadi merah
            }
        });
        btnSwitch10.addEventListener("click", function() {
            if (comp10.style.opacity === "0.5") {
                var icon10 = document.getElementById("icon10");
                comp10.style.opacity = "1";
                icon10.classList.remove("fa-eye-slash");
                icon10.classList.add("fa-eye");
                icon10.style.color = ""; // reset warna icon mata menjadi hitam
            } else {
                var icon10 = document.getElementById("icon10");
                comp10.style.opacity = "0.5";
                icon10.classList.remove("fa-eye-slash");
                icon10.classList.remove("fa-eye");
                icon10.classList.add("fa-eye-slash");
                icon10.style.color = "#c80000"; // ubah warna icon mata menjadi merah
            }
        });
        btnSwitch11.addEventListener("click", function() {
            if (comp11.style.opacity === "0.5") {
                var icon11 = document.getElementById("icon11");
                comp11.style.opacity = "1";
                icon11.classList.remove("fa-eye-slash");
                icon11.classList.add("fa-eye");
                icon11.style.color = ""; // reset warna icon mata menjadi hitam
            } else {
                var icon11 = document.getElementById("icon11");
                comp11.style.opacity = "0.5";
                icon11.classList.remove("fa-eye-slash");
                icon11.classList.remove("fa-eye");
                icon11.classList.add("fa-eye-slash");
                icon11.style.color = "#c80000"; // ubah warna icon mata menjadi merah
            }
        });
        btnSwitch12.addEventListener("click", function() {
            if (comp12.style.opacity === "0.5") {
                comp12.style.opacity = "1";
            } else {
                var icon12 = document.getElementById("icon12");
                comp12.style.opacity = "0.5";
                icon12.classList.remove("fa-eye-slash");
                icon12.classList.remove("fa-eye");
                icon12.classList.add("fa-eye-slash");
                icon12.style.color = "#c80000"; // ubah warna icon mata menjadi merah
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
        const trash12 = document.getElementById("btnTrash12");

        trash1.addEventListener("click", function() {
            comp1.style.display = "none";
            delmodal.style.display = "none";

        });
        trash2.addEventListener("click", function() {
            comp2.style.display = "none";
        });
        trash3.addEventListener("click", function() {
            comp3.style.display = "none";
        });
        trash4.addEventListener("click", function() {
            comp4.style.display = "none";
        });
        trash5.addEventListener("click", function() {
            comp5.style.display = "none";
        });
        trash6.addEventListener("click", function() {
            comp6.style.display = "none";
        });
        trash7.addEventListener("click", function() {
            comp7.style.display = "none";
        });
        trash8.addEventListener("click", function() {
            comp8.style.display = "none";
        });
        trash9.addEventListener("click", function() {
            comp9.style.display = "none";
        });
        trash10.addEventListener("click", function() {
            comp10.style.display = "none";
        });
        trash11.addEventListener("click", function() {
            comp11.style.display = "none";
        });
        trash12.addEventListener("click", function() {
            comp12.style.display = "none";
        });

        // End trash

        // 3 Dot

        const divAc1 = document.getElementById("div3Dot1")
        const divAc2 = document.getElementById("div3Dot2")
        const divAc3 = document.getElementById("div3Dot3")
        const divAc4 = document.getElementById("div3Dot4")
        const divAc5 = document.getElementById("div3Dot5")
        const divAc6 = document.getElementById("div3Dot6")
        const divAc7 = document.getElementById("div3Dot7")
        const divAc8 = document.getElementById("div3Dot8")
        const divAc9 = document.getElementById("div3Dot9")
        const divAc10 = document.getElementById("div3Dot10")
        const divAc11 = document.getElementById("div3Dot11")
        const divAc12 = document.getElementById("div3Dot12")
        const acDiv1 = document.getElementById("btnDrop3Dot1")
        const acDiv2 = document.getElementById("btnDrop3Dot2")
        const acDiv3 = document.getElementById("btnDrop3Dot3")
        const acDiv4 = document.getElementById("btnDrop3Dot4")
        const acDiv5 = document.getElementById("btnDrop3Dot5")
        const acDiv6 = document.getElementById("btnDrop3Dot6")
        const acDiv7 = document.getElementById("btnDrop3Dot7")
        const acDiv8 = document.getElementById("btnDrop3Dot8")
        const acDiv9 = document.getElementById("btnDrop3Dot9")
        const acDiv10 = document.getElementById("btnDrop3Dot10")
        const acDiv11 = document.getElementById("btnDrop3Dot11")
        const acDiv12 = document.getElementById("btnDrop3Dot12")

        // const scpil = document.getElementsByClassName("div3Dot-isi")

        // scpil.addEventListener("click", function() {
        //     divAc1.classList.remove("div3Dotact")
        //     divAc2.classList.remove("div3Dotact")
        //     divAc3.classList.remove("div3Dotact")
        //     divAc4.classList.remove("div3Dotact")
        //     divAc5.classList.remove("div3Dotact")
        //     divAc6.classList.remove("div3Dotact")
        //     divAc7.classList.remove("div3Dotact")
        //     divAc8.classList.remove("div3Dotact")
        //     divAc9.classList.remove("div3Dotact")
        //     divAc10.classList.remove("div3Dotact")
        //     divAc11.classList.remove("div3Dotact")
        //     divAc12.classList.remove("div3Dotact")
        // })

        acDiv1.addEventListener("click", function() {
            divAc1.classList.toggle("div3Dotact")
        });
        acDiv2.addEventListener("click", function() {
            divAc2.classList.toggle("div3Dotact")
        });
        acDiv3.addEventListener("click", function() {
            divAc3.classList.toggle("div3Dotact")
        });
        acDiv4.addEventListener("click", function() {
            divAc4.classList.toggle("div3Dotact")
        });
        acDiv5.addEventListener("click", function() {
            divAc5.classList.toggle("div3Dotact")
        });
        acDiv6.addEventListener("click", function() {
            divAc6.classList.toggle("div3Dotact")
        });
        acDiv7.addEventListener("click", function() {
            divAc7.classList.toggle("div3Dotact")
        });
        acDiv8.addEventListener("click", function() {
            divAc8.classList.toggle("div3Dotact")
        });
        acDiv9.addEventListener("click", function() {
            divAc9.classList.toggle("div3Dotact")
        });
        acDiv10.addEventListener("click", function() {
            divAc10.classList.toggle("div3Dotact")
        });
        acDiv11.addEventListener("click", function() {
            divAc11.classList.toggle("div3Dotact")
        });
        acDiv12.addEventListener("click", function() {
            divAc12.classList.toggle("div3Dotact")
        });



        // End 3 Dot

        // Add Comp

        const addtau = document.getElementById("btnModaltau");
        const addtw = document.getElementById("btnModaltw");
        const addInst = document.getElementById("btnModalIns");
        const addyt = document.getElementById("btnModalyt");
        const addtt = document.getElementById("btnModaltt");
        const addfb = document.getElementById("btnModalfb");
        const addgmb = document.getElementById("btnModalgmb");
        const adddes = document.getElementById("btnModaldes");
        const addbg = document.getElementById("btnModalbg");

        addtau.addEventListener("click", function() {
            comp6.style.display = "block";
        });
        addtw.addEventListener("click", function() {
            comp7.style.display = "block";
        });
        addInst.addEventListener("click", function() {
            comp8.style.display = "block";
        });
        addyt.addEventListener("click", function() {
            comp9.style.display = "block";
        });
        addtt.addEventListener("click", function() {
            comp10.style.display = "block";
        });
        addfb.addEventListener("click", function() {
            comp11.style.display = "block";
        });
        addgmb.addEventListener("click", function() {
            comp12.style.display = "block";
        });
        adddes.addEventListener("click", function() {
            comp5.style.display = "block";
        });
        addbg.addEventListener("click", function() {
            comp4.style.display = "block";
        });

        // End add comp

        // const lastButtonClicked = sessionStorage.getItem("lastButtonClicked");
        // const dav = document.getElementById("div");

        // if (lastButtonClicked === "button1") {
        //     dav.style.display = "none";
        //     div1.style.display = "block";
        // } else if (lastButtonClicked === "button2") {
        //     dav.style.display = "none";
        //     div2.style.display = "block";
        // } else if (lastButtonClicked === "button3") {
        //     dav.style.display = "none";
        //     div3.style.display = "block";
        // } else if (lastButtonClicked === "button4") {
        //     dav.style.display = "none";
        //     div4.style.display = "block";
        // } else if (lastButtonClicked === "button5") {
        //     dav.style.display = "none";
        //     div5.style.display = "block";
        // }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.Dashboard_user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\galih agung raharjo\Documents\github\Getlink_New\resources\views/Dashboard_user/pages5.blade.php ENDPATH**/ ?>