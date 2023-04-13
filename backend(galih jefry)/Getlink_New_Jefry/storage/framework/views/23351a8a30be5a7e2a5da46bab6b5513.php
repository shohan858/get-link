<?php $__env->startSection('konten'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-1">
    <h1 class="h3 mb-0 text-gray-800">Sponsor</h1>
    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#iframe">
        Preview
    </button>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Gambar Sponsor<h4>
            </div>
            <div class="card-body">
                <table class="table">
                   <!-- Button trigger modal -->
                   <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#tambahbaru">
                    Tambah Gambar Collaboration
                </button>
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td>
                              <?php if(!$item->image): ?>
                                  Tidak Ada
                              <?php else: ?>
                              <img class="img-top" src="<?php echo e(url('gambar').'/'.$item->image); ?>" width="5%" height="5%" alt="">
                              <?php endif; ?>
                            </td>
                            <td class="">
                              <a href="<?php echo e('/collab/'.$item->id.'/edit'); ?>" class="btn btn-warning btn-sm" type="button">
                                Edit Data
                              </a>
                              <form class="d-inline" onsubmit="return confirm('Yakin Ingin Menghapus Data ???')" action="<?php echo e('/collab/'.$item->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                              </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>


                

                         

            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

  
  <div class="modal" id="tambahbaru" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Colaboration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="collab" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
        <div class="modal-body">
                <label for="formFile" class="form-label">Masukkan Gambar</label>
                <input class="form-control" name="foto" type="file" id="formFile" required >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>






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
            <section style="background-color: #BFACE2;">
              <div class="space">
                <div class="spotify">
                  <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="box_1">
                    <img src="<?php echo e(asset('uploads/'. $item->image )); ?>" style="width:130px;" xalt="">
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            </section>

              <script>

              
              const jsonAPI = "Backend_Copy.postman_collection.json";

              fetch(jsonAPI)
                  .then(function (response) {
                  return response.json();
                  })
                  .then(function (obj) {
                  console.log(obj);
                  })
                  .catch(function (error) {
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

                  if (buttonImage.src.includes("Refresh.png")) 
                  {
                  buttonImage.src = "<?php echo e(asset('assets_landing_page/img/Add-Link.png')); ?> ";
                  newButton.parentNode.removeChild(newButton);
                  submitButton.style.marginLeft = "10px";
                  inputElement.value = "";
                  }
                  else
                  {

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
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
          
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


                    
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\get_new_2\Getlink_New_GALIH\resources\views/admin/landing_page/sponsor.blade.php ENDPATH**/ ?>