<?php $__env->startSection('admin_konten'); ?>
<?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if(($item->id == 3)): ?>
    <div class="adsh1">
        <!-- jangan dihilangkan button ini -->
        <button></button>
        <div class="button-kanan">
            <button onclick="preview()" id="myBtn" class="button2"><i class="fa-regular fa-eye"></i> Preview</button>
        </div>

        <table class="data">
            <tr>
                <th>judul</th>
                <th>sub judul</th>
                <th>image</th>
                <th>aksi</th>

            </tr>
            <tr>
                <td><?php echo e($item->title); ?></td>
                <td><?php echo e($item->subtitle); ?></td>
                <td><img src="<?php echo e(url('gambar').'/'.$item->image); ?>" width="15%" height="15%"  alt="not found"></td>
                <td>
                    <button id="mic1_btn" class="buttonA"><i class="fa-solid fa-pen-to-square"></i></button>
                </td>
            </tr>
        </table>

        <form action="update_landing_page/<?php echo e($item->id); ?>" method="POST" enctype="multipart/form-data" class="bottomtab" id="mic1_edit">
            <?php echo csrf_field(); ?>
            <div class="botHead">
                <h1 class="both1">Edit Data</h1>
            </div>
            <div class="botJud">
                <input type="text" name="title" value="<?php echo e($item->title); ?>" placeholder="Title 1" id="" class="inputJud" placeholder="Masukkan judul">
            </div>
            <div class="botSj">
                <input type="text" name="subtitle" value="<?php echo e($item->subtitle); ?>" placeholder="Subtitle 1" id="" class="SjSubjudu" placeholder="Masukkan sub judul">
            </div>
            <div class="botImg">
                <input type="file" name="image_landing" hidden="hidden" name="" id="mic1_file">
                <span id="mic1_custmMsg" class="customMsg">No file chosen, yet.</span>
                <button style="cursor: pointer" type="button" id="mic1_upBtn" class="btn-gam">Select your file</button>
            </div>
            <div class="botbtn">
                <button type="submit" class="btnSj">Update</button>
            </div>
        </form>
    </div>

    
    <div id="iframe" class="modal">
        <div class="modal_preview" style="height: 80%"> 
            <div class="modal-header">
                <p class="headP">Preview</p>
                <span onclick="close_preview()" class="close">&times;</span>
            </div>
            <div class="modal-body" >
                <iframe src="/preview/microsite" height="200%" width="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <script>
        var mic1Btn = document.getElementById("mic1_btn");
        var mic1Edit = document.getElementById("mic1_edit");

        mic1Btn.addEventListener("click", function() {
            mic1Edit.classList.toggle("bottomtab_show");
        });

        var mic1_filebtn = document.getElementById("mic1_file");
        var mic1_customtxt = document.getElementById("mic1_custmMsg");
        var mic1_upbtn = document.getElementById("mic1_upBtn");

        mic1_upbtn.addEventListener("click", function() {
            mic1_filebtn.click();
        });

        mic1_customtxt.addEventListener("click", function() {
            mic1_filebtn.click();
        })

        mic1_filebtn.addEventListener("change", function() {
            if (mic1_filebtn.value) {
                mic1_customtxt.innerHTML = mic1_filebtn.value.match(
                    /[\/\\]([\w\d\s\.\-\(\)]+)$/
                )[1]
            } else {
                mic1_customtxt.innerHTML = "No file chosen, yet.";
            }
        })

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
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH\resources\views/admin/admin_pages/edit_landingPage/microsite1.blade.php ENDPATH**/ ?>