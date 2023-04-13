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

    <h1 class="mb-5">Daftar Paket</h1>

    <div class="">
        <a href="" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#modalTambahKategori">Tambah Paket</a>
        <table id="getdata">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name Paket</th>
                    <th>Type Paket</th>
                    <th>Harga Paket</th>
                    <th>Slot Paket</th>
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
                ajax: "<?php echo e(route('get_paket_microsite')); ?>",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'type'
                    },
                    {
                        data: 'harga'
                    },
                    {
                        data: 'slot'
                    },
                    {
                        data: 'id',
                        name: 'id',
                        render: function(data, type, full, meta) {
                            return '<button class="btn btn-danger btn-sm" data-id="' + data +
                                '" data-nama="' + full.name +
                                '" onclick="delete_paket(this)">Hapus</button>'+
                                '<a href="/edit_paket/'+data+'" class="btn btn-warning btn-sm mx-1">Update</a>';
                        }
                    }
                ]
            })
        })


        function delete_paket(button) {
            var id = $(button).data('id');
            var nama = $(button).data('nama');
            console.log(id);
            if (confirm("Apakah Anda yakin ingin menghapus kategori " + nama + "?")) {
                $.ajax({
                    url: "<?php echo e(url('delete_paket_microsite')); ?>/" + id,
                    type: 'POST',
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
                <form id="formTambahKategori" method="POST" action="<?php echo e(route('tambah_paket_microsite')); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahKategoriLabel">Tambah Paket Microsite</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="namaKategori">Nama Paket</label>
                            <input type="text" class="form-control" id="namaKategori" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="warnaKategori">Type Paket</label>
                            <input type="text" class="form-control" id="warnaKategori" name="type" required>
                        </div>
                        <div class="form-group">
                            <label for="warnaKategori">Harga Paket</label>
                            <input type="number" class="form-control" id="warnaKategori" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="warnaKategori">Slot</label>
                            <input type="number" class="form-control" id="warnaKategori" name="slot" required>
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

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH\resources\views/admin/transaksi/index.blade.php ENDPATH**/ ?>