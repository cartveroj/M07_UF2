<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRES</title>
</head>
<body>
    <h1>LLISTA DE CENTRES</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>CP</th>
            <th>City</th>
        </tr>
        @foreach($centres as $centre)
        <tr>
            <td>{{ $centre['id'] }}</td>
            <td>{{ $centre['nom'] }}</td>
            <td>{{ $centre['adreça'] }}</td>
            <td>{{ $centre['codipost'] }}</td>
            <td>{{ $centre['ciutat'] }}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <!-- retorna a la view de admin-->
    <a href="{{ route('admin_view') }}">ADMIN VISTA</a>
</body>
</html>