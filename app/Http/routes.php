<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', 'HomeController@index');

Route::get('/', 'RutaController@index');
Route::get('inicio', 'RutaController@inicio');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//Route::get('articulos', 'ArticulosController@index');
//Route::get('articulos/crear','ArticulosController@create');
//Route::get('productos/crear','ProductosController@create');
//Route::post('productos','ProductosController@store');


/*Route::get('index.php/productos','ProductosController@index');
Route::get('index.php/productos/create','ProductosController@create');
Route::post('/index.php/productos','ProductosController@store');
Route::get('/index.php/productos/{productos}','ProductosController@show');
Route::get('/index.php/productos/{productos}/edit','ProductosController@edit');
Route::put('/index.php/productos/{productos}','ProductosController@update');
Route::delete('/index.php/productos/{productos}','ProductosController@destroy');

Route::get('~icinf6/index.php/categorias','CategoriasController@index');
Route::get('~icinf6/index.php/categorias/create','CategoriasController@create');
Route::post('~icinf6/index.php/categorias','CategoriasController@store');
Route::get('~icinf6/index.php/categorias/{categorias}','CategoriasController@show');
Route::get('~icinf6/index.php/categorias/{categorias}/edit','CategoriasController@edit');
Route::put('~icinf6/index.php/categorias/{categorias}','CategoriasController@update');
Route::delete('~icinf6/index.php/categorias/{categorias}','CategoriasController@destroy');

Route::get('~icinf6/index.php/clientes','ClientesController@index');
Route::get('~icinf6/index.php/clientes/create','ClientesController@create');
Route::post('~icinf6/index.php/clientes','ClientesController@store');
Route::get('~icinf6/index.php/clientes/{clientes}','ClientesController@show');
Route::get('~icinf6/index.php/clientes/{clientes}/edit','ClientesController@edit');
Route::put('~icinf6/index.php/clientes/{clientes}','ClientesController@update');
Route::delete('~icinf6/index.php/clientes/{clientes}','ClientesController@destroy');

Route::get('~icinf6/index.php/empleados','EmpleadosController@index');
Route::get('~icinf6/index.php/empleados/create','EmpleadosController@create');
Route::post('~icinf6/index.php/empleados','EmpleadosController@store');
Route::get('~icinf6/index.php/empleados/{empleados}','EmpleadosController@show');
Route::get('~icinf6/index.php/empleados/{empleados}/edit','EmpleadosController@edit');
Route::put('~icinf6/index.php/empleados/{empleados}','EmpleadosController@update');
Route::delete('~icinf6/index.php/empleados/{empleados}','EmpleadosController@destroy');
*/

Route::resource('productos','ProductosController');
Route::resource('categorias','CategoriasController');

Route::resource('clientes', 'UsersController');
Route::resource('empleados', 'EmpController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
