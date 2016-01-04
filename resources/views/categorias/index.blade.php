@extends('master')

@section('contenido')
    <br>
    <div class="panel panel-default">
        <div><a href="{!!URL::to('/categorias/create')!!}" class="btn btn-success ">Agregar nueva categoria</a></div>
        <div class="panel-heading">Lista de categorias</div>
        <table class="table table-responsive table-bordered">
            <thead>
            <tr>
                <th>Identificador categoria</th>
                <th>Nombre categoria</th>
                <th>Acciones</th>
            </tr>
            </thead>

            <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id_categoria}}</td>
                    <td>{{$categoria->nombre_categoria}}</td>
                    <td><a href="/categorias/{{$categoria->id_categoria}}/edit" class="btn btn-warning btn-xs">Modificar</a>
                        {!! Form::open(array('method' => 'DELETE','action' => ['CategoriasController@destroy', $categoria->id_categoria])) !!}
                        <button  type="submit" onclick="return confirm('¿Seguro que deseas eliminar la categoria?')" class="btn btn-danger btn-xs" >Elimina categoria</button>
                        {!! Form::close() !!}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>




@stop