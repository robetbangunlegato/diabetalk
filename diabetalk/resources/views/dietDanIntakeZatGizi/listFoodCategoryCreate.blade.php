@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        <div class="row" style="height: 100px;">
            <div class="col-2 p-1 d-flex justify-content-center" style="height: 100px">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
            <div class="col d-flex text-center align-items-center">
                <p class="text-uppercase h1">diet dan intake zat gizi</p>
            </div>
        </div>
        <div class="row mt-3 gap-2">
            <form action="{{ route('listfoodcategory.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama kategori</label>
                    <input type="text" class="form-control" id="name" name="name" required
                        placeholder="Masukan nama kategori...">
                </div>
                <button class="btn btn-primary col-12" type="submit">Simpan</button>
            </form>
        </div>
    </div>
    </div>
@endsection
