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
        <form action="{{ route('updateAlumnat', $alumne['id']) }}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="_token" >
            <div class="mb-3"> 
                <label for="name">Nom </label>
                <input type="text" name="name">
            </div>
            <div class="mb-3"> 
                <label for="surname">Cognom </label>
                <input type="text" name="surname">
            </div>
            <div class="mb-3"> 
                <label for="email">Email</label>
                <input type="email" name="email">
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