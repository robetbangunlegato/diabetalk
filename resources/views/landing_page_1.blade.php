<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diabetalk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <style>
        .typing-text {
            /* font-family: monospace; */
            white-space: normal;
            /* biar bisa wrap */
            word-break: break-word;
            border-right: 3px solid black;
            display: inline;
            font-size: 1.25rem;
            /* text-transform: uppercase; */
        }

        @media (min-width: 1140px) {
            .typing-text{
                font-size: 24pt;
            }
        }

        /* cursor blinking */
        @keyframes blink {

            0%,
            100% {
                border-color: black;
            }

            50% {
                border-color: transparent;
            }
        }

        .typing-text.blink {
            animation: blink 0.7s infinite;
        }
    </style>
    </style>
    <div class="container p-5 d-flex align-items-center justify-content-center" style="min-height: 100vh">

        <div class="text-center">

            <img src="/logo-dengan-tulisan.png" alt="" height="150px" width="150px">

            <p class="text-uppercase" style="font-weight: bolder; font-size: 32pt; margin: 0%;">diabetalk</p>

            <div class="" style="height: 80px;">
                <p id="typingTarget" class="lead typing-text " style="text-align: justify;"></p>
            </div>

            <div class="col-12 mt-3">
                <a href="{{ route('landing_page_2') }}" class="btn btn-info text-white" style="border-radius: 10px">Lanjut
                    >></a>

            </div>

            <div class="col-12 mt-3">

                <a href="{{ route('login') }}" class="btn btn-primary" style="border-radius: 10px;">Ke halaman login</a>

            </div>



        </div>

    </div>
    <script>
        const text = "Tingkatkan kualitas hidup anda untuk mencapai kesehatan yang lebih optimal";
        const target = document.getElementById("typingTarget");
        let index = 0;

        function type() {
            if (index < text.length) {
                target.innerHTML += text.charAt(index);
                index++;
                setTimeout(type, 50); // kecepatan ketik
            } else {
                target.classList.add("blink"); // tambah animasi blinking setelah selesai
            }
        }

        type();
    </script>    
</body>
</html>
