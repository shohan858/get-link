<?php $__env->startSection('admin_konten'); ?>
    <div class="adkw">
        <div class="button-kanan">
            <button id="myBtn" onclick="preview()" class="button2"><i class="fa-regular fa-eye"></i> Preview</button>
        </div>

        <div class="overf">
            <table class="data">
                <tr>
                    <th>No</th>
                    <th>judul</th>
                    <th>sub judul</th>
                    <th>image</th>
                    <th>aksi</th>

                </tr>
                
                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->id == 9): ?>
                <tr>
                    <td>1</td>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->subtitle); ?></td>
                    <td><img style="background: #1a2474" src="<?php echo e(url('gambar').'/'.$item->image); ?>" width="50%" height="50%" alt="not found"></td>
                    <td>
                        <button id="kw_btn1" class="buttonA"><i class="fa-solid fa-pen-to-square"></i></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <form class="bottomtab" id="kw_edit1" method="POST" action="update_landing_page/<?php echo e($item->id); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                            <div class="botHead">
                                <h1 class="both1">Edit Data</h1>
                            </div>
                            <div class="botJud">
                                <input type="text" name="title" value="<?php echo e($item->title); ?>" id="" class="inputJud"
                                    placeholder="Masukkan judul">
                            </div>
                            <div class="botSj">
                                <input type="text" name="subtitle" value="<?php echo e($item->subtitle); ?>"  id="" class="SjSubjudu"
                                    placeholder="Masukkan sub judul">
                            </div>
                            <div class="botbtn">
                                <button type="submit" class="btnSj">Update</button>
                            </div>
                        </form>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->id == 10): ?>
                <tr>
                    <td>2</td>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->subtitle); ?></td>
                    <td><img style="background: #1a2474" src="<?php echo e(url('gambar').'/'.$item->image); ?>" width="50%" height="50%" alt="not found"></td>
                    <td>
                        <button id="kw_btn2" class="buttonA"><i class="fa-solid fa-pen-to-square"></i></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <form class="bottomtab" id="kw_edit2" method="POST" action="update_landing_page/<?php echo e($item->id); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                            <div class="botHead">
                                <h1 class="both1">Edit Data</h1>
                            </div>
                            <div class="botJud">
                                <input type="text" name="title" value="<?php echo e($item->title); ?>" id="" class="inputJud"
                                    placeholder="Masukkan judul">
                            </div>
                            <div class="botSj">
                                <input type="text" name="subtitle" value="<?php echo e($item->subtitle); ?>"  id="" class="SjSubjudu"
                                    placeholder="Masukkan sub judul">
                            </div>
                            <div class="botbtn">
                                <button type="submit" class="btnSj">Update</button>
                            </div>
                        </form>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->id == 11): ?>
                <tr>
                    <td>3</td>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->subtitle); ?></td>
                    <td><img style="background: #1a2474" src="<?php echo e(url('gambar').'/'.$item->image); ?>" width="50%" height="50%" alt="not found"></td>
                    <td>
                        <button id="kw_btn3" class="buttonA"><i class="fa-solid fa-pen-to-square"></i></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <form class="bottomtab" id="kw_edit3" method="POST" action="update_landing_page/<?php echo e($item->id); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                            <div class="botHead">
                                <h1 class="both1">Edit Data</h1>
                            </div>
                            <div class="botJud">
                                <input type="text" name="title" value="<?php echo e($item->title); ?>" id="" class="inputJud"
                                    placeholder="Masukkan judul">
                            </div>
                            <div class="botSj">
                                <input type="text" name="subtitle" value="<?php echo e($item->subtitle); ?>"  id="" class="SjSubjudu"
                                    placeholder="Masukkan sub judul">
                            </div>
                            <div class="botbtn">
                                <button type="submit" class="btnSj">Update</button>
                            </div>
                        </form>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->id == 12): ?>
                <tr>
                    <td>4</td>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->subtitle); ?></td>
                    <td><img style="background: #1a2474" src="<?php echo e(url('gambar').'/'.$item->image); ?>" width="50%" height="50%" alt="not found"></td>
                    <td>
                        <button id="kw_btn4" class="buttonA"><i class="fa-solid fa-pen-to-square"></i></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <form class="bottomtab" id="kw_edit4" method="POST" action="update_landing_page/<?php echo e($item->id); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                            <div class="botHead">
                                <h1 class="both1">Edit Data</h1>
                            </div>
                            <div class="botJud">
                                <input type="text" name="title" value="<?php echo e($item->title); ?>" id="" class="inputJud"
                                    placeholder="Masukkan judul">
                            </div>
                            <div class="botSj">
                                <input type="text" name="subtitle" value="<?php echo e($item->subtitle); ?>"  id="" class="SjSubjudu"
                                    placeholder="Masukkan sub judul">
                            </div>
                            <div class="botbtn">
                                <button type="submit" class="btnSj">Update</button>
                            </div>
                        </form>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->id == 13): ?>
                <tr>
                    <td>5</td>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->subtitle); ?></td>
                    <td><img style="background: #1a2474" src="<?php echo e(url('gambar').'/'.$item->image); ?>" width="50%" height="50%" alt="not found"></td>
                    <td>
                        <button id="kw_btn5" class="buttonA"><i class="fa-solid fa-pen-to-square"></i></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <form class="bottomtab" id="kw_edit5" method="POST" action="update_landing_page/<?php echo e($item->id); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                            <div class="botHead">
                                <h1 class="both1">Edit Data</h1>
                            </div>
                            <div class="botJud">
                                <input type="text" name="title" value="<?php echo e($item->title); ?>" id="" class="inputJud"
                                    placeholder="Masukkan judul">
                            </div>
                            <div class="botSj">
                                <input type="text" name="subtitle" value="<?php echo e($item->subtitle); ?>"  id="" class="SjSubjudu"
                                    placeholder="Masukkan sub judul">
                            </div>
                            <div class="botbtn">
                                <button type="submit" class="btnSj">Update</button>
                            </div>
                        </form>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->id == 14): ?>
                <tr>
                    <td>6</td>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->subtitle); ?></td>
                    <td><img style="background: #1a2474" src="<?php echo e(url('gambar').'/'.$item->image); ?>" width="50%" height="50%" alt="not found"></td>
                    <td>
                        <button id="kw_btn6" class="buttonA"><i class="fa-solid fa-pen-to-square"></i></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <form class="bottomtab" id="kw_edit6" method="POST" action="update_landing_page/<?php echo e($item->id); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                            <div class="botHead">
                                <h1 class="both1">Edit Data</h1>
                            </div>
                            <div class="botJud">
                                <input type="text" name="title" value="<?php echo e($item->title); ?>" id="" class="inputJud"
                                    placeholder="Masukkan judul">
                            </div>
                            <div class="botSj">
                                <input type="text" name="subtitle" value="<?php echo e($item->subtitle); ?>"  id="" class="SjSubjudu"
                                    placeholder="Masukkan sub judul">
                            </div>
                            <div class="botbtn">
                                <button type="submit" class="btnSj">Update</button>
                            </div>
                        </form>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>

     
     <div id="iframe" class="modal">
        <div class="modal_preview" style="height: 80%"> 
            <div class="modal-header">
                <p class="headP">Preview</p>
                <span onclick="close_preview()" class="close">&times;</span>
            </div>
            <div class="modal-body" >
                <iframe src="/preview/keunggulan" height="200%" width="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <script>
        var kw1Btn = document.getElementById('kw_btn1');
        var kw2Btn = document.getElementById('kw_btn2');
        var kw3Btn = document.getElementById('kw_btn3');
        var kw4Btn = document.getElementById('kw_btn4');
        var kw5Btn = document.getElementById('kw_btn5');
        var kw6Btn = document.getElementById('kw_btn6');
        var kw1Edit = document.getElementById('kw_edit1');
        var kw2Edit = document.getElementById('kw_edit2');
        var kw3Edit = document.getElementById('kw_edit3');
        var kw4Edit = document.getElementById('kw_edit4');
        var kw5Edit = document.getElementById('kw_edit5');
        var kw6Edit = document.getElementById('kw_edit6');

        kw1Btn.addEventListener("click", function() {
            kw1Edit.classList.toggle("bottomtab_show");
        });
        kw2Btn.addEventListener("click", function() {
            kw2Edit.classList.toggle("bottomtab_show");
        });
        kw3Btn.addEventListener("click", function() {
            kw3Edit.classList.toggle("bottomtab_show");
        });
        kw4Btn.addEventListener("click", function() {
            kw4Edit.classList.toggle("bottomtab_show");
        });
        kw5Btn.addEventListener("click", function() {
            kw5Edit.classList.toggle("bottomtab_show");
        });
        kw6Btn.addEventListener("click", function() {
            kw6Edit.classList.toggle("bottomtab_show");
        });

        // var modal = document.getElementById("myModal");
        // var btn = document.getElementById("myBtn");
        // var modal2 = document.getElementById("add_modal_collab");
        // var btn2 = document.getElementById("add_collab");
        // var modal_hapus = document.getElementById("hapus");
        // var btn_hapus = document.getElementById("btn-hapus");
        // var span1 = document.getElementsByClassName("close")[0];
        // var span = document.getElementsByClassName("close")[1];
        // var span_hapus = document.getElementsByClassName("close")[2];
        // var btn_close = document.getElementsByClassName("btn-close")[0];
        // var btn_close2 = document.getElementsByClassName("btn-close")[1];

        // btn.onclick = function() {
        //     modal.style.display = "flex";
        // }

        // span1.onclick = function() {
        //     modal.style.display = "none";
        // }

        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     }
        // }

        // btn2.onclick = function() {
        //     modal2.style.display = "flex";
        // }

        // span.onclick = function() {
        //     modal2.style.display = "none";
        // }

        // btn_close.onclick = function() {
        //     modal2.style.display = "none";
        // }

        // btn_hapus.onclick = function() {
        //     modal_hapus.style.display = "flex";
        // }

        // span_hapus.onclick = function() {
        //     modal_hapus.style.display = "none";
        // }

        // btn_close.onclick = function() {
        //     modal2.style.display = "none";
        // }

        // btn_close2.onclick = function() {
        //     modal_hapus.style.display = "none";
        // }

        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     } else if (event.target == modal2) {
        //         modal2.style.display = "none";
        //     } else if (event.target == modal_hapus) {
        //         modal_hapus.style.display = "none";
        //     }
        // }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH\resources\views/admin/admin_pages/edit_landingPage/keunggulan_website.blade.php ENDPATH**/ ?>