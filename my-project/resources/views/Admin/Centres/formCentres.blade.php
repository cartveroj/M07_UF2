<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario centres</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Registre centre</h1>
    <div class="form">
        <form action='{{ route("insertCentres") }}' method="post"> 
            @csrf
            <div class="mb-3"> 
                <label for="name">Name</label>
                <input type="text" name="name">
            </div>
            <div class="mb-3"> 
                <label for="address">Address</label>
                <input type="text" name="address">
            </div>
            <div class="mb-3"> 
                <label for="cp">CP</label>
                <input type="text" name="cp">
            </div>
            <div class="mb-3"> 
                <label for="city">City</label>
                <input type="text" name="city">
            </div><br>
            <button type="submit" class="btn btn-primary" name="submit">Send</button>
        </form>
        <div>
            <a href="{{ route('getCentres') }}">Go Back</a>
        </div>
    </div>    
</body>
</html>