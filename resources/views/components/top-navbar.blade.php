@props([])

<nav class="nav nav-tabs justify-content-center gap-4">
    <li class="nav-item">
        <a href="{{ route('catatankesehatan.index') }}"
            class="nav-link active opacity-5 text-center text-decoration-none d-flex align-items-center">
            <div class="p-2 w-100">
                <img src="{{ asset('icons/note.png') }}" alt="Catatan" style="height: 30px;">
                <p>Catatan kesehatan</p>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('dietdanintakezatgizi.index') }}" class="nav-link text-center text-decoration-none d-flex align-items-center">
            <div class="p-2 w-100">
                <img src="{{ asset('icons/diet.png') }}" alt="Diet" style="height: 30px;">
                <p>Diet & Intake Zat Gizi</p>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('pengingatobat.index') }}" class="nav-link text-center text-decoration-none d-flex align-items-center">
            <div class="p-2 w-100">
        
                <img src="{{ asset('icons/drugs.png') }}" alt="Pengingat Obat" style="height: 30px;">
                <p>Pengingat Obat</p>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('diabetalking.index') }}" class="nav-link text-center text-decoration-none d-flex align-items-center">
            <div class="p-2 w-100">
                <img src="{{ asset('icons/knowledge-sharing.png') }}" alt="Diabetalking" style="height: 30px;">
                <p>Diabetalking</p>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('tanyadiabetalk.index') }}" class="nav-link text-center text-decoration-none d-flex align-items-center">
            <div class="p-2 w-100">
        
                <img src="{{ asset('icons/asking.png') }}" alt="Tanya" style="height: 30px;">
                <p>Tanya Diabetalk</p>
            </div>
        </a>
    </li>
</nav>
