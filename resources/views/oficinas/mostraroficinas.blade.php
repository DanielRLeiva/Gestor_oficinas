<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Oficina</title>
</head>
<body>
<h1>Detalles de la Oficina: {{ $oficina->nombre }}</h1>
<p><strong>Dirección:</strong> {{ $oficina->direccion }}</p>

<h3>Empleados:</h3>
<ul>
    @foreach ($oficina->empleados as $empleado)
        <li>
            {{ $empleado->nombre }} {{ $empleado->primer_apellido }} - {{ $empleado->rol }}
            <a href="{{ route('mostrarempleados', $empleado->id) }}">Ver detalles Empleado</a>
        </li>
    @endforeach
</ul>

<a href="{{ route('crearempleado', $oficina->id) }}">Añadir Empleado</a>
<br>
<a href="{{ route('listaoficinas') }}">Volver a la lista de oficinas</a>
</body>
</html>