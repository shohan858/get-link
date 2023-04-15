<?php $__env->startSection('admin_konten'); ?>
    <div class="adMicro">
        <table id="users-table" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th style="border-radius: 10px 0 0 0">Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th style="border-radius: 0 10px 0 0 ">Role</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="<?php echo e(asset('DataTables/datatables.min.js')); ?>"></script> 
    <script src="<?php echo e(asset('DataTables/datatables.js')); ?>"></script>
    <script>
        $(function() {
    $('#users-table').DataTable({
        ajax: {
            url: "<?php echo e(route('getdata_akun')); ?>",
        },
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'role',
                name: 'role'
            },
        ]
    });
});

    </script>


    <div class="adMicro">
        <table id="users-table-user" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th style="border-radius: 10px 0 0 0">Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th style="border-radius: 0 10px 0 0 ">Role</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="<?php echo e(asset('DataTables/datatables.min.js')); ?>"></script> 
    <script src="<?php echo e(asset('DataTables/datatables.js')); ?>"></script>
    <script>
        $(function() {
    $('#users-table-user').DataTable({
        ajax: {
            url: "<?php echo e(route('getdata_akun_user')); ?>",
        },
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'role',
                name: 'role'
            },
        ]
    });
});

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH_terbarunya_baru\resources\views/admin/admin_pages/account/acc.blade.php ENDPATH**/ ?>