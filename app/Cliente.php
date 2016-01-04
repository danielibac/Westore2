<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {

    protected $table = 'cliente';
    protected $primaryKey ='id_cliente';
    protected $fillable = [
        'id_direccion',
        'id_cliente',
        'nombre_cliente',
        'apellido_p',
        'apellido_m',
        'contrasena_cliente',
        'email_cliente',
        'telefono_cliente',
    ];


}
