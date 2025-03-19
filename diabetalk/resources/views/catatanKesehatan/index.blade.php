@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        <div class="row" style="height: 100px;">
            <div class="col-2 p-1 d-flex justify-content-center" style="height: 100px">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
            <div class="col grid text-center">
                <p class="h1 text-uppercase m-0 teks-judul-halaman">Catatan kesehatan</p>
                <p class="lead fs-5 m-0 teks-di-bawah-judul-halaman">
                    yuk pantau gula darah anda dengan mencatat hasil cek kesehatan disini
                </p>
            </div>
        </div>


        <div class="row d-flex mt-3 text-center" style="background-color: antiquewhite; border-radius: 10px;">
            {{-- CHART KONSUMSI AIR --}}
            <div class="col-xl-6 pt-4">
                <div class="card shadow-sm">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="offset-4 col-5">
                                <h5>Konsumsi Air</h5>
                            </div>
                            <div class="offset-1 col-2">
                                {{-- button add data water consumption --}}
                                <a type="button" data-bs-toggle="modal" data-bs-target="#modalKonsumsiAir"
                                    class="btn btn-outline-primary rounded-circle">+</a>
                                </a>
                                {{-- modal add data water consumption --}}
                                <form action="" method="post">
                                    <div class="modal fade" id="modalKonsumsiAir" tabindex="-1"
                                        aria-labelledby="modalKonsumsiAir" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalKonsumsiAir">Jumlah konsumsi air</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="kadarGulaDarah"
                                                            placeholder="Masukan kadar gula darah">
                                                        <label for="kadarGulaDarah">Masukan jumlah konsumsi air...</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer grid">
                                                    <button type="submit" class="btn btn-primary col-12">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <canvas id="chartKonsumsiAir"></canvas>
                        </div>

                        <!-- Button Collapse -->
                        <button class="btn w-100 text-center mt-2" data-bs-toggle="collapse"
                            data-bs-target="#informasiKonsumsiAir" aria-expanded="false"
                            aria-controls="informasiKonsumsiAir">
                            <i class="bi bi-chevron-down fs-5"></i> Informasi Konsumsi Air
                        </button>

                        <!-- Informasi Skala (Collapse) -->
                        <div class="collapse mt-3 pb-3" id="informasiKonsumsiAir">
                            <div class="card card-body border-light shadow-sm">
                                <h6 class="fw-bold mb-3">💧 Rekomendasi Cairan Pasien Diabetes Melitus</h6>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Perempuan: 30ml/kg Berat badan
                                    </li>
                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Laki-laki: 40ml/kg Berat badan
                                    </li>
                                    <li class="mt-2">
                                        <strong>Contoh:</strong> <br> Perempuan dengan berat badan 56kg, maka:
                                        <ul class="ps-3">
                                            <li><i class="bi bi-droplet-half"></i> 30ml x 56kg = 1680 ml</li>
                                            <li><i class="bi bi-cup"></i> Setara dengan 7 gelas/hari</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CHART LANGKAH  --}}
            <div class="col-xl-6 pt-4">
                <div class="card shadow-sm">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="offset-4 col-5">
                                <h5>Aktivitas</h5>
                            </div>
                            {{-- button add data step --}}
                            <div class="offset-1 col-2">
                                <a type="button" data-bs-toggle="modal" data-bs-target="#modalLangkah"
                                    class="btn btn-outline-primary rounded-circle">+</a>
                            </div>
                            {{-- modal add data step --}}
                            <div class="modal fade" id="modalLangkah" tabindex="-1" aria-labelledby="modalLangkah"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <form action="" method="post">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalLangkah">Jumlah langkah</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="kadarGulaDarah"
                                                        placeholder="Masukan kadar gula darah">
                                                    <label for="kadarGulaDarah">Masukan jumlah langkah...</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer grid">
                                                <button type="submit" class="btn btn-primary col-12">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <img src="icons/training.png" id="iconLangkah" alt="training">
                            <div class="grid align-content-center">
                                <h6>0/6000 langkah</h6>
                                <h6>(kalori terbakar) kkal</h6>
                            </div>
                        </div>

                        <!-- Button Collapse -->
                        <button class="btn w-100 text-center mt-2" data-bs-toggle="collapse"
                            data-bs-target="#informasiLangkah" aria-expanded="false" aria-controls="informasiLangkah">
                            <i class="bi bi-chevron-down fs-5"></i> Informasi Aktifitas
                        </button>

                        <!-- Informasi Skala (Collapse) -->
                        <div class="collapse mt-3 pb-3" id="informasiLangkah">
                            <div class="card card-body border-light shadow-sm">
                                <h6 class="fw-bold mb-3">Rekomendasi langkah harian</h6>
                                <ul>
                                    <li>Durasi : 30 menit - 1 jam</li>
                                    <li>Frekuensi : minimal 5x per minggu</li>
                                    <li>Langkah harian : 7000-10.000 per hari</li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- CHART KADAR GULA DARAH --}}
            <div class="col-xl-6 pt-4">
                <div class="card shadow-sm">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="offset-3 col-6">
                                <h5>Kadar Gula Darah</h5>
                            </div>
                            <div class="offset-1 col-2">
                                <a type="button" data-bs-toggle="modal" data-bs-target="#modalKadarGulaDarah"
                                    class="btn btn-outline-primary rounded-circle">+</a>
                            </div>
                        </div>
                        <canvas id="chartKadarGulaDarah" width="400" height="200">
                        </canvas>

                        {{-- Button collapse --}}
                        <button class="btn w-100 text-center mt-2" data-bs-toggle="collapse"
                            data-bs-target="#informasiSkalaGulaDarah" aria-expanded="false"
                            aria-controls="informasiSkalaGulaDarah">
                            <i class="bi bi-chevron-down fs-5"></i> Informasi kadar gula darah
                        </button>

                        <!-- Informasi Skala (Collapse) -->
                        <div class="collapse mt-3 pb-3" id="informasiSkalaGulaDarah">
                            <div class="card shadow-sm">
                                <div
                                    class="card-header bg-primary text-white d-flex align-items-center justify-content-center">
                                    <h5 class="mb-0"><i class="bi bi-info-circle"></i> Skala Kadar Gula Darah</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-primary"><i class="bi bi-droplet"></i> Gula Darah Puasa</h6>
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item text-success"><i class="bi bi-check-circle"></i>
                                            <strong>70-99 mg/dL:</strong> Normal
                                        </li>
                                        <li class="list-group-item text-warning"><i class="bi bi-exclamation-circle"></i>
                                            <strong>100-125 mg/dL:</strong> Pra-diabetes
                                        </li>
                                        <li class="list-group-item text-danger"><i class="bi bi-x-circle"></i>
                                            <strong>>125 mg/dL:</strong> Diabetes
                                        </li>
                                    </ul>

                                    <h6 class="text-primary"><i class="bi bi-clock-history"></i> Gula Darah Setelah Makan
                                        (2 Jam)</h6>
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item text-success"><i class="bi bi-check-circle"></i> Normal
                                            : < 140 mg/dL</li>
                                        <li class="list-group-item text-warning"><i class="bi bi-exclamation-circle"></i>
                                            Pra-diabetes : 140-199 mg/dL</li>
                                        <li class="list-group-item text-danger"><i class="bi bi-x-circle"></i> Diabetes :
                                            > 200 mg/dL</li>
                                    </ul>

                                    <h6 class="text-primary"><i class="bi bi-clipboard-heart"></i> Gula Darah Acak</h6>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            Untuk diagnosis diabetes, kadar gula darah acak <strong class="text-danger">di
                                                atas 200 mg/dL</strong>
                                            dapat mengindikasikan DM, terutama jika disertai gejala seperti sering haus,
                                            sering buang air kecil, dan kelelahan.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- CHART HBAC1 --}}
            <div class="col-xl-6 pt-4 mb-3">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="offset-4 col-5">
                                <h5>Kadar HbA1c</h5>
                            </div>
                            <div class="offset-1 col-2">
                                <a type="button" data-bs-toggle="modal" data-bs-target="#modalKadarGulaDarah"
                                    class="btn btn-outline-primary rounded-circle">+</a>
                            </div>
                        </div>
                        <canvas id="chartHbAc1" width="400" height="200">
                        </canvas>
                        {{-- button collapse --}}
                        <button class="btn w-100 text-center mt-2" data-bs-toggle="collapse"
                            data-bs-target="#informasiHbAc1" aria-expanded="false" aria-controls="informasiHbAc1">
                            <i class="bi bi-chevron-down fs-5"></i> Informasi kadar HbA1c
                        </button>
                        <!-- Informasi Skala (Collapse) -->
                        <div class="collapse mt-3 pb-3" id="informasiHbAc1">
                            <div class="card card-body">
                                <h6>Kadar HbA1c untuk penderita diabetes melitus</h6>
                                <ul>
                                    <li class="text-success"><strong>
                                            < 5,7%:</strong> Normal</li>
                                    <li class="text-warning"><strong> 5,7% - 6,4%: </strong> Pra-diabetes</li>
                                    <li class="text-danger"><strong>>6,4%:</strong> Diabetes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center mt-3 g-4" style="background-color: antiquewhite; border-radius: 10px;">
            <div class="col-12">
                <h4 class="text-muted">Hasil lab lainnya</h4>
            </div>
            {{-- Tekanan darah --}}
            <div class="col-xl-4 col-12">
                <div class="card">
                    <div class="card-body p-1">
                        <div class="grid">
                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="m-0">Tekanan darah</p>
                                </div>
                                <div class="col-2">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#modalKadarGulaDarah"
                                        class="btn pt-0"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>

                            <p class="h2 bold mb-0">100</p>
                            {{-- Button collapse --}}
                            <button class="btn btn-outline-white p-0 border-0 col-12" data-bs-toggle="collapse"
                                data-bs-target="#informasiTekananDarah" aria-expanded="false"
                                aria-controls="informasiTekananDarah">
                                <i class="bi bi-three-dots fs-4"></i>
                            </button>

                            <!-- Informasi (Collapse) -->
                            <div class="collapse" id="informasiTekananDarah">
                                <div class="card card-body">
                                    <h6>Skala tekanan darah</h6>
                                    <ul>
                                        <li class="text-success"><strong>120/80 mmHg:</strong> Normal</li>
                                        <li class="text-warning"><strong>120-139 / 80-89 mmHg:</strong> Pra-hipertensi</li>
                                        <li class="text-danger"><strong>>140/90 mmHg:</strong> Hipertensi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- kolesterol --}}
            <div class="col-xl-4 col-12">
                <div class="card">
                    <div class="card-body p-1">
                        <div class="grid">
                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="m-0">Kolesterol</p>
                                </div>
                                <div class="col-2">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#modalKadarGulaDarah"
                                        class="btn pt-0"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            <p class="h2 bold mb-0">100</p>

                            {{-- collapse button --}}
                            <button class="btn btn-outline-white p-0 border-0 col-12" data-bs-toggle="collapse"
                                data-bs-target="#informasiKolesterol" aria-expanded="false"
                                aria-controls="informasiKolesterol">
                                <i class="bi bi-three-dots fs-4"></i>
                            </button>

                            <!-- Informasi (Collapse) -->
                            <div class="collapse mt-3 pb-3" id="informasiKolesterol">
                                <div class="card shadow-lg border-0">
                                    <div class="card-header bg-success text-white d-flex justify-content-center">
                                        <h5 class="mb-0"><i class="bi bi-info-circle"></i> Informasi Kolesterol</h5>
                                        {{-- <button class="btn btn-light btn-sm" data-bs-toggle="collapse"
                                            data-bs-target="#informasiKolesterol">
                                            <i class="bi bi-x-lg"></i>
                                        </button> --}}
                                    </div>
                                    <div class="card-body">
                                        <h6 class="text-success"><i class="bi bi-heart-pulse"></i> Kolesterol Total</h6>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item text-success"><i class="bi bi-check-circle"></i>
                                                <strong>
                                                    < 200 mg/dL:</strong> Normal
                                            </li>
                                            <li class="list-group-item text-warning"><i
                                                    class="bi bi-exclamation-circle"></i> <strong>200-239 mg/dL:</strong>
                                                Borderline High</li>
                                            <li class="list-group-item text-danger"><i class="bi bi-x-circle"></i>
                                                <strong>>= 240 mg/dL:</strong> High
                                            </li>
                                        </ul>

                                        <h6 class="text-primary"><i class="bi bi-shield-exclamation"></i> Kolesterol Jahat
                                            (LDL)</h6>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item text-success"><i class="bi bi-check-circle"></i>
                                                <strong>
                                                    < 100 mg/dL:</strong> Optimal
                                            </li>
                                            <li class="list-group-item text-info"><i class="bi bi-info-circle"></i>
                                                <strong>100-129 mg/dL:</strong> Near Optimal
                                            </li>
                                            <li class="list-group-item text-warning"><i
                                                    class="bi bi-exclamation-circle"></i> <strong>130-159 mg/dL:</strong>
                                                Borderline High</li>
                                            <li class="list-group-item text-danger"><i class="bi bi-x-circle"></i>
                                                <strong>160-189 mg/dL:</strong> High
                                            </li>
                                            <li class="list-group-item text-dark"><i
                                                    class="bi bi-exclamation-triangle"></i> <strong>>= 190 mg/dL:</strong>
                                                Very High</li>
                                        </ul>

                                        <h6 class="text-primary"><i class="bi bi-emoji-smile"></i> Kolesterol Baik (HDL)
                                        </h6>
                                        <ul class="list-group">
                                            <li class="list-group-item text-success"><i class="bi bi-gender-male"></i>
                                                <strong>> 40 mg/dL:</strong> Pria
                                            </li>
                                            <li class="list-group-item text-success"><i class="bi bi-gender-female"></i>
                                                <strong>> 50 mg/dL:</strong> Wanita
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- fungsi ginjal --}}
            <div class="col-xl-4 col-12 mb-3">
                <div class="card">
                    <div class="card-body p-1">
                        <div class="grid">
                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="m-0">Fungsi ginjal</p>
                                </div>
                                <div class="col-2">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#modalKadarGulaDarah"
                                        class="btn pt-0"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            <p class="h2 bold mb-0">100</p>

                            <button class="btn btn-outline-white p-0 border-0 col-12" data-bs-toggle="collapse"
                                data-bs-target="#informasiFungsiGinjal" aria-expanded="false"
                                aria-controls="informasiFungsiGinjal">
                                <i class="bi bi-three-dots fs-4"></i>
                            </button>
                            <!-- Informasi (Collapse) -->
                            <div class="collapse" id="informasiFungsiGinjal">
                                <div class="card card-body">
                                    <h6>Skala tekanan darah</h6>
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
                        drinkValue > 0 ? 'rgba(75, 192, 192, 0.6)' : 'rgba(192, 192, 192, 0.6)',
                        remainingValue > 0 ? 'rgba(192, 192, 192, 0.6)' : 'rgba(75, 192, 192, 0.6)'
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
                        position: 'center',
                        labels: {
                            font: {
                                size: 10
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw + ' gelas';
                            }
                        }
                    },
                    centerText: {
                        display: true,
                        text: today
                    }
                },
                cutout: '50%',
            },
            plugins: [{
                    id: 'centerText',
                    beforeDraw: function(chart) {
                        const {
                            width,
                            height
                        } = chart;
                        const ctx = chart.ctx;
                        ctx.save();
                        ctx.font = '12px Arial'; // Ukuran teks tengah lebih kecil
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'middle';
                        ctx.fillStyle = '#000';
                        ctx.fillText(chart.options.plugins.centerText.text, width / 2, height / 2);
                        ctx.restore();
                    }
                },
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
                            const label = value > 0 ? `${value}` : '';
                            const {
                                x,
                                y
                            } = arc.tooltipPosition();
                            ctx.save();
                            ctx.font = '14px Arial'; // Ukuran teks label lebih kecil
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
