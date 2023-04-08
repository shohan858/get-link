@extends('layout.Dashboard_user.base')
@section('konten')
    <main>
        <div class="content">
            <div class="pages1-content hidden">
                <div class="anim regu-content-top">
                    @if ($count_microsite == $limit_microsite)
                        <button class="content-tambah" title="Anda Sudah mencapai Max, Upgrade Untuk Menambah " style="cursor:no-drop" disabled> tambah microsite </button>
                    @else
                        <a class="content-tambah" href="/page2"> tambah microsite </a>
                    @endif
                    <input type="text" name="cari" id="cari" class="content-cari" placeholder="Cari microsite" />
                </div>
                <div class="tenggah">
                    <p class="st">{{ $count_microsite }}/{{ $limit_microsite }}</p>
                </div>
                {{-- @foreach ($my_microsite as $item)
                    <div class="anim content-isi-regu">
                        <div class="content-kiri-regu">
                            <div class="content-box"></div>
                            <div class="box-text">
                                <p class="nama-microsite">{{ $item->name }}</p>
                                <a class="link-microsite">{{ $item->link }}</a>
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
                            <button id="del1" class="content-crud">
                                <img src="{{ asset('assets/img/Vector (2).svg') }}" alt="" />
                                Hapus
                            </button>
                        </div>
                    </div>
                @endforeach --}}
                @foreach ($my_microsite as $index => $item)
                    <div class="anim content-isi-regu search-microsite" data-nama="{{ strtolower($item->name) }}">
                        <div class="content-kiri-regu">
                            <div class="content-box"></div>
                            <div class="box-text">
                                <p class="nama-microsite">{{ $item->name }}</p>
                                <a class="link-microsite">{{ env('APP_URL') }}/microsite/{{ $item->link }}</a>
                                <p class="pb-microsite"></p>
                            </div>
                        </div>
                        <div class="content-kanan">
                          <button class="content-crud" onclick="copyToClipboard('{{ $item->link }}')">
                            <img src="{{ asset('assets/img/Vector (3).svg') }}" alt="" />
                            Bagikan
                        </button>
                            <a href="pages5.html" class="content-crud">
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
@endsection
@push('scripts')
    {{-- <!-- The Modal -->
<div id="DelComModal" class="del-com-modal navAni">
  <!-- Modal content -->
  <div class="del-conmo">
      <span class="del-close">&times;</span>
      <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
      <p class="del-hapus-tulisan2">
          Apakah anda yakin ingin menghapus komponen ini
      </p>
      <div class="del-bungkus-hapusbutton">
          <button id="delbal" class="del-batal-button">Batal</button>
          <button id="btnTrash1" class="del-hapus-button">Hapus</button>
      </div>
  </div>
</div> --}}

    {{-- <script>
  var delmodal = document.getElementById("DelComModal");

  // Get the button that opens the modal
  var delbtn1 = document.getElementById("del1");

  // Get the <span> element that closes the modal
  var delspan = document.getElementsByClassName("del-close")[0];

  var delBal = document.getElementById("delbal")

  // When the user clicks the button, open the modal
  delbtn1.onclick = function() {
      delmodal.style.display = "block";
  };
  delBal.onclick = function() {
      delmodal.style.display = "none";
  };

  // When the user clicks on <span> (x), close the modal
  delspan.onclick = function() {
      delmodal.style.display = "none";
  };

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == delmodal) {
          delmodal.style.display = "none";
      }
  };
</script> --}}

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

<script>
  function copyToClipboard(link) {
      const input = document.createElement('textarea');
      input.value = '{{ env('APP_URL') }}/microsite/' + link;
      document.body.appendChild(input);
      input.select();
      document.execCommand('copy');
      document.body.removeChild(input);
      if(document.body.removeChild){
        swal.fire({
                          icon:'success',
                          title:'Berhasil',
                          text:'Berhasil Copy Link',
                          timer:'900',
                        });
      }else{
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
@endpush
