<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor registro</title>
</head>
<body>
<h1>Creació d'usuari nou</h1>
    <div class="form">
        <form action='{{ route("insertProfessorat") }}' method="post">
            @csrf

            <!-- <input type="hidden" name="_token"> -->
            <div class="mb-3"> 
                <label for="name">Nom </label>
                <input type="text" name="name">
            </div>
            <div class="mb-3"> 
                <label for="surname">Cognoms </label>
                <input type="text" name="surname">
            </div>
            <div class="mb-3"> 
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <!-- <div class="mb-3"> 
                <label for="active"> Actiu </label>
                <input type="checkbox" name="active">
            </div><br> -->
            <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
        </form><br>
        <div>
            <a href="{{ route('professorat') }}">back</a>
        </div>
    </div>    
</body>
</html>
