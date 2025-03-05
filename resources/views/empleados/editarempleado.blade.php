<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Ediar Empleado</title>
</head>

<body>
    <h1>Editar Empleado</h1>

    <form action="{{ route('actualizarempleado', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $empleado->nombre) }}" required>
        </div>

        <div>
            <label for="primer_apellido">Primer Apellido:</label>
            <input type="text" id="primer_apellido" name="primer_apellido"
                value="{{ old('primer_apellido', $empleado->primer_apellido) }}" required>
        </div>

        <div>
            <label for="segundo_apellido">Segundo Apellido:</label>
            <input type="text" id="segundo_apellido" name="segundo_apellido"
                value="{{ old('segundo_apellido', $empleado->segundo_apellido) }}">
        </div>

        <div>
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" value="{{ old('dni', $empleado->dni) }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $empleado->email) }}" required>
        </div>

        <div>
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"
                value="{{ old('fecha_nacimiento', $empleado->fecha_nacimiento) }}" required>
        </div>

        <div>
            <label for="rol">Rol:</label>
            <input type="text" id="rol" name="rol" value="{{ old('rol', $empleado->rol) }}" required>
        </div>

        <div class="seleccion">
            <label for="oficina_id">Oficina:</label>
            <select id="oficina_id" name="oficina_id" required>
                @foreach ($oficinas as $oficina)
                    <option value="{{ $oficina->id }}" {{ $empleado->oficina_id == $oficina->id ? 'selected' : '' }}>
                        {{ $oficina->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Guardar Cambios</button>
        </div>

        <a class="boton-cancelar" href="{{ route('listaempleados', $empleado->oficina_id) }}">Cancelar</a>
    </form>

</body>

</html>
