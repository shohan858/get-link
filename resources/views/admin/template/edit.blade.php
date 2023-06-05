@extends('admin.layout.base')

@section('admin_konten')
    <style>
        .content {
            /* position: absolute; */
            overflow: auto;
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100vh;
            top: 100px;
            margin: 0px;
            z-index: 1;
        }

        .lang-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            margin-top: 30px;
        }

        .btnprev {
            width: 100%;
            height: 80px;
            position: relative;
        }

        .pages5-tambah-prew {
            position: absolute;
            width: 100px;
            left: -60px;
            display: none;
            transition: 0.3s;
            height: 45px;
            /* margin-top: 80px; */
            margin-top: 20px;
            background: #ffffff;
            border: 2px solid #6b75e6;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .pages5-bagi {
            display: flex;
            justify-content: flex-start;
            width: 100%;
        }

        .pages5-kiri {
            height: 100vh;
            width: 40%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 80px 0 20px;
        }

        .pages5-top-btn {
            display: flex;
            justify-content: space-evenly;
            width: 100%;
        }

        .pages5-tambah-komponen {
            width: 60%;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
            background: #ffffff;
            border: 2px solid #6b75e6;
            border-radius: 20px;
        }

        .pages5-tambah-komponen:hover {
            background-color: #6b75e6;
            color: #ffffff;
        }

        .komponen-kkiri {
            height: 60vh;
            width: 100%;
            margin-top: 10%;
            overflow: auto;
        }

        .pages5-komponen-2 {
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            align-items: center;
            width: 100%;
            height: auto;
            background: #ffffff;
            margin-top: 0px;
        }

        .pages5-komponen-text {
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;
            width: 100%;
            height: 76px;
            background: #ffffff;
            border: 0.5px solid #303030;
            margin-top: 0px;
        }

        .pages5-komponen-gambar-kiri,
        .pages5-komponen-gambar-kanan,
        .pages5-komponen-text-kiri,
        .pages5-komponen-text-kanan {
            display: flex;
            align-items: center;
        }

        .btn-drag {
            margin-left: 5px;
            height: 50px;
            cursor: pointer;
            background: #ffffff;
            border-right: 2px solid #eeeeee;
        }

        .btn-trash {
            height: 50px;
            cursor: pointer;
            background: #ffffff;
        }

        .btn-3dot {
            height: 50px;
            cursor: pointer;
            background: #ffffff;
        }

        .btn-drop {
            height: 50px;
            cursor: pointer;
            background: #ffffff;
        }

        .btn-trash:hover,
        .btn-switch:hover,
        .btn-drag:hover,
        .btn-drop:hover {
            background-color: rgba(0, 0, 0, 0.219);
            border-radius: 25px;
        }

        .pages5-isi {
            margin-left: 10px;
            margin-right: 5px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 17px;
            line-height: 23px;

            color: #000000;
        }

        .drop-3dot {
            margin-right: 10px;
            display: inline-block;
            position: relative;
        }

        .div3Dot-drop {
            display: none;
            position: absolute;
            z-index: 10;
            min-width: 160px;
            padding: 10px;
            right: -80px;
        }

        .div3Dot-drop .div3Dot-isi {
            display: block;
            background-color: #ebebeb;
            color: black;
            text-decoration: none;
            cursor: pointer;
            width: 60%;
            height: 53px;
            z-index: 10;
            margin: 0px 20px 0px 0px;
        }

        .div3Dot-drop .div3Dot-isi:hover {
            background-color: #bfc0c0;
            z-index: 10;
        }

        .div3Dotact {
            display: block;
            z-index: 10;
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

        /* Modal Content */
        .del-conmo {
            background-color: #fefefe;
            margin: auto;
            padding: 2%;
            border-radius: 5px;
            width: 50%;
        }

        /* The Close Button */
        .del-close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .del-close:hover,
        .del-close:focus {
            color: #000;
            text-decoration: none;
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
            margin-left: 80%;
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
            left: 452px;
            top: 86px;
            cursor: pointer;
            background: #524799;
            border-radius: 5px;
            border-color: #524799;
        }

        .pages5-bungkusjajan {
            margin-top: 50px;
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: flex-end;
        }

        .pages5-lamnjut {
            margin-right: 5%;
            display: flex;
            justify-content: space-between;
        }

        .pages5-lanjutkan {
            margin-right: 5%;
            width: 100px;
            height: 35px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
            background: #ffffff;
            border: 2px solid #524799;
            border-radius: 20px;
            margin-bottom: 10px;
            text-decoration: none;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 23px;
            color: #524799;
        }

        .pages5-lanjutkan:hover,
        .pages5-lanjutkan:hover .finish path {
            background: #524799;
            color: #ffffff;
            fill: #ffffff;
        }

        .pages5-kanan {
            height: 650px;
            width: 35%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        .pages5-preview {
            text-overflow: ellipsis;
            width: 45%;
            height: 45px;
            margin-top: 40px;
            background: #ffffff;
            border: 2px solid #6b75e6;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
            overflow: hidden;
        }

        .pages5-preview:hover {
            background-color: #6b75e6;
            color: #ffffff;
        }

        .kanan-bungkus {
            border-radius: 10px;
            height: auto;
            overflow: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-compoas {
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            align-items: center;
            justify-content: center;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);

        }

        .modal-compo-barua {
            width: 40%;
            height: fit-content;
            background: #ffffff;
            border-radius: 10px;
            display: flex;
            flex-direction: column;

        }

        .modal-atas {
            width: 88%;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-left: 6%;
            margin-right: 6%;
            margin-bottom: 30px;
        }

        .comp-text {
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 21px;
            color: #524799;
        }

        .comp-x {
            cursor: pointer;
        }

        .modal-bawah {
            /* display: grid;
                                                                                                        grid-template-columns: repeat(2, 1fr);
                                                                                                        grid-gap: 20px;
                                                                                                        margin: 0 10px 10px 10px; */

            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 30px;
            margin: 0 10px 10px 10px;
        }

        .comp-card {
            background-color: #ffffff;
            border: none;
            outline: none;
            display: flex;
            justify-content: flex-start;
            cursor: pointer;
        }

        .comp-card:hover,
        .comp-card-active {
            background-color: #f7f7f7;
        }

        .comp-teks {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 10px;
        }

        .head-name {
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 400;
            margin: 0;
            font-size: 15px;
            line-height: 18px;
            color: #524799;
        }

        .comp-penjes {
            font-family: "Roboto", sans-serif;
            text-align: left;
            font-style: normal;
            font-weight: 300;
            font-size: 12px;
            line-height: 14px;
            margin: 5px 0 0 0;
            color: #dbcec8;
        }

        /* wahda */
        .bungkus {
            width: 100%;
            height: max-content;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top left;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2% 2% 2% 2%;
            box-sizing: border-box;
            /* position: fixed;
                                                                                           top: -200px;
                                                                                           left: 0;
                                                                                           right: 0;
                                                                                           bottom: 0; */
            overflow: auto;
        }

        .bungkus .bungkus-anak:first-child {
            margin-top: 60px;
        }

        /* .bungkus .bungkus-anak:last-child {
                                                                                           margin-bottom: 60px;
                                                                                        } */

        .bungkus-anak-gmb {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            width: 450px;
        }

        .bungkus-anak p {
            text-align: center;
        }

        .deskripsi {
            width: 450px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 18px;
            text-align: center;
            color: #FFFFFF;
        }

        .ba_iframe {
            width: 450px;
            height: 220px;
            border-radius: 15px;
        }

        .bungkus .bungkus-anak {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 7px 0 10px 0;
            flex-wrap: wrap;
            box-sizing: border-box;
        }

        .konten-template {
            width: 20%;
            margin: 10px;
        }

        .konten-template img {
            width: 100%;
            border-radius: 15px;
        }

        .icon-template {
            border-radius: 50%;
            width: 130px;
            height: 130px;
        }

        .title-template {
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 28px;
            color: #FFFFFF;
            text-align: center;
        }

        .medsos-template {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin: 0 10px;
            background-color: #ccc;
        }

        .medsos-template img {
            max-width: 100%;
            max-height: 100%;
        }

        @media screen and (max-width: 992px) {
            .pages5-preview {
                width: 63%;
            }

            .pages5-tambah-komponen {
                width: 65%;
            }

            .pages5-komponen-2 {
                height: auto;
            }

            .pages5-isi {
                font-size: 12px;
                margin-left: 1px;
            }

            .modal-compo-barua {
                width: 60%;
            }
        }

        @media screen and (max-width: 900px) {
            .del-conmo {
                width: 60%;
                height: 30vh;
            }

            .del-hapus-tulisan1 {
                font-size: 16px;
            }

            .del-bungkus-hapusbutton {
                margin-left: 60%;
                margin-top: 10%;
            }

            .del-batal-button {
                margin-bottom: 2%;
            }
        }

        @media screen and (max-width: 768px) {
            .adIs {
                justify-content: flex-start !important;
            }

            .lang-content {
                margin-left: 2px;
            }

            .pages5-tambah-prew {
                display: flex;
                align-items: center;
                justify-content: flex-end;
            }

            .pages5-tambah-prew:hover {
                left: 0;
                background-color: #6b75e6;
                color: #ffffff;
            }

            .pages5-tambah-prew {
                display: block;
            }

            .pages5-kiri {
                height: auto;
                width: 100%;
                left: 0;
                margin: 0 30px;
                /* position: absolute; */
            }

            .pages5-kiri.pages5kirPrew {
                left: -100%;
            }

            .komponen-kkiri {
                width: 90%;
            }

            .pages5-kanan {
                top: 165px;
                position: absolute;
                width: 80%;
                left: -200%;
                transition: left 0.5s ease-in-out;
            }

            .pages5-kanan.pages5Prew {
                left: 100px;
            }
        }

        @media screen and (max-width: 600px) {
            .lang-content {
                margin-top: 10px;
                margin-left: 2px;
            }

            .pages5-kanan {
                width: 75%;
                /* height: auto; */
            }

            .modal-compo-barua {
                width: 70%;
                /* height: auto; */
            }

            .modal-atas {
                height: 12%;
            }

            .comp-text {
                font-size: 15px;
            }

            .konten-template {
                width: 25%;
                margin: 10px;
            }

            .del-conmo {
                width: 80%;
                height: 30vh;
            }
        }

        @media screen and(max-width: 500px) {
            .del-bungkus-hapusbutton {
                margin-left: 40%;
                margin-top: 22%;
            }
        }

        @media screen and (max-width: 550px) {
            .icon-template {
                width: 100px;
                height: 100px;
            }

            .title-template {
                font-size: 22px;
            }

            .medsos-template {
                width: 50px;
                height: 50px;
            }

            .deskripsi {
                width: 350px;
                font-size: 15px;
            }

            .ba_iframe {
                width: 350px;
                height: 155px;
            }

            .pages5-kanan {
                width: 50%;
                /* height: auto; */
            }
        }

        @media screen and (max-width: 500px) {
            .pages5-kanan {
                width: 30%;
                /* height: auto; */
            }

            .pages5-kanan.pages5Prew {
                left: 188px;
            }
        }

        @media screen and (max-width: 390px) {
            .medsos-template {
                width: 40px;
                height: 40px;
            }

            .medsos-template img {
                max-width: 70%;
                max-height: 70%;
            }

            .deskripsi {
                width: 300px;
                font-size: 15px;
            }

            .ba_iframe {
                width: 300px;
                height: 155px;

            }
        }
    </style>
    <div class="content">
        <div class="lang-content">
            <div class="btnprev">
                <button class="pages5-tambah-prew">
                    preview
                    <i class="fa-solid fa-mobile-screen"></i>
                </button>
            </div>
            <div class="pages5-bagi">
                <div id="prew1" class="pages5-kiri">
                    <div class="pages5-top-btn">
                        <button class="pages5-tambah-komponen" id="CCOpmBtn">
                            <i class="fa-solid fa-plus" style="color: #524799"></i>
                            Tambah Komponen Baru
                        </button>
                    </div>

                    <div id="pgKr" class="komponen-kkiri">
                        @foreach ($drag as $key => $item)
                            @if ($item['status'] === 'off')
                                <div id="pages5Kom{{ $key }}" draggable="true" data-id="{{ $item['id'] }}"
                                    data-status="{{ $item['status'] }}" data-order="{{ $item['order'] }}"
                                    data-komponen="{{ $item['id_komponen'] }}" class="pages5-komponen-2"
                                    style="opacity: 0.5">
                            @else
                                <div id="pages5Kom{{ $key }}" draggable="true" data-id="{{ $item['id'] }}"
                                    data-status="{{ $item['status'] }}" data-order="{{ $item['order'] }}"
                                    data-komponen="{{ $item['id_komponen'] }}" class="pages5-komponen-2">
                            @endif
                                <div class="pages5-komponen-text">
                                    <div class="pages5-komponen-text-kiri">
                                        <button class="btn-drag">
                                            <img class="pages5-isi" src="{{ asset('assets/img/Group 71.png') }}"
                                                alt="" />
                                        </button>
                                        <i class="fa-regular fa-user" style="margin-left: 10px"></i>
                                        <p class="pages5-isi">{{ $item['title'] }}</p>
                                    </div>
                                    <div class="pages5-komponen-text-kanan">
                                        <button id="btnSwitch{{ $key }}" class="btn-switch">
                                            @if ($item['status'] === 'off')
                                                <i id="icon{{ $key }}" class="fa-solid fa-eye-slash"
                                                    style="color: red"></i>
                                            @else
                                                <i id="icon{{ $key }}" class="fa-solid fa-eye"></i>
                                            @endif
                                        </button>
                                        <button id="del{{ $key }}" class="btn-trash">
                                            <i id=trash{{ $key }} class="fa-solid fa-trash"></i>
                                        </button>
                                        <div class="drop-3dot">
                                            <button id="btnDrop3Dot{{ $key }}" class="btn-3dot">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="div3Dot{{ $key }}" class="div3Dot-drop">
                                                <button class="up div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.166342 8.49996L8.49967 0.166626L16.833 8.49996L15.3747 9.98433L9.54134 4.151L9.54134 16.8333L7.45801 16.8333L7.45801 4.151L1.62467 9.98433L0.166342 8.49996Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke atas
                                                </button>
                                                <button class="down div3Dot-isi">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.8337 8.50004L8.50033 16.8334L0.166992 8.50004L1.62533 7.01567L7.45866 12.849L7.45866 0.166708L9.54199 0.166708L9.54199 12.849L15.3753 7.01567L16.8337 8.50004Z"
                                                            fill="#A5A5A5" />
                                                    </svg>
                                                    Pindah ke bawah
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="DelComModal{{ $key }}" data-id_komponen="{{ $item['id'] }}" class="del-com-modal">
                                        <!-- Modal content -->
                                        <div class="del-conmo">
                                            <span class="del-close">&times;</span>
                                            <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
                                            <p class="del-hapus-tulisan2">
                                                Apakah anda yakin ingin menghapus komponen ini
                                            </p>
                                            <div class="del-bungkus-hapusbutton">
                                                <button id="delbal{{ $key }}" class="del-batal-button">Batal</button>
                                                <button id="btnTrash{{ $key }}" class="del-hapus-button">Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="pages5Kom" draggable="true" class="pages5-komponen-2">
                        <div class="pages5-komponen-text">
                            <div class="pages5-komponen-text-kiri" style="margin-left: 30px">
                                <p class="pages5-isi">fjdvfdegvb</p>
                                <label for="typecolor">color</label>
                                <input type="radio" name="type" value="color" id="typecolor">
                                <label for="typeimage">image</label>
                                <input type="radio" name="type" value="image" id="typeimage">
                                <input type="color" style="display: none" name="backgroundcolor" id="backgroundcolor">
                                <input type="file" style="display: none" name="backgroundimage" id="backgroundimage">
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="loop" value="{{ count($drag) }}">

                    <div class="pages5-bungkusjajan">
                        <div class="pages5-lamnjut">
                            <button id="btnSudah" class="pages5-lanjutkan">
                                Selesai
                                <svg class="finish" width="19" height="15" viewBox="0 0 19 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.875 2.29169L6.37499 14.7917L0.645828 9.06252L2.11458 7.59377L6.37499 11.8438L17.4062 0.822937L18.875 2.29169Z"
                                        fill="#524799" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div id="prew2" class="pages5-kanan">
                    <a href="{{ route('admin.preview_template', ['id' => $background->id]) }}"
                        class="pages5-preview">Preview Template</a><br />
                    <div id="kanan-bungkus" style="background-color: transparent" class="kanan-bungkus">

                        @if ($background->type_background == 'color')
                            <div class="bungkus" style='background: {{ $background->background }}'>
                            @else
                                <div class="bungkus"
                                    style="background-image: url('{{ asset('microsite/background/' . $background->background) }}')">
                        @endif
                        <?php $non_bungkus = ''; ?>
                        @foreach ($data as $d)
                            <?php
                            // mengganti string "src=" pada folder "microsite/konten/"
                            $html = str_replace('src="microsite/konten', 'src="' . asset('microsite/konten/'), $d['code']);
                            // mengganti string "src=" pada folder "microsite/medsos/"
                            $html = str_replace('src="microsite/medsos', 'src="' . asset('microsite/medsos/'), $html);
                            $non_bungkus .= $html;
                            ?>
                        @endforeach
                        {!! $non_bungkus !!}
                    </div>
                </div>
            </div>
        </div>


        <div id="CompoModal" class="modal-compoas" style="display: none;">
            <div class="modal-compo-barua">
                <div class="modal-atas">
                    <h1 class="comp-text">Tambah komponen baru</h1>
                    <span class="comp-x">&times;</span>
                </div>
                <div class="modal-bawah">
                    @foreach ($tambah_komponen as $key => $tk)
                        <button class="comp-card btnKomponen sudahPilih" data-id="{{ $tk->id }}"
                            id="btnkomponen{{ $key + 1 }}">
                            <i class="fa-solid {{ $tk->icon }}" style="color: #524799;"></i>
                            <div class="comp-teks">
                                <p class="head-name">
                                    {{ $tk->name }}
                                </p>
                                <p class="comp-penjes">
                                    {{ $tk->desc }}
                                </p>
                            </div>
                        </button>
                    @endforeach
                </div>
                <input type="hidden" id="komponenLoop" value="{{ $tambah_komponen->count() }}">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).on('click', '.hapusssss', function() {
            Swal.fire({
                icon: 'question',
                title: 'Apakah Anda Yakin Menghapus Konten Ini??',
                showDenyButton: true,
                confirmButtonText: 'Iya',
                denyButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('hapus_konten_anak_microsite') }}",
                        type: "post",
                        dataType: "json",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "id_microkon": $(this).data('id')
                        },
                        success: function(response) {
                            console.log(response);
                            $('#pgKr').load(window.location.href + ' #pgKr');
                            $('#kanan-bungkus').load(window.location.href + ' #kanan-bungkus');
                        }
                    })
                } else {
                    swal.fire({
                        icon: 'info',
                        title: 'Aksi dibatalkan',
                        timer: 800,
                    });
                }
            });
        });
    </script>

    <script>
        $(document).on('click', '#btnSudah', function() {
            var url = window.location.href;
            var parameter = url.substring(url.lastIndexOf('/') + 1);
            $.ajax({
                url: "{{ url('admin/update_status_template_edit/:id') }}".replace(':id', parameter),
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    window.location.href = "{{ route('table_template') }}";
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Request failed. Status code: ' + jqXHR.status + '. Error message: ' +
                        errorThrown);
                }
            });
        });
    </script>

    <script>
        var typecolor = document.getElementById("typecolor");
        var typeimage = document.getElementById("typeimage");
        var backgroundcolor = document.getElementById("backgroundcolor");
        var backgroundimage = document.getElementById("backgroundimage");

        if ({{ $background->type_background == 'color' ? 'true' : 'false' }}) {
            typecolor.checked = true;
            backgroundcolor.style.display = "block";
            backgroundimage.style.display = "none";
        } else {
            typeimage.checked = true;
            backgroundcolor.style.display = "none";
            backgroundimage.style.display = "block";
        }

        typecolor.addEventListener("change", function() {
            backgroundcolor.style.display = "block";
            backgroundimage.style.display = "none";
        });

        typeimage.addEventListener("change", function() {
            backgroundcolor.style.display = "none";
            backgroundimage.style.display = "block";
        });

        $(document).ready(function() {
            $('#backgroundcolor, #backgroundimage').on('change', function() {

                var backgroundPreview = '';

                if ($('#backgroundimage').val() != '') {
                    var background = $('#backgroundimage')[0].files[0];

                    backgroundPreview = 'url(' + URL.createObjectURL($('#backgroundimage')[0].files[0]) + ')';

                    $('#backgroundcolor').val('');

                    $('.bungkus').css('background-image', backgroundPreview);
                } else if ($('#backgroundcolor').val() != '') {
                    var background = $('#backgroundcolor').val();

                    backgroundPreview = $('#backgroundcolor').val();

                    $('#backgroundimage').val('');

                    $('.bungkus').css('background', backgroundPreview);

                }

                var url = window.location.href;
                var parameter = url.substring(url.lastIndexOf('/') + 1);
                var formData = new FormData();
                formData.append('background', background);
                formData.append('id', parameter);
                // Kirim data menggunakan ajax
                $.ajax({
                    url: "{{ url('admin/update_background_template/:id') }}".replace(':id',
                        parameter),
                    method: 'POST',
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });

        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

    <script>
        $(document).ready(function() {
            var url1 = window.location.href;
            var parameter = url1.substring(url1.lastIndexOf('/') + 1);

            var idVal = $('#komponenLoop').val();
            for (var i = 1; i <= idVal; i++) {

                var btnKomponen = $("#btnkomponen" + i);

                btnKomponen.click(function() {

                    $.ajax({
                        url: "{{ url('admin/tambah_komponen_template/:id') }}".replace(':id',
                            parameter),
                        type: "POST",
                        data: {
                            id: $(this).data("id"),
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            console.log(response);
                            document.querySelector('#CompoModal').style.display = 'none';
                            $('#pgKr').load(window.location.href + ' #pgKr');
                            $('#kanan-bungkus').load(window.location.href + ' #kanan-bungkus');
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.statusText);
                        }
                    });

                });

            }
        });
    </script>

    <script src="{{ asset('assets/summernote/summernote-lite.js') }}"></script>

    <script>
        function sendData() {
            var url = window.location.href;
            var parameterTerakhir = url.substring(url.lastIndexOf('/') + 1);

            var order = [];
            var komponen = [];
            var microdet = [];

            // Mengambil order dari setiap elemen
            $(".pages5-komponen-2").each(function() {
                order.push($(this).data("order"));
            });
            $(".pages5-komponen-2").each(function() {
                komponen.push($(this).data("komponen"));
            });
            $(".pages5-komponen-2").each(function() {
                microdet.push($(this).data("id"));
            });


            // Mengirim data-order ke server
            $.ajax({
                url: "{{ url('admin/update_template_admin/:id') }}".replace(':id', parameterTerakhir),
                method: "POST",
                data: {
                    order: order,
                    komponen: komponen,
                    microdet: microdet,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log("Data-order berhasil dikirim ke server");
                    $('#kanan-bungkus').load(window.location.href + ' #kanan-bungkus');
                },
                error: function(xhr, status, error) {
                    console.log("Terjadi kesalahan: " + error);
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            const parent = document.getElementById("pgKr");
            const children = document.querySelectorAll(".pages5-komponen-2");

            let draggingChild = null;

            children.forEach((child) => {
                const grandchild = child.querySelector(".div3Dot-drop");
                if (grandchild) {
                    const upButton = grandchild.querySelector(".up");
                    const downButton = grandchild.querySelector(".down");

                    upButton.addEventListener("click", () => {
                        const prevSibling = child.previousElementSibling;
                        if (prevSibling) {
                            parent.insertBefore(child, prevSibling);
                        }
                        sendData()
                        console.log("Tombol Pindah ke atas diklik!");
                    });

                    downButton.addEventListener("click", () => {
                        const nextSibling = child.nextElementSibling;
                        if (nextSibling) {
                            parent.insertBefore(nextSibling, child);
                        } else {
                            parent.appendChild(child);
                        }
                        sendData()
                        console.log("Tombol Pindah ke atas diklik!");
                    });

                    grandchild.addEventListener("dragstart", () => {
                        draggingChild = child;
                        sendData();
                        console.log("Tombol Pindah ke atas diklik!");
                    });

                    grandchild.addEventListener("dragend", () => {
                        draggingChild = null;
                        sendData();
                        console.log("Tombol Pindah ke atas diklik!");
                    });

                    grandchild.addEventListener("dragover", (e) => {
                        e.preventDefault();
                        const target = e.target.closest(".pages5-komponen-2");
                        if (target && target !== draggingChild) {
                            const rect = target.getBoundingClientRect();
                            const y = e.clientY - rect.top;
                            if (y < rect.height / 2) {
                                parent.insertBefore(draggingChild, target);
                            } else {
                                parent.insertBefore(draggingChild, target.nextElementSibling);
                            }
                            sendData();
                        }
                    });
                }
            });
        });
    </script>

    <script>
        const buttonPrew = document.querySelector(".pages5-tambah-prew");
        const prew1 = document.getElementById("prew1");
        const prew2 = document.getElementById("prew2");

        buttonPrew.addEventListener("click", function() {
            prew1.classList.toggle("pages5kirPrew");
            prew2.classList.toggle("pages5Prew");
            buttonPrew.classList.add("preew");
        });

        window.onclick = function(event) {
            if (event.target == buttonPrew) {
                buttonPrew.classList.remove("preew");
            }
        };

        const elements = document.querySelectorAll(".pages5-komponen-2");

        let currentElement = null;

        elements.forEach((element) => {
            element.addEventListener("dragstart", () => {
                currentElement = element;
            });

            element.addEventListener("dragover", (event) => {
                event.preventDefault();
            });

            element.addEventListener("drop", () => {
                const dropZone = event.target.closest(".pages5-komponen-2");

                if (dropZone && dropZone !== currentElement) {
                    const parent = currentElement.parentNode;
                    const indexCurrentElement = Array.prototype.indexOf.call(
                        parent.children,
                        currentElement
                    );
                    const indexDropZone = Array.prototype.indexOf.call(
                        parent.children,
                        dropZone
                    );

                    if (indexCurrentElement < indexDropZone) {
                        parent.insertBefore(currentElement, dropZone.nextSibling);
                    } else {
                        parent.insertBefore(currentElement, dropZone);
                    }

                    sendData();
                }

                currentElement = null;
            });
        });

        var Commodal = document.getElementById("CompoModal");

        // Get the button that opens the modal
        var Combtn = document.getElementById("CCOpmBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("comp-x")[0];

        // When the user clicks the button, open the modal
        Combtn.onclick = function() {
            Commodal.style.display = "flex";
        };

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Commodal.style.display = "none";
        };
    </script>

    <script>
        //dropdown

        $(document).ready(function() {
            var id = $('#loop').val();
            for (var i = 0; i < id; i++) {
                // Ubah ID setiap elemen HTML dengan menambahkan nomor iterasi
                var dropdownBtn = $("#dropdown-btn-" + i);
                var dropdownContent = $("#dropdown-content-" + i);
                var iit = $("#it" + i);

                // Lakukan sesuatu dengan elemen yang telah dimodifikasi
                // contoh: tambahkan event listener untuk dropdown button
                function createDropdownToggleListener(dropdownContent, iit) {
                    return function() {
                        dropdownContent.toggleClass("drop-tampil-1");
                        if (iit.hasClass("fa-chevron-down")) {
                            iit.removeClass("fa-chevron-down").addClass("fa-chevron-up");
                        } else {
                            iit.removeClass("fa-chevron-up").addClass("fa-chevron-down");
                        }
                    }
                }

                // Menambahkan event listener dengan fungsi closure
                dropdownBtn.on("click", createDropdownToggleListener(dropdownContent, iit));

                var url = window.location.href;
                var parameterTerakhir = url.substring(url.lastIndexOf('/') + 1);

                const btnSwitch = $("#btnSwitch" + i);
                const comp = $("#pages5Kom" + i);
                const icon = $("#icon" + i);

                function sendStatus(status) {
                    $.ajax({
                        type: "POST",
                        url: "{{ url('admin/update_status_template/:id') }}".replace(':id',
                            parameterTerakhir),
                        data: {
                            id: comp.attr("data-id"),
                            status: status,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            console.log(response);
                            $('#kanan-bungkus').load(window.location.href + ' #kanan-bungkus');
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });
                }

                // Definisikan fungsi event listener untuk button
                function createToggleListener(comp, icon) {
                    return function() {
                        if (comp.css("opacity") === "0.5") {
                            comp.css("opacity", "1");
                            icon.removeClass("fa-eye-slash");
                            icon.addClass("fa-eye");
                            icon.css("color", "");
                            sendStatus(comp.attr("data-status") === "on" ? "off" : "on");
                            comp.attr("data-status", "on");
                        } else {
                            comp.css("opacity", "0.5");
                            icon.removeClass("fa-eye");
                            icon.addClass("fa-eye-slash");
                            icon.css("color", "#c80000");
                            sendStatus(comp.attr("data-status") === "on" ? "off" : "on");
                            comp.attr("data-status", "off");
                        }
                    };
                }

                // Tambahkan event listener ke button dengan fungsi event listener yang telah dibuat
                btnSwitch.on("click", createToggleListener(comp, icon));


                const divAc = $("#div3Dot" + i);
                const acDiv = $("#btnDrop3Dot" + i);

                // Tambahkan event listener ke button dengan fungsi event listener yang telah dibuat
                acDiv.on("click", function() {
                    // Cari dan tutup button-button lain dengan kelas "div3Dotact"
                    $(".div3Dotact").not(divAc).removeClass("div3Dotact");

                    // Berikan toggle kelas "div3Dotact" pada button saat ini
                    divAc.toggleClass("div3Dotact");
                });



                (function(index) {
                    var delmodal = $("#DelComModal" + index);
                    var delbtn1 = $("#del" + index);
                    var delspan = $(".del-close");
                    var delBal = $("#delbal" + index);

                    delbtn1.click(function() {
                        delmodal.show();
                    });

                    delspan.click(function() {
                        delmodal.hide();
                    });

                    delBal.click(function() {
                        delmodal.hide();
                    });

                    var url = window.location.href;
                    var parameterTerakhir = url.substring(url.lastIndexOf('/') + 1);

                    var delBtn = $("#btnTrash" + index);
                    delBtn.click(function() {
                        var idKomponen = delmodal.data("id_komponen");
                        $.ajax({
                            url: "{{ url('admin/hapus_komponen_template/:id') }}".replace(
                                ':id', parameterTerakhir),
                            type: "POST",
                            data: {
                                id: idKomponen,
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                location.reload();
                                console.log(response);
                                delmodal.hide();
                                oQuickReply.swap('pgKr');
                                // $('#pgKr').load(window.location.href + ' #pgKr');
                                $('#kanan-bungkus').load(window.location.href +
                                    ' #kanan-bungkus');
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr.statusText);
                            }
                        });
                    });
                })(i);
            }

        });
    </script>
@endsection
