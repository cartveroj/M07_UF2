<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor registro</title>
</head>
<body>
    <!-- archivo que se encarga del formulario de insert de profesores -->
<h1>Creació d'professorat nou</h1>
    <div class="form">
        <form action='{{ route("insertProfessorat") }}' method="post">
            @csrf
            <div class="mb-3"> 
                <label for="name">Nom </label>
                <input type="text" name="name">
                @error('name') <!--variable que recibe del controlador del array de errores -->
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3"> 
                <label for="surname">Cognoms </label>
                <input type="text" name="surname">
                @error('surname') <!--variable que recibe del controlador del array de errores -->
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3"> 
                <label for="email">Email</label>
                <input type="email" name="email">
                @error('email') <!--variable que recibe del controlador del array de errores -->
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
        </form><br>
        <div>
        <!-- retorna a la vista anterior -->
            <a href="{{ route('professorat') }}">back</a> 
        </div>
    </div>    
</body>
</html>
