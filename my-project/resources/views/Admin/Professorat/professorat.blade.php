<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFESSORAT</title>
    <!-- estilos de los botones  -->
    <style>
        .insert{
            color:green;
        }
        .delete{
            color:red;
        }
        .edit{
            color:blue;
        }
        button:hover{
            background-color:yellow;
        }
    </style>
    <!-- script que muestra por alert mensajes que recibe del controlador -->
    <script>
        function mostrarMensaje(mensaje) {
            setTimeout(function() {
                alert(mensaje);
            }, 500);
        }
    </script>
</head>
<body>
    <!-- archivo que contiene la vista principal que muestra la tabla con todos los datos -->
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
            <!-- boton que lleva a la ruta de edit -->
            <td><a href="{{ route('editProfessorat', ['id' => $professor['id']]) }}"><button class="edit">edit</button></a></td>
            <!-- boton que dentro contiene un form que se encarga de eliminar un registro, le pasamos la id -->
            <td><form action="{{ route('destroyProfessorat', ['id' => $professor['id']]) }}" method="post">
                    @csrf
                    @method('DELETE')        
                    <button class="delete" type="submit">Delete</button>
                </form>
            </td>
            <!-- boton que lleva al metodo show del controlador del profesor -->
            <td><a href="{{ route('showProfessorat', ['id' => $professor['id']]) }}"><button class="view">view</button></a></td>
        </tr>
        
        @endforeach
    </table>
    @if(session('mensaje'))
        <script>
            mostrarMensaje("{{ session('mensaje') }}" );
        </script>
    @endif
    <br>
    <a href="{{ route('createProfessorat')}}"><button class="insert">INSERT</button></a>
    <br>
    <br>
    <!-- retorna a la view de admin--> 
    <a href="{{ route('admin_view') }}">ADMIN VISTA</a>
</body>
</html>

