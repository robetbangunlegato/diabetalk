@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        <div class="row" style="height: 100px;">
            <div class="col-2 p-1 d-flex justify-content-center align-items-center" style="height: 100px;">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
            <div class="col d-flex justify-content-center align-items-center text-center">
                <p class="h1 text-uppercase m-0">Tanya Diabetalk</p>
            </div>
        </div>
        <div class="row text-center g-3">
            <div class="col-12">
                <p class="lead">hai nama_pengguna! apa ada yang bisa diabetalk bantu?</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <a href="http://"
                    class="btn btn-success rounded-pill d-flex align-items-center justify-content-center text-center"
                    style="width: 200px; height: 70px;">
                    Mulai Konsultasi
                </a>
            </div>
            <div class="col-12">
                <p class="lead">Jadwal konsultasi diabetalk <br> senin-jumat pukul 09.00-16.00</p>
            </div>
        </div>
    </div>
@endsection
