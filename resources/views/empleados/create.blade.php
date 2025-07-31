
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
    <form action="{{url('/empleado')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('empleados.form',['modo'=>'Guardar']);
        <input type="text" name="Nombres" id="Nombres" placeholder="Introduzca Nombres"><br>
        <input type="text" name="PrimerApel" id="PrimerApel" placeholder="Introduzca el primero apellido"><br>
        <input type="text" name="SegundoApel" id="SegundoApel" placeholder="Introduzca el segundo apellido"><br>
        <input type="text" name="Correo" id="Correo" placeholder="Introduzca Email"><br>
        <input type="file" name="Foto" id="Foto"><br>
        <input type="submit" value="Guardar">
    </form>
    </div>
    @endsection
</body>
</html>