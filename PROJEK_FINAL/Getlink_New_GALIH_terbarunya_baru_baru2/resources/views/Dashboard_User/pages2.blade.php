@extends('layout.Dashboard_user.base')
@section('konten')
<main>
  <div class="content">
    <div class="lang-content hidden">
      <div class="page2-btnprev">
        <button class="pages5-tambah-prew">
          preview ...
          {{-- <img src="{{ asset('assets/img/Group 68 (1).png') }}" alt="" /> --}}
          <i class="fa-solid fa-mobile-screen"></i>
        </button>
      </div>
      <div class="pages2-bagi">
        <div class="anim hidden pages2-kiri">
          <div id="prew1" class="content-top">
            <h1 class="pages2-h1">Buat Microsite</h1>
          </div>
          <div class="pages2-isi">
            <p class="pages2-tulisan1">
              Silahkan masukkan beberapa informasi untuk membuat <br />
              Microsite anda
            </p>
            <div class="pages2-garis">
              <div class="pages2-garis-1"></div>
              <div class="pages2-garis-2"></div>
              <div class="pages2-garis-3"></div>
            </div>
            <h4 class="pages2-jenis">1. Tentukan Jenis Microsite</h4>
            <div class="pages2-kategori">

              @foreach ($kategori as $item)
              <button class="pages2-button2 btn-kategori" style="color:{{ $item->color }};border:2px solid {{ $item->color }}" data-id="{{ $item->id }}" data-color="{{ $item->color }}">
                <img src="{{ url('microsite/kategori/' . $item->icon) }}" alt="" style="margin-right: 3px">
                {{ $item->name }}
              </button>
              @endforeach
              <input type="hidden" id="input-hidden">

              <!-- End tambah microsite -->
            </div>
            <div class="pages2-lanjut">
              <div class="pages2-bungkus1">
                <p class="pages2-pilih">2. Pilih Template dan Tema</p>
                <p class="pages2-pilih">3. Pilih Nama Microsite</p>
              </div>
              <button class="pages2-lanjutkan submit-button">Lanjutkan ></button>
            </div>
          </div>
        </div>
        <div id="prew2" class="anim hidden pages2-kanan">
          <div class="pages2-gambar2">
            <img src="{{ asset('assets/img/webdesin.png') }}" alt="" width="100%" />
            <h2 class="pages2-preview">Preview Template</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
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

  $('.btn-kategori').click(function() {
    var id = $(this).data('id');
    $('#input-hidden').val(id); // mengambil nilai data-id dari button
    console.log(id); // menampilkan nilai data-id di console
    // kemudian Anda bisa melakukan pengiriman data melalui AJAX request menggunakan nilai id ini
  });

  $(".submit-button").on("click", function() {
    // Ambil nilai dari atribut "data-id" pada button yang diklik
    // var id = $(this).data("id");
    var id = $('#input-hidden').val();

    var url = "{{ url('buat_microsite') }}";
    $.ajax({
      url: "{{ route('page3.id_kategori') }}",
      type: "post",
      dataType: 'json',
      data: {
        "_token": "{{ csrf_token() }}",
        "id": id,
      },
      success: function(response) {
        window.location.href = '/buat_microsite/' + id;
      }

    })
  });

  // Mendapatkan semua element button
  const btnColor = document.querySelectorAll(".btn-kategori");

  let activeBtn = null; // menyimpan button yang sedang aktif (ditekan)
  let inactiveColor = ""; // menyimpan warna border button yang tidak aktif

  // Loop pada setiap button dan menambahkan event listener
  btnColor.forEach(button => {
    const color = button.getAttribute("data-color");

    button.addEventListener("mouseover", function() {
      if (button !== activeBtn) { // jika button tidak sedang aktif (ditekan)
        button.style.color = "white";
        button.style.backgroundColor = color;
        button.style.border = `2px solid ${color}`;
      }
    });

    button.addEventListener("mouseout", function() {
      if (button !== activeBtn) { // jika button tidak sedang aktif (ditekan)
        button.style.color = color;
        button.style.backgroundColor = "";
        button.style.border = `2px solid ${color}`;
      }
    });

    button.addEventListener("click", function() {
      if (button !== activeBtn) { // jika button tidak sedang aktif (ditekan)
        if (activeBtn !== null) { // jika ada button yang sedang aktif sebelumnya
          inactiveColor = activeBtn.getAttribute("data-color"); // simpan warna dari button tidak aktif sebelumnya
      activeBtn.style.backgroundColor = "";
      activeBtn.style.border = `2px solid ${inactiveColor}`;
      activeBtn.style.color = inactiveColor;
        }
        activeBtn =
          button; // mengatur button yang sedang aktif menjadi button yang baru ditekan
          // inactiveColor = color;
          button.style.color = "white";
    button.style.backgroundColor = color;
    button.style.border = `2px solid ${color}`;
      } else {
        activeBtn =
          null; // jika button yang sedang aktif diklik kembali, button menjadi tidak aktif
          button.style.color = color; 
          button.style.color = color; 
    button.style.backgroundColor = "";
    button.style.border = `2px solid ${color}`;
      }
    });
  });
</script>
@endsection