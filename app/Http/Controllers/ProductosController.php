<?php namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\EditProductRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;
use App\Imagen;
//use Request;
use Input;
use DB;
use File;
use Redirect;



class ProductosController extends Controller {

    public function index(Request $recuest){
        $productob=Producto::id_producto($recuest->get('id_producto'))->orderBy('id_producto','marca')->paginate();

        $productos=Producto::all();
        return view('productos.index', compact('productos','productob'));
    }
    public function show(){
        return view('productos.index');
    }

	public function create(){
        $categorias = Categoria::lists('nombre_categoria','id_categoria');
        return view('productos.create', compact('categorias'));

    }

    public function store(CreateProductoRequest $request){
       $path = 'uploads/';

        $file = \Request::file('imagen');
        $archivo = $file->getClientOriginalName();
        $uploads = $file->move($path,$archivo);


      /*  $file = Input::file('imagen');
$destinationPath = 'uploads';
// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
$filename = $file->getClientOriginalName();
//$filename = $file->getClientOriginalName();
//$extension =$file->getClientOriginalExtension(); 
$upload_success = Input::file('imagen')->move($destinationPath, $filename);
*/
        //if(uploads){

            //Request::file('imagen')->move($path);
           // $inputs=Request::all();
            Producto::create($request->all());
            //Imagen::create($inputs);
            //agregado




            $inputs= Input::All();
            $n=new Imagen;
            $n->id_producto=$inputs['id_producto'];
            $n->ruta_imagen=$archivo;
        $n->save();






            return Redirect::to('/productos');

        //}

    }
    public function edit($id){
        $producto= Producto::find($id);
        $categorias = Categoria::lists('nombre_categoria','id_categoria');
       // $imagen = DB::table('imagen')->where('id_producto', $id);
        return view('productos.edit', compact('producto', 'categorias'));


    }

    public function update($id, EditProductRequest $request){
       /* $producto= Producto::find($id);
        $producto->update($request->all());
        return Redirect::to('/productos');*/ 
        //$file = Input::file('imagen');
        $producto = Producto::find($id);
        $producto->fill($request->all());
        $producto->save();
        //$imagen = DB::table('imagen')->where('id_producto', $id);
        //Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/productos');
    }

    public function destroy($id)
    {
        $imagen = DB::table('imagen')->where('id_producto', $id)->delete();

        //File::delete('/uploads/imagenes/' . $imagen->ruta_imagen);

        //$query = DB::table('imagen')->where('id_producto', '=', $id);
        //$imagen = $query->first();
        //print_r($image);
        //return 'end';
        //File::delete(public_p . '/uploads/imagenes/thumb-' . $image->path);
        //File::delete('/uploads/imagenes/' . $imagen->ruta_imagen);

        //var_dump($imagen->id_producto);
        //$query->delete();
        $producto=Producto::find($id);
        $producto->delete();
       // Producto::destroy($id);
        return Redirect::to('/productos');
    }

}
