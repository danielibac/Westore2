@extends('master')

@section('contenido')
    <h1>Crear Articulo</h1>
    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('nombre','Nombre:') !!}
            {!! Form::text('nombre',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('autor','Autor:') !!}
            {!! Form::text('autor',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descripcion','Descripcion:') !!}
            {!! Form::textarea('descripcion',null,['class'=>'form-control']) !!}
        </div>

         <div class="form-group">
            {!! Form::submit('Agregar articulo',['class'=>'btn btn-primary form-control']) !!}
         </div>
    {!! Form::close() !!}

@stop()