<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make("admin.layout.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<body>
    <div class="adContent">

        <?php echo $__env->make("admin.layout.aside", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="adIs">

            <?php echo $__env->make("admin.layout.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('admin_konten'); ?>
        </div>
    </div>

    <?php echo $__env->make("admin.layout.script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH D:\get_new_2\Getlink_New_GALIH_terbarunya_baru\resources\views/admin/layout/base.blade.php ENDPATH**/ ?>