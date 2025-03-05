<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Mostrar Oficina</title>
</head>

<body>
    <header>
        <h1>Detalles de la Oficina</h1>
    </header>

    <h2>Oficina: <span>{{ $oficina->nombre }}</span></h2>
    <p><strong>Dirección:</strong> {{ $oficina->direccion }}</p>

    <a class="boton" href="{{ route('crearempleado', $oficina->id) }}">Añadir Empleado</a>

    <a class="boton" href="{{ route('listaoficinas') }}">Volver a Lista de Oficinas</a>

    <h3>Lista de Empleados:</h3>

    @if (count($oficina->empleados) < 0)
        <p style="color: red">No hay empleados en esta oficina.</p>
    @else
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Rol</th>
                <th>Detalles del Empleado</th>
            </tr>

            @foreach ($oficina->empleados as $empleado)
                <tr>
                    <td>
                        {{ $empleado->nombre }}
                    </td>
                    <td>
                        {{ $empleado->primer_apellido }}
                    </td>
                    <td>
                        {{ $empleado->rol }}
                    </td>
                    <td>
                        <a class="boton tabla" href="{{ route('mostrarempleados', $empleado->id) }}">Ver Detalles</a>
                    </td>
                </tr>
            @endforeach

        </table>

    @endif

</body>

</html>
