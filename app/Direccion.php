<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model {

    protected $table = 'direccion';
    protected $primaryKey = 'id_direccion';
    protected $fillable = [
        'id_direccion',
        'calle',
        'numero',
        'ciudad',
        'region',
    ];



}
