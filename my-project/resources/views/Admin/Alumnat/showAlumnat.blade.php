<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat CRUD</title>
</head>
<body>
    <h1>Details for alumne {{ $alumne->nom }}</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>EMAIL</th>
        </tr>
        <tr>
            <td>{{ $alumne->id }}</td>
            <td>{{ $alumne->nom }}</td>
            <td>{{ $alumne->cognom }}</td>
            <td>{{ $alumne->email }}</td>
            <td> <a href="{{ route('editAlumnat', $alumne->id) }}">EDIT</a></td>
            <td>
                <form method="post" action="{{ route('destroyAlumnat', $alumne->id) }}">
                    @method('delete')
                    @csrf
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    </table><br>
    <div>
        <a href="{{ route('getAlumnat') }}">Tornar enrere</a><br>
        <a href="{{ route('admin_view') }}">ADMIN VISTA</a>
    </div>
</body>
</html>