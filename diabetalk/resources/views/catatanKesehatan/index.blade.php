@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        <div class="row" style="height: 100px; background-color: blueviolet">
            <div class="col-2 p-1 d-flex justify-content-center" style="height: 100px">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
            <div class="col grid text-center">
                <h1 class="text-uppercase m-0">Catatan kesehatan</h1>
                <p class="m-0">yuk pantau gula darah anda dengan
                </p>
                <p>mencatat hasil cek kesehatan disini</p>
            </div>
        </div>
        <div class="row d-flex mt-3 text-center" style="background-color: antiquewhite">
            <div class="col-xl-6 pt-4">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex justify-content-end">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#modalKadarGulaDarah"
                                class="btn btn-outline-secondary rounded-circle">+</a>
                        </div>
                        <canvas id="chartKadarGulaDarah" width="400" height="200">
                        </canvas>
                        <button class="btn btn-outline-white p-0 border-0 col-12" data-bs-toggle="collapse"
                            data-bs-target="#informasiSkalaGulaDarah" aria-expanded="false"
                            aria-controls="informasiSkalaGulaDarah">
                            <i class="bi bi-three-dots fs-4"></i>
                        </button>
                        <!-- Informasi Skala (Collapse) -->
                        <div class="collapse mt-3 pb-3" id="informasiSkalaGulaDarah">
                            <div class="card card-body">
                                <h6>Skala Kadar Gula Darah</h6>
                                <ul>
                                    <li class="text-success"><strong>70-99 mg/dL:</strong> Normal</li>
                                    <li class="text-warning"><strong>100-125 mg/dL:</strong> Pra-diabetes</li>
                                    <li class="text-danger"><strong>>125 mg/dL:</strong> Diabetes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 p-4">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex justify-content-end">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#modalKadarGulaDarah"
                                class="btn btn-outline-secondary rounded-circle">+</a>
                        </div>
                        <canvas id="chartHbAc1" width="400" height="200">
                        </canvas>
                        <button class="btn btn-outline-white p-0 border-0 col-12" data-bs-toggle="collapse"
                            data-bs-target="#informasiHbAc1" aria-expanded="false" aria-controls="informasiHbAc1">
                            <i class="bi bi-three-dots fs-4"></i>
                        </button>
                        <!-- Informasi Skala (Collapse) -->
                        <div class="collapse mt-3 pb-3" id="informasiHbAc1">
                            <div class="card card-body">
                                <h6>Skala HbAc1</h6>
                                <ul>
                                    <li class="text-success"><strong>70-99 mg/dL:</strong> Normal</li>
                                    <li class="text-warning"><strong>100-125 mg/dL:</strong> Pra-diabetes</li>
                                    <li class="text-danger"><strong>>125 mg/dL:</strong> Diabetes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 pt-4">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex justify-content-end">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#modalKadarGulaDarah"
                                class="btn btn-outline-secondary rounded-circle">+</a>
                        </div>
                        <canvas id="chartKonsumsiAir" style="width: 400px; height: 200px">
                        </canvas>
                        <button class="btn btn-outline-white p-0 border-0 col-12" data-bs-toggle="collapse"
                            data-bs-target="#informasiKonsumsiAir" aria-expanded="false"
                            aria-controls="informasiKonsumsiAir">
                            <i class="bi bi-three-dots fs-4"></i>
                        </button>
                        <!-- Informasi Skala (Collapse) -->
                        <div class="collapse mt-3 pb-3" id="informasikonsumsiair">
                            <div class="card card-body">
                                <h6>Skala Konsumsi Air</h6>
                                <ul>
                                    <li class="text-success"><strong>70-99 mg/dL:</strong> Normal</li>
                                    <li class="text-warning"><strong>100-125 mg/dL:</strong> Pra-diabetes</li>
                                    <li class="text-danger"><strong>>125 mg/dL:</strong> Diabetes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 p-4">
                aktivitas
            </div>
        </div>
        <div class="row grid text-center mt-3" style="background-color: blueviolet">
            <h4 class="text-muted">Hasil lab lainnya</h4>
            <div>
                tekanan darah+
            </div>
            <div>
                kolesterol+
            </div>
            <div>
                fungsi ginjal+
            </div>
        </div>
    </div>
    {{-- modal kadar gula darah --}}
    <div class="modal fade" id="modalKadarGulaDarah" tabindex="-1" aria-labelledby="modalKadarGulaDarah"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKadarGulaDarah">Bagaimana kadar gula darahmu hari ini ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="kadarGulaDarah"
                            placeholder="Masukan kadar gula darah">
                        <label for="kadarGulaDarah">Masukan kadar gula darah...</label>
                    </div>
                </div>
                <div class="modal-footer grid">
                    <button type="submit" class="btn btn-primary col-12">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // CHART KADAR GULA DARAH
        // Data dari controller
        const dates = @json($dates);
        const sugarLevels = @json($sugarLevels);

        // Konfigurasi Chart.js
        const chartKadarGulaDarah = document.getElementById('chartKadarGulaDarah').getContext('2d');
        new Chart(chartKadarGulaDarah, {
            type: 'line',
            data: {
                labels: dates,
                datasets: [{
                    label: 'Grafik Kadar Gula Darah',
                    data: sugarLevels,
                    borderColor: 'rgba(255, 0, 0, 1)',
                    backgroundColor: 'rgba(200, 0, 0, 0.2)',
                    borderWidth: 2,
                    tension: 0.4,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Kadar Gula Darah (mg/dL)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Tanggal'
                        }
                    }
                }
            }
        });

        // CHART HbAc1
        // Data dummy kadar HbA1c
        const months = ['January', 'February', 'March', 'April', 'May'];
        const hba1cLevels = [5.4, 5.8, 6.2, 6.5, 7.0]; // Nilai dummy

        // Konfigurasi Chart.js
        const chartHbAc1 = document.getElementById('chartHbAc1').getContext('2d');
        new Chart(chartHbAc1, {
            type: 'bar',
            data: {
                labels: months, // Label pada sumbu X
                datasets: [{
                    label: 'HbA1c (%)',
                    data: hba1cLevels, // Data kadar HbA1c
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(153, 102, 255, 0.6)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true, // Mulai dari nol
                        title: {
                            display: true,
                            text: 'HbA1c (%)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    }
                }
            }
        });

        //CHART KONSUMSI AIR
        // Data dummy untuk grafik donat
        // Data dummy
        const drinkValue = 3; // Jumlah gelas yang diminum (contoh: 3)
        const maxValue = 8; // Total maksimum gelas
        const remainingValue = maxValue - drinkValue; // Sisa gelas

        // Tanggal hari ini
        const today = new Date().toLocaleDateString('id-ID', {
            day: 'numeric',
            month: 'long',
            year: 'numeric',
        });

        // Chart.js konfigurasi
        const chartKonsumsiAir = document.getElementById('chartKonsumsiAir').getContext('2d');
        new Chart(chartKonsumsiAir, {
            type: 'doughnut',
            data: {
                labels: ['Telah Diminum', 'Sisa'],
                datasets: [{
                    data: [drinkValue, remainingValue],
                    backgroundColor: [
                        drinkValue > 0 ? 'rgba(75, 192, 192, 0.6)' :
                        'rgba(192, 192, 192, 0.6)', // Warna diminum
                        remainingValue > 0 ? 'rgba(192, 192, 192, 0.6)' :
                        'rgba(75, 192, 192, 0.6)', // Warna sisa
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(192, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'top', // Posisi legenda
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw + ' gelas';
                            }
                        }
                    },
                    // Plugin custom untuk menampilkan tanggal di tengah
                    centerText: {
                        display: true,
                        text: today
                    }
                },
                cutout: '70%', // Ukuran lubang tengah
            },
            plugins: [
                // Plugin untuk menampilkan tanggal di tengah
                {
                    id: 'centerText',
                    beforeDraw: function(chart) {
                        const {
                            width
                        } = chart;
                        const {
                            height
                        } = chart;
                        const ctx = chart.ctx;
                        ctx.save();
                        ctx.font = '16px Arial';
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'middle';
                        ctx.fillStyle = '#000';
                        ctx.fillText(chart.options.plugins.centerText.text, width / 2, height / 2);
                        ctx.restore();
                    }
                },
                // Plugin untuk menambahkan label nilai di segmen
                {
                    id: 'segmentLabels',
                    afterDraw: function(chart) {
                        const {
                            ctx,
                            data
                        } = chart;
                        const dataset = data.datasets[0];
                        const total = dataset.data.reduce((a, b) => a + b, 0);

                        chart.getDatasetMeta(0).data.forEach((arc, index) => {
                            const value = dataset.data[index];
                            const percentage = ((value / total) * 100).toFixed(1); // Persentase
                            const label = value > 0 ? `${value}` : '';

                            // Koordinat label
                            const {
                                x,
                                y
                            } = arc.tooltipPosition();
                            ctx.save();
                            ctx.font = '14px Arial';
                            ctx.fillStyle = 'black';
                            ctx.textAlign = 'center';
                            ctx.fillText(label, x, y);
                            ctx.restore();
                        });
                    }
                }
            ]
        });
    </script>
@endsection
