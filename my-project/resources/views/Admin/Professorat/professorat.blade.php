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
            <td><a href="{{ route('editProfessorat', ['id' => $professor['id']]) }}"><button>edit</button></a></td>
            <td><form action="{{ route('destroyProfessorat', ['id' => $professor['id']]) }}" method="post">
                    @csrf
                    @method('DELETE')        
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table><br>
    <a href="{{ route('createProfessorat')}}"><button>INSERT</button></a>
    <br>
    <br>
    <!-- retorna a la view de admin--> 
    <a href="{{ route('admin_view') }}">ADMIN VISTA</a>
</body>
</html>

