<x-layouts.app :activePage="'tanyadiabetalk'" :title="'Tanya diabetalk'" :description="''">
    <!-- toast -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
        <div id="copyToast" class="toast align-items-center text-white bg-success border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    Berhasil disalin!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>

    <div class="container margin-top-for-content-desktop margin-top-for-content-mobile">
    <div class="row text-center g-3">
        <!-- Sapaan -->
        <p class="fs-5">Hai {{ auth()->user()->name }}! 👋<br>apa ada yang bisa Diabetalk bantu?</p>
    </div>

    <!-- Kartu Konsultan -->
    <div class="bg-light rounded-4 shadow p-4 mx-auto" style="max-width: 350px;">
        <img src="putri.jpg" class="img-fluid rounded mb-3" alt="Konsultan" style="max-height: 300px;">
        <h5 class="mb-0">Putri Sondang Nauli</h5>
        <small class="text-muted d-block mb-1">Mahasiswa gizi poltekes</small>
        <div class="text-muted d-flex justify-content-center" style="font-size: 14px;"><p id="textToCopy">089510716499</p><button class="bg-transparent border-0 d-flex" onclick="copyHandle()"><i class="bi bi-copy"></i></button></div>
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
        <p class="text-muted m-0">Jadwal konsultasi</p>
        <p class="text-muted">Senin - Jumat (09.00 - 16.00)</p>
    </div>
    </div>

    <script>
        function copyHandle(){
            const textToCopy = document.getElementById('textToCopy');
            navigator.clipboard.writeText(textToCopy)
            .then(() => {const toast = new bootstrap.Toast(document.getElementById('copyToast'));
                    toast.show();
                })
            .catch(()=> alert('Gagal, coba lagi!'));
        }
    </script>
</x-layouts.app>
