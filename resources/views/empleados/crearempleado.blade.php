<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Creación de Empleados</title>
</head>

<body>
    <h1>Crear Empleado</h1>
    <form method="POST" action="{{ route('guardarempleado', $oficina->id) }}">
        @csrf
        <input type="hidden" name="oficina_id" value="{{ $oficina->id }}">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="primer_apellido">Primer Apellido:</label>
            <input type="text" id="primer_apellido" name="primer_apellido" required>
        </div>
        <div>
            <label for="segundo_apellido">Segundo Apellido:</label>
            <input type="text" id="segundo_apellido" name="segundo_apellido">
        </div>
        <div>
            <label for="rol">Rol:</label>
            <input type="text" id="rol" name="rol">
        </div>
        <div>
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
        </div>
        <div>
            <label for="dni">DNI:</label>
            <input type="text"id="dni" name="dni" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="button-submit">
            <button type="submit">Crear Empleado</button>
        </div>

        <a class="boton-cancelar" href="{{ route('listaempleados', $oficina->id) }}" class="btn btn-secondary">Cancelar</a>

    </form>

</body>

</html>
