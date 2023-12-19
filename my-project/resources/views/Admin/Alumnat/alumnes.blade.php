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
            <th>EMAIL</th>
        </tr>
        <!-- Per cada alumne mostrara les seves dades en la taula-->
        @foreach($alumnes as $alumne)
        <tr>
            <td>{{ $alumne['id'] }}</td>
            <td>{{ $alumne['nom'] }}</td>
            <td>{{ $alumne['cognom'] }}</td>
            <td>{{ $alumne['email'] }}</td>
            <td> <button type="button" onclick="window.location='{{ route('editAlumnat', $alumne->id) }}'" class="btn btn-info" style="color:blue">Edit</button></td>
            <td>
                <form method="post" action="{{route('destroyAlumnat', $alumne->id)}}">
                    @method('delete')
                    @csrf
                    <button type="submit" style="color:red">DELETE</button>
                </form>
            </td>
            <td> <a href="{{ route('showAlumnat', $alumne->id) }}">show</a></td>
        </tr>
        @endforeach
    </table><br>
    <button type="button" onclick="window.location='{{ route('createAlumnat') }}'" style="color:green">ADD Alumne</button><br><!--boton que funciona como link-->
    <a href="{{ route('admin_view') }}">ADMIN VISTA</a> <!-- retorna a la view de admin-->
</body>
</html>