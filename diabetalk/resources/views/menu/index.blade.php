@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        <div class="row" style="height: 100px">
            <div class="col-2 p-1 d-flex justify-content-center" style="height: 100px">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <h1 class="text-uppercase">diabetalk</h1>
            </div>
        </div>
        <div class="row mt-3 d-flex">
            <!-- Menu Item -->
            <div class="col-xl-4 col-md-6 col-6 pt-3">
                <a href="{{ route('catatankesehatan.index') }}" class="btn btn-primary grid py-5 text-center">
                    <img src="icons/note.png" class="h-25 w-25 col-12" alt="note">
                    <h4 class="col-12">Catatan kesehatan</h4>
                </a>
            </div>
            <div class="col-xl-4 col-md-6 col-6 pt-3">
                <a href="http://" class="btn btn-primary grid py-5 text-center">
                    <img src="icons/diet.png" class="h-25 w-25 col-12" alt="note">
                    <h4 class="col-12">Diet dan intake gizi</h4>
                </a>
            </div>
            <div class="col-xl-4 col-md-6 col-6 pt-3">
                <a href="http://" class="btn btn-primary grid py-5 text-center">
                    <img src="icons/drugs.png" class="h-25 w-25 col-12" alt="note">
                    <h4 class="col-12">Pengingat obat</h4>
                </a>
            </div>
            <div class="col-xl-4 col-md-6 col-6 pt-3">
                <a href="http://" class="btn btn-primary grid py-5 text-center" style="min-height: 190px">
                    <img src="icons/knowledge-sharing.png" class="h-25 w-25 col-12" alt="note">
                    <h4 class="col-12">Diabetalking</h4>
                </a>
            </div>
            <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3 col-6 offset-3 pt-3">
                <a href="http://" class="btn btn-primary grid py-5 text-center">
                    <img src="icons/asking.png" class="h-25 w-25 col-12" alt="note">
                    <h4 class="col-12">Tanya diabetalk</h4>
                </a>
            </div>
        </div>
        <div class="row mt-3 text-center">
            <h3>Hai, ...</h3>
            <br>
            <h3>bagaimana kondisi gula darah mu hari ini?</h3>
        </div>
    </div>
@endsection
