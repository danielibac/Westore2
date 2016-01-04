<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model {

    protected $table = 'empleado';
    protected $primaryKey ='rut_empleado';
    protected $fillable = [
        'id_direccion',
        'rut_empleado',
        'nombre_empleado',
        'apellido_p',
        'apellido_m',
        'contrasena_empleado',
        'email',
    ];


}