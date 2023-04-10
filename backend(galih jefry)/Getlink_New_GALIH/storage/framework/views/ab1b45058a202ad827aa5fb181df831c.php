<!DOCTYPE html>
<html lang="en">
  <?php echo $__env->make('layout.Dashboard_user._nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <body>
   <?php echo $__env->make('layout.Dashboard_User._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('konten'); ?>

    <?php echo $__env->make('layout.Dashboard_User._aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layout.Dashboard_user.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\galih agung raharjo\Documents\github\Getlink_New_GALIH\resources\views/layout/Dashboard_user/base.blade.php ENDPATH**/ ?>