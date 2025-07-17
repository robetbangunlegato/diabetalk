<x-layouts.app :activePage="'dietdanintakezatgizi'" :title="'Diet dan intake zat gizi'" :description="''">
    <div class="container ">
        <div class="row mt-3 gap-2">

            <form action="{{ route('listfoodcategory.update', $category->id) }}" method="post">

                @csrf

                @method('PUT')

                <div class="mb-3">

                    <label for="name" class="form-label">Nama kategori</label>

                    <input type="text" class="form-control" id="name" name="name" required
                        placeholder="Masukan nama kategori..." value="{{ $category->category_name }}">

                </div>

                <button class="btn btn-primary col-12" type="submit">Simpan</button>

            </form>

        </div>

    </div>

    </div>
</x-layouts.app>
