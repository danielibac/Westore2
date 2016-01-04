@extends('master')

@section('contenido')
    <h3><a href="http://146.83.198.35/~icinf6/index.php/inicio">INICIO</a></h3>
    <br>
    <div class="panel panel-default">
        <div><a href="{!!URL::to('/productos/create')!!}" class="btn btn-success ">Agregar nuevo producto</a>
        <a href="{!!URL::to('/categorias/create')!!}" class="btn btn-success ">Agregar nueva categoria</a></div>


            {!! Form::open(['url'=>'productos','method' =>'GET', 'class' =>'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
            <div class="form-group">
                {!! Form::text('id_producto',null,['class' => 'form-control', 'placeholder' =>'Producto,Marca o Modelo']) !!}
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        {!! Form::close() !!}

        <div class="panel-heading">Lista de productos</div>
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @if($productob->isEmpty())
                @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->id_producto}}</td>
                        <td>{{$producto->marca}}</td>
                        <td>{{$producto->modelo}}</td>
                        <td><a href="{{URL::to('/productos/'.$producto->id_producto.'/edit') }}" class="btn btn-warning btn-xs">Modificar</a>
                            {!! Form::open(array('method' => 'DELETE','action' => ['ProductosController@destroy', $producto->id_producto])) !!}
                            <button  type="submit" onclick="return confirm('¿Seguro que deseas eliminar la categoria?')" class="btn btn-danger btn-xs" >Elimina producto</button>
                            {!! Form::close() !!}</td>
                    </tr>
                @endforeach
            @endif
            @if($productob->isEmpty() == false)
                @foreach($productob as $producto)
                    <tr>
                        <td>{{$producto->id_producto}}</td>
                        <td>{{$producto->marca}}</td>
                        <td>{{$producto->modelo}}</td>
                        <td><a href="{{URL::to('/productos/'.$producto->id_producto.'/edit') }}" class="btn btn-warning btn-xs">Modificar</a>
                            {!! Form::open(array('method' => 'DELETE','action' => ['ProductosController@destroy', $producto->id_producto])) !!}
                            <button  type="submit" onclick="return confirm('¿Seguro que deseas eliminar la categoria?')" class="btn btn-danger btn-xs" >Elimina producto</button>
                            {!! Form::close() !!}</td>
                    </tr>
                @endforeach
            @endif

   

            </tbody>
        </table>
    </div>




@stop