<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor registro</title>
</head>
<body>
    <!-- archivo que muestra los datos del registro seleccionado -->
    <h1>Detalles del Profesor</h1>
    <div>
        <p><strong>ID:</strong> {{ $professor->id }}</p>
        <p><strong>Nombre:</strong> {{ $professor->nom }}</p>
        <p><strong>Apellidos:</strong> {{ $professor->cognom }}</p>
        <p><strong>Email:</strong> {{ $professor->email }}</p>
    </div>
    <a href="{{ route('getProfessorat') }}">Volver</a>
</body>
</html>
