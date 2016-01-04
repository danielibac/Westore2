@extends('master')

@section('contenido')
    <h1 class="text-primary text-center">Editar categoria</h1>

    {!! Form::model($categoria,array('method' => 'PATCH','action' => ['CategoriasController@update', $categoria->id_categoria])) !!}
    <div class="form-group  "></div>
    {!! Form::label('id_categoria','Identificador categoria') !!}
    </br>
    {!! Form::text('id_categoria',null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group  "></div>
    {!! Form::label('nombre_categoria','Nombre categoria') !!}
    </br>
    {!! Form::text('nombre_categoria',null,['class' => 'form-control']) !!}
    </div>


    <div class="form-group"></div>
    {!! Form::submit('Guardar categoria', ['class' => ' btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'route' => ['categorias.destroy',$categoria->id_categoria]]) !!}
    <div class="form-group"></div>

    <button  type="submit" onclick="return confirm('¿Seguro que deseas eliminar la categoria?')" class="btn btn-danger" >Elimina categoria</button>
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