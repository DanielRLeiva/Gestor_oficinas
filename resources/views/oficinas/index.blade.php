<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Oficinas</title>
</head>

<body>
    <h1>Gestor de Oficinas</h1>
    <a href="{{ route('crearoficina') }}">Añadir Oficina</a>
    <ul>
        @foreach ($oficinas as $oficina)
        <li><a href="{{ route('mostraroficinas', $oficina->id) }}">{{ $oficina->nombre }}</a></li>
        @endforeach
    </ul>
</body>

</html>