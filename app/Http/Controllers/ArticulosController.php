<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class ArticulosController extends Controller {
    public function index()
    {
        return view('articulos/index');
    }

	public function create()
    {
        return view('articulos/create');
    }

}
