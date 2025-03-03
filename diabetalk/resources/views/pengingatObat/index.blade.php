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
        <div class="row mt-3">
            @if (session('success'))
                <div class="alert alert-success" role="alert" id="alert">
                    Berhasil! {{ session('success') }}
                </div>
            @endif
        </div>
        {{-- table --}}
        <div class="row mt-3">
            <table class="table table-primary table-striped text-center table-responsive">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Judul
                        </th>
                        <th>
                            Deskripsi
                        </th>
                        <th>
                            Instruksi
                        </th>
                        <th>
                            Metode pengingat
                        </th>
                        <th>
                            Waktu
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reminders as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->instruction }}</td>
                            <td>{{ $item->reminder_method }}</td>
                            <td>{{ $item->reminder_time }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#alert').delay(3000).fadeOut('slow');
        });
    </script>
@endsection
