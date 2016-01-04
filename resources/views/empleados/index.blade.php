@extends ('master')

@section('contenido')
    <br>
    <br>

    <div class="panel panel-default">
        <div class="panel-heading"> Inicio</div>
        <table class="table-responsive table-bordered">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Contrasena</th>
                <th>Email</th>
            </tr>

            </thead>

            <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado->nombre_empleado}}</td>
                    <td>{{$empleado->apellido_p}}</td>
                    <td>{{$empleado->apellido_m}}</td>
                    <td>{{$empleado->contasena_empleado}}</td>
                    <td>{{$empleado->email}}</td>
                    <td>
                        <a href="{{URL::to('/empleados/'.$empleado->rut_empleado.'/edit')}}" class="btn btn-warning btn-xs">Editar</a>
                        <a href="{{URL::to('/empleados/'.$empleado->rut_empleado)}}" class="btn btn-success btn-xs">Mi cuenta</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>



@stop