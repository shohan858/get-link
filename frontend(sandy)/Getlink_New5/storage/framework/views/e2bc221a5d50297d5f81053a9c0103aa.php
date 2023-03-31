
<?php $__env->startSection('konten'); ?>
<main>
  <div class="content">
    <div class="pages1-content hidden">
      <div class="anim regu-content-top">
        <a class="content-tambah" href="/page2"> tambah microsite </a>
        <input
          type="text"
          name="cari"
          id="cari"
          class="content-cari"
          placeholder="Cari microsite"
        />
      </div>
      <div class="tenggah">
        <p class="st">1/3</p>
      </div>
      <div class="anim content-isi-regu">
        <div class="content-kiri-regu">
          <div class="content-box"></div>
          <div class="box-text">
            <p class="nama-microsite">Nama Microsite</p>
            <a class="link-microsite">getlink/tautanmicrosite</a>
            <p class="pb-microsite">Personal Branding</p>
          </div>
        </div>
        <div class="content-kanan">
          <button class="content-crud">
            <img src="<?php echo e(asset('assets/img/Vector (3).svg')); ?>" alt="" />
            Bagikan
          </button>
          <a href="pages5.html" class="content-crud">
            <img src="<?php echo e(asset('assets/img/🦆 icon _edit_.png')); ?>" alt="" />
            Edit
          </a>
          <button class="content-crud">
            <img src="<?php echo e(asset('assets/img/Vector (2).svg')); ?>" alt="" />
            Hapus
          </button>
        </div>
      </div>

      <!-- Perulangan foreach -->

      <div class="anim content-isi-regu">
        <div class="content-kiri-regu">
          <div class="content-box"></div>
          <div class="box-text">
            <p class="nama-microsite"></p>
            <a class="link-microsite"></a>
            <p class="pb-microsite"></p>
          </div>
        </div>
        <div class="content-kanan">
          <button class="content-crud">
            <img src="<?php echo e(asset('assets/img/Vector (3).svg')); ?>" alt="" />
            Bagikan
          </button>
          <a href="pages5.html" class="content-crud">
            <img src="<?php echo e(asset('assets/img/🦆 icon _edit_.png')); ?>" alt="" />
            Edit
          </a>
          <button class="content-crud">
            <img src="<?php echo e(asset('assets/img/Vector (2).svg')); ?>" alt="" />
            Hapus
          </button>
        </div>
      </div>

      <!-- End Perulangan -->
      
    </div>
  </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.Dashboard_user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Getlink_New\resources\views/Dashboard_User/regular.blade.php ENDPATH**/ ?>