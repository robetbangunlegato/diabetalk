@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        <div class="row" style="height: 100px">
            <div class="col-12 p-1 d-flex" style="height: 100px">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
        </div>
        <div class="row mt-4">
            <form action="{{ route('catatankesehatan.store') }}" method="post">
                @csrf
                <div class="">
                    <div class="">
                        <p class="lead text-center">Sudah konsumsi air?</p>
                        <!-- Tumpukan img dan input -->
                        <div class="d-flex justify-content-center position-relative" style="margin: 100px">
                            <div class="position-absolute top-50 start-50 translate-middle z-1">
                                <img src="icons/glass-of-water.png"
                                    class="position-absolute top-50 start-50 translate-middle" alt="water glass"
                                    width="100px" height="100px">
                                <input type="number" value="0" name="value"
                                    class="position-absolute top-50 start-50 translate-middle text-center"
                                    style="background-color: transparent; border: 0px; font-size: 25px"
                                    id="jumlahKonsumsiAir" readonly required>
                                <input type="text" value="water_intake" name="record_type" hidden>
                                <input type="text" value="intro_page_3" name="next_page" hidden>
                            </div>
                        </div>
                        <!-- Tombol dan informasi -->
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-secondary" id="decrementButton">-</button>
                            <span class="mx-3">1x gelas 250 ml</span>
                            <button class="btn btn-info" id="incrementButton">+</button>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mt-3 rounded-pill">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <script>
            const decrementButton = document.getElementById('decrementButton');
            const incrementButton = document.getElementById('incrementButton');
            const jumlahKonsumsiAir = document.getElementById('jumlahKonsumsiAir');

            incrementButton.addEventListener('click', (event) => {
                event.preventDefault(); // Mencegah reload halaman
                jumlahKonsumsiAir.value = parseInt(jumlahKonsumsiAir.value) + 1;
            });

            decrementButton.addEventListener('click', (event) => {
                event.preventDefault(); // Mencegah reload halaman
                jumlahKonsumsiAir.value = Math.max(parseInt(jumlahKonsumsiAir.value) - 1, 0);
            });
        </script>

    </div>
@endsection
