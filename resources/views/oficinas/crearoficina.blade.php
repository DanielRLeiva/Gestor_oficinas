<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Oficina</title>
</head>
<body>
<h1>Crear Oficina</h1>
<form action="{{ route('guardaroficina') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <label>Dirección:</label>
    <input type="text" name="direccion" required>
    <button type="submit">Guardar</button>
</form>
</body>
</html>