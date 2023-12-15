<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario sign in</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</head>
<body>    
    
    <h1>Creació nou alumne</h1>
    <div class="form">
        <form action='{{ route("insertAlumnat") }}' method="post">
            @csrf

            <div class="mb-3"> 
                <label for="nom">Nom </label>
                <input type="text" name="nom">
            </div>
            <div class="mb-3"> 
                <label for="cognom">Cognom </label>
                <input type="text" name="cognom">
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

