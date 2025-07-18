<x-layouts.app :activePage="'dietdanintakezatgizi'" :title="'Diet dan intake zat gizi'" :description="''">

    <style>
        .nutrition-card {
            max-width: 350px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            background-color: #f8f9fa;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .nutrition-header,
        .nutrition-footer {
            background-color: #eef1f4;
            padding: 8px 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
        }

        .nutrition-body {
            /* padding: 12px 16px; */
            font-size: 14px;
        }

        .nutrition-body .row>div {
            margin-bottom: 8px;
        }
    </style>
    <div class="container margin-top-for-content-desktop">
        <h2 class="text-center">Riwayat asupan</h2>

        {{-- card --}}

        @forelse ($food_consumptions_history as $item)
            <div class="nutrition-card mx-auto mb-4">
                <!-- Header -->
                <div class="nutrition-header">
                    <div><span>⏰</span> {{ $item->adverb_time }}</div>
                    <div class="h6" style="margin: 0px">{{ $item->name }}</div>
                    <div><span>💪</span> {{ number_format($item->calories, 0) }} kkal</div>

                </div>

                <!-- Body -->
                <div class="nutrition-body">
                    <div class="row text-center ">
                        <div class="">
                            <div>🧈 Lemak : {{ number_format($item->fat, 1) }} gram</div>
                        </div>
                        <div class="">
                            <div>🥥 Karbohidrat : {{ number_format($item->carbo, 1) }} gram</div>
                        </div>
                        <div class="">
                            <div>🥩 Protein : {{ number_format($item->protein, 1) }} gram</div>
                        </div>
                        <div class="">
                            <div>🥦 Serat : {{ number_format($item->fiber, 1) }} gram</div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="nutrition-footer">
                    <div><span>📅</span> {{ $item->created_at }}</div>
                    <div><span>⚖️</span> {{ $item->amount }} Gram</div>
                </div>
            </div>
        @empty
            <h4 class="text-muted text-center">Tidak ada data!</h4>
        @endforelse


    </div>



    <script>
        $(document).ready(function() {

            $('#alert').delay(3000).fadeOut('slow');

        });

        $(document).ready(function() {

            $('#history_food_table').DataTable();

        });
    </script>
</x-layouts.app>
