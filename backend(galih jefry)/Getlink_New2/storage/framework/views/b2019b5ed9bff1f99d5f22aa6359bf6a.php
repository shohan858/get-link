<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- My Style -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />

    <!-- Fonts Google -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />

    <title>Login page</title>

    <style type="text/css">
      .form-check-label:hover {
        cursor: pointer;
      }
    </style>
  </head>

  <body>
    <div id="back">
      <div class="backRight"></div>
      <div class="backLeft">
        <img class="image1" src="<?php echo e(asset('assets_sesi/images/Diet.png')); ?>" alt="image not found" />
        <img class="image2" src="<?php echo e(asset('assets_sesi/images/group.png')); ?>" alt="image not found" />
      </div>
    </div>

    <div id="slideBox">
      <div class="topLayer">
        <div class="left">
          <div class="content">
            <h2>Sign Up</h2>
            <form method="post" onsubmit="return false;">
              <div class="form-group">
                <input type="text" placeholder="username" />
              </div>
              <div class="form-group"></div>
              <div class="form-group"></div>
              <div class="form-group"></div>
            </form>
            <button id="goLeft" class="off">Login</button>
            <button>Sign up</button>
          </div>
        </div>
        <div class="right">
          <div class="content">
            <img class="logos" src="<?php echo e(asset('assets_sesi/images/logos.png')); ?>" alt="" />
            <div class="heder">
              <h4 style="margin-top: 5px">Selamat Datang</h4>
              <p>Silahkan Masukan Email Dan Password Anda</p>
            </div>
            <form  action="/sesi/login" method="POST">
              <?php echo csrf_field(); ?>
              <input type="email" id="fname" name="email" placeholder="Masukan Email" />
              <input type="password" id="lname" name="password" placeholder="Masukan Password" />
              <a href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
              <button type="submit" value="Submit">Login</button>
              <a style="margin-left: 275px; color: rgb(129, 128, 125)">atau</a>
              <button class="button-outline" style="margin-top: 2%" value="Submit"><i class="fa-brands fa-google"></i> Sign In With Google</button>
              <a href="/register">Daftar</a>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Inspiration from: http://ertekinn.com/loginsignup/-->
    <script src="js/bootstrap.js"></script>

    <!-- Popper JavaScript -->
    <script src="js/popper.min.js"></script>

    <script>
      // Mengambil elemen checkbox dan teks "Ingat Sandi"
      const checkbox = document.getElementById("remember");
      const rememberText = document.querySelector(".form-check-label");

      // Menambahkan event listener pada teks "Ingat Sandi"
      rememberText.addEventListener("click", () => {
        checkbox.checked = !checkbox.checked; // Membalikkan nilai status checkbox
      });
    </script>
  </body>
</html>
<?php /**PATH C:\Users\galih agung raharjo\Documents\github\get-link\backend(galih jefry)\Getlink_New2\resources\views/sesi/index.blade.php ENDPATH**/ ?>