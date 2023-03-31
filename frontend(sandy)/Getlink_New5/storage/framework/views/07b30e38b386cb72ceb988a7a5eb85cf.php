<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('admin._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php echo $__env->make('admin._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <?php echo $__env->make('admin._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="content">
    
                <!-- Begin Page Content -->
                <div class="container-fluid">
            
            <!-- Main Content -->
            <?php echo $__env->yieldContent('konten'); ?>
            <!-- End of Main Content -->
                </div>
            </div>
            <!-- Footer -->
            <?php echo $__env->make('admin._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

     <!-- Bootstrap core JavaScript-->
     <script src="<?php echo e(asset('admin/vendor/jquery/jquery.min.js')); ?>"></script>
     <script src="<?php echo e(asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
 
     <!-- Core plugin JavaScript-->
     <script src="<?php echo e(asset('admin/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
 
     <!-- Custom scripts for all pages-->
     <script src="<?php echo e(asset('admin/js/sb-admin-2.min.js')); ?>"></script>
 
     <!-- Page level plugins -->
     <script src="<?php echo e(asset('admin/vendor/chart.js/Chart.min.js')); ?>"></script>
 
     <!-- Page level custom scripts -->
     <script src="<?php echo e(asset('admin/js/demo/chart-area-demo.js')); ?>"></script>
     <script src="<?php echo e(asset('admin/js/demo/chart-pie-demo.js')); ?>"></script>
 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

</body>

</html>






<?php /**PATH D:\get_new_2\Getlink_New\resources\views/admin/base.blade.php ENDPATH**/ ?>