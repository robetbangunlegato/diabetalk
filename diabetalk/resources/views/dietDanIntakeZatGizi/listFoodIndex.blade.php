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
            <a href="{{ route('listfood.create') }}" class="btn btn-primary">Tambah makanan</a>
            <a href="{{ route('listfoodcategory.index') }}" class="btn btn-info">Kategori makanan</a>
        </div>
        {{-- alert --}}
        <div class="row mt-3">
            @if (session('success'))
                <div class="alert alert-success" role="alert" id="alert">
                    Berhasil! {{ session('success') }}
                </div>
            @endif
        </div>
        {{-- <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukan nama makanan yang dicari..."
                aria-label="Recipient's username" aria-describedby="basic-addon2" id="searchInput"
                value="{{ $query ?? '' }}">
            <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
        </div> --}}
        {{-- table --}}
        <div class="row mt-3 table-responsive">
            <table class="table table-primary table-striped text-center" id="food_table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kalori</th>
                        <th>Kategori</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($foods as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->calories }}</td>
                            <td>{{ $item->food_categories->category_name }}</td>
                            <td>
                                <div class="d-grid d-lg-grid d-lg-flex justify-content-center gap-2">
                                    <a href="{{ route('listfood.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalHapus-{{ $item->id }}">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <!-- Modal delete untuk setiap makanan -->
                                    <div class="modal fade" id="modalHapus-{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Pengingat
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus makanan
                                                    "{{ $item->name }}"?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <form action="{{ route('listfood.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-secondary">tidak ada data!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('#alert').delay(3000).fadeOut('slow');
            $('#food_table').DataTable();
        });
    </script>
@endsection
