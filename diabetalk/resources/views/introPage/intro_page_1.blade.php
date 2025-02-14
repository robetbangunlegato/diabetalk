@extends('layouts_user.app')
@section('content')
    <style>
        #kadarHbAc1 {
            width: 250px;
        }

        @media (max-width: 575.98px) {
            #kadarHbAc1 {
                width: 20vh !important;
            }
        }
    </style>
    <div class="container p-5">
        <div class="row" style="height: 100px">
            <div class="col-12 p-1 d-flex" style="height: 100px">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <p class="h1">Sudah cek HbAc1 anda ?</p>
            </div>
            <form action="{{ route('catatankesehatan.store') }}" method="post">
                @csrf
                <div class="d-flex justify-content-center align-items-center">
                    <label for="kadarHbAc1">Kadar HbAc1 </label>
                    <input type="number" class="form-control m-2" id="hba1c" name="value"
                        placeholder="Masukan kadar HbAc1..." required> %
                    <input type="text" value="hba1c" name="record_type" hidden>
                    <input type="text" value="intro_page_2" name="next_page" hidden>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <button class="btn btn-primary" style="width: 200px" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
