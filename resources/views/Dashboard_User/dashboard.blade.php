@extends('layout.Dashboard_User.base')
@section('konten')
    <main>
        <div class="content">
            <div class="ddaash-content hidden">
                <div class="anim dashboard-content-isi">
                    <div class="dashboard-teks">
                        <p class="dashboard-h1">SELAMAT DATANG,</p>
                        <p class="dashboard-nama">
                            {{ Auth::user()->name }}
                            {{-- <button class="btnEP">
                                    <i class="fa-solid fa-user-pen"></i>
                                </button> --}}
                            {{-- <a href="{{route('profil')}}" class="dashboard-aEP">
                                    <i class="fa-solid fa-user-pen"></i>
                                </a> --}}
                        </p>

                        {{-- <a href="{{ route('langganan') }}">
                                <button class="dashboard-berlanggangan">
                                    <svg class="tp-top" width="15" height="14" viewBox="0 0 15 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.375 6.25C14.375 5.91848 14.2433 5.60054 14.0089 5.36612C13.7745 5.1317 13.4565 5 13.125 5H9.175L9.775 2.14375C9.7875 2.08125 9.79375 2.0125 9.79375 1.94375C9.79375 1.6875 9.6875 1.45 9.51875 1.28125L8.85625 0.625L4.74375 4.7375C4.5125 4.96875 4.375 5.28125 4.375 5.625V11.875C4.375 12.2065 4.5067 12.5245 4.74112 12.7589C4.97554 12.9933 5.29348 13.125 5.625 13.125H11.25C11.7688 13.125 12.2125 12.8125 12.4 12.3625L14.2875 7.95625C14.3438 7.8125 14.375 7.6625 14.375 7.5V6.25ZM0.625 13.125H3.125V5.625H0.625V13.125Z"
                                            fill="white" />
                                    </svg>
                                    Berlangganan
                                </button>
                            </a> --}}
                    </div>

                    <div class="dashboard-bawah">

                        <div class="dashboard-card">
                            <div class="dashboard-micro">
                                <img src="assets/img/Vector (15).png" alt=""  class="img_dc"/>
                                <p class="pengunjung-1">Microsite dibuat</p>
                                <p class="pengunjung-p">
                                    {{ $count_microsite }}/{{ $limit_microsite }} Microsite</p>
                            </div>
                            
                            <div class="dashboard-sl">
                                <img src="assets/img/Vector.png" alt="" class="img_dc" style="margin-top: 20%;">
                                <p class="pengunjung-1">Short Link</p>
                                <p class="pengunjung-p">{{Auth::user()->shortlink_count}} ShortLink</p>
                            </div>
                            
                        </div>
                        <div class="chartDash">

                            <div class="bung_chart">
                                <canvas id="myChart"></canvas>
                            </div>
                            <div class="botChart">
                                <div class="tahunth">
                                    <select class="sy" id="year" onchange="updateChart()">
                                        <option class="as" value="{{ date('Y') - 2 }}">{{ date('Y') - 2 }}</option>
                                        <option value="{{ date('Y') - 1 }}">{{ date('Y') - 1 }}</option>
                                        <option value="{{ date('Y') }}" selected>{{ date('Y') }}</option>
                                    </select>
                                    <label class="th" for="year">Tahun</label>
                                </div>

                                <div class="tvchart">
                                    <p class="tovi" id="totalVisitors">0</p>
                                    <p class="tovi">Total Visitor</p>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="dashboard-card">
                            <div class="dashboard-pengunjung">
                                <img src="assets/img/Vector (13).png" alt=""  class="img_dc"/>
                                <p class="pengunjung-1">Pengunjung</p>
                                <p class="pengunjung-p">0 Pengunjung</p>
                            </div>
                            <div class="dashboard-micro">
                                <img src="assets/img/Vector (15).png" alt=""  class="img_dc"/>
                                <p class="pengunjung-1">Microsite dibuat</p>
                                <p class="pengunjung-p">
                                    {{ Auth::user()->jumlah_microsite }}/{{ Auth::user()->batas_microsite }} Microsite</p>
                            </div>
                            <!-- <div class="dashboard-sl">
                                <img src="assets/img/Vector.png" alt="" class="img_dc">
                                <p class="pengunjung-1">Short Link</p>
                                <p class="pengunjung-p">0 shortLink</p>
                            </div> -->
                        </div> --}}
                    </div>
                </div>
            </div>
            @include('layout.Dashboard_User.footer')
        </div>
    </main>
    <div id="sudah" class="selesai" style="display: none;">
        <!-- Modal content -->
        <div class="selesai-jadi">
            <span class="selesai-close">&times;</span>
            <img src="img/pinkphone.png" alt="" class="hppink" />
            <p class="selesai-tulisan2">Selamat!! Microsite anda sudah jadi</p>
            <button class="selesai-button">Oke</button>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        let tahun_ini = {!! json_encode($data_tahun_ini) !!};
        let data_tahun_ini = JSON.parse("[" + tahun_ini + "]");

        let tahun_kemarin = {!! json_encode($data_tahun_kemarin) !!};
        let data_tahun_kemarin = JSON.parse("[" + tahun_kemarin + "]");

        let tahun_kemarin2 = {!! json_encode($data_tahun_kemarin2) !!};
        let data_tahun_kemarin2 = JSON.parse("[" + tahun_kemarin2 + "]");

        const data = {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                'November', 'Desember'
            ],
            datasets: [{
                label: 'Total pengunjung microsite',
                data: data_tahun_ini,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };
        const options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };
        const chart = new Chart(ctx, {
            // type: 'line', // Lek pengin garis
            type: 'bar',    // Lek pengin block
            data: data,
            options: options
        });

        function updateChart() {
            const year = document.getElementById('year').value;
            let totalVisitors = 0;
            if (year === 'all') {
                totalVisitors = allData.flat().reduce((a, b) => a + b, 0);
                chart.data.datasets[0].data = allData.reduce((acc, val) => acc.map((v, i) => v + val[i]));
            } else if (year === '{{ date('Y') - 2 }}') {
                totalVisitors = data_tahun_kemarin2.reduce((a, b) => a + b, 0);
                chart.data.datasets[0].data = data_tahun_kemarin2;
            } else if (year === '{{ date('Y') - 1 }}') {
                totalVisitors = data_tahun_kemarin.reduce((a, b) => a + b, 0);
                chart.data.datasets[0].data = data_tahun_kemarin;
            } else if (year === '{{ date('Y') }}') {
                totalVisitors = data_tahun_ini.reduce((a, b) => a + b, 0);
                chart.data.datasets[0].data = data_tahun_ini;
            }
            document.getElementById('totalVisitors').innerHTML = `${totalVisitors}`;
            chart.update();
        }
    </script>
@endsection
