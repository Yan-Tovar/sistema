<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>P. Apellido</th>
                <th>S. Apellido</th>
                <th>Correo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($empleados as $datos )
            <tr>
                <td>{{$datos->id}}</td>
                <td>{{$datos->Foto}}</td>
                <td>{{$datos->Nombre}}</td>
                <td>{{$datos->PrimerApel}}</td>
                <td>{{$datos->SegundoApel}}</td>
                <td>{{$datos->Email}}</td>
                <td>
                    <a href="{{url('/empleados/'.$datos->id.'/edit')}}">Editar</a>
                    <form action="{{url('/empleados/'.$datos->id)}}" method="POST">
                        @scrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Deseas Eliminar?')" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>