@extends('layouts_user.app')
@section('content')
    <div class="container p-5 d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="text-center">
            <img src="/logo-dengan-tulisan.png" alt="" height="150px" width="150px">
            <p class="display-1 text-uppercase">diabetalk</p>
            <p class="lead text-uppercase">tingkatkan kualitas hidup anda untuk mencapai kesehatan yang lebih optimal
            </p>
            <div class="col-12">
                <a href="{{ route('landing_page_2') }}" class="btn btn-secondary rounded-pill">Lanjut >></a>
            </div>
            <div class="col-12 mt-3">
                <a href="{{ route('login') }}" class="text-secondary">Ke halaman login</a>
            </div>

        </div>
    </div>
@endsection
