<?php $__env->startSection('admin_konten'); ?>
    <div class="iframDiv">
        <div class="framTop">
            <p class="fram_p">Preview landing page</p>
        </div>
        <div class="framBot">
            <iframe class="framPrew" src="<?php echo e(url('/')); ?>" frameborder="0" width="100%" height="100%"></iframe>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH\resources\views/admin/admin_pages/halaman_utama.blade.php ENDPATH**/ ?>