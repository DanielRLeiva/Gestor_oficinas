<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Crear Oficina</title>
</head>

<body>
    <header>
        <h1>Crear Oficina</h1>
    </header>

    <h2>Formulario de creación de oficina:</h2>

    <form action="{{ route('guardaroficina') }}" method="POST">
        @csrf
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label>Dirección:</label>
            <input type="text" name="direccion" required>
        </div>
        <div class="button-submit">
            <button type="submit">Guardar Oficina</button>
        </div>

        <a class="boton-cancelar" href="{{ route('listaoficinas') }}">Cancelar</a>

    </form>


</body>

</html>
