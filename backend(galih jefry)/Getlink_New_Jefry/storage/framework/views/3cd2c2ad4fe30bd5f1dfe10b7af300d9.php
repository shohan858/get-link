<?php $__env->startSection('admin_konten'); ?>
    

    <div class="adMicro">
        <table id="users-table" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th style="border-radius: 10px 0 0 0">Id</th>
                    <th>Id User</th>
                    <th>Title</th>
                    <th>Id Template</th>
                    <th style="border-radius: 0 10px 0 0 ">Id Category</th>
                </tr>
            </thead>
        </table>
    </div>

    
    
    <script src="<?php echo e(asset('DataTables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('DataTables/datatables.js')); ?>"></script>
    <script>
        $(function() {
            $('#users-table').DataTable({
               
                // table
                // .search(inputValue)
                // .draw();

                // $('#myTable_filter input[type="search"]').addClass('my-custom-search-class');

                // processing: true,
                // serverSide: true,
                ajax: "<?php echo e(route('getdatamicrosite')); ?>",
                columns: [{
                        data: 'id',
                    },
                    {
                        data: 'id_user',
                    },
                    {
                        data: 'name',
                    },
                    {
                        data: 'id_template',
                    },
                    {
                        data: 'id_kategori',
                    },

                ]
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH\resources\views/admin/admin_pages/microsite.blade.php ENDPATH**/ ?>