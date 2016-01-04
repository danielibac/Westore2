@extends('master')

@section('contenido')
<h1 class="text-primary text-center">Editar producto</h1>

{!! Form::model($producto,array('method' => 'PATCH','action' => ['ProductosController@update', $producto->id_producto])) !!}
<div class="form-group  "></div>
{!! Form::label('id_producto','Identificador del producto') !!}
</br>
{!! Form::text('id_producto',null,['class' => 'form-control']) !!}
</div>

<div class="form-group"></div>
{!!Form::label('id_categoria','Categoria') !!}
</br>
{!!Form::select('id_categoria', $categorias) !!}

</div>

<div class="form-group"></div>
{!! Form::label('descripcion_producto','Descripcion producto') !!}
</br>
{!! Form::textarea('descripcion_producto',null,['class' => 'form-group']) !!}
</div>

<div class="form-group"></div>
{!! Form::label('precio','precio') !!}
</br>
{!! Form::text('precio',null,['class' => 'form-control']) !!}
</div>

<div class="form-group"></div>
{!! Form::label('cantidad_producto','Cantidad producto') !!}
</br>
{!! Form::text('cantidad_producto',null,['class' => 'form-control']) !!}
</div>

<div class="form-group"></div>
{!! Form::label('marca','Marca') !!}
</br>
{!! Form::text('marca',null,['class' => 'form-control']) !!}
</div>

<div class="form-group"></div>
{!! Form::label('modelo','Modelo') !!}
</br>
{!! Form::text('modelo',null,['class' => 'form-control']) !!}
</div>

<div class="form-group"></div>
{!! Form::label('variable_holgura','Stock minimo') !!}
</br>
{!! Form::text('variable_holgura',null,['class' => 'form-control']) !!}
</div>

<div class="form-group"></div>
{!! Form::label('cantidad_ficticia_compra','Recomendacion cantidad para futuros pedidos') !!}
</br>
{!! Form::text('cantidad_ficticia_compra',null,['class' => 'form-control']) !!}
</div>

<div class="form-group"></div>
{!! Form::label('imagen','Agregar imagen') !!}
{!! Form::file('imagen') !!}

</div>

<div class="form-group"></div>
{!! Form::submit('Modifica producto', ['class' => ' btn btn-primary']) !!}
</div>

{!! Form::close() !!}

{!! Form::open(['method' => 'DELETE', 'route' => ['productos.destroy',$producto->id_producto]]) !!}
    <div class="form-group"></div>

                <button  type="submit" onclick="return confirm('¿Seguro que deseas eliminar el producto?')" class="btn btn-danger" >Elimina producto</button>
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