@extends('layouts_user.app')
@section('content')
    <style>
        @media (max-width: 575.98px) {
            p {
                text-align: justify;
            }
        }
    </style>
    <div class="container p-5 d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="text-center">
            <img src="/logo-dengan-tulisan.png" alt="Logo Diabetalk" height="150px" width="150px">
            <h1 class="display-1 text-uppercase">Diabetalk</h1>
            <div class="p-3" style="background-color: antiquewhite; border-radius: 10px">
                <p>
                    Diabetalk adalah asisten kesehatan Anda yang dirancang untuk membantu memantau kadar gula darah dalam
                    tubuh.
                    Diperuntukkan untuk penderita diabetes melitus khususnya tipe 2.
                    Dengan lima fitur utama:
                <ul>
                    <li>Catatan kesehatan</li>
                    <li>Diet dan intake zat gizi</li>
                    <li>Pengingat obat</li>
                    <li>Diabetalk</li>
                    <li>Tanya diabetalk</li>
                </ul>
                </p>
                <p>
                    Yang digunakan untuk memonitoring asupan gizi, mengatur pola makan, anjuran aktivitas fisik dan
                    pencegahan
                    komplikasi hingga konsultasi secara online.
                </p>
                <a href="{{ route('login') }}" class="mt-3">Ke Halaman Login</a>
            </div>
        </div>
    </div>
@endsection
