<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <br>
    <h1>{{$modo}} Empleados</h1>
    <input type="text" value="{{isset($empleado->Nombres)?$empleado->Nombres:old('Nombres')}}" name="Nombres" id="Nombres" placeholder="Introduzca Nombres"><br>
        <input type="text" value="{{isset($empleado->PrimerApel)?$empleado->PrimerApel:old('PrimerApel')}}" name="PrimerApel" id="PrimerApel" placeholder="Introduzca el primero apellido"><br>
        <input type="text" value="{{isset($empleado->SegundoApel)?$empleado->SegundoApel:old('SegundoApel')}}" name="SegundoApel" id="SegundoApel" placeholder="Introduzca el segundo apellido"><br>
        <input type="text" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" name="Correo" id="Correo" placeholder="Introduzca Email"><br>
        <input type="file" name="Foto" id="Foto"><br>
        @if(isset($empleado->Foto))
            <img src="{{asset('storage').'/'.$empleado->Foto}}" alt="">
        @endif
        <input type="submit" value="{{$modo}} Registro">
</body>
</html>
@if(count($errors)>0)
    <div class="alert alert-danger" role='alert'>
        <>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif