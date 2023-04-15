@extends('layout.Dashboard_user.base')
@section('konten')
    {{-- <main>
        <div class="content">
            <div class="sl-content hidden">
                <div class="anim sl-content-isi">
                    <div class="sl_buat_tautan">
                        <form action="" class="bt_form">
                            <label for="" class="bt_label">Buat Tautan</label>
                            <input type="text" name="tp" id="tp" class="bt_tp" placeholder="Tautan Panjang">
                            <input type="text" name="jp" id="jp" class="bt_jp" placeholder="Judul Tautan (Optional)">
                            <button type="submit" class="bt_btnS">
                                Submit
                                <i class="fa-solid fa-check"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @include('layout.Dashboard_User.footer')
        </div>
    </main> --}}
    <main>
        <div class="content">
            <div class="sl-content hidden">
                <div class="anim sl-content-isi">
                    <div class="sl_buat_tautan">
                        <div class="bt_done">
                            <p class="bt_doneP">Tautan berhasil dibuat</p>
                        </div>
                        <form action="" class="bt_form">
                            <label for="" class="bt_label">Nama Tautan</label>
                            <div class="bt_tpC">
                                <input type="text" name="tp" id="tp" class="bt_tpIC" placeholder="Tautan Pendek">
                                <button class="bt_btnCopy">
                                    <i class="fa-regular fa-copy"></i>
                                </button>
                            </div>
                            <input type="text" name="jp" id="jp" class="bt_jp" placeholder="Tautan Panjang">
                            <button type="submit" class="bt_btnS">
                                <i class="fa-solid fa-chevron-left"></i>
                                Kembali
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @include('layout.Dashboard_User.footer')
        </div>
    </main>
@endsection
