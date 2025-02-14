<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Diabetalk')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
        /* body {
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
        } */
    </style>
</head>

<style>
    #chartKonsumsiAir {
        width: 240px !important;
        height: 200px !important;
        text-align: center;
    }

    #iconLangkah {
        width: 200px;
        height: 200px;
    }

    @media (max-width: 575.98px) {
        #iconLangkah {
            width: 150px !important;
            height: 150px !important;
        }

        .teks-di-bawah-judul-halaman {
            font-size: 14px !important;
            /* Contoh ukuran kecil */
        }

        .teks-judul-halaman {
            font-size: 28px !important;
            margin-top: 16px !important;
        }
    }
</style>
@yield('content')

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
