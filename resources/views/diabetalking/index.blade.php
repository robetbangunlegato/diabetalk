<x-layouts.app :activePage="'diabetalking'" :title="'Diabetalking'" :description="'Edukasi pada pencegahan komplikasi diabetes melitus '">
@php

$topics = [

    ['link' => '#', 'icon' => 'bi bi-heart-pulse', 'title' => 'Diabetes Melitus', 'image-path' => 'background-diabetalking-2.jpg'],

    ['link' => '#', 'icon' => 'bi bi-people', 'title' => 'Diabetes & Obesitas', 'image-path' => 'background-diabetalking-3.jpg'],

    ['link' => '#', 'icon' => 'bi bi-heart', 'title' => 'Diabetes & Hipertensi', 'image-path' => 'background-diabetalking-4.jpg'],

    ['link' => '#', 'icon' => 'bi bi-heart-fill', 'title' => 'Diabetes & Jantung Koroner', 'image-path' => 'background-diabetalking-5.jpg'],

    ['link' => '#', 'icon' => 'bi bi-droplet', 'title' => 'Diabetes & Gagal Ginjal', 'image-path' => 'background-diabetalking-6.jpg'],

];

@endphp
<style>
    .hover-grow-effect{
        transition: transform 0.3s ease;
    }
    .hover-grow-effect:hover{
        transform: scale(1.05); /* akan expand ke 105% */
    }
    .hover-grow-effect:active{
        transform: scale(1); /* akan expand ke 105% */
    }
</style>
    <div class="container margin-top-for-content-desktop margin-top-for-content-mobile">
        <div class="d-none d-xl-grid">
        <div class="row align-items-center justify-content-center rounded" style="background-image: url({{asset('background-diabetalking.jpg')}}); height:6rem; background-size:cover; background-repeat:no-repeat; background-position: center 61%">
            <p class="h4 text-white">Edukasi pada pencegahan komplikasi diabetes melitus</p>
        </div>
        </div>
        
        {{-- <div class="row justify-content-around">
            <a href="http://" class="col-5 mt-4 text-decoration-none d-grid align-items-center" style="height: 250px; background-image: url({{asset('background-diabetalking-2.jpg')}}); background-size:cover; background-position: center center; background-repeat:no-repeat">
                <p class="">text</p>
            </a>
            
        </div> --}}

        <div class="row justify-content-around">
            @foreach ($topics as $topic)
                <a href="{{ $topic['link'] }}" class="col-md-5 mt-4 d-grid align-items-center text-decoration-none rounded shadow hover-grow-effect" style="height: 250px; background-image: url({{$topic['image-path']}}); background-size:cover; background-position: center center; background-repeat:no-repeat;">
                    <div class="" id=""> <!-- do not delete this div! -->
                    <i class="{{ $topic['icon'] }} display-4 text-white" style="-webkit-text-stroke: 1px black;"></i>
                    <p class="h3 mt-2 text-white" style="-webkit-text-stroke: 1px black;">{{ $topic['title'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-layouts.app>
