@extends('master')

@section('contenido')
    <div title="">
        <h1 class="text-primary text-center">Ingresar Categoria</h1>
    </div>

    {!! Form::open(array('method' => 'post', 'url' =>'categorias', 'name' => 'form', 'files' => true)) !!}
    <div class="form-group  "></div>
    {!! Form::label('id_categoria','Identificador de categoria') !!}
    </br>
    {!! Form::text('id_categoria',null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group"></div>
    {!! Form::label('nombre_categoria','Nombre categoria') !!}
    </br>
    {!! Form::text('nombre_categoria',null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group"></div>
    {!! Form::submit('Guardar Categoria', ['class' => ' btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @if($errors->any())
        <div class="alert alert-danger" role="alert">
        <ul class ="alert alert-demage">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
    @endif


@stop