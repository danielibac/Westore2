<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoriaRequest;


class CategoriasController extends Controller {

    public function index(){
        $categorias=Categoria::all();
        return view('categorias.index', compact('categorias'));
    }
    public function show(){
        return view('categorias.index');
    }

    public function create(){
        return view('categorias.create');

    }
    public function store(CreateCategoriaRequest $request){

        Categoria::create($request->all());
        return redirect('/categorias');

    }

    public function edit($id){
        $categoria=Categoria::find($id);

        return view('categorias.edit', compact('categoria'));

    }
    public function update($id, CreateCategoriaRequest $recuest){
        $categoria= Categoria::find($id);
        $categoria->update($recuest->all());
        return redirect('categorias');
    }

    public function destroy($id)
    {
        $categoria=Categoria::find($id);
        $categoria->delete();
        return redirect('categorias');
    }

}
