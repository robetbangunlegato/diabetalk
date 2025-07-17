<x-layouts.app :activePage="'dietdanintakezatgizi'" :title="'Diet dan intake zat gizi'" :description="''">

    <div class="container">
        <div class="row mt-3 gap-2">

            <form action="{{ route('listfood.store') }}" method="post">

                @csrf

                <div class="mb-3">

                    <label for="name" class="form-label">Nama makanan</label>

                    <input type="text" class="form-control" id="name" name="name" required
                        placeholder="Masukan nama makanan...">

                </div>

                <div class="mb-3">

                    <label for="food_category_id" class="form-label">Kategori makanan</label>

                    <select class="js-example-basic-single form-select" name="food_category_id" id="food_category_id"
                        required>

                        <option value="" selected>Pilih kategori makanan...</option>

                        @foreach ($food_categories as $item)
                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label for="calories_per_gram" class="form-label">Jumlah kalori</label>

                    <input type="number" class="form-control" id="calories_per_gram" name="calories_per_gram" required
                        placeholder="Masukan jumlah kalori per 1 gram makanan" step="0.01">

                </div>

                <div class="mb-3">

                    <label for="fat_per_gram" class="form-label">Jumlah lemak</label>

                    <input type="number" class="form-control" id="fat_per_gram" name="fat_per_gram" required
                        placeholder="Masukan jumlah lemak per 1 gram makanan" step="0.01">

                </div>

                <div class="mb-3">

                    <label for="protein_per_gram" class="form-label">Jumlah protein</label>

                    <input type="number" class="form-control" id="protein_per_gram" name="protein_per_gram" required
                        placeholder="Masukan jumlah protein per 1 gram makanan" step="0.01">

                </div>

                <div class="mb-3">

                    <label for="carbo_per_gram" class="form-label">Jumlah karbo</label>

                    <input type="number" class="form-control" id="carbo_per_gram" name="carbo_per_gram" required
                        placeholder="Masukan jumlah karbo per 1 gram makanan" step="0.01">

                </div>

                <div class="mb-3">

                    <label for="fiber_per_gram" class="form-label">Jumlah serat</label>

                    <input type="number" class="form-control" id="fiber_per_gram" name="fiber_per_gram" required
                        placeholder="Masukan jumlah serat per 1 gram makanan" step="0.01">

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

</x-layouts.app>
