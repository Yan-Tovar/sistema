<br>
@if(count($errors)>0)
    <div class="alert alert-danger" role='alert'>
        <>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>{{$modo}} Empleados</h1>
<div class="form-group">
    <input class="form-control" type="text" value="{{isset($empleado->Nombres)?$empleado->Nombres:old('Nombres')}}" name="Nombres" id="Nombres" placeholder="Introduzca Nombres"><br>
        <input class="form-control" type="text" value="{{isset($empleado->PrimerApel)?$empleado->PrimerApel:old('PrimerApel')}}" name="PrimerApel" id="PrimerApel" placeholder="Introduzca el primero apellido"><br>
        <input class="form-control" type="text" value="{{isset($empleado->SegundoApel)?$empleado->SegundoApel:old('SegundoApel')}}" name="SegundoApel" id="SegundoApel" placeholder="Introduzca el segundo apellido"><br>
        <input class="form-control" type="text" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" name="Correo" id="Correo" placeholder="Introduzca Email"><br>
        <input class="form-control" type="file" name="Foto" id="Foto"><br>
        @if(isset($empleado->Foto))
            <img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="300px">
        @endif
        <br>
        <input type="submit" class="btn btn-success" value="{{$modo}} Registro">
</div>