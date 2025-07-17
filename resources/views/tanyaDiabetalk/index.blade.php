<x-layouts.app :activePage="'tanyadiabetalk'" :title="'Tanya diabetalk'" :description="''">


    
        <div class="row text-center g-3">
             <!-- Sapaan -->
    <p class="fs-5">Hai {{ auth()->user()->name }}! 👋<br>apa ada yang bisa Diabetalk bantu?</p>

    <!-- Kartu Konsultan -->
    <div class="bg-light rounded-4 shadow-sm p-4 mx-auto" style="max-width: 350px;">
        <img src="putri.jpg" class="img-fluid rounded mb-3" alt="Konsultan" style="max-height: 300px;">
        <h5 class="mb-0">Putri Sondang Nauli</h5>
        <small class="text-muted d-block mb-1">Mahasiswa gizi poltekes</small>
        <div class="text-muted" style="font-size: 14px;">0895-1071-6499</div>
    </div>

    <!-- Tombol Konsultasi -->
    <div class="mt-4">
        <a href="https://wa.me/6289510716499" target="_blank"
            class="btn btn-success rounded-pill d-flex align-items-center justify-content-center mx-auto"
            style="width: 230px; height: 50px;">
            <i class="bi bi-whatsapp me-2 fs-5"></i> Mulai konsultasi
        </a>
    </div>

    <!-- Jadwal -->
    <div class="mt-3">
        <p class="text-muted small m-0">Jadwal konsultasi</p>
        <p class="text-muted small">Senin - Jumat (09.00 - 16.00)</p>
    </div>

        </div>

    </div>
</x-layouts.app>
