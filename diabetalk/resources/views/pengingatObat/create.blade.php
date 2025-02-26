@extends('layouts_user.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>

    <div class="container p-5">
        <div class="row" style="height: 100px;">
            <div class="col-2 p-1 d-flex justify-content-center" style="height: 100px">
                <img src="{{ asset('logo-dengan-tulisan.png') }}" alt="logo-diabetalk" class="h-100">

            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <p class="text-uppercase h1">Pengingat Obat</p>
            </div>
        </div>
        <form action="{{ route('pengingatobat.store') }}" method="post">
            @csrf
            <div class="row mt-3 p-3 gap-3" style="background-color: antiquewhite">
                {{-- title --}}
                <div class="col-12">
                    <label for="namaObat" class="">Judul</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="title" name="title" required>
                        <label for="namaObat" style="color: darkgrey">Masukan judul pengingat...</label>
                    </div>
                </div>

                {{-- description --}}
                <div class="col-12">
                    <label for="namaObat" class="">Deskripsi</label>
                    <div class="form-floating">
                        <input id="x" type="hidden" name="description">
                        <trix-editor input="x"></trix-editor>
                        {{-- <label for="description" class="text-secondary">Masukan deskripsi pengingat...</label> --}}
                    </div>
                </div>
                <div class="col-12">

                </div>
                {{-- insctruction --}}
                <div class="col-12">
                    <label for="">Instruksi</label>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="instruction" id="instruction1">
                            <label class="form-check-label" for="instruction1">
                                Sebelum makan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="instruction" id="instruction2">
                            <label class="form-check-label" for="instruction2">
                                Sesudah makan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="instruction" id="instruction3">
                            <label class="form-check-label" for="instruction3">
                                Tidak ada
                            </label>
                        </div>
                    </div>
                </div>

                {{-- notification --}}
                <div class="col-12">
                    <label for="">Notifikasi</label>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="notification" id="notification1">
                            <label class="form-check-label" for="notification1">
                                Gmail
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="notification" id="notification2">
                            <label class="form-check-label" for="notification2">
                                Aplikasi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="notification" id="notification3">
                            <label class="form-check-label" for="notification3">
                                WhatsApp
                            </label>
                        </div>
                    </div>
                </div>

                {{-- time --}}
                <div class="col-12">
                    <label for="time" class="p-2">Waktu pengingat</label>
                    <div class="form-floating">
                        <input type="time" class="form-control" id="time" name="time" required>
                        <label for="time" style="color: darkgrey">Masukan waktu pengingat...</label>
                    </div>
                </div>

                {{-- repeat --}}
                <div class="col-12">
                    <label for="">Perulangan</label>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeat" id="repeat1">
                            <label class="form-check-label" for="repeat1">Senin</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeat" id="repeat2">
                            <label class="form-check-label" for="repeat2">Selasa</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeat" id="repeat3">
                            <label class="form-check-label" for="repeat3">Rabu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeat" id="repeat4">
                            <label class="form-check-label" for="repeat4">Kamis</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeat" id="repeat5">
                            <label class="form-check-label" for="repeat5">Jumat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeat" id="repeat6">
                            <label class="form-check-label" for="repeat6">Sabtu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeat" id="repeat7">
                            <label class="form-check-label" for="repeat7">Minggu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeat" id="repeat8">
                            <label class="form-check-label" for="repeat8">Setiap Hari</label>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary col-12" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
