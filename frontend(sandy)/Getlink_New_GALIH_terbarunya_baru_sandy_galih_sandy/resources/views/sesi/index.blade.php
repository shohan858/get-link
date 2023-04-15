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

    <title>Login page</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <style>
        .password-container {
            position: relative;
            display: inline-block;
        }

        .toggle-password {
            position: absolute;
            top: 50.5%;
            right: 6%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .toggle-password.hide-password::before {
            content: "\f070";
        }
    </style>
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
                <h3 class="logGreetKir">Selamat Datang</h3>
                <p class="logTextKir">Silahkan masukkan email dan password anda</p>
            </div>
            <div class="logformKir">
                <form action="/sesi/login" method="POST" style="width: 100%">
                    @csrf
                    <input class="formEM" type="email" name="email" id="fname" placeholder="Masukkan email">
                    <input class="formPass" type="password" name="password" id="lname"
                        placeholder="Masukkan password">
                    <i class="far fa-eye toggle-password" id="togglePassword"></i>
                    <br>
                    <a class="fp" href="">Forgot password?</a>
                    <button class="btnLogin" type="submit" value="Submit">Login</button><br>
                    <p class="atau">Atau</p>
                    <button class="withGog" value="Submit">
                        <a href="{{ route('auth.google') }}">
                            <i class="fa-brands fa-google"></i>
                            Sign in with google
                        </a>
                    </button><br>
                    <p class="tegs">Dont have an account?? <a class="regs" href="/register"><b>Register</b></a></p>
                </form>
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

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#lname');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');

            if (type === 'password') {
                this.classList.remove('hide-password');
            } else {
                this.classList.add('hide-password');
            }
        });
    </script>
</body>

</html>
