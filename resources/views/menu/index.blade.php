@extends('layouts_user.app')

@section('content')
    <div class="container" style="background-color: aqua">
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
