<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar centre</title>
</head>
<body>
    <h1>Editar</h1>
    <div class="update">
        <form action="{{ route('updateCentres', $centres->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3"> 
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $centres->nom }}">
            </div>
            <div class="mb-3"> 
                <label for="address">Address</label>
                <input type="text" name="address" value="{{ $centres->adreça }}">
            </div>
            <div class="mb-3"> 
                <label for="cp">CP</label>
                <input type="text" name="cp" value="{{ $centres->cp }}">
            </div>
            <div class="mb-3"> 
                <label for="city">City</label>
                <input type="text" name="city" value="{{ $centres->ciutat }}">
            </div><br>
            <button type="submit" class="btn btn-primary" name="submit">Edit</button>
        </form>
        <div>
            <a href="{{ route('getCentres') }}">Back</a>
        </div>
    </div>
</body>
</html>