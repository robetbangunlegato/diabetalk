<x-layouts.app :activePage="'catatankesehatan'" :title="'Catatan Kesehatan'" :description="'Yuk pantau gula darah anda dengan mencatat hasil cek kesehatan disini'">
    <style>
        .list-group-item:hover {
            background-color: rgba(0, 0, 0, 0.05);
            transition: 0.3s;
        }
    </style>
    <div class="container margin-top-for-content-desktop margin-top-for-content-mobile">
        <div class="d-xl-grid d-none">
        <div class="d-flex justify-content-center align-items-center rounded" style="background-image: url('{{asset('/background-catatankesehatan.jpg')}}'); height: 6rem; background-repeat: no-repeat; background-size: cover; background-position: center 57%;">
            <p class="text-white" style="font-size: 20pt;">Yuk pantau gula darah anda dengan mencatat hasil cek kesehatan disini</p>
        </div>
        </div>
        <div class="row d-flex text-center">
            {{-- CHART KONSUMSI AIR --}}
            <div class="col-xl-6 pt-4">
                <div class="card shadow">
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
                                <form action="{{ route('catatankesehatan.store') }}" method="post">
                                    @csrf
                                    <div class="modal fade" id="modalKonsumsiAir" tabindex="-1"
                                        aria-labelledby="modalKonsumsiAir" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalKonsumsiAir">Jumlah konsumsi air
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="kadarGulaDarah"
                                                            name="value" placeholder="Masukan kadar gula darah">
                                                        <input type="text" value="water_intake" name="record_type"
                                                            hidden>
                                                        <label for="kadarGulaDarah">Masukan jumlah konsumsi
                                                            air...</label>
                                                    </div>
                                                    <small class="form-text text-muted">1 angka mewakili air sebanyak
                                                        240ml
                                                        atau 1 gelas.</small>

                                                </div>
                                                <div class="modal-footer grid">
                                                    <button type="submit"
                                                        class="btn btn-primary col-12">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Legend di atas chart -->
                        <div id="chartLegend"
                            style="display: flex; justify-content: center; gap: 15px; margin-bottom: 10px;">
                            <div style="display: flex; align-items: center;">
                                <span
                                    style="width: 15px; height: 15px; background-color: rgba(75, 192, 192, 0.6); display: inline-block; margin-right: 5px;"></span>
                                <span>Telah Diminum</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <span
                                    style="width: 15px; height: 15px; background-color: rgba(192, 192, 192, 0.6); display: inline-block; margin-right: 5px;"></span>
                                <span>Belum diminum</span>
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

                        <!-- Informasi Konsumsi Air (Collapse) -->
                        <div class="collapse mt-3 pb-3" id="informasiKonsumsiAir">
                            <div class="card shadow-lg border-0">
                                <div class="card-header bg-primary text-white d-flex justify-content-center">
                                    <h5 class="mb-0"><i class="bi bi-droplet"></i> Rekomendasi Konsumsi Air</h5>

                                </div>
                                <div class="card-body">
                                    <h6 class="fw-bold text-primary"><i class="bi bi-info-circle"></i> Rekomendasi
                                        Cairan
                                        untuk Pasien Diabetes Melitus</h6>
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item"><i class="bi bi-gender-female text-danger"></i>
                                            <strong>Perempuan:</strong> 30ml/kg Berat Badan
                                        </li>
                                        <li class="list-group-item"><i class="bi bi-gender-male text-primary"></i>
                                            <strong>Laki-laki:</strong> 40ml/kg Berat Badan
                                        </li>
                                    </ul>

                                    <h6 class="fw-bold text-primary"><i class="bi bi-calculator"></i> Contoh Perhitungan
                                    </h6>
                                    <div class="alert alert-light border-start border-primary border-4">
                                        <p class="mb-1"><strong>Perempuan dengan berat badan 56kg:</strong></p>
                                        <ul class="ps-3 mb-0">
                                            <li><i class="bi bi-droplet-half"></i> 30ml x 56kg = <strong>1680
                                                    ml</strong>
                                            </li>
                                            <li><i class="bi bi-cup"></i> Setara dengan <strong>7 gelas/hari</strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- CHART LANGKAH  --}}
            <div class="col-xl-6 pt-4">
                <div class="card shadow">
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
                            <form action="{{ route('activity.store') }}" method="post">
                                @csrf
                                <div class="modal fade" id="modalLangkah" tabindex="-1" aria-labelledby="modalLangkah"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalLangkah">Aktivitas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-floating mb-3">
                                                    <input type="number" step="0.1" class="form-control"
                                                        id="jumlahLangkah" name="duration"
                                                        placeholder="Masukan jumlah langkah" required>
                                                    <label for="jumlahLangkah">Masukan durasi (dalam menit)...</label>
                                                </div>

                                                <label class="form-label">Pilih Intensitas Berjalan:</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="met_level"
                                                        id="metSantai" value="3.5" required>
                                                    <label class="form-check-label" for="metSantai">
                                                        Berjalan Santai (3-4 km/jam) - 3.5 MET
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="met_level"
                                                        id="metSedang" value="4">
                                                    <label class="form-check-label" for="metSedang">
                                                        Berjalan Sedang (4-5 km/jam) - 4.0 MET
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="met_level"
                                                        id="metCepat" value="5">
                                                    <label class="form-check-label" for="metCepat">
                                                        Berjalan Cepat (5-6 km/jam) - 5.0 MET
                                                    </label>
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
                        <div class="d-flex justify-content-center">
                            <img src="icons/training.png" id="iconLangkah" alt="training">
                            <div class="grid align-content-center">
                                <h6>{{ number_format($activityChartData->totalStepPerDay ?? 0, 0) }}/6000 langkah</h6>
                                <h6>{{ number_format($activityChartData->caloriesBurned, 0) }} kkal kalori terbakar</h6>
                            </div>
                        </div>

                        <!-- Button Collapse -->
                        <button class="btn w-100 text-center mt-2" data-bs-toggle="collapse"
                            data-bs-target="#informasiLangkah" aria-expanded="false"
                            aria-controls="informasiLangkah">
                            <i class="bi bi-chevron-down fs-5"></i> Informasi Aktifitas
                        </button>

                        <!-- Informasi Rekomendasi Langkah Harian (Collapse) -->
                        <div class="collapse mt-3 pb-3" id="informasiLangkah">
                            <div class="card shadow-lg border-0">
                                <div class="card-header bg-success text-white d-flex justify-content-center">
                                    <h5 class="mb-0"><i class="bi bi-walking"></i> Rekomendasi Langkah Harian</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-bold text-success"><i class="bi bi-clock"></i> Durasi</h6>
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item"><i class="bi bi-stopwatch"></i> 30 menit - 1 jam
                                        </li>
                                    </ul>

                                    <h6 class="fw-bold text-success"><i class="bi bi-calendar-check"></i> Frekuensi
                                    </h6>
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item"><i class="bi bi-calendar-week"></i> Minimal 5x per
                                            minggu</li>
                                    </ul>

                                    <h6 class="fw-bold text-success"><i class="bi bi-footsteps"></i> Langkah Harian
                                    </h6>
                                    <div class="alert alert-light border-start border-success border-4">
                                        <p class="mb-0"><i class="bi bi-graph-up"></i> <strong>7000 - 10.000 langkah
                                                per
                                                hari</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- CHART KADAR GULA DARAH --}}
            <div class="col-xl-6 pt-4">
                <div class="card shadow">
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
                        {{-- modal kadar gula darah --}}
                        <form action="{{ route('bloodsugar.store') }}" method="post">
                            @csrf
                            <div class="modal fade" id="modalKadarGulaDarah" tabindex="-1"
                                aria-labelledby="modalKadarGulaDarah" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalKadarGulaDarah">Kadar gula darah </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" name="blood_sugar"
                                                    id="kadarGulaDarah" placeholder="Masukan kadar gula darah"
                                                    required>
                                                <label for="kadarGulaDarah">Masukan kadar gula darah...</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer grid">
                                            <button type="submit" class="btn btn-primary col-12">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                            <div class="card shadow-lg">
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
                                        <li class="list-group-item text-warning"><i
                                                class="bi bi-exclamation-circle"></i>
                                            <strong>100-125 mg/dL:</strong> Pra-diabetes
                                        </li>
                                        <li class="list-group-item text-danger"><i class="bi bi-x-circle"></i>
                                            <strong>>125 mg/dL:</strong> Diabetes
                                        </li>
                                    </ul>

                                    <h6 class="text-primary"><i class="bi bi-clock-history"></i> Gula Darah Setelah
                                        Makan
                                        (2 Jam)</h6>
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item text-success"><i class="bi bi-check-circle"></i>
                                            Normal
                                            : < 140 mg/dL</li>
                                        <li class="list-group-item text-warning"><i
                                                class="bi bi-exclamation-circle"></i>
                                            Pra-diabetes : 140-199 mg/dL</li>
                                        <li class="list-group-item text-danger"><i class="bi bi-x-circle"></i>
                                            Diabetes :
                                            > 200 mg/dL</li>
                                    </ul>

                                    <h6 class="text-primary"><i class="bi bi-clipboard-heart"></i> Gula Darah Acak
                                    </h6>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            Untuk diagnosis diabetes, kadar gula darah acak <strong
                                                class="text-danger">di
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
                    <div class="card-body pb-0 shadow">
                        <div class="row">
                            <div class="offset-4 col-5">
                                <h5>Kadar HbA1c</h5>
                            </div>
                            <div class="offset-1 col-2">
                                {{-- <a type="button" data-bs-toggle="modal" data-bs-target="#modalKadarGulaDarah"
                                    class="btn btn-outline-primary rounded-circle">+</a> --}}
                            </div>
                        </div>
                        <canvas id="chartHbAc1" width="400" height="200">
                        </canvas>
                        {{-- button collapse --}}
                        <button class="btn w-100 text-center mt-2" data-bs-toggle="collapse"
                            data-bs-target="#informasiHbAc1" aria-expanded="false" aria-controls="informasiHbAc1">
                            <i class="bi bi-chevron-down fs-5"></i> Informasi kadar HbA1c
                        </button>
                        <!-- Informasi HbA1c (Collapse) -->
                        <div class="collapse mt-3 pb-3" id="informasiHbAc1">
                            <div class="card shadow-lg border-0">
                                <div class="card-header bg-danger text-white d-flex justify-content-center">
                                    <h5 class="mb-0"><i class="bi bi-heart-pulse"></i> Kadar HbA1c untuk Diabetes
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-bold text-danger"><i class="bi bi-clipboard-pulse"></i> Kategori
                                        HbA1c
                                    </h6>
                                    <ul class="list-group">
                                        <li class="list-group-item text-success">
                                            <i class="bi bi-check-circle-fill"></i> <strong>
                                                < 5,7%:</strong> Normal
                                        </li>
                                        <li class="list-group-item text-warning">
                                            <i class="bi bi-exclamation-circle-fill"></i> <strong>5,7% - 6,4%:</strong>
                                            Pra-diabetes
                                        </li>
                                        <li class="list-group-item text-danger">
                                            <i class="bi bi-x-circle-fill"></i> <strong>> 6,4%:</strong> Diabetes
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- hasil lab lainnya --}}
        <div class="d-flex justify-content-center align-items-center rounded mt-3"
            style="background-image: url({{asset("background-catatankesehatan-2.jpg")}}); height: 6rem; background-size: cover; background-repeat: no-repeat; background-position: center 40%;">
            <p class="text-white h4">Hasil lab lainnya</p>
        </div>
        <div class="row text-center mt-3 g-4">
            {{-- Tekanan darah --}}
            <div class="col-xl-4 col-12">
                <div class="card shadow">
                    <div class="card-body p-1">
                        <div class="grid">
                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="m-0">Tekanan darah</p>
                                </div>
                                <div class="col-2">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#modalTekananDarah"
                                        class="btn pt-0"><i class="bi bi-plus"></i></a>
                                </div>
                                {{-- modal --}}
                                <form action="{{ route('bloodpressure.store') }}" method="post">
                                    @csrf
                                    <div class="modal fade" id="modalTekananDarah" tabindex="-1"
                                        aria-labelledby="modalTekananDarah" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTekananDarah">Tekanan darah</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <div class="d-flex">
                                                            <input type="number" class="form-control"
                                                                id="kadarGulaDarah" name="sistolik"
                                                                placeholder="sistolik..." required>
                                                            /
                                                            <input type="number" class="form-control"
                                                                id="kadarGulaDarah" name="diastolik"
                                                                placeholder="diastolik..." required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer grid">
                                                    <button type="submit"
                                                        class="btn btn-primary col-12">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class="h2 bold mb-0" id="bloodPressure">
                                {{ $bloodPressuresData->sistolik ?? '-' }}/{{ $bloodPressuresData->diastolik ?? '-' }}
                            </p>
                            <label for="bloodPressure" class="text-muted"><i class="bi bi-clock-history"></i>
                                {{ $bloodPressuresData && $bloodPressuresData->created_at ? \Carbon\Carbon::parse($bloodPressuresData->created_at)->format('d F Y') : '-' }}

                            </label>
                            {{-- Button collapse --}}
                            <button class="btn btn-outline-white p-0 border-0 col-12" data-bs-toggle="collapse"
                                data-bs-target="#informasiTekananDarah" aria-expanded="false"
                                aria-controls="informasiTekananDarah">
                                <i class="bi bi-three-dots fs-4"></i>
                            </button>

                            <!-- Informasi Tekanan Darah (Collapse) -->
                            <div class="collapse mt-3 pb-3" id="informasiTekananDarah">
                                <div class="card shadow-lg border-0">
                                    <div class="card-header bg-primary text-white d-flex justify-content-center">
                                        <h5 class="mb-0"><i class="bi bi-heart"></i> Skala Tekanan Darah</h5>

                                    </div>
                                    <div class="card-body">
                                        <h6 class="fw-bold text-primary"><i class="bi bi-bar-chart"></i> Kategori
                                            Tekanan
                                            Darah</h6>
                                        <ul class="list-group">
                                            <li class="list-group-item text-success">
                                                <i class="bi bi-check-circle-fill"></i> <strong>120/80 mmHg:</strong>
                                                Normal
                                            </li>
                                            <li class="list-group-item text-warning">
                                                <i class="bi bi-exclamation-circle-fill"></i> <strong>120-139 / 80-89
                                                    mmHg:</strong> Pra-hipertensi
                                            </li>
                                            <li class="list-group-item text-danger">
                                                <i class="bi bi-x-circle-fill"></i> <strong>>140/90 mmHg:</strong>
                                                Hipertensi
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- kolesterol --}}
            <div class="col-xl-4 col-12">
                <div class="card shadow">
                    <div class="card-body p-1">
                        <div class="grid">
                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="m-0">Kolesterol</p>
                                </div>
                                <div class="col-2">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#modalKolesterol"
                                        class="btn pt-0"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            {{-- modal --}}
                            <form action="{{ route('cholesterol.store') }}" method="post">
                                @csrf
                                <div class="modal fade" id="modalKolesterol" tabindex="-1"
                                    aria-labelledby="modalKolesterol" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalKolesterol">Kolesterol</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="kolesterol"
                                                        name="cholesterol" placeholder="Masukan kolesterol" required>
                                                    <label for="kolesterol">Masukan kolesterol...</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer grid">
                                                <button type="submit" class="btn btn-primary col-12">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="h2 bold mb-0">{{ $cholesterolsData->cholesterol ?? '-' }}</p>
                            <label for="bloodPressure" class="text-muted"><i class="bi bi-clock-history"></i>
                                {{ $cholesterolsData && $cholesterolsData->created_at ? \Carbon\Carbon::parse($cholesterolsData->created_at)->format('d F Y') : '-' }}


                            </label>


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
                                        <h6 class="text-success"><i class="bi bi-heart-pulse"></i> Kolesterol Total
                                        </h6>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item text-success"><i
                                                    class="bi bi-check-circle"></i>
                                                <strong>
                                                    < 200 mg/dL:</strong> Normal
                                            </li>
                                            <li class="list-group-item text-warning"><i
                                                    class="bi bi-exclamation-circle"></i> <strong>200-239
                                                    mg/dL:</strong>
                                                Borderline High</li>
                                            <li class="list-group-item text-danger"><i class="bi bi-x-circle"></i>
                                                <strong>>= 240 mg/dL:</strong> High
                                            </li>
                                        </ul>

                                        <h6 class="text-primary"><i class="bi bi-shield-exclamation"></i> Kolesterol
                                            Jahat
                                            (LDL)</h6>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item text-success"><i
                                                    class="bi bi-check-circle"></i>
                                                <strong>
                                                    < 100 mg/dL:</strong> Optimal
                                            </li>
                                            <li class="list-group-item text-info"><i class="bi bi-info-circle"></i>
                                                <strong>100-129 mg/dL:</strong> Near Optimal
                                            </li>
                                            <li class="list-group-item text-warning"><i
                                                    class="bi bi-exclamation-circle"></i> <strong>130-159
                                                    mg/dL:</strong>
                                                Borderline High</li>
                                            <li class="list-group-item text-danger"><i class="bi bi-x-circle"></i>
                                                <strong>160-189 mg/dL:</strong> High
                                            </li>
                                            <li class="list-group-item text-dark"><i
                                                    class="bi bi-exclamation-triangle"></i> <strong>>= 190
                                                    mg/dL:</strong>
                                                Very High</li>
                                        </ul>

                                        <h6 class="text-primary"><i class="bi bi-emoji-smile"></i> Kolesterol Baik
                                            (HDL)
                                        </h6>
                                        <ul class="list-group">
                                            <li class="list-group-item text-success"><i class="bi bi-gender-male"></i>
                                                <strong>> 40 mg/dL:</strong> Pria
                                            </li>
                                            <li class="list-group-item text-success"><i
                                                    class="bi bi-gender-female"></i>
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
            <div class="col-xl-4 col-12">
                <div class="card shadow">
                    <div class="card-body p-1">
                        <div class="grid">
                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="m-0">Fungsi ginjal</p>
                                </div>
                                <div class="col-2">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#modalFunsiGinjal"
                                        class="btn pt-0"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            <form action="{{ route('kidneyfunction.store') }}" method="post">
                                @csrf
                                <div class="modal fade" id="modalFunsiGinjal" tabindex="-1"
                                    aria-labelledby="modalFunsiGinjal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalFunsiGinjal">Fungsi ginjal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="kidneyFunction"
                                                        name="kidney_function" placeholder="Masukan kadar gula darah"
                                                        required>
                                                    <label for="kidneyFunction">Masukan data fungsi ginjal...</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer grid">
                                                <button type="submit" class="btn btn-primary col-12">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="h2 bold mb-0">{{ $kidneyFunctionData->kidney_function ?? '-' }}</p>
                            <label for="bloodPressure" class="text-muted"><i class="bi bi-clock-history"></i>
                                {{ $kidneyFunctionData && $kidneyFunctionData->created_at ? \Carbon\Carbon::parse($kidneyFunctionData->created_at)->format('d F Y') : '-' }}


                            </label>

                            <button class="btn btn-outline-white p-0 border-0 col-12" data-bs-toggle="collapse"
                                data-bs-target="#informasiFungsiGinjal" aria-expanded="false"
                                aria-controls="informasiFungsiGinjal">
                                <i class="bi bi-three-dots fs-4"></i>
                            </button>
                            <!-- Informasi Fungsi Ginjal (Collapse) -->
                            <div class="collapse mt-3 pb-3" id="informasiFungsiGinjal">
                                <div class="card shadow-lg border-0">
                                    <div class="card-header bg-info text-white d-flex justify-content-center">
                                        <h5 class="mb-0"><i class="bi bi-info-circle"></i> Informasi Fungsi Ginjal
                                        </h5>

                                    </div>
                                    <div class="card-body">
                                        <h6 class="text-primary"><i class="bi bi-droplet"></i> Kreatinin</h6>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item text-success"><i
                                                    class="bi bi-check-circle"></i>
                                                <strong>0,6-1,2 mg/dL:</strong> Normal
                                            </li>
                                        </ul>

                                        <h6 class="text-primary"><i class="bi bi-water"></i> Urea Darah (BUN)</h6>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item text-success"><i
                                                    class="bi bi-check-circle"></i>
                                                <strong>7-20 mg/dL:</strong> Normal
                                            </li>
                                        </ul>

                                        <h6 class="text-primary"><i class="bi bi-diagram-3"></i> Rasio
                                            Albumin/Kreatinin
                                            (ACR)</h6>
                                        <ul class="list-group">
                                            <li class="list-group-item text-success"><i
                                                    class="bi bi-check-circle"></i>
                                                <strong>
                                                    < 30 mg/g:</strong> Normal
                                            </li>
                                            <li class="list-group-item text-warning"><i
                                                    class="bi bi-exclamation-circle"></i>
                                                <strong>30-300 mg/g:</strong>
                                                Menunjukkan mikroalbuminuria
                                            </li>
                                            <li class="list-group-item text-danger"><i class="bi bi-x-circle"></i>
                                                <strong>> 300 mg/g:</strong> Menunjukkan makroalbuminuria
                                            </li>
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
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
        // const months = ['January', 'February', 'March', 'April', 'May'];
        const hba1cLevels = @json($HbA1cChartData); // Nilai dummy

        // Konfigurasi Chart.js
        const chartHbAc1 = document.getElementById('chartHbAc1').getContext('2d');
        new Chart(chartHbAc1, {
            type: 'bar',
            data: {
                labels: dates, // Label pada sumbu X
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
                            text: 'Tanggal'
                        }
                    }
                }
            }
        });

        //CHART KONSUMSI AIR
        // get data from controller
        const totalWaterIntakePerDay = @json($totalWaterIntakePerDay);
        const maxValue = 8; // Total maksimum gelas
        const remainingValue = maxValue - totalWaterIntakePerDay; // Sisa gelas

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
                    data: [totalWaterIntakePerDay, remainingValue],
                    backgroundColor: [
                        totalWaterIntakePerDay > 0 ? 'rgba(75, 192, 192, 0.6)' :
                        'rgba(192, 192, 192, 0.6)',
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
</x-layouts.app>
