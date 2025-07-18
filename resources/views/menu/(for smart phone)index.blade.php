@extends('layouts_user.app')



@section('content')
    <!-- Header -->
    <header class="header fixed-start bg-white shadow-sm">
        <div class="row text-center">
            <div class="col-3 col-lg-1">
                <a href="{{ route('dashboard') }}">
                    {{-- <div class="d-flex align-items-center justify-content-center h-100"> --}}
                        <img src="{{ asset('logo-dengan-tulisan.png') }}" alt="Logo Diabetalk" class="img-fluid">
                    {{-- </div> --}}
                </a>
            </div>
            <div class="col-7 col-lg-10 d-grid align-items-center">
                {{-- <div class="row" style="height: 100%"> --}}
                    <p class="h1">
                        Menu
                    </p>
                    {{-- <h1 class="d-flex align-items-center justify-content-center m-0 font-size"
                        style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-size: 5vw; max-width: 100%; text-align: center;">
                        Menu
                    </h1> --}}
                    <!-- <label for="">{{ $description ?? '' }}</label> -->
                {{-- </div> --}}
            </div>

            {{-- profile logo --}}
            <div class="col-2 col-lg-1">
                <div class="d-flex align-items-center justify-content-center" style="height: 100%">
                    <!-- Trigger Dropdown pakai gambar -->
                    <div class="dropdown">
                        <button class="btn btn-primary rounded-pill">
                        <img src="{{ asset('icons/user.png') }}" alt="profile icon" class="w-75 dropdown-toggle"
                            style="cursor: pointer;" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>

                        <!-- Isi Dropdown -->
                        <ul class="dropdown-menu text-center">
                            <li>
                                <a class="dropdown-item d-flex align-items-center justify-content-center gap-2"
                                    href="#">
                                    <i class="bi bi-person-circle"></i> Profile
                                </a>
                            </li>
                            <li>
                                {{-- <a class="" href="#">
                                </a> --}}
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button
                                        class="dropdown-item d-flex align-items-center justify-content-center gap-2 text-danger"
                                        type="submit">
                                        <i class="bi bi-box-arrow-right"></i> Keluar

                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </header>


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

