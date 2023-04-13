@extends('layout.Dashboard_User.base')
@section('konten')
<main>
  <div class="content">
    <div class="lang-content hidden">
      <div class="langganan-teks">
        <p class="langganan-h1">BERLANGGANAN</p>
        <p class="langganan-p">
          Berlangganan microsite dapat membantu meningkatkan visibilitas bisnis Anda.<br />
          Anda dapat menampilkan informasi bisnis yang lebih terperinci dan menarik. <br />
          Tunggu apa lagi? Berlangganan sekarang dan temukan potensi bisnis yang lebih besar! <br />
          <br />
        </p>
      </div>
      <div class="lalang">
        <div class="langganan-card">
          @foreach ($data as $item)
          <div class="langganan-p1">
            <div class="langganan-des">
              <p class="p1-h1">{{ $item->name }}</p>
              <p class="p1-r">Rp. {{ number_format($item->harga, 0, ',', '.') }}</p>
              <p class="p1-des">
                Dalam {{ $item->name }} anda akan mendapatkan jumlah slot {{ $item->slot }} dengan harga terjangkau
              </p>
              <div class="langganan-bottom">
                <a href="tambah_slot_microsite/{{ $item->id }}" target="_blank"><button class="p1-lang">Langganan Sekarang</button></a>
              </div>
              <div id="paket-container"></div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</main>
@endsection