<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Gestor de Oficinas</title>
</head>

<body>
    <header>
        <h1>Gestor de Oficinas</h1>
    </header>

    <a class="boton" href="{{ route('crearoficina') }}">Añadir Oficina</a>

    <h3>Lista de Oficinas:</h3>
    
    @if (count($oficinas) > 0)
        <ul class="lista-oficinas">
            @foreach ($oficinas as $oficina)
                <li class="lista"><a href="{{ route('mostraroficinas', $oficina->id) }}">{{ $oficina->nombre }}</a></li>
            @endforeach
        </ul>
    @else
        <p>No hay oficinas registradas</p>
    @endif
</body>

</html>
