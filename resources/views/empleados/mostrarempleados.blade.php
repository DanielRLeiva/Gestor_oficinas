<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Detalles del Empleado</title>
</head>

<body>
    <header>
        <h1>Detalles del Empleado</h1>
    </header>

    <ul class="lista-empleado">
        <li><strong>Nombre y Apellidos:</strong> {{ $empleado->nombre }} {{ $empleado->primer_apellido }}
            {{ $empleado->segundo_apellido }}</li>
        <li><strong>Rol:</strong> {{ $empleado->rol }}</li>
        <li><strong>Fecha de Nacimiento:</strong> {{ $empleado->fecha_nacimiento }}</li>
        <li><strong>DNI:</strong> {{ $empleado->dni }}</li>
        <li><strong>Email:</strong> {{ $empleado->email }}</li>
        <li><strong>Oficina:</strong> {{ $empleado->oficina->nombre }}</li> <!-- Relación con la oficina -->
    </ul>

    <a class="boton" href="{{ route('editarempleado', $empleado->id) }}">Editar Empleado</a>

    <a class="boton" href="{{ route('listaempleados', $empleado->oficina_id) }}">Volver a Detalle de Oficina</a>
</body>

</html>
