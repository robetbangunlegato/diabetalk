<x-layouts.app :activePage="'pengingatobat'" :title="'Pengingat obat'" :description="''">


    <div class="container margin-top-for-content-desktop">
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

        <div class="row mt-3 table-responsive">

            <table class="table table-primary table-striped text-center" id="reminder_table">

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Judul</th>

                        <th>Instruksi</th>

                        <th>Waktu</th>

                        <th>Opsi</th>

                    </tr>

                </thead>

                <tbody>

                    {{-- @dd($reminders)     --}}

                    @forelse ($reminders as $item)
                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->title }}</td>

                            <td>{{ $item->instruction }}</td>

                            <td>{{ $item->reminder_time }}</td>

                            <td>

                                <div class="d-grid d-lg-grid d-lg-flex justify-content-center gap-2">

                                    <a href="#" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalInfo-{{ $item->id }}">

                                        <i class="bi bi-eye"></i>

                                    </a>

                                    <!-- Modal detail untuk setiap pengingat -->

                                    <div class="modal fade" id="modalInfo-{{ $item->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">

                                        <div class="modal-dialog modal-dialog-centered" role="document">

                                            <div class="modal-content">

                                                <div class="modal-header">



                                                    <h5 class="modal-title" id="exampleModalLabel">Detail

                                                        Pengingat

                                                    </h5>



                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>

                                                </div>

                                                <div class="modal-body">

                                                    <div class="card">

                                                        <div class="card-body">

                                                            <!-- Judul -->

                                                            <h4 class="card-title text-primary fw-bold">{{ $item->title }}

                                                            </h4>



                                                            <!-- Informasi Obat -->

                                                            <ul class="list-group list-group-flush">

                                                                <li class="list-group-item">

                                                                    <strong><i class="bi bi-info-circle"></i>

                                                                        Instruksi:</strong> {{ $item->instruction }}

                                                                </li>

                                                                <li class="list-group-item">

                                                                    <strong><i class="bi bi-clock"></i> Waktu

                                                                        Konsumsi:</strong> {{ $item->reminder_time }}

                                                                </li>

                                                                <li class="list-group-item">

                                                                    <strong><i class="bi bi-repeat"></i>

                                                                        Pengulangan:</strong>

                                                                    <ul class="list-inline mt-1">

                                                                        @foreach ($item->schedules as $schedule)
                                                                            <li class="list-inline-item badge bg-secondary">

                                                                                {{ $schedule->day }}</li>
                                                                        @endforeach

                                                                    </ul>

                                                                </li>

                                                                <li class="list-group-item">

                                                                    <strong><i class="bi bi-card-text"></i>

                                                                        Deskripsi:</strong>

                                                                    <div class="card-text mt-2 p-3 rounded bg-light border">

                                                                        {!! $item->description ?? '<span class="text-muted">Tidak ada deskripsi!</span>' !!}

                                                                    </div>

                                                                </li>

                                                                <li class="list-group-item">

                                                                    <p class="text-muted" style="font-size: 12px;">

                                                                        <i class="bi bi-clock"></i> Dibuat

                                                                        pada: {{ $item->created_at }}

                                                                    </p>

                                                                </li>

                                                            </ul>

                                                        </div>

                                                    </div>

                                                </div>



                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>

                                                    {{-- <form action="{{ route('pengingatobat.edit', $item->id) }}"

                                                        method="POST">

                                                        @csrf

                                                        <button type="submit" class="btn btn-warning">Edit</button>

                                                    </form> --}}

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    {{-- <a href="#" class="btn btn-warning btn-sm">

                                        <i class="bi bi-pencil"></i>

                                    </a> --}}

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

                                                    Yakin ingin menghapus pengingat ini "{{ $item->title }}"?

                                                </div>

                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>

                                                    <form action="{{ route('pengingatobat.destroy', $item->id) }}"
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

            $('#reminder_table').DataTable();

        });
    </script>
</x-layouts.app>
