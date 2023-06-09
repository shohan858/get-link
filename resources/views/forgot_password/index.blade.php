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

    <title>Forgot Password</title>

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
                <h3 class="logGreetKir">Forgot Password</h3>
                <p class="logTextKir">Silahkan masukkan email anda dan check email anda</p>
            </div>
            <div class="logformKir">
                <form action="{{ route('password.email') }}" method="POST" style="width: 100%">
                    @csrf
                    @error('email')
                        <span role="alert" class="pwError" style="margin: 0">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @if (session('status'))
                        <div class="status">
                            {{ session('status') }}
                        </div>
                    @endif
                    <input class="formEM" type="email" name="email" id="fname" placeholder="Masukkan email">
                    <button class="btnLogin" type="submit" value="Submit">
                        {{ __('Send Password Reset Link') }}
                    </button><br>
                    <p class="tegs">Back To Login?? <a class="regs" href="/sesi"><b>Login</b></a></p>
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
            <div class="heder">
              <h4 style="margin-top: 5px">Selamat Datang</h4>
              <p>Silahkan Masukan Email Dan Password Anda</p>
            </div>
            <form  action="/sesi/login" method="POST">
              @csrf
              <input type="email" id="fname" name="email" placeholder="Masukan Email" />
              <input type="password" id="lname" name="password" placeholder="Masukan Password" />
              <a href="">Forgot Password?</a>
              <button type="submit" value="Submit">Login</button>
              <a style="margin-left: 275px; color: rgb(129, 128, 125)">atau</a>
              <button class="button-outline" style="margin-top: 2%" value="Submit"><i class="fa-brands fa-google"></i> Sign In With Google</button>
              <p class="tidakPunya">Tidak punya akun?<a style="daftar" href="/register">Daftar</a></p>
            </form>
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
