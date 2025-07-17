@props(['title', 'description'])
<style>
    @media (min-width: 992px) {
        .font-size {
            font-size: 3vw;
        }
    }
</style>
{{-- header --}}
<header class="header p-2 fixed-start bg-white shadow-sm">
    <div class="row text-center">
        <div class="col-3 col-lg-1">
            <a href="{{ route('dashboard') }}">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <img src="{{ asset('logo-dengan-tulisan.png') }}" alt="Logo Diabetalk" class="img-fluid">
                </div>
            </a>
        </div>
        <div class="col-7 col-lg-10">
            <div class="row" style="height: 100%">
                <h1 class="d-flex align-items-end justify-content-center m-0 font-size"
                    style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-size: 5vw; max-width: 100%; text-align: center;">
                    {{ $title }}
                </h1>
                <label for="">{{ $description ?? '' }}</label>
            </div>
        </div>


        <div class="col-2 col-lg-1">
            <div class="d-flex align-items-center justify-content-center" style="height: 100%">
                <!-- Trigger Dropdown pakai gambar -->
                <div class="dropdown">
                    <img src="{{ asset('icons/user.png') }}" alt="profile icon" class="w-75 dropdown-toggle"
                        style="cursor: pointer;" data-bs-toggle="dropdown" aria-expanded="false">

                    <!-- Isi Dropdown -->
                    <ul class="dropdown-menu text-center">
                        <li>
                            <a class="dropdown-item d-flex align-items-center justify-content-center gap-2"
                                href="#">
                                <i class="bi bi-person-circle"></i> Profile
                            </a>
                        </li>
                        <li>
                            {{-- <a class="" href="#">
                            </a> --}}
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button
                                    class="dropdown-item d-flex align-items-center justify-content-center gap-2 text-danger"
                                    type="submit">
                                    <i class="bi bi-box-arrow-right"></i> Keluar

                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>
