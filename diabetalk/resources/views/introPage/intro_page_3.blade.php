@extends('layouts_user.app')
@section('content')
    <style>
        #teksInformasi {
            text-align: justify !important;
        }
    </style>
    <div class="container p-5">
        <div class="row" style="height: 100px">
            <div class="col-12 p-1 d-flex" style="height: 100px">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
        </div>
        <div class="row mt-4">
            <p class="h1 text-center">Diabetalk ingin tahu</p>
            <p class="lead text-center">Tinggi dan berat badan anda</p>
            <form action="">
                <div class=" d-flex justify-content-center">
                    tinggi badan <input type="number" class="form-control mx-3" style="width: 100px"> cm
                </div>
                <div class="d-flex justify-content-center mt-3">
                    berat badan <input type="number" class="form-control mx-3" style="width: 100px"> kg
                </div>
                <div class="d-flex justify-content-center my-3">
                    <button class="btn btn-primary rounded-pill">Simpan</button>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <p class="text-center text-secondary" id="teksInformasi">*Informasi Tinggi dan Berat Badan
                        menunjukkan BMI anda sehingga rekomendasi diet dapat dibuat secara maksimal.</p>
                </div>
            </form>
        </div>
    </div>
@endsection
