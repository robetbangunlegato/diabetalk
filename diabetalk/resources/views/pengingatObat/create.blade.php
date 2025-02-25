@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        <div class="row" style="height: 100px;">
            <div class="col-2 p-1 d-flex justify-content-center" style="height: 100px">
                <img src="{{ asset('logo-dengan-tulisan.png') }}" alt="logo-diabetalk" class="h-100">

            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <p class="text-uppercase h1">Pengingat Obat</p>
            </div>
        </div>
        <div class="row mt-3 p-3" style="background-color: antiquewhite">
            <div class="col-12">
                <label for="namaObat" class="p-2">Nama Obat</label>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="namaObat" placeholder="" required>
                    <label for="namaObat" style="color: darkgrey">Masukan nama obat...</label>
                </div>
            </div>

            <div class="col-12">
                <label for="namaObat" class="p-2">Dosis</label>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="namaObat" placeholder="" required>
                    <label for="namaObat" style="color: darkgrey">Masukan dosis obat...</label>
                </div>
            </div>

            <div class="col-12">
                <label for="namaObat" class="p-2">Instruksi</label>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="instruction" name="instruction" placeholder="" style="height: 100px"></textarea>
                    <label for="instruction" class="text-secondary">Masukan instruksi obat. contoh : setelah makan/ sebelum
                        makan.</label>
                </div>
            </div>

            <div class="col-12">
                <label for="">Notifikasi</label>
                <div class="d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reminder_method" id="reminder_method1">
                        <label class="form-check-label" for="reminder_method1">
                            Gmail
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reminder_method" id="reminder_method2" checked>
                        <label class="form-check-label" for="reminder_method2">
                            Notifikasi aplikasi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reminder_method" id="reminder_method3" checked>
                        <label class="form-check-label" for="reminder_method3">
                            WhatsApp
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <label for="namaObat" class="p-2">Waktu konsumsi</label>
                <div class="form-floating mb-3">
                    <input type="time" class="form-control" id="namaObat" placeholder="" required>
                    <label for="namaObat" style="color: darkgrey">Masukan waktu konsumsi obat...</label>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary col-12" type="submit">Simpan</button>
            </div>
        </div>
    </div>
@endsection
