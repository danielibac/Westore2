<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class RutaController extends Controller
{
	public function index(){
	header('Location: http://146.83.198.35/~icinf6/index.php/inicio');
	exit;}

public function inicio(){
		return view('inicio.index');

}}