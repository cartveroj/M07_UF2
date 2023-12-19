<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat CRUD</title>
</head>
<body>
    <h1>Detalls del alumne {{ $alumne->nom }}</h1>
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
            <td> <button type="button" onclick="window.location='{{ route('editAlumnat', $alumne->id) }}'" class="btn btn-info" style="color:blue">Edit</button></td>
            <td>
                <form method="post" action="{{ route('destroyAlumnat', $alumne->id) }}">
                    @method('delete')
                    @csrf
                    <button type="submit" style="color: red">DELETE</button>
                </form>
            </td>
        </tr>
    </table><br>
    <div>
        <a href="{{ route('getAlumnat') }}" >Tornar enrere</a><br>
        <a href="{{ route('admin_view') }}">ADMIN VISTA</a>
    </div>
</body>
</html>