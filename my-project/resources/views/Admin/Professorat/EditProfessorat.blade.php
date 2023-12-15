<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor registro</title>
</head>
<body>
<h1>Editar Profesor </h1>
    <div class="form">
    <form action="{{ route('updateProfessorat', $professorat->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $professorat->id }}">
    <div class="mb-3"> 
        <label for="nom">Nom </label>
        <input type="text" name="nom" value="{{ $professorat->nom }}">
    </div>
    <div class="mb-3"> 
        <label for="cognom">Cognoms </label>
        <input type="text" name="cognom" value="{{ $professorat->cognom }}">
    </div>
    <div class="mb-3"> 
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $professorat->email }}">
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Guardar</button>
    </form>
    <br>
        <div>
            <a href="{{ route('professorat') }}">back</a>
        </div>
    </div>    
</body>
</html>
