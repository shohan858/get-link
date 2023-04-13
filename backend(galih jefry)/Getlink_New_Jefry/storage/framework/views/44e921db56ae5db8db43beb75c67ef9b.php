
<?php $__env->startSection('konten'); ?>
<h1>Edit Paket</h1>
<form method="POST" action="/update_paket/<?php echo e($paket->id); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="namaKategori">Nama Paket</label>
        <input type="text" class="form-control" value="<?php echo e($paket->name); ?>" id="namaKategori" name="name" required>
    </div>
    <div class="form-group">
        <label for="namaKategori">Tipe Paket</label>
        <input type="text" class="form-control" value="<?php echo e($paket->type); ?>" id="namaKategori" name="type" required>
    </div>
    <div class="form-group">
        <label for="namaKategori">Harga Paket</label>
        <input type="number" class="form-control" value="<?php echo e($paket->harga); ?>" id="namaKategori" name="harga" required>
    </div>
    <div class="form-group">
        <label for="namaKategori">Slott</label>
        <input type="number" class="form-control" value="<?php echo e($paket->slot); ?>" id="namaKategori" name="slot" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH\resources\views/admin/transaksi/edit.blade.php ENDPATH**/ ?>