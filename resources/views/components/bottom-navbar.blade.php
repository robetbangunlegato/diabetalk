@props(['activePage'])
<!-- Footer: Bottom Navbar -->
<footer>
    <style>
        .active-container {
            background-color: gainsboro;
        }
    </style>
    <!-- Bottom Navbar -->
    <nav class="navbar fixed-bottom bg-white p-0">
        <div class="container d-flex justify-content-around align-items-stretch">
            <a href="{{ route('catatankesehatan.index') }}"
                class="text-center text-decoration-none h-100 d-flex align-items-center">
                <div class="p-2 w-100 {{ $activePage == 'catatankesehatan' ? 'active-container' : '' }}">
                    <img src="{{ asset('icons/note.png') }}" alt="Catatan" style="height: 30px;">
                    <div style="font-size: 12px;">Catatan<br>Kesehatan</div>
                </div>
            </a>

            <a href="{{ route('dietdanintakezatgizi.index') }}"
                class="text-center text-decoration-none h-100 d-flex align-items-center">
                <div class="p-2 w-100 {{ $activePage == 'dietdanintakezatgizi' ? 'active-container' : '' }}">
                    <img src="{{ asset('icons/diet.png') }}" alt="Diet" style="height: 30px;">
                    <div style="font-size: 12px;">Diet & Intake<br>Zat Gizi</div>
                </div>
            </a>
            <a href="{{ route('pengingatobat.index') }}"
                class="text-center text-decoration-none h-100 d-flex align-items-center">
                <div class="p-2 w-100 {{ $activePage == 'pengingatobat' ? 'active-container' : '' }}">

                    <img src="{{ asset('icons/drugs.png') }}" alt="Pengingat Obat" style="height: 30px;">
                    <div style="font-size: 12px;">Pengingat<br>Obat</div>
                </div>
            </a>
            <a
                href="{{ route('diabetalking.index') }}"class="text-center text-decoration-none h-100 d-flex align-items-center">
                <div class="p-2 w-100 {{ $activePage == 'diabetalking' ? 'active-container' : '' }}">
                    <img src="{{ asset('icons/knowledge-sharing.png') }}" alt="Diabetalking" style="height: 30px;">
                    <div style="font-size: 12px;">Diabetalking <br><br></div>
                </div>
            </a>
            <a href="{{ route('tanyadiabetalk.index') }}"
                class="text-center text-decoration-none h-100 d-flex align-items-center">
                <div class="p-2 w-100 {{ $activePage == 'tanyadiabetalk' ? 'active-container' : '' }}">

                    <img src="{{ asset('icons/asking.png') }}" alt="Tanya" style="height: 30px;">
                    <div style="font-size: 12px;">Tanya<br>Diabetalk</div>
                </div>
            </a>
        </div>
    </nav>
</footer>
