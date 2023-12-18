<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat CRUD</title>
</head>
<body>
    <h1>EDITAR ALUMNAT</h1>
    <div class="form">
        <form action="{{ route('updateAlumnat', $alumnat->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3"> 
                <label for="nom">Nom </label>
                <input type="text" name="nom" value="{{ $alumnat->nom }}">
            </div>
            <div class="mb-3"> 
                <label for="cognom">Cognom </label>
                <input type="text" name="cognom" value="{{ $alumnat->cognom }}">
            </div>
            <div class="mb-3"> 
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ $alumnat->email }}">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
        </form><br>
        <div>
            <a href="{{ route('getAlumnat') }}">Tornar enrere</a><br>
            <a href="{{ route('admin_view') }}">ADMIN VISTA</a>
        </div>
    </div>
</body>
</html>