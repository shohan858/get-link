<?php $__env->startSection('konten'); ?>
<main>
  <div class="content">
    <div class="lang-content hidden">
      <div class="langganan-teks">
        <p class="langganan-h1">BERLANGGANAN</p>
        <p class="langganan-p">
          Lorem ipsum is placeholder text commonly used in the graphic,<br />
          print, and publishing industries for previewing layouts and
          <br />
          visual mockups. br
        </p>
      </div>
      <div class="lalang">
        <div class="langganan-card">
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="langganan-p1">
            <div class="langganan-des">
              <p class="p1-h1"><?php echo e($item->name); ?></p>
              <p class="p1-r">Rp. <?php echo e($item->harga); ?></p>
              <p class="p1-des">
                Dalam <?php echo e($item->name); ?> anda akan mendapatkan jumlah slot <?php echo e($item->slot); ?> dengan harga terjangkau
              </p>
              <div class="langganan-bottom">
                <a href="tambah_slot_microsite/<?php echo e($item->id); ?>"><button class="p1-lang">Langganan Sekarang</button></a>
                <button class="p1-ker">
                  <svg
                    class="p1-keranjang"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.4587 8.37484V5.24984H7.33366V3.1665H10.4587V0.0415039H12.542V3.1665H15.667V5.24984H12.542V8.37484H10.4587ZM6.29199 21.9165C5.71908 21.9165 5.2288 21.7127 4.82116 21.305C4.41283 20.8967 4.20866 20.4061 4.20866 19.8332C4.20866 19.2603 4.41283 18.7696 4.82116 18.3613C5.2288 17.9537 5.71908 17.7498 6.29199 17.7498C6.86491 17.7498 7.35519 17.9537 7.76283 18.3613C8.17116 18.7696 8.37533 19.2603 8.37533 19.8332C8.37533 20.4061 8.17116 20.8967 7.76283 21.305C7.35519 21.7127 6.86491 21.9165 6.29199 21.9165ZM16.7087 21.9165C16.1357 21.9165 15.6455 21.7127 15.2378 21.305C14.8295 20.8967 14.6253 20.4061 14.6253 19.8332C14.6253 19.2603 14.8295 18.7696 15.2378 18.3613C15.6455 17.9537 16.1357 17.7498 16.7087 17.7498C17.2816 17.7498 17.7722 17.9537 18.1805 18.3613C18.5882 18.7696 18.792 19.2603 18.792 19.8332C18.792 20.4061 18.5882 20.8967 18.1805 21.305C17.7722 21.7127 17.2816 21.9165 16.7087 21.9165ZM6.29199 16.7082C5.51074 16.7082 4.91178 16.3651 4.49512 15.679C4.07845 14.9936 4.06977 14.3123 4.46908 13.6353L5.87533 11.0832L2.12533 3.1665H0.0419922V1.08317H3.45345L7.88053 10.4582H15.1982L19.2347 3.1665L21.0576 4.15609L17.0212 11.4478C16.8302 11.795 16.5785 12.0641 16.266 12.255C15.9535 12.446 15.5975 12.5415 15.1982 12.5415H7.43783L6.29199 14.6248H18.792V16.7082H6.29199Z"
                      fill="#6B75E6"
                    />
                  </svg>
                </button>
              </div>
              <div id="paket-container"></div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.Dashboard_User.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\galih agung raharjo\Documents\github\get-link\backend(galih jefry)\Getlink_New\resources\views/Dashboard_User/langganan.blade.php ENDPATH**/ ?>