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

    <h1 class="mb-5">Daftar Template Microsite</h1>

    <div class="">
        <table id="getdata">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Id kategori</th>
                    <th>Id Komponen</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Background</th>
                    <th>type Background</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#getdata').DataTable({
                ajax: "<?php echo e(route('getdata_template')); ?>",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'id_kategori'
                    },
                    {
                        data: 'id_komponen'
                    },
                    {
                        data: 'image',
                        render: function(data, type, full, meta) {
                            return '<img src="/gambar/' + data + '" width="100" height="100">';
                        }
                    },
                    {
                        data: 'title'
                    },
                    {
                        data: 'background'
                    },
                    {
                        data: 'type_background'
                    },
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

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\galih agung raharjo\Documents\github\get-link\backend(galih jefry)\Getlink_New\resources\views/admin/template/index.blade.php ENDPATH**/ ?>