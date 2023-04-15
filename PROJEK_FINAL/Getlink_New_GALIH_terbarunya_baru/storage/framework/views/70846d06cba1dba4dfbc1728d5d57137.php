<?php $__env->startSection('konten'); ?>
    <main>
        <div class="content">
            <div class="ddaa-content hidden">
                <div class="anim dashboard-content-isi">
                    <div class="content-atas">
                        <div class="dashboard-teks">
                            <p class="dashboard-h1">SELAMAT DATANG,</p>
                            <p class="dashboard-nama">
                                <?php echo e(Auth::user()->name); ?>

                                
                                
                            </p>
                            <p class="dashboard-p">
                                Lorem ipsum is placeholder text commonly used in the graphic,
                                print, and publishing industries for previewing layouts and
                                visual mockups.
                            </p>
                            <a href="<?php echo e(route('langganan')); ?>">
                                <button class="dashboard-berlanggangan">
                                    <svg class="tp-top" width="15" height="14" viewBox="0 0 15 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.375 6.25C14.375 5.91848 14.2433 5.60054 14.0089 5.36612C13.7745 5.1317 13.4565 5 13.125 5H9.175L9.775 2.14375C9.7875 2.08125 9.79375 2.0125 9.79375 1.94375C9.79375 1.6875 9.6875 1.45 9.51875 1.28125L8.85625 0.625L4.74375 4.7375C4.5125 4.96875 4.375 5.28125 4.375 5.625V11.875C4.375 12.2065 4.5067 12.5245 4.74112 12.7589C4.97554 12.9933 5.29348 13.125 5.625 13.125H11.25C11.7688 13.125 12.2125 12.8125 12.4 12.3625L14.2875 7.95625C14.3438 7.8125 14.375 7.6625 14.375 7.5V6.25ZM0.625 13.125H3.125V5.625H0.625V13.125Z"
                                            fill="white" />
                                    </svg>
                                    Berlangganan
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="dashboard-bawah">
                        <div class="dashboard-card">
                            <div class="dashboard-pengunjung">
                                <img src="assets/img/Vector (13).png" alt=""  class="img_dc"/>
                                <p class="pengunjung-1">Pengunjung</p>
                                <p class="pengunjung-p">0 Pengunjung</p>
                            </div>
                            <div class="dashboard-micro">
                                <img src="assets/img/Vector (15).png" alt=""  class="img_dc"/>
                                <p class="pengunjung-1">Microsite dibuat</p>
                                <p class="pengunjung-p">
                                    <?php echo e(Auth::user()->jumlah_microsite); ?>/<?php echo e(Auth::user()->batas_microsite); ?> Microsite</p>
                            </div>
                            <div class="dashboard-sl">
                                <img src="assets/img/Vector.png" alt="" class="img_dc">
                                <p class="pengunjung-1">Short Link</p>
                                <p class="pengunjung-p">0 shortLink</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <div id="sudah" class="selesai" style="display: none;">
        <!-- Modal content -->
        <div class="selesai-jadi">
            <span class="selesai-close">&times;</span>
            <img src="img/pinkphone.png" alt="" class="hppink" />
            <p class="selesai-tulisan2">Selamat!! Microsite anda sudah jadi</p>
            <button class="selesai-button">Oke</button>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.Dashboard_user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Getlink_New_GALIH_terbarunya_baru\resources\views/Dashboard_User/dashboard.blade.php ENDPATH**/ ?>