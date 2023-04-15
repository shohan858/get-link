<!DOCTYPE html>
<html lang="en">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <?php echo $__env->make('layout.Dashboard_user._nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <body>
   <?php echo $__env->make('layout.Dashboard_User._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('konten'); ?>

    <?php echo $__env->make('layout.Dashboard_User._aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!-- <?php echo $__env->make('layout.Dashboard_user.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

  </body>
</html>
<?php /**PATH D:\get_new_2\Getlink_New_GALIH_terbarunya_baru\resources\views/layout/Dashboard_User/base.blade.php ENDPATH**/ ?>