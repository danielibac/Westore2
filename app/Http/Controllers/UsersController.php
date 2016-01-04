<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateClienteRequest;
use App\Http\Controllers\Controller;

use App\Cliente;
use App\Direccion;
use Request;
use Redirect;

class UsersController extends Controller {

    public function index()
    {
        $clientes = Cliente::all();
        //return view('registro', compact ('cliente')); //Mostrar datos tabla cliente desde vista
        return view('clientes.index', compact('clientes'));
    }


    public function show($id_cliente)
    {
        $cliente = Cliente::find($id_cliente);
        return view('clientes.index', compact('cliente'));
    }



    public function create()
	{
		return view('clientes.create');
	}


    public function store(CreateClienteRequest $request)
    {
       // $input = Request::all();
        Direccion::create($request->all());
        Cliente::create($request->all());
        return Redirect::to('/clientes');
    }

    public function edit($id_cliente)
    {
       // $direccion=Direccion::find($id_direccion);
        $cliente = Cliente::find($id_cliente);
        return view('clientes.edit', compact('cliente'));
    }

    public function update($id_cliente, CreateClienteRequest $request)
    {
        $cliente = Cliente::find($id_cliente);
        $cliente->update($request->all());
        return Redirect::to('/clientes');
    }

    public function destroy($id_cliente)
    {
        $cliente = Cliente::find($id_cliente);
        $cliente->delete();
        return Redirect::to('/clientes');
    }


}
