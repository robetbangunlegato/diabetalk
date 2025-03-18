@extends('layouts_user.app')

@section('content')
    <div class="container py-4">
        <!-- Header -->
        <div class="row align-items-center">
            <div class="col-3 col-md-2 text-center">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="img-fluid" style="max-height: 80px;">
            </div>
            <div class="col text-center">
                <h1 class="text-uppercase fw-bold mb-0">Diabetalk</h1>
            </div>
        </div>

        <!-- Menu Lainnya -->
        <div class="row mt-3">
            <div class="col text-center">
                <button class="btn btn-outline-white border-0" data-bs-toggle="collapse" data-bs-target="#menuLainnya"
                    aria-expanded="false" aria-controls="menuLainnya">
                    <i class="bi bi-three-dots fs-3"></i>
                </button>
            </div>
        </div>

        <div class="collapse" id="menuLainnya">
            <div class="card card-body text-center">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit">
                        Keluar <i class="bi bi-box-arrow-right ms-2"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Menu Utama -->
        <div class="row g-3 mt-3">
            <div class="col-lg-4 col-md-6 col-6">
                <a href="{{ route('catatankesehatan.index') }}"
                    class="btn btn-primary w-100 py-4 text-center d-flex flex-column align-items-center">
                    <img src="icons/note.png" class="mb-2" style="max-width: 50px;" alt="note">
                    <p class="h5 mb-0">Catatan Kesehatan</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <a href="{{ route('dietdanintakezatgizi.index') }}"
                    class="btn btn-primary w-100 py-4 text-center d-flex flex-column align-items-center">
                    <img src="icons/diet.png" class="mb-2" style="max-width: 50px;" alt="diet">
                    <p class="h5 mb-0">Diet & Intake Gizi</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <a href="{{ route('pengingatobat.index') }}"
                    class="btn btn-primary w-100 py-4 text-center d-flex flex-column align-items-center">
                    <img src="icons/drugs.png" class="mb-2" style="max-width: 50px;" alt="drugs">
                    <p class="h5 mb-0">Pengingat Obat</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <a href="{{ route('diabetalking.index') }}"
                    class="btn btn-primary w-100 py-4 text-center d-flex flex-column align-items-center">
                    <img src="icons/knowledge-sharing.png" class="mb-2" style="max-width: 50px;" alt="knowledge-sharing">
                    <p class="h5 mb-0">Diabetalking</p>
                </a>
            </div>
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-6 offset-3">
                <a href="{{ route('tanyadiabetalk.index') }}"
                    class="btn btn-primary w-100 py-4 text-center d-flex flex-column align-items-center">
                    <img src="icons/asking.png" class="mb-2" style="max-width: 50px;" alt="asking">
                    <p class="h5 mb-0">Tanya Diabetalk</p>
                </a>
            </div>
        </div>

        <!-- Sapaan Pengguna -->
        <div class="row mt-4 text-center">
            <div class="col">
                <h5>Hai, {{ Auth()->user()->name }}!</h5>
                <p class="mb-0">Bagaimana kondisi gula darahmu hari ini?</p>
            </div>
        </div>
    </div>
@endsection
