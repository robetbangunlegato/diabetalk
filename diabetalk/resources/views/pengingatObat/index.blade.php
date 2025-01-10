@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        <div class="row" style="height: 100px;">
            <div class="col-2 p-1 d-flex justify-content-center align-items-center" style="height: 100px;">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
            <div class="col d-flex justify-content-center align-items-center text-center">
                <p class="h1 text-uppercase m-0">Pengingat Obat</p>
            </div>
        </div>
        <div class="row mt-3 p-3" style="background-color: antiquewhite">
            <div class="col-xl-6">
                <label for="namaObat" class="p-2">Nama Obat</label>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="namaObat" placeholder="" required>
                    <label for="namaObat" style="color: darkgrey">Masukan nama obat...</label>
                </div>
            </div>

            <div class="col-xl-6">
                <label for="namaObat" class="p-2">Jumlah konsumsi harian obat</label>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="namaObat" placeholder="" required>
                    <label for="namaObat" style="color: darkgrey">Masukan jumlah konsumsi harian obat...</label>
                </div>
            </div>

            <div class="col-xl-6">
                <label for="namaObat" class="p-2">Waktu konsumsi</label>
                <div class="form-floating mb-3">
                    <input type="time" class="form-control" id="namaObat" placeholder="" required>
                    <label for="namaObat" style="color: darkgrey">Masukan waktu konsumsi obat...</label>
                </div>
            </div>

            <div class="col-xl-12">
                <button class="btn btn-primary col-12" type="submit">Simpan</button>
            </div>
        </div>

    </div>
@endsection
