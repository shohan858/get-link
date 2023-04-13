<?php $__env->startSection('admin_konten'); ?>
    <div class="adSpon">
        <div class="button-kanan">
            <button id="" onclick="add_sponsor()" class="button1"><i class="fa-solid fa-plus"></i> Tambah Collaboration</button>
            <button id="myBtn" onclick="preview()" class="button2"><i class="fa-regular fa-eye"></i> Preview</button>
        </div>
        <table class="data">
            <tr>
                <th>no</th>
                <th>image</th>
                <th>aksi</th>
            </tr>
            <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td><img src="<?php echo e(url('gambar').'/'.$item->image); ?>" alt="not found" width="10%" height="10%"></td>
                <td>
                    <button class="buttonA" onclick="edit_sponsor(<?php echo e($index); ?>)" id="spon_btn"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="buttonB" onclick="del_sponsor(<?php echo e($index); ?>)" type="submit" id="btn-hapus"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </table>
    </div>

    
     
     <div id="iframe" class="modal">
        <div class="modal_preview" style="height: 10%"> 
            <div class="modal-header">
                <p class="headP">Preview</p>
                <span onclick="close_preview()" class="close">&times;</span>
            </div>
            <div class="modal-body" >
                <iframe src="/preview/sponsor" height="200%" width="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    
    <div id="add_modal_collab" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <p class="headP">Tambah Collaboration</p>
                <span onclick="closeaddsponsor()" class="close">&times;</span>
            </div>
            <div class="modal-body">
                <form action="collab" style="margin: 15px" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="collab">
                        <label for="sl_custmMsg" class="label-gambar">Masukkan Gambar</label>
                        <div class="botImg-spon" style="border: 1px solid grey">
                            <input type="file" hidden="hidden" name="foto" id="sl_file">
                            <span id="sl_custmMsg" class="customMsg" style="margin-left: 3px">Tidak ada file yang
                                dipilih</span>
                            <button style="cursor: pointer" type="button" id="sl_upBtn" class="btn-gam">Pilih
                                file</button>
                        </div>
                    </div>
                    <div class="submit">
                        <div class="btn-batal" style="">
                            <button type="button" class="button_close btn-close" onclick="closeaddsponsor()">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button type="submit" class="button2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <div id="hapus<?php echo e($index); ?>" class="modal">
        <div class="modal-content" style="">
            <div class="modal-header">
                <p class="headP">Konfirmasi Hapus</p>
                <span class="close" onclick="closedelsponsor(<?php echo e($index); ?>)">&times;</span>
            </div>
            <div class="modal-body">
                <form action="<?php echo e('/collab/'.$item->id); ?>" method="POST" style="margin: 15px">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <div class="p">
                        <p class="confirm-hapus">Apakah Anda Yakin Ingin Menghapus Collaboration Ini ?</p>
                    </div>
                    <div class="submit" style="">
                        <div class="btn-batal">
                            <button type="button" onclick="closedelsponsor(<?php echo e($index); ?>)" class="button_close btn-close">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button type="submit" class="button2">Hapus</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <div id="edit<?php echo e($index); ?>" class="modal">
        <div class="modal-content" style="">
            <div class="modal-header">
                <p class="headP">Edit Data <?php echo e($item->id); ?></p>
                <span class="close" onclick="closeeditsponsor(<?php echo e($index); ?>)">&times;</span>
            </div>
            <div class="modal-body">
                <form action="<?php echo e('/collab/'.$item->id); ?>" method="POST" id="spon_edit" style="margin: 15px" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <label for="" class="label-gambar">Masukkan Gambar</label>
                    <div class="botImg" style="margin-top:0">
                        
                        <input type="file" name="foto" id="">
                    </div>
                    <div class="submit" style="">
                        <div class="btn-batal">
                            <button type="button" onclick="closeeditsponsor(<?php echo e($index); ?>)" class="button_close btn-close">Batal</button>
                        </div>
                        <div class="btn-simpan">
                            <button type="submit" class="button2">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <script>

        var sponBtn = document.getElementById("spon_btn");
        var sponEdit = document.getElementById("spon_edit");

        // sponBtn.addEventListener("click", function() {
        //     sponEdit.classList.toggle("bottomtab_show");
        // });


        var spon_filebtn = document.getElementById("spon_file"+index);
        var spon_customtxt = document.getElementById("spon_custmMsg"+index);
        var spon_upbtn = document.getElementById("spon_upBtn"+index);

        spon_upbtn.addEventListener("click", function() {
            spon_filebtn.click();
        });

        spon_customtxt.addEventListener("click", function() {
            spon_filebtn.click();
        })

        spon_filebtn.addEventListener("change", function() {
            if (spon_filebtn.value) {
                spon_customtxt.innerHTML = spon_filebtn.value.match(
                    /[\/\\]([\w\d\s\.\-\(\)]+)$/
                )[1]
            } else {
                spon_customtxt.innerHTML = "No file chosen, yet.";
            }
        })

        var Sl_filebtn = document.getElementById("sl_file");
        var Sl_customtxt = document.getElementById("sl_custmMsg");
        var Sl_upbtn = document.getElementById("sl_upBtn");

        Sl_upbtn.addEventListener("click", function() {
            Sl_filebtn.click();
        });

        Sl_customtxt.addEventListener("click", function(){
            Sl_filebtn.click();
        })

        Sl_filebtn.addEventListener("change", function() {
            if (Sl_filebtn.value) {
                Sl_customtxt.innerHTML = Sl_filebtn.value.match(
                    /[\/\\]([\w\d\s\.\-\(\)]+)$/
                )[1]
            } else {
                Sl_customtxt.innerHTML = "No file chosen, yet.";
            }
        })

        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var modal2 = document.getElementById("add_modal_collab");
        var btn2 = document.getElementById("add_collab");
        var modal_hapus = document.getElementById("hapus");
        var btn_hapus = document.getElementById("btn-hapus");
        var span1 = document.getElementsByClassName("close")[0];
        var span = document.getElementsByClassName("close")[1];
        var span_hapus = document.getElementsByClassName("close")[2];
        var btn_close = document.getElementsByClassName("btn-close")[0];
        var btn_close2 = document.getElementsByClassName("btn-close")[1];

        btn.onclick = function() {
            modal.style.display = "flex";
        }

        span1.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        btn2.onclick = function() {
            modal2.style.display = "flex";
        }

        span.onclick = function() {
            modal2.style.display = "none";
        }

        btn_close.onclick = function() {
            modal2.style.display = "none";
        }

        btn_hapus.onclick = function() {
            modal_hapus.style.display = "flex";
        }

        span_hapus.onclick = function() {
            modal_hapus.style.display = "none";
        }

        btn_close.onclick = function() {
            modal2.style.display = "none";
        }

        btn_close2.onclick = function() {
            modal_hapus.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            } else if (event.target == modal2) {
                modal2.style.display = "none";
            } else if (event.target == modal_hapus) {
                modal_hapus.style.display = "none";
            }
        }
    </script>
    <script>
        function del_sponsor(index) {
            var del_sponsor = document.getElementById("hapus" + index);
            del_sponsor.style.display = "flex";
        }

        function closedelsponsor(index) {
            var del_sponsor = document.getElementById("hapus" + index);
            del_sponsor.style.display = "none";
        }

        function deleteItem() {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }
    </script>
    <script>
        function edit_sponsor(index) {
            var edit_sponsor = document.getElementById("edit" + index);
            edit_sponsor.style.display = "flex";
        }

        function closeeditsponsor(index) {
            var edit_sponsor = document.getElementById("edit" + index);
            edit_sponsor.style.display = "none";
        }

        function editeteItem() {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }
    </script>
    <script>
        function add_sponsor() {
            var add_sponsor = document.getElementById("add_modal_collab");
            add_sponsor.style.display = "flex";
        }

        function closeaddsponsor() {
            var add_sponsor = document.getElementById("add_modal_collab");
            add_sponsor.style.display = "none";
        }

        function deteItem() {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH\resources\views/admin/admin_pages/edit_landingPage/sponsor.blade.php ENDPATH**/ ?>