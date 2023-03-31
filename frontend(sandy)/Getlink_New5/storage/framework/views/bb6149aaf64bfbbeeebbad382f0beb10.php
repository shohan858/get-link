
<?php $__env->startSection('konten'); ?>

<style type="text/css">
    table.dataTable th {
   font-weight: bold;
   background-color: rgb(102, 102, 237);
   color: aliceblue
}
table.dataTable tbody tr:nth-child(even) {
   background-color: #f2f2f2;
}
table.dataTable {
   border-collapse: collapse;
   border-spacing: 0;
   border: 1px solid #ddd;
}
</style>
 
<h1 class="mb-5">Daftar Akun User</h1>

<div class="">
    <table id="getdata">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#getdata').DataTable({
            ajax:"<?php echo e(route('getdata_akun')); ?>",
            columns: [
                {data:'id'},
                {data:'name'},
                {data:'email'},
                {data:'role'},
            ]
        })
    })

    // // function callApi(){
    // //     $.ajax({
    // //         url:"<?php echo e(url('api/coba')); ?>",
    // //         method:'GET',
    // //         success: function(data){
    // //             $('table tbody').html('')
    // //             data.forEach(function(item, $microsite){
    // //                 $("table tbody").append(`
    // //                     <tr>
    // //                         <td>${index+1}</td>
    // //                         <td>${item.title}</td>
    // //                     </tr>    
    // //                 `)
    // //             })
    // //         },
    // //         error:function(err){
    // //             alert(err)
    // //         }
    // //     })
    // }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New\resources\views/admin/akun/index.blade.php ENDPATH**/ ?>