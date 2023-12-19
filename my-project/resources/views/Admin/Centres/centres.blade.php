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
            <td><a href="{{ route('showCentre', $centre['id'] ) }}">{{ $centre['id'] }}</a></td>
            <td>{{ $centre['nom'] }}</td>
            <td>{{ $centre['adreça'] }}</td>
            <td>{{ $centre['cp'] }}</td>
            <td>{{ $centre['ciutat'] }}</td>
            <td>
                <form action="{{ route('deleteCentres', $centre['id']) }}" method="post">
                @csrf
                @method('DELETE')
                    <button>DELETE</button>
                </form>
            </td>
            <td><a href="{{ route('editCentres', $centre['id']) }}"><button>EDIT</button></a></td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('formCentres') }}"><button>ADD</button></a>
    <br>
    <!-- retorna a la view de admin-->
    <a href="{{ route('admin_view') }}">ADMIN VISTA</a>
</body>
</html>