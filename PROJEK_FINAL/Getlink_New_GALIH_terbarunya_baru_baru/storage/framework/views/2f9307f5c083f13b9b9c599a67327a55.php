<?php $__env->startSection('konten'); ?>
<main>
    <div class="content">
        <div class="lang-content hidden">
            <div class="page2-btnprev">
                <button class="pages5-tambah-prew">
                    preview ...
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
                            <button id="btn-<?php echo e($item->id); ?>" data-id="<?php echo e($item->id); ?>" value="1" class="pages3-card1 btn-template">
                                <img class="card-img" src="<?php echo e(asset('microsite/template_image/' . $item->image)); ?>" alt="gambar <?php echo e($item->title); ?>" />
                                <div class="pages3-container">
                                    <h4 class="pages3-tulis"><?php echo e($item->title); ?></h4>
                                </div>
                            </button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <input type="hidden" id="input-hidden">
                            <!-- End tambah -->
                        </div>
                    </div>
                    <div class="pages3-bungkusjajan">
                        <h4 class="pages3-namo">3. Pilih Nama Microsite</h4>
                        <div class="pages3-lamnjut">
                            <a href="/page2" class="pages3-lanjutkan">Kembali</a>
                            <button id="lanjut" class="pages3-lanjutkan submit-button" style="height:40px">Selesai</button>
                        </div>
                    </div>
                </div>
                <div id="prew2" class="pages3-kanan anim hidden">
                    <div class="kanan-bungkus" id="kanan-bungkus">

                    </div>
                </div>
            </div>
</main>
<script>
    function buatHTML(data, background) {
        var html = '';
        if (background.type_background === 'color') {
            html += '<div class="bungkus" style="background: ' + background.background + ';">';
        } else {
            html += '<div class="bungkus" style="background-image: url(\'http://localhost:8000/microsite/background/' + background.background + '\');">';
        }
        var non_bungkus = '';
        var kolom2 = '';
        data.forEach(function(i) {
            var code = i.code;
            var html_code = code.replace(/src="microsite\/medsos/g, 'src="http://localhost:8000/microsite/medsos/');
            html_code = html_code.replace(/src="microsite\/konten/g, 'src="http://localhost:8000/microsite/konten');
            if (i.id === 9) {
                kolom2 += html_code;
            } else {
                non_bungkus += html_code;
            }
        });
        if (kolom2 !== '') {
            non_bungkus += '<div class="bungkus-anak" id="bungkus-template-konten">' + kolom2 + '</div>';
        }
        html += non_bungkus + '</div>';
        return html;
    }
</script>
<script>
    $(document).ready(function() {
        $('.btn-template').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: "<?php echo e(route('preview_template')); ?>",
                type: 'POST',
                data: {
                    id: id,
                    _token: "<?php echo e(csrf_token()); ?>",
                },
                success: function(response) {
                    $('#kanan-bungkus').empty()
                    var html = buatHTML(response.data, response.background);
                    $('#kanan-bungkus').append(html);
                },
                error: function() {
                    console.log(error);
                }
            });
        });
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

    $('.btn-template').click(function() {
        var id = $(this).data('id');
        $('#input-hidden').val(id);
        console.log(id);
    });

    $(".submit-button").on("click", function() {
        var urlParams = window.location.pathname.split('/');
        var lastParam = urlParams[urlParams.length - 1];
        var id = $('#input-hidden').val();


        var url = "<?php echo e(url('buat_microsite/:id_kategori/:id_template')); ?>";
        url = url.replace(':id_template', id);
        url = url.replace(':id_kategori', lastParam);
        window.location.href = url;
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.Dashboard_user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH_terbarunya_baru\resources\views/Dashboard_User/pages3.blade.php ENDPATH**/ ?>