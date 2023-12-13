<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFESSORAT</title>
</head>
<body>
    <h1>LLISTA PROFESSORAT</h1>
    <table>
        <tr>            
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>ROL</th>
            <th>EMAIL</th>
        </tr>
        @foreach($professors as $professor) 
        <tr>
            <td>{{ $professor['id'] }}</td>
            <td>{{ $professor['nom'] }}</td>
            <td>{{ $professor['cognom'] }}</td>
            <td>{{ $professor['rol'] }}</td>
            <td>{{ $professor['email'] }}</td>
        </tr>
        @endforeach
    </table><br>
    <!-- retorna a la view de admin-->
    <a href="{{ route('admin_view') }}">ADMIN VISTA</a> 
</body>
</html>