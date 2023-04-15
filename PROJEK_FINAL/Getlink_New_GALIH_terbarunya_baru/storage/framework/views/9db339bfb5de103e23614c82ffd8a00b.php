<nav class="adNav">
    <div class="adKinav">
        <h1 class="navH1">Dashboard</h1>
        <p class="navP">
            <?php if(request()->is('admin_get')): ?>
                Admin / <b>dashboard</b>
            <?php elseif(request()->is('halaman_utama')): ?>
                Admin / <b> Halaman utama</b>
            <?php elseif(request()->is('microsite')): ?>
                Admin / <b> Microsite</b>
            <?php elseif(request()->is('kategori')): ?>
                Admin / <b> Kategori</b>
            <?php elseif(request()->is('template')): ?>
                Admin / <b> Template</b>
            <?php elseif(request()->is('paket')): ?>
                Admin / <b> Paket</b>
            <?php elseif(request()->is('get_link')): ?>
                Admin /Edit landing page / <b>Get Link</b>
            <?php elseif(request()->is('sponsor')): ?>
                Admin / Edit landing page / <b>Sponsor</b>
            <?php elseif(request()->is('short_link')): ?>
                Admin / Edit landing page / <b>Short Link</b>
            <?php elseif(request()->is('microsite1')): ?>
                Admin / Edit landing page / <b>Microsite 1</b>
            <?php elseif(request()->is('microsite2')): ?>
                Admin / Edit landing page / <b>Microsite 2</b>
            <?php elseif(request()->is('cms')): ?>
                Admin / Edit landing page / <b>CMS</b>
            <?php elseif(request()->is('keunggulan')): ?>
                Admin / Edit landing page / <b>Keunggulan Website</b>
            <?php elseif(request()->is('account')): ?>
                Admin / Account / <b>Account</b>
            <?php elseif(request()->is('comment')): ?>
                Admin / Account / <b>Comment</b>
            <?php endif; ?>
        </p>
    </div>
    <div class="adKanav">
        <p class="navName">Admin</p>
        <img class="adnavimg" src="<?php echo e(asset('assets/img/Ellipse 2.png')); ?>" alt="">
    </div>
</nav>
<?php /**PATH D:\get_new_2\Getlink_New_GALIH_terbarunya_baru\resources\views/admin/layout/navbar.blade.php ENDPATH**/ ?>