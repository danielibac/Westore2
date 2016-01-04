<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEmpRequest;
use App\Http\Controllers\Controller;

use App\Empleado;
use App\Direccion;
use Request;
use Redirect;

class EmpController extends Controller {

    public function index()
    {
        $empleados = Empleado::all();
        //return view('registro', compact ('cliente')); //Mostrar datos tabla cliente desde vista
        return view('empleados.index', compact('empleados'));
    }


    public function show($rut_empleado)
    {
        $empleado = Empleado::find($rut_empleado);
        return view('empleados.index', compact('empleado'));
    }



    public function create()
    {
        return view('empleados.create');
    }


    public function store(CreateEmpRequest $request)
    {
        // $input = Request::all();
        Direccion::create($request->all());
        Empleado::create($request->all());
        return Redirect::to('/empleados');
    }

    public function edit($rut_empleado)
    {
        $empleado = Empleado::find($rut_empleado);
        return view('empleados.edit', compact('empleado'));
    }

    public function update($rut_empleado, CreateEmpRequest $request)
    {
        $empleado = Empleado::find($rut_empleado);
        $empleado->update($request->all());
        return Redirect::to('/empleados');
    }

    public function destroy($rut_empleado)
    {
        $empleado = Empleado::find($rut_empleado);
        $empleado->delete();
        return Redirect::to('/empleados');
    }


}
