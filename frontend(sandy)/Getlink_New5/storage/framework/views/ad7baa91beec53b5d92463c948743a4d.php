<?php $__env->startSection('konten'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-1">
    <h1 class="h3 mb-0 text-gray-800">Edit Sponsor</h1>
</div>
<form  action="<?php echo e('/collab/'.$data->id); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field("PUT"); ?>
    <?php echo csrf_field(); ?>
    <label for="formFile" class="form-label">Masukkan Gambar Baru</label>
    <input class="form-control" name="foto" type="file" id="formFile">
    <img src="<?php echo e(url('uploads').'/'.$data->image); ?>" width="200px" alt="">
    <button class="w-100 btn btn-primary mt-1 mb-2">Update</button>
</form> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New\resources\views/admin/landing_page/edit_sponsor.blade.php ENDPATH**/ ?>