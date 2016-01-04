@extends('master')

@section('contenido')




    <div class = 'container'>
        <div class ="row">
            <div class = "col-md-10 col-md-offset-1"></div>
            <div class = "panel panel-default">
                <div class="panel-heading"><h1>Crear cuenta</h1></div>
                <div class = "panel-body">
                    {!! Form::open(['url' => 'clientes']) !!}
                    <div class="form-group">

                        {!! Form::label('id_direccion', 'id direccion') !!}
                        {!! Form::text('id_direccion', null, ['class' => 'form-control']) !!}

                    </div>
                    <tr>
                        <div class="form-group">
                            {!! Form::label('id_cliente', 'id cliente:') !!}
                            {!! Form::text('id_cliente', null, ['class' => 'form-control'] ) !!}

                        </div></tr>

                    <div class="form-group">
                        {!! Form::label('nombre_cliente', 'Nombre:') !!}
                        {!! Form::text('nombre_cliente', null, ['class' => 'form-control']) !!}
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
                        {!! Form::label('email_cliente', 'Email:') !!}
                        {!! Form::text('email_cliente', null, ['class' => 'form-control', 'placeholder' => 'Ej: ventas@gmail.com']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('calle', 'Calle:') !!}
                        {!! Form::text('calle', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('numero', 'Numero:') !!}
                        {!! Form::text('numero', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('ciudad', 'Ciudad:') !!}
                        {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('region', 'Region:') !!}
                        {!! Form::select('region', ['' => 'Seleccione region', 'region1' => 'I-Tarapaca',
                                                                                'region2' =>'II-Antofagasta',
                                                                                'region3' => 'III-Atacama',
                                                                                'region4' => 'IV-Coquimbo',
                                                                                'region5' => 'V-Valparaiso',
                                                                                'region6' => 'VI-Ohiggins',
                                                                                'region7' => 'VII-Maule',
                                                                                'region8' => 'VIII-Bio-Bio',
                                                                                'region9' => 'IX-Araucania',
                                                                                'region10' => 'X-Los Lagos',
                                                                                'region11' => 'XI-Aysen',],null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('contrasena_cliente', 'Clave:') !!}
                        {!! Form::password('contrasena_cliente', ['class' => 'form-control', 'placeholder' => 'Minimo 6 caracteres']) !!}
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