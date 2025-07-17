<x-layouts.app :activePage="'dietdanintakezatgizi'" :title="'Diet dan intake zat gizi'" :description="''">
    <style>
        .img-fixed {
            width: 80px;
            /* atau width yang kamu mau */
            max-height: 80px;
            /* batasi tinggi maksimal */
            object-fit: contain;
            /* agar gambar tidak terpotong tapi tetap proporsional */
        }
    </style>

    <div class="container   " style="max-width: 480px; margin: auto;">
        <!-- Judul -->
        <h2 class="text-center">Rekomendasi waktu makan</h2>


        <div class="row mt-4">
            <div class="col-5 text-white p-3 shadow-lg" style="background-color: #3594E8; border-radius: 25px;">
                <div class="fw-semibold">Sarapan</div>
                <div class="small text-white">07:00 - 08:00</div>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <div style="font-size: 50px; color: #1B57B8; font-weight: 900;">1</div>
            </div>
            <div class="col-5 d-flex justify-content-start align-items-center">
                <img class="img-fixed" src="{{ asset('indian-rice.png') }}" alt="">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-5 d-flex justify-content-end align-items-center">
                <img class="img-fixed" src="{{ asset('crumbled-cookie.png') }}" alt="">
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <div style="font-size: 50px; color: #1B57B8; font-weight: 900;">2</div>
            </div>
            <div class="col-5 text-white p-3 shadow-lg" style="background-color: #3594E8; border-radius: 25px;">
                <div class="fw-semibold">Snack pagi</div>
                <div class="small text-white">10:00 - 11:00</div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-5 text-white p-3 shadow-lg" style="background-color: #3594E8; border-radius: 25px;">
                <div class="fw-semibold">Makan siang</div>
                <div class="small text-white">12:00 - 13:00</div>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <div style="font-size: 50px; color: #1B57B8; font-weight: 900;">3</div>
            </div>
            <div class="col-5 d-flex justify-content-start align-items-center">
                <img class="img-fixed" src="{{ asset('lunch-box.png') }}" alt="">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-5 d-flex justify-content-end align-items-center">
                <img class="img-fixed" src="{{ asset('donut-with-pink-glaze.png') }}" alt="">
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <div style="font-size: 50px; color: #1B57B8; font-weight: 900;">4</div>
            </div>
            <div class="col-5 text-white p-3 shadow-lg" style="background-color: #3594E8; border-radius: 25px;">
                <div class="fw-semibold">Snack sore</div>
                <div class="small text-white">15:00 - 16:00</div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-5 text-white p-3 shadow-lg" style="background-color: #3594E8; border-radius: 25px;">
                <div class="fw-semibold">Makan malam</div>
                <div class="small text-white">18:00 - 19:00</div>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <div style="font-size: 50px; color: #1B57B8; font-weight: 900;">5</div>
            </div>
            <div class="col-5 d-flex justify-content-start align-items-center">
                <img class="img-fixed" src="{{ asset('Thanksgiving-dinner-with-candles-and-turkey.png') }}"
                    alt="">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-5 d-flex justify-content-end align-items-center">
                <img class="img-fixed" src="{{ asset('popcorn-3D-glasses-and-movie-tickets.png') }}" alt="">
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <div style="font-size: 50px; color: #1B57B8; font-weight: 900;">6</div>
            </div>
            <div class="col-5 text-white p-3 shadow-lg" style="background-color: #3594E8; border-radius: 25px;">
                <div class="fw-semibold">Snack malam</div>
                <div class="small text-white">20:00 - 21:00</div>
            </div>
        </div>
    </div>
</x-layouts.app>
