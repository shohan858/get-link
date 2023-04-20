@extends('layout.Dashboard_User.base')
@section('konten')
    <main>
        <div class="content">
            <div class="lang-content hidden">
                <div class="langganan-topBagi">
                    <div class="langganan-bagi">
                        <div class="langganan-teks">
                            <p class="langganan-h1">Paket Microsite</p>
                            <p class="langganan-p">
                                Lorem ipsum is placeholder text commonly used in the graphic,
                                print, and publishing industries for previewing layouts and
                                visual mockups. br
                            </p>
                        </div>
                        <div class="bungkus-Ccard">
                            <div class="lalang">
                                <div class="langganan-card">
                                    @foreach ($data as $item)
                                        <div class="langganan-p1">
                                            <div class="langganan-des">
                                                <img class="card_arrow" src="{{ asset('assets/img/Vector 10.png') }}"
                                                    alt="">
                                                <p class="p1-h1">{{ $item->name }}</p>
                                                <p class="p1-r">Rp. {{ $item->harga }}</p>
                                                <p class="p1-des">
                                                    Dalam {{ $item->name }} anda akan mendapatkan jumlah slot
                                                    {{ $item->slot }}
                                                    dengan harga terjangkau
                                                </p>
                                                <div class="langganan-bottom">
                                                    <a target="_blank" class="p1-lang" href="tambah_slot_microsite/{{ $item->id }}">
                                                        Langganan Sekarang
                                                    </a>
                                                </div>
                                                <div id="paket-container"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layout.Dashboard_User.footer')
        </div>
    </main>
@endsection
