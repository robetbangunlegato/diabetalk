<!DOCTYPE html>
<html>

<head>
    <title>Pengingat</title>
</head>

<body>
    <h3>Jangan lupa, kamu punya pengingat : {{ $reminder->title }}</h3>
    <br>
    <p>Deskripsi : {!! $reminder->description ?? 'Tidak ada!' !!}</p>
    <p>Instruksi : {{ $reminder->instruction }}</p>
    <br>
    <p>Jangan lupa untuk mengikuti pengingat ini! 😊</p>
</body>

</html>
