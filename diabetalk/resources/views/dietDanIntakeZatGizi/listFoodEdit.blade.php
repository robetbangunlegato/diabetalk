@extends('layouts_user.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
            <form action="{{ route('listfood.update', $food->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama makanan</label>
                    <input type="text" class="form-control" id="name" name="name" required
                        placeholder="Masukan nama makanan..." value="{{ $food->name }}">
                </div>
                <div class="mb-3">
                    <label for="food_category_id" class="form-label">Kategori makanan</label>
                    <select class="js-example-basic-single form-select" name="food_category_id" id="food_category_id"
                        required>
                        @foreach ($food_categories as $item)
                            <option value="{{ $item->id }}"
                                {{ $item->id == $food->food_categories_id ? 'selected' : '' }}>{{ $item->category_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="calories_per_gram" class="form-label">Jumlah kalori</label>
                    <input type="number" class="form-control" id="calories_per_gram" name="calories_per_gram" required
                        placeholder="Masukan jumlah kalori per 1 gram..." step="0.01" value="{{ $food->calories }}">
                </div>
                <button class="btn btn-primary col-12" type="submit">Simpan</button>
            </form>
        </div>
    </div>
    </div>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
