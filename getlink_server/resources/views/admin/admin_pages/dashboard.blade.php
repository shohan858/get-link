@extends('admin.layout.base')

@section('admin_konten')
    <div class="adDashBung">
        <div class="adDash">
            <div class="adCard1">
                <a href="{{ url('get_link') }}" style="text-decoration: none">
                    <div class="cardKan">
                        <p class="adTeCa">MICROSITE</p>
                        <p class="adTeCu1">Microsite</p>
                    </div>
                </a>
                <p class="icon_hilang"><i class="fa-regular fa-file-lines card_icon"></i></p>
            </div>
            <div class="adCard2">
                <a href="{{ url('account') }}" style="text-decoration: none">
                    <div class="cardKan">
                        <p class="adTeCa">AKUN USER</p>
                        <p class="adTeCu2">User</p>
                    </div>
                </a>
                <p class="icon_hilang"><i class="fa-solid fa-user card_iconUser"></i></p>
            </div>
            <div class="adCard3">
                <a href="{{ url('paket') }}" style="text-decoration: none">
                    <div class="cardKan">
                        <p class="adTeCa">PAKET <br> MICROSITE</p>
                        <p class="adTeCu3">Paket</p>
                    </div>
                </a>
                <p class="icon_hilang"><i class="fa-regular fa-gem card_iconMS"></i></p>
            </div>
            <div class="adCard4">
                <a href="{{ url('budget') }}" style="text-decoration: none">
                    <div class="cardKan">
                        <p class="adTeCa">BUDGET</p>
                        <p class="adTeCu4">Budget</p>
                    </div>
                </a>
                <p class="icon_hilang"><i class="fa-solid fa-money-bill card_iconB"></i></p>
            </div>
        </div>

        <div class="adDash_bot">

            {{-- <p style="display: none; height: 200px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum modi eaque rerum accusantium. Ad ipsa quasi asperiores laborum reiciendis. Veritatis dicta sed nihil odio cum culpa hic itaque rerum iste?</p> --}}

            <div class="chartDash">

                <div class="bung_chart">
                    <canvas id="myChart"></canvas>
                </div>

                <div class="botChart">
                    <div class="tahunth">
                        <select class="sy" id="year" onchange="updateChart()">
                            <option class="as" value="2020">2020</option>
                            <option value="2021" selected>2021</option>
                            <option value="2022">2022</option>
                        </select>
                        <label class="th" for="year">Tahun</label>
                    </div>

                    <div class="tvchart">
                        <p class="tovi" id="totalVisitors">0</p>
                        <p class="tovi">Total pengunjung website</p>
                    </div>
                </div>
            </div>

            <div class="chartDash">

                <div class="bung_chart">
                    <canvas id="myChart2"></canvas>
                </div>

                <div class="botChart">
                    <div class="tahunth">
                        <select class="sy" id="yearPen" onchange="updateChart2()">
                            <option class="as" value="Pen2020">2020</option>
                            <option value="Pen2021">2021</option>
                            <option value="Pen2022" selected>2022</option>
                        </select>
                        <label class="th" for="yearPen">Tahun</label>
                    </div>

                    <div class="tvchart">
                        <p class="tovi" id="totalPendapatan">0</p>
                        <p class="tovi">Total Pendapatan</p>
                    </div>
                </div>
            </div>

            <div class="chartDash">

                <div class="bung_chart">
                    <canvas id="myChart3"></canvas>
                </div>

                <div class="botChart">
                    <div class="tahunth">
                        <select class="sy" id="yearLan" onchange="updateChart3()">
                            <option class="as" value="Lan2020">2020</option>
                            <option value="Lan2021">2021</option>
                            <option value="Lan2022" selected>2022</option>
                        </select>
                        <label class="th" for="yearLan">Tahun</label>
                    </div>

                    <div class="tvchart">
                        <p class="tovi" id="totalPenjualan">0</p>
                        <p class="tovi">Total Penjualan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        let total_pengunjung_tahun_kemarin2 = {!! json_encode($total_pengunjung_tahun_kemarin2) !!};
        let pengunjung_tahun_kemarin2 = JSON.parse("[" + total_pengunjung_tahun_kemarin2 + "]");
        
        let total_pengunjung_tahun_kemarin = {!! json_encode($total_pengunjung_tahun_kemarin) !!};
        let pengunjung_tahun_kemarin = JSON.parse("[" + total_pengunjung_tahun_kemarin + "]");
        let total_pengunjung_tahun_ini = {!! json_encode($total_pengunjung_tahun_ini) !!};
        let pengunjung_tahun_ini = JSON.parse("[" + total_pengunjung_tahun_ini + "]");
        const data = {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                'November', 'Desember'
            ],
            datasets: [{
                label: 'Total pengunjung',
                data: pengunjung_tahun_kemarin,
                backgroundColor: '#FF0000',
                borderColor: '#FF0000',
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
            type: 'line', // Lek pengin garis
            // type: 'bar', // Lek pengin block
            responsive: true,
            data: data,
            options: options
        });

        function updateChart() {
            const year = document.getElementById('year').value;
            let totalVisitors = 0;
            if (year === 'all') {
                totalVisitors = allData.flat().reduce((a, b) => a + b, 0);
                chart.data.datasets[0].data = allData.reduce((acc, val) => acc.map((v, i) => v + val[i]));
            } else if (year === '2020') {
                totalVisitors = pengunjung_tahun_kemarin2.reduce((a, b) => a + b, 0);
                chart.data.datasets[0].data = pengunjung_tahun_kemarin2;
            } else if (year === '2021') {
                totalVisitors = pengunjung_tahun_kemarin.reduce((a, b) => a + b, 0);
                chart.data.datasets[0].data = pengunjung_tahun_kemarin;
            } else if (year === '2022') {
                totalVisitors = pengunjung_tahun_ini.reduce((a, b) => a + b, 0);
                chart.data.datasets[0].data = pengunjung_tahun_ini;
            }
            document.getElementById('totalVisitors').innerHTML = `${totalVisitors}`;
            chart.update();
        }


        const ctx2 = document.getElementById('myChart2').getContext('2d');
        total_pendapatan_tahun_kemarin2 = {!! json_encode($total_pendapatan_tahun_kemarin2) !!};
        let pendapatan_tahun_kemarin2 = JSON.parse("[" + total_pendapatan_tahun_kemarin2 + "]");
        
        total_pendapatan_tahun_kemarin = {!! json_encode($total_pendapatan_tahun_kemarin) !!};
        let pendapatan_tahun_kemarin = JSON.parse("[" + total_pendapatan_tahun_kemarin + "]");

        let total_pendapatan_tahun_ini = {!! json_encode($total_pendapatan_tahun_ini) !!};
        let pendapatan_tahun_ini = JSON.parse("[" + total_pendapatan_tahun_ini + "]");
        const data2 = {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                'November', 'Desember'
            ],
            datasets: [{
                label: 'Total pendapatan',
                data: pendapatan_tahun_ini,
                backgroundColor: '#6B75E6',
                borderColor: '#6B75E6',
                borderWidth: 1
            }]
        };
        const options2 = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };
        const chart2 = new Chart(ctx2, {
            // type: 'line', // Lek pengin garis
            type: 'bar', // Lek pengin block
            responsive: true,
            data: data2,
            options: options2
        });

        function updateChart2() {
            const yearPen = document.getElementById('yearPen').value;
            let totalPendapatan = 0;
            if (yearPen === 'all') {
                totalPendapatan = allData.flat().reduce((a, b) => a + b, 0);
                chart2.data.datasets[0].data = allData.reduce((acc, val) => acc.map((v, i) => v + val[i]));
            } else if (yearPen === 'Pen2020') {
                totalPendapatan = pendapatan_tahun_kemarin2.reduce((a, b) => a + b, 0);
                chart2.data.datasets[0].data = pendapatan_tahun_kemarin2;
            } else if (yearPen === 'Pen2021') {
                totalPendapatan = pendapatan_tahun_kemarin.reduce((a, b) => a + b, 0);
                chart2.data.datasets[0].data = pendapatan_tahun_kemarin;
            } else if (yearPen === 'Pen2022') {
                totalPendapatan = pendapatan_tahun_ini.reduce((a, b) => a + b, 0);
                chart2.data.datasets[0].data = pendapatan_tahun_ini;
            }
            document.getElementById('totalPendapatan').innerHTML = `${totalPendapatan}`;
            chart2.update();
        }

        const ctx3 = document.getElementById('myChart3').getContext('2d');
        // total_penjualan_tahun_kemarin2 = {!! json_encode($total_penjualan_tahun_kemarin2) !!};
        // let pendapatan_tahun_kemarin2 = JSON.parse("[" + total_penjualan_tahun_kemarin2 + "]");
        
        // total_penjualan_tahun_kemarin = {!! json_encode($total_penjualan_tahun_kemarin) !!};
        // let pendapatan_tahun_kemarin = JSON.parse("[" + total_penjualan_tahun_kemarin + "]");

        // let total_penjualan_tahun_ini = {!! json_encode($total_penjualan_tahun_ini) !!};
        // let pendapatan_tahun_ini = JSON.parse("[" + total_pendapatan_tahun_ini + "]");

        let total_penjualan_tahun_kemarin2 = {!! json_encode($total_penjualan_tahun_kemarin2) !!};
        let penjualan_tahun_kemarin2 = JSON.parse("[" + total_penjualan_tahun_kemarin2 + "]");
        let total_penjualan_tahun_kemarin = {!! json_encode($total_penjualan_tahun_kemarin) !!};
        let penjualan_tahun_kemarin = JSON.parse("[" + total_penjualan_tahun_kemarin + "]");
        let total_penjualan_tahun_ini = {!! json_encode($total_penjualan_tahun_ini) !!};
        let penjualan_tahun_ini = JSON.parse("[" + total_penjualan_tahun_ini + "]");
        const data3 = {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                'November', 'Desember'
            ],
            datasets: [{
                label: 'Total penjualan',
                data: penjualan_tahun_kemarin,
                backgroundColor: '#1A2474',
                borderColor: '#1A2474',
                borderWidth: 1
            }]
        };
        const options3 = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };
        const chart3 = new Chart(ctx3, {
            // type: 'line', // Lek pengin garis
            type: 'bar', // Lek pengin block
            responsive: true,
            data: data3,
            options: options3
        });

        function updateChart3() {
            const yearLan = document.getElementById('yearLan').value;
            let totalPenjualan = 0;
            if (yearLan === 'all') {
                totalPenjualan = allData.flat().reduce((a, b) => a + b, 0);
                chart3.data.datasets[0].data = allData.reduce((acc, val) => acc.map((v, i) => v + val[i]));
            } else if (yearLan === 'Lan2020') {
                totalPenjualan = penjualan_tahun_kemarin2.reduce((a, b) => a + b, 0);
                chart3.data.datasets[0].data = penjualan_tahun_kemarin2;
            } else if (yearLan === 'Lan2021') {
                totalPenjualan = penjualan_tahun_kemarin.reduce((a, b) => a + b, 0);
                chart3.data.datasets[0].data = penjualan_tahun_kemarin;
            } else if (yearLan === 'Lan2022') {
                totalPenjualan = penjualan_tahun_ini.reduce((a, b) => a + b, 0);
                chart3.data.datasets[0].data = penjualan_tahun_ini;
            }
            document.getElementById('totalPenjualan').innerHTML = `${totalPenjualan}`;
            chart3.update();
        }
    </script>
@endsection
