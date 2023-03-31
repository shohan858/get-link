<?php $__env->startSection('konten'); ?>
    <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item->id == 5): ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-1">
                <h1 class="h3 mb-0 text-gray-800">Edit Landing Page</h1>
                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#iframe">
                    Preview
                </button>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Konten <?php echo e($item->title); ?></h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>Judul</th>
                                        <th>Sub Judul</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td><?php echo e($item->title); ?></td>
                                        <td><?php echo e($item->subtitle); ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" type="button" data-toggle="collapse"
                                                data-target="#collapseExample" aria-expanded="false"
                                                aria-controls="collapseExample">
                                                Edit Data
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="collapse" id="collapseExample" style="margin-top:5%">
                                <h3 class="text-bold">Edit Data</h3>
                                <form action="update_landing_page/<?php echo e($item->id); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <p>Judul</p>
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" class="form-control" name="title"
                                            value="<?php echo e($item->title); ?>" placeholder="Title 1" aria-label="Title 1"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <?php if($item->subtitle != null): ?>
                                        <p>SubJudul</p>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="subtitle"
                                                value="<?php echo e($item->subtitle); ?>" placeholder="Subtitle 1"
                                                aria-label="Subtitle 1" aria-describedby="basic-addon1">
                                        </div>
                                    <?php endif; ?>
                                    <button class="w-100 btn btn-primary">Update</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <div class="d-sm-flex align-items-center justify-content-between mb-1" style="margin-top: 5%">


    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->id == 5): ?>
                            <h4>Keunggulan <?php echo e($item->title); ?></h4>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="text-center">
                            <?php
                                $no = 1;
                            ?>
                            <tr>
                                <th>No</th>
                                <th>Keunggulan</th>
                                <th>Edit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->id == 6 || $item->id == 7 || $item->id == 8): ?>
                                    <tr>
                                        <td><?php echo e($no++); ?></td>
                                        <td><?php echo e($item->title); ?></td>
                                        <form action="update_landing_page/<?php echo e($item->id); ?>" method="POST"
                                            enctype="multipart/form-data">
                                            <td>
                                                <?php echo csrf_field(); ?>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="title"
                                                        value="<?php echo e($item->title); ?>" placeholder="Title 1"
                                                        aria-label="Title 1" aria-describedby="basic-addon1">
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary">Update</button>
                                            </td>
                                        </form>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>


                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<div class="modal modal-fullscreen" id="iframe">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Preview</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#all">
                    Lihat Tampilan Keseluruhan
                </button>
                
            </div>
            <div class="modal-body" style="border: 1px solid black">
                
                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <link rel="stylesheet" href="<?php echo e(asset('assets_landing_page/styles/style.css')); ?> ">
                </head>

                <body style="margin-top: -2.4%">
                    <section style="margin-top: ; margin-bottom: 50px;">
                        <div align="center" class="center">
                            <div class="box_on_dev">
                                <p class="on_dev">on development</p>
                            </div>
                        </div>
                        <div class="CMS">
                            <div class="CMS_kiri">
                                <img src="<?php echo e(asset('assets_landing_page/img/3 1.png')); ?> " alt="">
                            </div>
                            <div class="CMS_kanan">
                                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item->id == 5): ?>
                                        <h1 class="CMS_h1"><?php echo e($item->title); ?></h1>
                                        <p class="CMS_p"><?php echo e($item->subtitle); ?></p>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item->id == 6): ?>
                                        <div class="CMS_li">
                                            <img class="CMS_img"
                                                src="<?php echo e(asset('assets_landing_page/img/Vector (1).png')); ?> "
                                                alt="">
                                            <p class="CMS_li_p"><?php echo e($item->title); ?></p>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item->id == 7): ?>
                                        <div class="CMS_li">
                                            <img class="CMS_img"
                                                src="<?php echo e(asset('assets_landing_page/img/Vector (1).png')); ?> "
                                                alt="">
                                            <p class="CMS_li_p"><?php echo e($item->title); ?></p>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item->id == 8): ?>
                                        <div class="CMS_li">
                                            <img class="CMS_img"
                                                src="<?php echo e(asset('assets_landing_page/img/Vector (1).png')); ?> "
                                                alt="">
                                            <p class="CMS_li_p"><?php echo e($item->title); ?></p>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </section>

                    <script>
                        const jsonAPI = "Backend_Copy.postman_collection.json";

                        fetch(jsonAPI)
                            .then(function(response) {
                                return response.json();
                            })
                            .then(function(obj) {
                                console.log(obj);
                            })
                            .catch(function(error) {
                                console.error('Someting went wrong');
                                console.error(error);
                            })

                        const endPoint = "<?php echo e(asset('')); ?> assets_landing_page"
                        const buttonImage = document.getElementById("image_link");
                        const submitButton = document.getElementById("button_link");
                        const copyButton = document.getElementById("button_copy");
                        const copyMsg = document.getElementById("copy_success_msg");

                        var newButton = document.createElement("button");
                        newButton.id = "button_copy";
                        newButton.type = "button";

                        var img = document.createElement("img");
                        img.id = "image_copy";
                        img.src = "<?php echo e(asset('assets_landing_page/img/copy.png')); ?> ";

                        newButton.appendChild(img);
                        document.body.appendChild(newButton);

                        function validateLink(link) {
                            var pattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w.-]*)*\/?$/;
                            return pattern.test(link);
                        }

                        submitButton.addEventListener("click", function(e) {
                            e.preventDefault();
                            const inputElement = document.getElementById("input_link");
                            const link = inputElement.value.trim();

                            if (link === "" || !validateLink(link)) {
                                alert("Input tidak valid!");
                                return;
                            }

                            if (buttonImage.src.includes("Refresh.png")) {
                                buttonImage.src = "<?php echo e(asset('assets_landing_page/img/Add-Link.png')); ?> ";
                                newButton.parentNode.removeChild(newButton);
                                submitButton.style.marginLeft = "10px";
                                inputElement.value = "";
                            } else {

                                buttonImage.src = "<?php echo e(asset('assets_landing_page/img/Refresh.png  ')); ?> ";
                                // var inputElement = document.getElementById("input_link");
                                submitButton.style.marginLeft = "20px";
                                inputElement.parentNode.insertBefore(newButton, inputElement.nextSibling);
                            }
                        });

                        copyButton.addEventListener("click", function() {
                            const inputElement = document.getElementById("input_link");
                            inputElement.select();
                            document.execCommand("copy");

                            // Menampilkan pesan "Berhasil copy" pada elemen span selama 5 detik
                            copyMsg.style.display = "inline";
                            copyMsg.textContent = "Berhasil copy";
                            setTimeout(function() {
                                copyMsg.style.display = "none";
                            }, 5000);
                        });
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
                    </script>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<div class="modal modal-fullscreen" id="all">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Preview</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#iframe">
                    Kembali
                </button>
                
            </div>
            <div class="modal-body" style="border: 1px solid black">
                <iframe src="<?php echo e(url('/testing')); ?>" frameborder="0" class="w-100 h-100"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New\resources\views/admin/landing_page/judul5.blade.php ENDPATH**/ ?>