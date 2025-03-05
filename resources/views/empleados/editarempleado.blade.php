<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ediar Empleado</title>
</head>
<body>
<div class="container">
    <h1>Editar Empleado</h1>

    <form action="{{ route('actualizarempleado', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $empleado->nombre) }}" required>
        </div>

        <div class="mb-3">
            <label for="primer_apellido" class="form-label">Primer Apellido:</label>
            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="{{ old('primer_apellido', $empleado->primer_apellido) }}" required>
        </div>

        <div class="mb-3">
            <label for="segundo_apellido" class="form-label">Segundo Apellido:</label>
            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="{{ old('segundo_apellido', $empleado->segundo_apellido) }}">
        </div>

        <div class="mb-3">
            <label for="dni" class="form-label">DNI:</label>
            <input type="text" class="form-control" id="dni" name="dni" value="{{ old('dni', $empleado->dni) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $empleado->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $empleado->fecha_nacimiento) }}" required>
        </div>

        <div class="mb-3">
            <label for="rol" class="form-label">Rol:</label>
            <input type="text" class="form-control" id="rol" name="rol" value="{{ old('rol', $empleado->rol) }}" required>
        </div>

        <div class="mb-3">
            <label for="oficina_id" class="form-label">Oficina:</label>
            <select class="form-control" id="oficina_id" name="oficina_id" required>
                @foreach($oficinas as $oficina)
                    <option value="{{ $oficina->id }}" {{ $empleado->oficina_id == $oficina->id ? 'selected' : '' }}>
                        {{ $oficina->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('listaempleados', $empleado->oficina_id) }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

</body>
</html>