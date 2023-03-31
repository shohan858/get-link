<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>


    <div class="adContent">

        <aside>
            {{-- @yield('konten') --}}
            <div class="adAside">
                <div class="adTop">
                    <img class="adImg" src="{{ asset('assets/img/logo-text2 1.png') }}" alt="image not found">
                </div>
                <div class="adBot">
                    <div class="adComp">
                        <a href="/"> <i class="fa-solid fa-house"></i>
                            <p>Dashboard</p>
                        </a>
                    </div>
                    <div class="adComp">
                        <a href="/halaman_utama"> <i class="fa-solid fa-house"></i>
                            <p>Halaman Utama</p>
                        </a>
                    </div>
                    <div class="adComp">
                        <a href=""> <i class="fa-solid fa-house"></i>
                            <p>Edit Landing Page</p>
                        </a>
                    </div>
                    <div class="adComp">
                        <a href=""> <i class="fa-solid fa-house"></i>
                            <p>Log out</p>
                        </a>
                    </div>
                </div>
            </div>
        </aside>
        <div class="adIs">
            <div class="adNav">
                <div class="adKinav">
                    <h1 style="color:#1A2474">Halaman Utama</h1>
                    <p>Admin / halaman_utama</p>
                </div>
                <div class="adKanav">
                    <p>Admin</p>
                    <img src="" alt="">
                </div>
            </div>
        </div>
</body>

</html>
