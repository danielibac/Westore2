<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

	//
    protected $table = 'producto';
    protected  $primaryKey = 'id_producto';
    protected $fillable = [
        'id_producto',
        'id_categoria',
        'descripcion_producto',
        'precio',
        'cantidad_producto',
        'variable_holgura',
        'cantidad_ficticia_compra',
        'marca',
        'modelo'

    ];

    public function ScopeId_producto($query,$id_producto){
        //$query->where('id_producto',$id_producto);
        $query->where(\DB::raw("CONCAT(id_producto, ' ', marca, ' ',modelo)"),"LIKE","%$id_producto%");
    }
}
