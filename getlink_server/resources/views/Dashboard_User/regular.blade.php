@extends('layout.Dashboard_User.base')
@section('konten')
    <main>
        <div class="content">
            <div class="pages1-content hidden">
                <div class="anim regu-content-top">
                    @if ($count_microsite === $limit_microsite)
                        <button class="content-tambah" title="Anda Sudah mencapai Max, Upgrade Untuk Menambah "
                            style="cursor:no-drop" disabled> Tambah Microsite </button>
                    @else
                        <a class="content-tambah" href="/buat_microsite"> Tambah Microsite </a>
                    @endif
                    <input type="text" name="cari" id="cari" class="content-cari" placeholder="Cari microsite" />
                </div>
                <div class="tenggah">
                    <div class="" style="display: flex">
                        <div class="">
                            <p class="st"
                                style="width: auto;border:none;font-weight:300;font-size:14px;line-height: 16.41px;color:#A5A5A5">
                                Jumlah Microsite Saya
                            </p>
                        </div>
                        <div class="" style="margin-left: 5px">
                            <p class="st">{{ $count_microsite }}/{{ $limit_microsite }}</p>
                        </div>
                        @if ($count_microsite === $limit_microsite)
                            <div class="" style="margin-left: 5px">
                                <a href="/langganan" class="gt" style=""><i class="fas fa-plus"></i>
                                    Tambah Slot</a>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Tampilan kosong --}}

                @if ($count_microsite <= 0)
                <div class="empty">
                    <img src="{{ asset('assets/img/Education.png') }}" alt="" class="emptyImg">
                    <p class="emptyP">Anda belum membuat microsite</p>
                </div>
                @else
                @foreach ($my_microsite as $index => $item)
                    <div class="anim content-isi-regu search-microsite" data-nama="{{ strtolower($item->name) }}">
                        <div class="content-kiri-regu">
                            <div class="content-box"><img src="{{ url('microsite/cover/' . $item->cover) }}" alt=""></div>
                            <div class="box-text">
                                <p class="nama-microsite">{{ $item->name }}</p>
                                <a class="link-microsite">{{ env('APP_URL') }}/microsite/{{ $item->link }}</a>
                                <p class="pb-microsite"></p>
                            </div>
                        </div>
                        <div class="content-kanan">
                            <button class="content-crud" onclick="copyToClipboard('{{ $item->link }}')">
                                <i class="fas fa-copy"></i>
                                Salin
                            </button>
                            <a href="rubah_microsite/{{ $item->id_kategori }}/{{ $item->id_template }}/{{ $item->id }}"
                                class="content-crud">
                                <img src="{{ asset('assets/img/🦆 icon _edit_.png') }}" alt="" />
                                Edit
                            </a>
                            <button id="del{{ $index }}" class="content-crud"
                                onclick="openDelModal({{ $index }})">
                                <img src="{{ asset('assets/img/Vector (2).svg') }}" alt="" />
                                Hapus
                            </button>
                        </div>
                    </div>
                @endforeach
                @endif

                {{ $my_microsite->links('pagination::bootstrap-4') }}
                <!-- Perulangan foreach -->

                {{-- <div class="anim content-isi-regu">
                    <div class="content-kiri-regu">
                        <div class="content-box"></div>
                        <div class="box-text">
                            <p class="nama-microsite"></p>
                            <a class="link-microsite"></a>
                            <p class="pb-microsite"></p>
                        </div>
                    </div>
                    <div class="content-kanan">
                        <button class="content-crud">
                            <img src="{{ asset('assets/img/Vector (3).svg') }}" alt="" />
                            Bagikan
                        </button>
                        <a href="pages5.html" class="content-crud">
                            <img src="{{ asset('assets/img/🦆 icon _edit_.png') }}" alt="" />
                            Edit
                        </a>
                        <button class="content-crud">
                            <img src="{{ asset('assets/img/Vector (2).svg') }}" alt="" />
                            Hapus
                        </button>
                    </div>
                </div> --}}

                <!-- End Perulangan -->

            </div>
            @include('layout.Dashboard_User.footer')
        </div>
    </main>

    @foreach ($my_microsite as $index => $item)
        <!-- Modal -->
        <div id="DelComModal{{ $index }}" class="del-com-modal navAni">
            <div class="del-conmo">
                <span class="del-close" onclick="closeDelModal({{ $index }})">&times;</span>
                <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
                <p class="del-hapus-tulisan2">Apakah anda yakin ingin menghapus microsite ini</p>
                <div class="del-bungkus-hapusbutton">
                    <button id="delbal{{ $index }}" class="del-batal-button"
                        onclick="closeDelModal({{ $index }})">Batal</button>
                    <form action="{{ route('microsite.delete', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button id="btnTrash{{ $index }}" class="del-hapus-button"
                            onclick="deleteItem({{ $index }})" type="submit">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach


    <script>
        // mendapatkan elemen input dan konten mikrosite
        const inputCari = document.getElementById('cari');
        const kontenMikrosite = document.querySelectorAll('.search-microsite');

        // menambahkan event input pada elemen input
        inputCari.addEventListener('input', function() {
            const kataKunci = inputCari.value.trim().toLowerCase(); // mendapatkan kata kunci pencarian

            // loop untuk memfilter konten mikrosite berdasarkan kata kunci
            kontenMikrosite.forEach(function(el) {
                const namaMikrosite = el.getAttribute('data-nama');
                const cocok = namaMikrosite.includes(kataKunci);

                if (cocok) {
                    el.style.display = 'flex';
                } else {
                    el.style.display = 'none';
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function copyToClipboard(link) {
            const input = document.createElement('textarea');
            input.value = '{{ env('APP_URL') }}/microsite/' + link;
            document.body.appendChild(input);
            input.select();
            document.execCommand('copy');
            document.body.removeChild(input);
            if (document.body.removeChild) {
                swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Berhasil Copy Link',
                    timer: '900',
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Terjadi kesalahan!',
                })
            }
            //   alert('Link telah disalin ke clipboard!');
        }
    </script>

    <script>
        function openDelModal(index) {
            var delmodal = document.getElementById("DelComModal" + index);
            delmodal.style.display = "block";
        }

        function closeDelModal(index) {
            var delmodal = document.getElementById("DelComModal" + index);
            delmodal.style.display = "none";
        }

        function deleteItem(index) {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '#pop_up_batas', function() {
                alert('Anda Sudah Mencapai Batas');
                return false;
            });
        })
    </script>
@endsection
