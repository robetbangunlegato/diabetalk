@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        <div class="row" style="height: 100px;">
            <div class="col-2 p-1 d-flex justify-content-center" style="height: 100px">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <p class="text-uppercase h1">diet dan intake zat gizi</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="offset-xl-4 col-xl-6 col-12">
                <form action="">
                    @csrf
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control bg-info text-white" id="cariMakanan"
                            placeholder="name@example.com">
                        <label for="cariMakanan">Cari makanan</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
