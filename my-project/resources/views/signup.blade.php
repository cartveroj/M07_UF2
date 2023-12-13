<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario sign in</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <a href="../../../oriana/formulario.html"> Enllaç a la pràctica 3</a> -->
    
    <h1>Creació d'usuari nou</h1>
    <div class="form">
        <form action='{{ route("usuaris") }}' method="post">
            @csrf

            <input type="hidden" name="_token" >
            <div class="mb-3"> 
                <label class="form-label" >Numero </label>
                <input type="number" name="id">
            </div>
            <div class="mb-3"> 
                <label for="name">Nom </label>
                <input type="text" name="name">
            </div>
            <div class="mb-3"> 
                <label for="surname">Cognoms </label>
                <input type="text" name="surname">
            </div>
            <div class="mb-3"> 
                <label for="password">Contrassenya </label>
                <input type="password" name="password">
            </div>
            <div class="mb-3"> 
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <div class="mb-3"> 
                <label for="rol">Rol </label>
                <select id="rol" name="rol">
                    <option value="professor">Professor</option>
                    <option value="alumne">Alumne</option>
                </select>
            </div>
            <div class="mb-3"> 
                <label for="active"> Actiu </label>
                <input type="checkbox" name="active">
            </div><br>
            <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
        </form><br>
        <div>
            <a href="{{ route('signin') }}">Sign in</a>
        </div>
    </div>    
</body>
</html>

