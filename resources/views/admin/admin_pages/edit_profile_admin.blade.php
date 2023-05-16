@extends('admin.layout.base')
@section('admin_konten')
    <style>
        .content {
            position: absolute;
            display: flex;
            width: 100%;
            /* height: 100vh; */
            /* top: 100px; */
            margin: 0px;
        }

        /* .content {
                                            height: 50vh;
                                    } */

        .profil-bung {

            height: 70vh;
            width: 100%;
            margin-top: -150px;
        }


        .profil-content {

            margin-left: 3%;
            width: 95%;
        }

        /* .hidden {
                                        opacity: 0;
                                        filter: blur(5px);
                                        transform: translateX(100%);
                                        transition: all 0.7s;
                                    } */
        .profil_kanan {
            align-items: center;
            justify-content: center;
            height: fit-content;
            width: 70%;
        }

        .profil_h1 {
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 32px;
            line-height: 38px;
            color: #aa0000;
        }

        .gmbTamp {
            align-items: center;
            justify-content: center;
            width: 80%;
            height: fit-content;
            display: flex;
            margin-bottom: 5px;
        }

        .profil_img {
            object-fit: cover;
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        .profil_addGmb {
            cursor: pointer;
            margin: 12px 0px;
            width: 80%;
            height: 46px;
            background: #524799;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 16px;
            color: #ffffff;
        }

        .profil_addGmb:hover {
            background-color: #fff;
            color: #524799;
            border: 2px solid #524799;
        }

        .profil_hapusAkun {
            cursor: pointer;
            width: 80%;
            height: 46px;
            background: #aa0000;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 16px;
            color: #ffffff;
        }

        .profil_hapusAkun:hover {
            background-color: #fff;
            color: #aa0000;
            border: 2px solid #aa0000;
        }

        /* .profil_kiri {
                                        width: 55%;
                                        display: flex;
                                        height: 100vh;
                                        margin-top: 120px;
                                    } */
        /* .profil_form {
                                        width: 100%;
                                        display: flex;
                                        flex-direction: column;
                                    } */
        /* .profil_label {
                                        font-family: "Roboto", sans-serif;
                                        font-style: normal;
                                        font-weight: 400;
                                        font-size: 13px;
                                        line-height: 15px;
                                        color: #292929;
                                    }  */
        .profil_input {
            width: 400px;
            height: 42px;
            background: #fafafa;
            border: 1px solid #e1e1e1;
            border-radius: 10px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 15px;
            color: #949494;
            margin-bottom: 12px;
        }

        .form_bottom {
            width: 100%;
            height: fit-content;
            display: flex;
        }

        .profil_batal {
            cursor: pointer;
            width: 82px;
            height: 38px;
            background: #a5a5a5;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 16px;
            color: #ffffff;
            margin-right: 12px;
        }

        .profil_simpan {
            cursor: pointer;
            width: 82px;
            height: 38px;
            background: #524799;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 16px;
            color: #ffffff;
        }

        .del-com-modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .profil-content-isi {
            width: 100%;
            height: 100vh;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
        }

        .del-com-modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* .navAni {
                                        opacity: 0;
                                        filter: blur(5px);
                                        transform: translateY(-100%);
                                        transition: all 0.7s;
                                    } */
        .del-conmo {
            background-color: #fefefe;
            margin: auto;
            padding: 2%;
            border-radius: 5px;
            width: 50%;
        }

        .del-close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .del-hapus-tulisan1 {
            width: 186px;
            height: 17px;
            left: 26px;
            top: 28px;

            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            font-style: normal;
            font-weight: 750;
            font-size: 20px;
            line-height: 23px;

            color: #6b75e6;
        }

        .del-hapus-tulisan2 {
            width: 60%;
            height: 28%;
            left: 26px;
            top: 58px;

            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 18px;

            color: #a5a5a5;
        }

        .del-bungkus-hapusbutton {
            display: flex;
            margin-left: 50%;
        }

        .del-batal-button {
            margin-right: 5%;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 18px;

            color: #a5a5a5;
            width: 79px;
            height: 26px;
            left: 362px;
            top: 88px;
            cursor: pointer;
            background: #f4f4f4;
            border-radius: 5px;
            border-color: #f4f4f4;
        }

        .del-hapus-button {
            color: white;
            width: 79px;
            height: 26px;
            left: 500px;
            top: 86px;
            cursor: pointer;
            background: #524799;
            border-radius: 5px;
            border-color: #524799;
        }

        .ndelik {
            widows: inherit;
        }

        @media screen and (max-width: 830px) {
            .profil_input {
                width: 300px
            }
        }

        @media screen and (max-width: 600px) {
            .profil-bung {
                height: 95vh;
                margin-top: -60px;
                overflow: auto;
            }

            .profil-content {
                margin-top: 10px;
            }

            .profil-content-isi {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .profil_kiri {
                margin-top: 10px;
                width: 100%;
            }

            .profil_input {
                width: 200px
            }
        }

        @media screen and (max-width: 400px) {
            .profil-content {
                margin-top: 40xp
            }
        }
    </style>
    <main>
        <div class="profil-bung">
            <div class="profil-content hidden">
                <div class="anim profil-content-isi">
                    <div class="profil_kanan">
                        {{-- <h1 class="profil_h1">Edit profil</h1> --}}
                        <div class="gmbTamp">
                            @if (Auth::User()->img == null)
                                <img style="background-color: #1A2474
                            "
                                    src="{{ asset('assets/img/av.png') }}" alt="image" class="profil_img" id="imgPreview">
                            @else
                                <img src="{{ asset('gambar') . '/' . $user->img }}" alt="image" class="profil_img"
                                    id="imgPreview">
                            @endif
                        </div>
                        <button hidden class="profil_addGmb" id="uploadBtn" onclick="showUploadDialog()">Masukkan foto
                            profil</button>
                        <button class="profil_hapusAkun" id="del" onclick="openDelModal()">Hapus akun</button>
                    </div>
                    <div class="profil_kiri">
                        <form id="edit" action="/profile/update/{{ Auth::user()->id }}" enctype="multipart/form-data"
                            method="POST" class="profil_form" onsubmit="return validateForm()">
                            @method('put')
                            @csrf
                            <label class="profil_label" for="username">Username</label><br>
                            <input value="{{ $user->name }}" disabled type="text" name="username" id="username"
                                class="profil_input" style="cursor: not-allowed"><br>
                            <label class="profil_label" for="email">Email</label><br>
                            <input value="{{ $user->email }}" disabled type="email" name="email" id="email"
                                class="profil_input" style="cursor: not-allowed"><br>
                            <div class="ndelik" id="pass" hidden>
                                <label class="profil_label" id="passwordlam" for="passwordlam">Password Lama</label><br>
                                <input type="password" name="passwordlam" id="" class="profil_input"><br>
                                <label class="profil_label" for="password">Ubah Password</label><br>
                                <input type="password" name="password" id="" class="profil_input"><br>
                                <label class="profil_label" for="password">Confirm Password</label><br>
                                <input type="password" name="konfirm_password" id="" class="profil_input"><br>
                            </div>
                            <input type="file" hidden name="gambar" id="gambar">
                            <button class="profil_simpan" type="button" id="ed"
                                onclick="enableInputs()">Edit</button>
                            <div class="form_bottom">
                                <button class="profil_batal" hidden type="reset" onclick="batInputs()"
                                    id="bat">Batal</button>
                                <button type="submit" id="sim" hidden class="profil_simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "{{ session('success') }}",
            });
        </script>
    @endif


    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ $errors->first() }}'
            })
        </script>
    @endif


    <div id="DelComModal" class="del-com-modal navAni">
        <div class="del-conmo">
            <span class="del-close" onclick="closeDelModal()">&times;</span>
            <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
            <p class="del-hapus-tulisan2">Apakah anda yakin ingin menghapus Akun ini</p>
            <div class="del-bungkus-hapusbutton">
                <button id="delbal" class="del-batal-button" onclick="closeDelModal()">Batal</button>
                <form method="POST" action="{{ route('profile.destroy') }}">

                    @csrf
                    @method('DELETE')
                    <button id="btnTrash" class="del-hapus-button" onclick="deleteItem()" type="submit">Hapus</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function enableInputs() {
            document.getElementById("username").removeAttribute("disabled");
            document.getElementById("email").removeAttribute("disabled");
            document.getElementById("username").removeAttribute("style");
            document.getElementById("email").removeAttribute("style");
            document.getElementById("pass").removeAttribute("hidden");
            document.getElementById("bat").removeAttribute("hidden");
            document.getElementById("sim").removeAttribute("hidden");
            document.getElementById("uploadBtn").removeAttribute("hidden");
            document.getElementById("ed").setAttribute("hidden", true);
        }
    </script>
    <script>
        function batInputs() {
            document.getElementById("username").setAttribute("disabled", true);
            document.getElementById("email").setAttribute("disabled", true);
            document.getElementById("username").setAttribute("style", "cursor: not-allowed");
            document.getElementById("email").setAttribute("style", "cursor: not-allowed");
            document.getElementById("pass").setAttribute("hidden", true);
            document.getElementById("bat").setAttribute("hidden", true);
            document.getElementById("sim").setAttribute("hidden", true);
            document.getElementById("uploadBtn").setAttribute("hidden", true);
            document.getElementById("ed").removeAttribute("hidden");
        }
    </script>

    <script>
        function validateForm() {
            var name = document.forms["edit"]["username"].value;
            var email = document.forms["edit"]["email"].value;
            var password = document.forms["edit"]["password"].value;
            var conpassword = document.forms["edit"]["konfirm_password"].value;
            var icon = document.forms["edit"]["gambar"].value;
            var passwordLama = document.forms["edit"]["passwordlam"].value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.svg)$/i;

            if (name == "") {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Username harus diisi",
                });
                return false;
            }

            if (email == "") {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Email harus diisi",
                });
                return false;
            }

            if (passwordLama !== "") {
                if (password !== "") {
                    if (password.length < 8) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Password harus 8 karakter',
                        });
                        return false;
                    }

                    if (conpassword !== password) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Konfirmasi Password harus Sama Dengan Password',
                        });
                        return false;
                    }
                }
            } else {
                if (password !== "" || conpassword !== "") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Warning',
                        text: 'Isikan Password Lama Terlebih Dahulu',
                    });
                    return false;
                }
            }


            if (icon && !allowedExtensions.exec(icon)) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Format file Foto tidak sesuai (jpg, jpeg, png, svg)",
                });
                return false;
            }


            return true;
        }
    </script>

    <script>
        function openDelModal(index) {
            var delmodal = document.getElementById("DelComModal");
            delmodal.style.display = "block";
        }

        function closeDelModal(index) {
            var delmodal = document.getElementById("DelComModal");
            delmodal.style.display = "none";
        }

        function deleteItem(index) {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }

        function showUploadDialog() {
            // Mengambil input file
            const inputGambar = document.getElementById("gambar");

            // Mengklik input file secara otomatis
            inputGambar.click();

            // Menampilkan gambar yang dipilih ke dalam elemen <img>
            inputGambar.addEventListener("change", function() {
                // Mengambil file gambar yang diupload
                const fileGambar = this.files[0];

                // Membuat URL untuk menampilkan gambar
                const urlGambar = URL.createObjectURL(fileGambar);

                // Mengganti gambar pada elemen <img>
                const imgPreview = document.getElementById("imgPreview");
                imgPreview.src = urlGambar;
            });
            // const inputGambar = document.createElement("input");
            // var
            // inputGambar.type = "file";
            // inputGambar.accept = "image/*";
            // inputGambar.style.display = "none";
            // inputGambar.addEventListener("change", function() {
            //     // Mengambil file gambar yang diupload
            //     const fileGambar = this.files[0];

            //     // Membuat URL untuk menampilkan gambar
            //     const urlGambar = URL.createObjectURL(fileGambar);

            //     // Mengganti gambar pada imgPreview
            //     const imgPreview = document.getElementById("imgPreview");
            //     imgPreview.src = urlGambar;
            //     const inputImg = document.getElementById("gambar");
            //     inputImg.value = fileGambar;
            // });

            // // Menambahkan inputGambar ke dalam dokumen
            // document.body.appendChild(inputGambar);

            // // Menampilkan dialog upload file ketika inputGambar di klik
            // inputGambar.click();
        }
    </script>
@endsection