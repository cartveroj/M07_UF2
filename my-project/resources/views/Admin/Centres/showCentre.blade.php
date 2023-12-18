<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show centre</title>
</head>
<body>
    <h1>{{ $centre['nom'] }}</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>CP</th>
            <th>City</th>
        </tr>
        <tr>
            <td>{{ $centre['id'] }}</td>
            <td>{{ $centre['nom'] }}</td>
            <td>{{ $centre['adreça'] }}</td>
            <td>{{ $centre['cp'] }}</td>
            <td>{{ $centre['ciutat'] }}</td>
        </tr>
    </table>
    <br>
    <a href="{{ route('getCentres') }}">Back</a>
</body>
</html>