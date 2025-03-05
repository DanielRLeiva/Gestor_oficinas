<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Empleados</title>
</head>
<body>
<h1>Crear Empleado</h1>
<form method="POST" action="{{ route('guardarempleado', $oficina->id) }}">
    @csrf
    <input type="hidden" name="oficina_id" value="{{ $oficina->id }}">
    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <label>Primer Apellido:</label>
    <input type="text" name="primer_apellido" required>
    <label>Segundo Apellido:</label>
    <input type="text" name="segundo_apellido">
    <label>Rol:</label>
    <input type="text" name="rol">
    <label>Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacimiento">
    <label>DNI:</label>
    <input type="text" name="dni" required>
    <label>Email:</label>
    <input type="text" name="email" required>
    <button type="submit">Crear Empleado</button>
    <a href="{{ route('listaempleados', $oficina->id) }}" class="btn btn-secondary">Cancelar</a>

</form>

</body>
</html>