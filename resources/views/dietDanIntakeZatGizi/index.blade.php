<x-layouts.app :activePage="'dietdanintakezatgizi'" :title="'Diet dan intake zat gizi'" :description="''">
    @php

$topics = [
    [
        'link' => 'foodconsumptionhistory.index',

        'icon' => 'bi bi-clipboard-data',

        'title' => 'Riwayat asupan',
    ],

    [
        'link' => 'rekomendasiwaktumakan',

        'icon' => 'bi bi-info-circle',

        'title' => 'Rekomendasi waktu makan',
    ],

    [
        'link' => 'foodconsumptionhistory.index',

        'icon' => 'bi bi-book',

        'title' => 'Edukasi bahan makanan',
    ],
];

    @endphp
    <div class="container margin-top-for-content-desktop margin-top-for-content-mobile">
        <div class="mt-3">

            @if (auth()->user()->id == 1)
                <a href="{{ route('listfood.index') }}" class="btn btn-primary mb-3">List makanan</a>
            @endif

            {{-- button add data food consumption --}}

            <a type="button" data-bs-toggle="modal" data-bs-target="#modalTambahKonsumsiMakanan"
                class="btn btn-primary col-12">Tambah konsumsi makanan</a>

            </a>

            {{-- modal add data food consumption --}}

            <form action="{{ route('foodconsumption.store') }}" method="post">

                @csrf

                <div class="modal fade" id="modalTambahKonsumsiMakanan" tabindex="-1"
                    aria-labelledby="modalTambahKonsumsiMakanan" aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content">

                            <div class="modal-header">

                                <h5 class="modal-title" id="modalTambahKonsumsiMakanan">Konsumsi makanan</h5>

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>

                            </div>

                            <div class="modal-body">

                                <div class="mb-3">

                                    <label for="food_id" class="form-label">Makanan</label>

                                    <select class="js-example-basic-single form-select" name="food_id" id="food_id"
                                        required>

                                        <option value="" selected>Pilih makanan...</option>

                                        @foreach ($foods as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} | kalori per 1 gram

                                                :

                                                {{ $item->calories }} kalori

                                            </option>
                                        @endforeach

                                    </select>

                                </div>

                                <div class="mb-3">

                                    <label for="amount" class="form-label">Porsi konsumsi (dalam gram)</label>

                                    <input type="number" class="form-control" id="amount" name="amount"
                                        placeholder="Masukan jumlah porsi dalam gram..." step="0.01" required>

                                    <p class="text-muted m-0 p-0" style="font-size: 12px;">*1 Centong nasi = 100gr</p>

                                </div>



                                <label for="adverb_time" class="form-label">Waktu konsumsi</label>

                                <div class="d-flex gap-3">

                                    <div class="form-check">

                                        <input class="form-check-input" type="radio" name="adverb_time"
                                            id="adverb_time1" value="pagi" required>

                                        <label class="form-check-label" for="adverb_time1">

                                            Pagi

                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input" type="radio" name="adverb_time"
                                            id="adverb_time2" value="siang">

                                        <label class="form-check-label" for="adverb_time2">

                                            Siang

                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input" type="radio" name="adverb_time"
                                            id="adverb_time3" value="malam">

                                        <label class="form-check-label" for="adverb_time3">

                                            Malam

                                        </label>

                                    </div>

                                </div>



                                {{-- <small class="form-text text-muted">1 angka mewakili air sebanyak 240ml

                                    atau 1 gelas.</small> --}}

                            </div>

                            <div class="modal-footer grid">

                                <button type="submit" class="btn btn-primary col-12">Simpan</button>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>

        {{-- alert --}}
        <div class="mt-3">

            @if (session('success'))
                <div class="alert alert-success" role="alert" id="alert">

                    Berhasil! {{ session('success') }}

                </div>
            @endif

        </div>

        <!-- Chart -->
        <div class="card shadow">

            <div class="card-body">

                {{-- <h3 class="text-center">Konsumsi Kalori Hari Ini</h3> --}}

                <div class="d-flex justify-content-center">

                    <div style="position: relative; width: 300px; height: 300px;">

                        <canvas id="calorieChart"></canvas>

                        <!-- ✅ Tambahkan label di tengah chart -->

                        <div id="chartLabel"
                            style="position: absolute; top: 63%; left: 50%; transform: translate(-50%, -50%);

                font-size: 16px; font-weight: bold; color: #333;">

                        </div>

                    </div>

                </div>

                <!-- ✅ Tambahkan informasi jumlah kalori -->

                <p class="mt-3 mb-0">Total kalori: <strong id="consumedCalories"></strong> kkal</p>

                <p>Sisa kalori: <strong id="remainingCalories"></strong> kkal</p>

            </div>

        </div>

        <!-- 3 more menu -->
        <div class="d-md-flex mt-4">
            @foreach ($topics as $topic)
                <div class="col-12 col-md-4">
                    <div class="d-flex justify-content-center mt-md-0 mt-4">
                        <a href="{{ route($topic['link']) }}" class="text-decoration-none">
                            <div class="card p-3 shadow" style="width: 220px; height: 200px;">
                                <div class="card-body">
                                    <i class="{{ $topic['icon'] }} display-4 text-primary"></i>
                                    <h5 class="card-title mt-2">{{ $topic['title'] }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- add consumption food button. status : off. caution for delete -->
        {{-- <div class="fixed-bottom d-flex justify-content-end" style="margin-bottom: 6rem; margin-right: 1rem;">
        <button class="btn btn-primary rounded-pill" style="padding-top: 12px; padding-bottom: 12px;"><img src="{{asset("icons/foods.png")}}" width="40px" height="40px" alt=""></button>
        </div> --}}
    </div>

    <script>
        $(document).ready(function() {

            $('#alert').delay(3000).fadeOut('slow');

        });

        // In your Javascript (external .js resource or <script> tag)

        $('#modalTambahKonsumsiMakanan').on('shown.bs.modal', function() {

            $('.js-example-basic-single').select2({

                dropdownParent: $('#modalTambahKonsumsiMakanan')

            });

        });

        document.addEventListener("DOMContentLoaded", function() {

            let ctx = document.getElementById("calorieChart").getContext("2d");



            let totalCalories = {{ $totalCalories }};

            let remainingCalories = {{ $remainingCalories }};

            let maxCalories = {{ $maxCalories }};



            // ✅ Perbarui label teks

            document.getElementById("consumedCalories").innerText = totalCalories;

            document.getElementById("remainingCalories").innerText = remainingCalories;



            // ✅ Perbarui teks di tengah chart

            document.getElementById("chartLabel").innerText = `${totalCalories} / ${maxCalories} kkal`;



            new Chart(ctx, {

                type: 'doughnut',

                data: {

                    labels: ['Dikonsumsi', 'Sisa'],

                    datasets: [{

                        data: [totalCalories, remainingCalories],

                        backgroundColor: ['#FF6384', '#36A2EB'],

                        hoverBackgroundColor: ['#FF6384', '#36A2EB']

                    }]

                },

                options: {

                    responsive: true,

                    maintainAspectRatio: true, // ✅ Agar chart tidak membesar ke bawah

                    cutout: '70%', // ✅ Agar ada ruang untuk label tengah

                    plugins: {

                        title: {

                            display: true,

                            text: 'Kalori harian',

                            font: {

                                size: 18

                            }

                        }

                    }

                }

            });

        });
    </script>

</x-layouts.app>
