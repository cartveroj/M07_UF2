<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUMNAT</title>
</head>
<body>
    <!-- VIEW DE RUTA ALUMNAT-->
    <h1>LLISTA ALUMNAT</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>ROL</th>
            <th>EMAIL</th>
        </tr>
        <!-- Per cada alumne mostrara les seves dades en la taula-->
        @foreach($alumnes as $alumne)
        <tr>
            <td>{{ $alumne['id'] }}</td>
            <td>{{ $alumne['nom'] }}</td>
            <td>{{ $alumne['cognom'] }}</td>
            <td>{{ $alumne['rol'] }}</td>
            <td>{{ $alumne['email'] }}</td>
        </tr>
        @endforeach
    </table><br>
    <a href="{{ route('admin_view') }}">ADMIN VISTA</a> <!-- retorna a la view de admin-->
</body>
</html>