@extends('layout.Dashboard_User.base')
@section('konten')
    <main>
        <div class="content">
            <div class="profil-content hidden">
                <div class="anim profil-content-isi">
                    <div class="profil_kanan">
                        <h1 class="profil_h1" style="color:#1A2474">Edit profil</h1>
                        <div class="gmbTamp">
                            @if (Auth::User()->img == null)
                            <img style="background-color: #1A2474
                            " src="{{ asset('assets/img/av.png') }}" alt="image" class="profil_img" id="imgPreview">
                            @else
                            <img src="{{ asset('gambar') . '/' . $user->img }}" alt="image" class="profil_img" id="imgPreview">
                            @endif
                        </div>
                        <button class="profil_addGmb" id="uploadBtn" onclick="showUploadDialog()">Masukkan foto
                            profil</button>
                        <button class="profil_hapusAkun" id="del" onclick="openDelModal()">Hapus akun</button>
                    </div>
                    <div class="profil_kiri">
                        <form id="edit" action="/profile/update/{{ Auth::user()->id }}" enctype="multipart/form-data" method="POST" class="profil_form" onsubmit="return validateForm()">
                            @method("put")
                            @csrf
                            <label class="profil_label" for= "username">Username</label>
                            <input value="{{ $user->name }}" type="text" name="username" id="" class="profil_input">
                            <label class="profil_label" for="email">Email</label>
                            <input  value="{{ $user->email }}" type="email" name="email" id="" class="profil_input">
                            <label class="profil_label" for="password">Ubah Password</label>
                            <input type="password" name="password" id="" class="profil_input">
                            <label class="profil_label" for="password">Confirm Password</label>
                            <input type="password" name="konfirm_password" id="" class="profil_input">
                            <input type="file" hidden name="gambar" id="gambar">
                            <div class="form_bottom">
                                <button class="profil_batal" type="reset">Batal</button>
                                <button type="submit" class="profil_simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('layout.Dashboard_User.footer')
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function validateForm() {
            var name = document.forms["edit"]["username"].value;
            var email = document.forms["edit"]["email"].value;
            var password = document.forms["edit"]["password"].value;
            var conpassword = document.forms["edit"]["konfirm_password"].value;
            var icon = document.forms["edit"]["gambar"].value;
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

            if (password !== "") {
                if (password.length < 8) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Password harus 8 karakter',
                    });
                    return false;
                }

                if (conpassword !== password){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Konfirmasi Password harus Sama Dengan Password',
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

            Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "Berhasil Edit Profile",
                });
            return true;
        }

    </script>

    <div id="DelComModal" class="del-com-modal navAni">
        <div class="del-conmo">
            <span class="del-close" onclick="closeDelModal()">&times;</span>
            <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
            <p class="del-hapus-tulisan2">Apakah anda yakin ingin menghapus microsite ini</p>
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
