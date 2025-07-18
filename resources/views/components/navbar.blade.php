@props(['activePage'])


{{-- navigation bar for mobile: Bottom Navbar --}}
<nav class="navbar d-sm-none fixed-bottom bg-white p-0">
<style>
    .active-container {
        background-color: gainsboro;
    }
</style>
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
        <a href="{{ route('diabetalking.index') }}"
            class="text-center text-decoration-none h-100 d-flex align-items-center">
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

{{-- navigation bar for laptop/PC: Top Navbar --}}
<nav class="nav nav-tabs fixed-top d-none d-sm-flex justify-content-center   gap-4 shadow-sm bg-white">
    <!-- logo -->
    <div class="d-flex align-items-center">
        <a href="#" class="navbar-brand me-4">
            <img src="{{ asset('logo-dengan-tulisan.png') }}" alt="Logo" style="height: 85px; width: 85px;">
        </a>
    </div>

    <!-- menu item -->
    <ul class="nav justify-content-center gap-4">
    <li class="nav-item">
        <a href="{{ route('catatankesehatan.index') }}"
            class="nav-link {{ $activePage == 'catatankesehatan' ? 'active active-page' : '' }} opacity-5 text-center text-decoration-none d-flex align-items-center">
            <div class="p-2 w-100">
                <img src="{{ asset('icons/note.png') }}" alt="Catatan" style="height: 30px;">
                <p>Catatan kesehatan</p>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('dietdanintakezatgizi.index') }}"
            class="nav-link {{$activePage == 'dietdanintakezatgizi' ? 'active' : ''}} text-center text-decoration-none d-flex align-items-center">
            <div class="p-2 w-100">
                <img src="{{ asset('icons/diet.png') }}" alt="Diet" style="height: 30px;">
                <p>Diet & Intake Zat Gizi</p>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('pengingatobat.index') }}"
            class="nav-link {{$activePage == 'pengingatobat' ? 'active' : ''}} text-center text-decoration-none d-flex align-items-center">
            <div class="p-2 w-100">

                <img src="{{ asset('icons/drugs.png') }}" alt="Pengingat Obat" style="height: 30px;">
                <p>Pengingat Obat</p>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('diabetalking.index') }}"
            class="nav-link {{$activePage == 'diabetalking' ? 'active' : ''}} text-center text-decoration-none d-flex align-items-center">
            <div class="p-2 w-100">
                <img src="{{ asset('icons/knowledge-sharing.png') }}" alt="Diabetalking" style="height: 30px;">
                <p>Diabetalking</p>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('tanyadiabetalk.index') }}"
            class="nav-link {{$activePage == 'tanyadiabetalk' ? 'active' : ''}} text-center text-decoration-none d-flex align-items-center">
            <div class="p-2 w-100">

                <img src="{{ asset('icons/asking.png') }}" alt="Tanya" style="height: 30px;">
                <p>Tanya Diabetalk</p>
            </div>
        </a>
    </li>
    </ul>

    <!-- go to profile -->
    <div class="d-flex align-items-center">
        <a href="#" class="text-decoration-none">
            <img src="{{ asset('icons/profile.png') }}" alt="Profil" style="height: 50px; width: 50px;">
        </a>
    </div>

</nav>