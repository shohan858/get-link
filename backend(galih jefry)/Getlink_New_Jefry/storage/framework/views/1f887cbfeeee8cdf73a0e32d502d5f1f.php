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
        <a href="" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#modalTambahKategori">Tambah
            Template</a>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                        data: 'background',
                        type: 'type_background',
                        render: function(data, type, full, meta) {
                            if (type === 'display') {
                                if (full.type_background === 'image') {
                                    return '<img src="/gambar/' + data +
                                        '" width="100" height="100">';
                                } else if (full.type_background === 'color') {
                                    return '<div style="background-color:' + data +
                                        '; width:50px; height:50px;"></div>';
                                }
                            }
                            return data;
                        }
                    },
                    {
                        data: 'type_background'
                    },
                    {
                        data: 'id',
                        title: 'Aksi',
                        render: function(data, type, full, meta) {
                            return '<button class="btn btn-danger btn-sm" data-id="' + data +
                                '" data-nama="' + full.title +
                                '" onclick="deleteKategori(this)">Hapus</button>' +
                                '<a href="/edit_template/'+data+'" class="btn btn-warning btn-sm mx-1">Update</a>';
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
                    url: "<?php echo e(url('template')); ?>/" + id,
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
                        swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Berhasil Memperpendek Link',
                            timer: '900',
                        });
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
                <form id="formTambahKategori" method="POST" action="<?php echo e(route('tambah_template')); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahKategoriLabel">Tambah Template Microsite</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="namaKategori">Title</label>
                            <input type="text" class="form-control" id="namaKategori" name="title" required>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="warnaKategori">Kategori</label>
                                <select class="form-control" id="warnaKategori" name="id_kategori" required>
                                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategoris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($kategoris->id); ?>"><?php echo e($kategoris->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Komponen">Komponen</label>
                            <?php $__currentLoopData = $komponen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $komponens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check">
                                    <input class="form-check-input" name="id_komponen[]" type="checkbox"
                                        value="<?php echo e($komponens->id); ?>" id="option<?php echo e($komponens->id); ?>">
                                    <label class="form-check-label" for="option<?php echo e($komponens->id); ?>">
                                        <?php echo e($komponens->name); ?>

                                    </label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="form-group">
                            <label for="namaKategori">Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKategori">Type Background</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type_background" id="exampleRadios1"
                                    value="color" onclick="showColorInput()">
                                <label class="form-check-label" for="exampleRadios1">
                                    Color
                                </label>
                                <div id="colorInput" style="display:none;">
                                    <label for="color">Background Color</label>
                                    <input type="color" name="background" id="color" class="form-control">
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type_background" id="exampleRadios2"
                                    value="image" onclick="showImageInput()">
                                <label class="form-check-label" for="exampleRadios2">
                                    Image
                                </label>
                                <div id="imageInput" style="display:none;">
                                    <label for="image">Background Image</label>
                                    <input type="file" class="form-control" name="background" id="image">
                                </div>
                            </div>
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
    <script>
        function showColorInput() {
            document.getElementById("colorInput").style.display = "block";
            document.getElementById("imageInput").style.display = "none";
        }

        function showImageInput() {
            document.getElementById("colorInput").style.display = "none";
            document.getElementById("imageInput").style.display = "block";
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH\resources\views/admin/template/index.blade.php ENDPATH**/ ?>