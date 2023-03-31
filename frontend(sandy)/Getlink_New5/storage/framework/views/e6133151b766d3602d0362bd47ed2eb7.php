
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

    <h1 class="mb-5">Daftar Kategori</h1>

    <div class="">
        <a href="" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#modalTambahKategori">Tambah
            Kategori</a>
        <table id="getdata">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Icon</th>
                    <th>Aksi</th>
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
                ajax: "<?php echo e(route('getdata_kategori')); ?>",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'color',
                        render: function(data, type, full, meta) {
                            return '<div style="background-color:' + data +
                                '; width:50px; height:50px;"></div>';
                        }
                    },
                    {
                        data: 'icon',
                        render: function(data, type, full, meta) {
                            return '<img src="/gambar/' + data + '" width="50" height="50">';
                        }
                    },
                    {
                        data: 'id',
                        name: 'id',
                        render: function(data, type, full, meta) {
                            return '<button class="btn btn-danger btn-sm" data-id="' + data +
                                '" data-nama="' + full.name +
                                '" onclick="deleteKategori(this)">Hapus</button>';
                        }
                    },
                ]
            })
        })


        function deleteKategori(button) {
            var id = $(button).data('id');
            var nama = $(button).data('nama');

            if (confirm("Apakah Anda yakin ingin menghapus kategori " + nama + "?")) {
                $.ajax({
                    url: "<?php echo e(url('kategori')); ?>/" + id,
                    type: 'DELETE',
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>",
                    },
                    success: function(result) {
                        // alert(result.message);
                        $('#getdata').DataTable().ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        // alert(xhr.responseText);
                        $('#getdata').DataTable().ajax.reload();

                    }
                });
            }
        }


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

        // Submit form tambah kategori menggunakan AJAX
        $('#formTambahKategori').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    // Refresh tabel
                    $('#getdata').DataTable().ajax.reload();
                    // Tutup modal
                    $('#modalTambahKategori').modal('hide');
                    // Reset form
                    $('#formTambahKategori')[0].reset();
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    </script>

    <!-- Modal Tambah Kategori -->
    <div class="modal fade" id="modalTambahKategori" tabindex="-1" role="dialog" aria-labelledby="modalTambahKategoriLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="formTambahKategori" method="POST" action="<?php echo e(route('tambah_kategori')); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahKategoriLabel">Tambah Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="namaKategori">Nama Kategori</label>
                            <input type="text" class="form-control" id="namaKategori" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="warnaKategori">Warna Kategori</label>
                            <input type="color" class="form-control" id="warnaKategori" name="color" required>
                        </div>
                        <div class="form-group">
                            <label for="iconKategori">Icon Kategori</label>
                            <input type="file" class="form-control-file" id="iconKategori" name="icon"
                                accept="image/*" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New\resources\views/admin/kategori/index.blade.php ENDPATH**/ ?>