<!DOCTYPE html>
<html>

<head>
    <title>Pengingat</title>
</head>

<body>
    <h2>Pengingat: {{ $reminder->title }}</h2>
    <p>{{ $reminder->description ?? 'Jangan lupa ya!' }}</p>

    <br>
    <p>Jangan lupa untuk mengikuti pengingat ini! 😊</p>
</body>

</html>
