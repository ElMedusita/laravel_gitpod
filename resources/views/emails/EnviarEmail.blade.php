<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Inicio sesión Resurrection Fest</title>
</head>
<body>
    <h1>{{ $details ['title'] }}</h1>
    <p> {{ $details ['body'] }}</p>
    <br>
    <a class="btn btn-info" href="{{ route('home') }}">Regreso</a>
</body>

</html>