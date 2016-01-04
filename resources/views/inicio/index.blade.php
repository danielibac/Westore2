@extends('master')

@section('contenido')
    <header>
        
        <center><h2>VENTAS.COM  <small>ICINF6</small></h2></center><br><br><br>

        <nav>
            <ul>
                <li style="list-style: none"><a class="btn btn-default" href="{{URL::to('/productos/') }}" role="button">Productos</a></li><br>
                <li style="list-style: none"><a class="btn btn-primary" href="{{URL::to('/clientes/') }}" role="button">Gestion cliente</a></li><br>
                <li style="list-style: none"><a class="btn btn-info" href="{{URL::to('/../yerko/index.php/') }}" role="button">Generador de informes</a></li><br>
            </ul>
        </nav>
    </header>


@stop()