<?php $__env->startSection('konten'); ?>
    <main>
        <div class="content">
            <div class="lang-content hidden">
                <div class="page2-btnprev">
                    <button class="pages5-tambah-prew">
                        preview     ...
                        
                        <i class="fa-solid fa-mobile-screen"></i>
                    </button>
                </div>
                <div class="pages3-bagi">
                    <div id="prew1" class="pages3-kiri anim hidden">
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
                                
                                
                                <?php $__currentLoopData = $template; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <button id="btn-<?php echo e($item->id); ?>" data-id="<?php echo e($item->id); ?>" value="1"
                                        class="pages3-card1 btn-template">
                                        <img class="card-img" src="<?php echo e(asset('gambar/' . $item->image)); ?>"
                                            alt="gambar <?php echo e($item->name); ?>" />
                                        <div class="pages3-container">
                                            <h4 class="pages3-tulis"><?php echo e($item->nama); ?></h4>
                                        </div>
                                    </button>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <input type="hidden" id="input-hidden">

                                <!-- Tambah card -->

                                <!--
                                            - img
                                            - teks
                                           -->

                                

                                <!-- End tambah -->
                            </div>
                        </div>
                        <div class="pages3-bungkusjajan">
                            <h4 class="pages3-namo">3. Pilih Nama Microsite</h4>
                            <div class="pages3-lamnjut">
                                <a href="/page2" class="pages3-lanjutkan">Kembali</a>
                                
                                <button id="lanjut" class="pages3-lanjutkan submit-button"
                                    style="height:40px">Selesai</button>
                            </div>
                        </div>
                    </div>
                    <div id="prew2" class="pages3-kanan anim hidden">
                        <div class="kanan-bungkus">
                                <center>
                                    <div id="div" class="template0">
                                        <div class="pages2-gambar2">
                                            <img src="<?php echo e(asset('assets/img/webdesin.png')); ?>" alt="" width="100%" />
                                            <h2 class="pages2-preview">Preview Template</h2>
                                        </div>
                                    </div>
                                    <div id="div1" class="template1" style="display: none;margin-top:100px">
                                        <img src="<?php echo e(asset('assets/preview-template/img/rai.png')); ?>" alt=""
                                            class="gambar1" />
                                        <h4 class="tulisan1">Quli Khutsi Azzumi</h4>
                                        <div class="bungkusbunderan">
                                            <div class="elipsetemplate1">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/ig.png')); ?>" alt=""
                                                    class="ikon" />
                                            </div>
                                            <div class="elipsetemplate1">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/twit.png')); ?>"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate1">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/fb.png')); ?>" alt=""
                                                    class="ikon" />
                                            </div>
                                            <div class="elipsetemplate1">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/yt.png')); ?>" alt=""
                                                    class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate1">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/tiktod.png')); ?>"
                                                    alt="" class="ikon" />
                                            </div>
                                        </div>
                                        <div class="template1-kolom">
                                            <img src="<?php echo e(asset('assets/preview-template/img/ytred.png')); ?>" alt=""
                                                style="margin-top: 18%" />
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
                                        <img src="<?php echo e(asset('assets/preview-template/img/rai.png')); ?>" alt=""
                                            class="gambar1" />
                                        <h4 class="tulisan1">PDI PERJUANGAN</h4>
                                        <div class="bungkusbunderan">
                                            <div class="elipsetemplate2">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/ig.png')); ?>" alt=""
                                                    class="ikon" />
                                            </div>
                                            <div class="elipsetemplate2">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/twit.png')); ?>"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate2">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/fb.png')); ?>"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate2">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/yt.png')); ?>"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate2">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/tiktod.png')); ?>"
                                                    alt="" class="ikon" />
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
                                            <img src="<?php echo e(asset('assets/preview-template/img/ytred.png')); ?>"
                                                alt="" style="margin-top: 18%" />
                                        </div>
                                    </div>
                                    <div id="div3" class="template3" style="display: none">
                                        <img src="<?php echo e(asset('assets/preview-template/img/rai.png')); ?>" alt=""
                                            class="gambar1" />
                                        <h4 class="tulisan1">Quli Khutsi Azzumi</h4>
                                        <div class="tulisan3">
                                            <p>
                                                Lorem ipsum is placeholder text commonly used in the
                                                graphic, print, and publishing industries for
                                                previewing layouts and visual mockups.
                                            </p>
                                        </div>
                                        <div class="template1-kolom">
                                            <img src="<?php echo e(asset('assets/preview-template/img/ytred.png')); ?>"
                                                alt="" style="margin-top: 18%" />
                                        </div>
                                        <div class="bungkusbunderan2">
                                            <div class="elipsetemplate3">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/ig.png')); ?>"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate3">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/twit.png')); ?>"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate3">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/fb.png')); ?>"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate3">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/yt.png')); ?>"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate3">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/tiktod.png')); ?>"
                                                    alt="" class="ikon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div id="div4" class="template4" style="display: none">
                                        <img src="<?php echo e(asset('assets/preview-template/img/rai.png')); ?>" alt=""
                                            class="gambar1" />
                                        <h4 class="template4-tulisan1">Quli Khutsi Azzumi</h4>
                                        <p class="template4-tulisan2">CEO</p>
                                        <div class="bungkusbunderan">
                                            <div class="elipsetemplate4">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/ig.png')); ?>"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate4">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/twit.png')); ?>"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate4">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/fb.png')); ?>"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate4">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/yt.png')); ?>"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate4">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/tiktod.png')); ?>"
                                                    alt="" class="ikon" />
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
                                        <img src="<?php echo e(asset('assets/preview-template/img/rai.png')); ?>" alt=""
                                            class="gambar1" />
                                        <h4 class="template5-tulisan1">Quli Khutsi Azzumi</h4>
                                        <div class="bungkusbunderan5">
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/ig.png')); ?>"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/twit.png')); ?>"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/fb.png')); ?>"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/yt.png')); ?>"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/tiktod.png')); ?>"
                                                    alt="" class="ikon" />
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

                                    <!-- Tambah template -->

                                    <!--
                                              - img
                                              - teks
                                              - img/icon?
                                              - deskripsi?
                                              - bio?
                                              - link?
                                             -->

                                    <div id="div5" class="template5" style="display: none">
                                        <img src="<?php echo e(asset('assets/preview-template/img/rai.png')); ?>" alt=""
                                            class="gambar1" />
                                        <h4 class="template5-tulisan1">Quli Khutsi Azzumi</h4>
                                        <div class="bungkusbunderan5">
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/ig.png')); ?>"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/twit.png')); ?>"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/fb.png')); ?>"
                                                    alt="" class="ikon" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/yt.png')); ?>"
                                                    alt="" class="ikon1" />
                                            </div>
                                            <div class="elipsetemplate5">
                                                <p class="sembarang">p</p>
                                                <img src="<?php echo e(asset('assets/preview-template/img/tiktod.png')); ?>"
                                                    alt="" class="ikon" />
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

                                    <!-- End tambah template -->
                                </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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

        const buttons = document.querySelectorAll(
            ".pages3-card1, .pages3-card2, .pages3-card3, .pages3-card4, .pages3-card5"
        );

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

        // const buttonSide = document.querySelector(".pages5-buttonside");
        // const aside = document.querySelector(".pages3-aside");

        // buttonSide.addEventListener("click", function() {
        //     aside.classList.toggle("pages5-tampil");
        // });

        // var Commodal = document.getElementById("CompoModal");

        // // Get the button that opens the modal
        // var Combtn = document.getElementById("CCOpmBtn");

        // // Get the <span> element that closes the modal
        // var span = document.getElementsByClassName("compo-close")[0];

        // // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        //     if (event.target == Commodal) {
        //         Commodal.style.display = "none";
        //     }
        // };


    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
         $('.btn-template').click(function() {
            var id = $(this).data('id');
            $('#input-hidden').val(id); // mengambil nilai data-id dari button
            console.log(id); // menampilkan nilai data-id di console
            // kemudian Anda bisa melakukan pengiriman data melalui AJAX request menggunakan nilai id ini
        });

        $(".submit-button").on("click", function() {
            // Ambil nilai dari atribut "data-id" pada button yang diklik
            // var id = $(this).data("id");
            var urlParams = window.location.pathname.split('/');
            var lastParam = urlParams[urlParams.length - 1];
            var id = $('#input-hidden').val();


            var url = "<?php echo e(url('buat_microsite/:id_kategori/:id_template')); ?>";
            url = url.replace(':id_template', id);
            url = url.replace(':id_kategori', lastParam);
            window.location.href = url;
            // $.ajax({
            //   type: 'POST',
            //   url: url,
            //   data: {
            //     _token: "<?php echo e(csrf_token()); ?>"
            //   },
            //   success: function(response) {
            //     // console.log(response);
            //     //
            //   }
            // });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.Dashboard_user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New\resources\views/Dashboard_User/pages3.blade.php ENDPATH**/ ?>