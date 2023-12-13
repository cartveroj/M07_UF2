<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessión</title>
</head>
<body>
    <!-- Formulari de Inici de sessió -->
    <form action='{{ route("usuaris") }}' method="post">
        @csrf
        <br>
        <div>
            <label for="email">Email address</label>
            <input type="text" name="email">
        </div>
        <div>    
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="checkbox">
            <label> Remember me </label>
        </div><br>
        <div>
            <button type="submit" class="btn btn-primary" name="submit"> Sign in </button><br>
        </div>
        <div>
            <a href="{{ route('signup') }}">SIGN UP</a>
        </div>
    </form>
</body>
</html>