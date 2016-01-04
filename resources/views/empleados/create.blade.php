@extends('master')

@section('contenido')




    <div class = 'container'>
        <div class ="row">
            <div class = "col-md-10 col-md-offset-1"></div>
            <div class = "panel panel-default">
                <div class="panel-heading"><h1>Crear cuenta empleado</h1></div>
                <div class = "panel-body">
                    {!! Form::open(['url' => 'empleados']) !!}
                    <div class="form-group">

                        {!! Form::label('id_direccion', 'id direccion') !!}
                        {!! Form::text('id_direccion', null, ['class' => 'form-control']) !!}

                    </div>
                    <tr>
                        <div class="form-group">
                            {!! Form::label('rut_empleado', 'rut empleado:') !!}
                            {!! Form::text('rut_empleado', null, ['class' => 'form-control'] ) !!}

                        </div></tr>

                    <tr>
                        <div class="form-group">
                            {!! Form::label('rut_empresa', 'rut empresa:') !!}
                            {!! Form::text('rut_empresa', null, ['class' => 'form-control'] ) !!}

                        </div></tr>

                    <div class="form-group">
                        {!! Form::label('nombre_empleado', 'Nombre:') !!}
                        {!! Form::text('nombre_empleado', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('apellido_p', 'Apellido Paterno:') !!}
                        {!! Form::text('apellido_p', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('apellido_m', 'Apellido Materno:') !!}
                        {!! Form::text('apellido_m', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ej: ventas@gmail.com']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('contrasena_empleado', 'Clave:') !!}
                        {!! Form::password('contrasena_empleado', ['class' => 'form-control', 'placeholder' => 'Minimo 6 caracteres']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::submit ('Guardar',['class' => 'btn btn-primary']) !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class ='alert alert-damage'>
            @foreach ($errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach
        </ul>
    @endif


@stop