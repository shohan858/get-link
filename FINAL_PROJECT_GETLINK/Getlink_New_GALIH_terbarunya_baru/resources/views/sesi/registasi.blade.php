<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('assets_sesi/css/style.css') }}" />

    <!-- Fonts Google -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />

    <title>Register</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <style>
      input{
        padding-left: 10px 
      }

        .password-container {
            position: relative;
            display: inline-block;
        }

        .toggle-password {
            position: absolute;
            top: 55.5%;
            right: 50px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .toggle-password2 {
            position: absolute;
            top: 50%;
            right: 50px;
            transform: translateY(610%);
            cursor: pointer;
        }

        .toggle-password.hide-password::before {
            content: "\f070";
        }

        .toggle-password2.hide-password::before {
            content: "\f070";
        }
    </style>

    {{-- <style type="text/css">
        .form-check-label:hover {
            cursor: pointer;
        }
    </style> --}}
</head>

<body>

    <div class="login_pages">
        <div class="logKanan">
            <img class="logBackKan" src="{{ asset('assets_sesi/images/group.png') }}" alt="">
            <img class="logimgKan" src="{{ asset('assets_sesi/images/Diet.png') }}" alt="image not found">
        </div>
        <div class="logKiri">
            <div class="logtopKir">
                <img class="logSimKir" src="{{ asset('assets_sesi/images/logos.png') }}" alt="">
                <h3 class="logGreetKir">Buat Akun anda</h3>
                <p class="logTextKir">Silahkan buat akun anda agar bisa masuk </p>
            </div>
            <div class="regformKir">
                <form action="/register/create" method="POST" style="width: 100%">
                    @csrf
                    <input class="formTe" type="text" id="fname" name="name" placeholder="Masukan Nama" />
                    <input class="formEM" type="email" name="email" id="lname" placeholder="Masukkan email">
                    <input class="formPass" type="password" name="password" id="lname"
                        placeholder="Masukkan password">
                    <input class="formCP" type="password" id="lname" name="confirmpassword"
                        placeholder="Masukan Password Confirmation" />
                    <button class="btnLogin" type="submit" value="Submit">Registrasi</button><br>
                    <p class="tegs">Already exists have an account? <a class="regs" href="/sesi"><b>Login</b></a></p>
                </form>
            </div>
        </div>
    </div>

    {{-- <div id="back">
      <div class="backRight"></div>
      <div class="backLeft">
        <img class="image1" src="{{ asset('assets_sesi/images/Diet.png') }}" alt="image not found" />
        <img class="image2" src="{{ asset('assets_sesi/images/group.png') }}" alt="image not found" />
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
            <img class="logos" src="{{ asset('assets_sesi/images/logos.png') }}" alt="" />
            <h4 style="margin-top: 5px">Buat Akun Anda</h4>
            <p>Silahkan Buat Akun Anda Agar Bisa Masuk</p>

            <form  action="/register/create" method="POST">
              @csrf
              <input type="text" id="fname" name="name" placeholder="Masukan Nama" />
              <input type="email" id="lname" name="email" placeholder="Masukan Email" />
              <input type="password" id="lname" name="password" placeholder="Masukan Password" />
              <input type="password" id="lname" name="confirmpassword" placeholder="Masukan Password Confirmation" />
              <button type="submit" value="Submit">Register</button>
            </form>
            <div class="uhBot">
              <h6 class="botP">Already exists have an account?</h6><a href="/sesi">Login</a>
            </div>
            <!-- <div class="uhuy">
              <p class="">Already exists have an account?</p><a href="">Login</a>
            </div> -->

          </div>
        </div>
      </div>
    </div> --}}

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
