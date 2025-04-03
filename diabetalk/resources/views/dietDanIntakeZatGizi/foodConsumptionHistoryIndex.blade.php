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
        <h2 class="mt-3 text-center">Riwayat asupan</h2>
        {{-- table --}}
        <div class="mt-3 table-responsive">
            <table class="table table-primary table-striped text-center" id="history_food_table">
                <thead style="font-size: 11px;">
                    <tr>
                        <th>No</th>
                        <th>Makanan</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Dibuat</th>
                    </tr>
                </thead>
                <tbody style="font-size: 11px;">
                    @forelse ($food_consumptions_history as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->foods->name }}</td>
                            <td>{{ $item->amount }} kkal</td>
                            <td>{{ $item->adverb_time }}</td>
                            <td>{{ $item->created_at }}</td>
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
        });
        $(document).ready(function() {
            $('#history_food_table').DataTable();
        });
    </script>
@endsection
