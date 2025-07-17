<x-layouts.app :activePage="'dietdanintakezatgizi'" :title="'Diet dan intake zat gizi'" :description="''">

    <div class="container ">
        <div class="row mt-3 gap-2">

            <a href="{{ route('listfoodcategory.create') }}" class="btn btn-primary">Tambah kategori</a>

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

        <div class="row mt-3 table-responsive">

            <table class="table table-primary table-striped text-center" id="category_food_table">

                <thead>

                    <tr>

                        <th class="text-center">No</th>

                        <th class="text-center">Nama</th>

                        <th class="text-center">Opsi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse ($food_categories as $item)
                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->category_name }}</td>

                            <td>

                                <div class="d-flex justify-content-center gap-2">

                                    <a href="{{ route('listfoodcategory.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm">

                                        <i class="bi bi-pencil"></i>

                                    </a>

                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalHapus-{{ $item->id }}">

                                        <i class="bi bi-trash"></i>

                                    </a>

                                    <!-- Modal delete untuk setiap peingingat -->

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

                                                    "{{ $item->category_name }}"?

                                                </div>

                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>

                                                    <form action="{{ route('listfoodcategory.destroy', $item->id) }}"
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
            $('#category_food_table').DataTable();


        });
    </script>

</x-layouts.app>
