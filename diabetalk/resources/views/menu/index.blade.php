@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        <div class="row" style="height: 100px">
            <div class="col-2 p-1 d-flex justify-content-center" style="height: 100px">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <p class="text-uppercase h1">diabetalk</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button class="btn btn-outline-white p-0 border-0 col-12" data-bs-toggle="collapse"
                    data-bs-target="#menuLainnya" aria-expanded="false" aria-controls="menuLainnya">
                    <i class="bi bi-three-dots fs-4"></i>
                </button>
            </div>
            <!-- Informasi Skala (Collapse) -->
            <div class="collapse" id="menuLainnya">
                <div class="container">
                    <div class="card card-body row text-center">
                        <div class="col-12">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">Keluar<i
                                        class="bi bi-box-arrow-right m-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex">
            <!-- Menu Item -->
            <div class="col-xl-4 col-md-6 col-6 pt-3">
                <a href="{{ route('catatankesehatan.index') }}" class="btn btn-primary grid py-5 text-center">
                    <img src="icons/note.png" class="h-25 w-25 col-12" alt="note">
                    <p class="h4">Catatan kesehatan</p>
                </a>
            </div>
            <div class="col-xl-4 col-md-6 col-6 pt-3">
                <a href="{{ route('dietdanintakezatgizi.index') }}" class="btn btn-primary grid py-5 text-center">
                    <img src="icons/diet.png" class="h-25 w-25 col-12" alt="diet">
                    <p class="h4">Diet dan intake gizi</p>
                </a>
            </div>
            <div class="col-xl-4 col-md-6 col-6 pt-3">
                <a href="{{ route('pengingatobat.index') }}" class="btn btn-primary grid py-5 text-center">
                    <img src="icons/drugs.png" class="h-25 w-25 col-12" alt="note">
                    <p class="h4">Pengingat obat</p>

                </a>
            </div>
            <div class="col-xl-4 col-md-6 col-6 pt-3">
                <a href="{{ route('diabetalking.index') }}" class="btn btn-primary grid py-5 text-center"
                    style="min-height: 190px">
                    <img src="icons/knowledge-sharing.png" class="h-25 w-25 col-12" alt="note">
                    <p class="h4">Diabetalking</p>

                </a>
            </div>
            <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3 col-6 offset-3 pt-3">
                <a href="{{ route('tanyadiabetalk.index') }}" class="btn btn-primary grid py-5 text-center">
                    <img src="icons/asking.png" class="h-25 w-25 col-12" alt="note">
                    <p class="h4">Tanya diabetalk</p>

                </a>
            </div>
        </div>
        <div class="row mt-3 text-center">
            <h5>Hai {{ Auth()->user()->name }},</h5>
            <br>
            <h5>bagaimana kondisi gula darah mu hari ini?</h5>
        </div>
        <div class="row text-center">
            <div class="col-12">

            </div>
        </div>
    </div>
@endsection
