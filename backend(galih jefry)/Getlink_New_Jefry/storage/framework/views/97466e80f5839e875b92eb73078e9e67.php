
<?php $__env->startSection('konten'); ?>
    <h1>Edit Template <?php echo e($template->title); ?></h1>
    <form method="POST" action="/update_template/<?php echo e($template->id); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="namaKategori">Title</label>
            <input type="text" class="form-control" value="<?php echo e($template->title); ?>" id="namaKategori" name="title" required>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="warnaKategori">Kategori</label>
                <select class="form-control" id="warnaKategori" name="id_kategori" required>
                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategoris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($kategoris->id); ?>"
                            <?php echo e(old('kategori', $data_kategori->id) == $kategoris->id ? 'selected' : null); ?>>
                            <?php echo e($kategoris->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="Komponen">Komponen</label>
            <?php $__currentLoopData = $komponen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $komponens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-check">
                    <input class="form-check-input" name="id_komponen[]" type="checkbox" value="<?php echo e($komponens->id); ?>"
                        <?php echo e(old('komponen', $template->id_komponen) == $komponens->id ? 'checked' : null); ?>

                        id="option<?php echo e($komponens->id); ?>">
                    <label class="form-check-label"
                        <?php echo e(old('komponen', $template->id) == $komponens->id ? 'checked' : null); ?>

                        for="option<?php echo e($komponens->id); ?>">
                        <?php echo e($komponens->name); ?>

                    </label>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="form-group">
            <label for="namaKategori">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="<?php echo e(url('gambar/' . $template->image)); ?>" width="100px" alt="">
        </div>
        <div class="form-group">
            <label for="type">Type Background</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type_background" id="exampleRadios1" value="color"
                    <?php echo e($template->type_background == 'color' ? 'checked' : ''); ?> onclick="showColorInput()">
                <label class="form-check-label" for="exampleRadios1">
                    Color
                </label>
                <div id="colorInput" style="display:none;">
                    <label for="color">Background Color</label>
                    <input type="color" value="<?php echo e($template->background); ?>" name="background" id="color"
                        class="form-control">
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type_background" id="exampleRadios2" value="image"
                    <?php echo e($template->type_background == 'image' ? 'checked' : ''); ?> onclick="showImageInput()">
                <label class="form-check-label" for="exampleRadios2">
                    Image
                </label>
                <div id="imageInput" style="display:none;">
                    <label for="image">Background Image</label>
                    <input type="file" class="form-control" name="background" id="image">
                    <img src="<?php echo e(url('gambar/' . $template->background)); ?>" width="100px" alt="">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <script>
        function showColorInput() {
            document.getElementById("colorInput").style.display = "block";
            document.getElementById("imageInput").style.display = "none";
        }

        function showImageInput() {
            document.getElementById("colorInput").style.display = "none";
            document.getElementById("imageInput").style.display = "block";
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH\resources\views/admin/template/edit.blade.php ENDPATH**/ ?>