@extends('layouts_user.app')
@section('content')
    <div class="container p-5">
        {{-- head --}}
        <div class="row" style="height: 100px;">
            <div class="col-2 p-1 d-flex justify-content-center" style="height: 100px">
                <img src="logo-dengan-tulisan.png" alt="logo-diabetalk" class="h-100">
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <p class="text-uppercase h1">Pengingat Obat</p>
            </div>
        </div>
        {{-- tambah button --}}
        <div class="row mt-3">
            <a href="{{ route('pengingatobat.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        {{-- alert --}}
        <div class="row">
            @if (session('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success text-white" role="alert" id="success_message">
                            <strong>Berhasil!</strong> {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
        {{-- table --}}
        <div class="row mt-4">
            <table class="table table-primary table-striped text-center table-responsive">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Content
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>content</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>content</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
