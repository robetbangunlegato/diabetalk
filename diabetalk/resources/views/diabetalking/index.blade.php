@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        <div class="row" style="height: 100px;">
            <div class="col-2 p-1 d-flex justify-content-center" style="height: 100px">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
            <div class="col text-center">
                <p class="h1 text-uppercase m-0 teks-judul-halaman">Diabetalking</p>
                <p class="lead fs-5 m-0 teks-di-bawah-judul-halaman">
                    Edukasi pada pencegahan komplikasi diabetes melitus
                </p>
            </div>
        </div>
        <div class="row mt-3 g-3 p-3" style="background-color: antiquewhite; border-radius: 10px;">
            @php
                $topics = [
                    ['link' => '#', 'icon' => 'bi bi-heart-pulse', 'title' => 'Diabetes Melitus'],
                    ['link' => '#', 'icon' => 'bi bi-people', 'title' => 'Diabetes & Obesitas'],
                    ['link' => '#', 'icon' => 'bi bi-heart', 'title' => 'Diabetes & Hipertensi'],
                    ['link' => '#', 'icon' => 'bi bi-heart-fill', 'title' => 'Diabetes & Jantung Koroner'],
                    ['link' => '#', 'icon' => 'bi bi-droplet', 'title' => 'Diabetes & Gagal Ginjal'],
                ];
            @endphp

            @foreach ($topics as $topic)
                <div class="col-md-6 d-flex justify-content-center">
                    <a href="{{ $topic['link'] }}" class="text-decoration-none">
                        <div class="card text-center p-3 shadow" style="width: 220px;">
                            <div class="card-body">
                                <i class="{{ $topic['icon'] }} display-4 text-primary"></i>
                                <h5 class="card-title mt-2">{{ $topic['title'] }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
