<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaveForanea extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('empleado', function($table)
		{
			$table->foreign('id_direccion')->references('id_direccion')->on('direccion');
			$table->foreign('rut_empresa')->references('rut_empresa')->on('empresa');
		});

		Schema::table('empresa', function($table)
		{
			//$table->foreign('numero_despacho')->references('numero_despacho')->on('orden_despacho');
			$table->foreign('id_direccion')->references('id_direccion')->on('direccion');
		});

		/*Schema::table('direccion', function($table)
		{
			//$table->foreign('rut_empresa')->references('rut_empresa')->on('empresa');
			//$table->foreign('id_cliente')->references('id_cliente')->on('cliente');
		});*/

		Schema::table('orden_de_compra', function($table)
		{
			$table->foreign('id_producto')->references('id_producto')->on('producto');
			$table->foreign('rut_empresa')->references('rut_empresa')->on('empresa');
			$table->foreign('rut_proveedores')->references('rut_proveedores')->on('proveedores');
		});

		Schema::table('cliente', function($table)
		{
			$table->foreign('id_direccion')->references('id_direccion')->on('direccion');
		});

		Schema::table('producto', function($table)
		{
			$table->foreign('id_categoria')->references('id_categoria')->on('categoria');
		});

		Schema::table('venta', function($table)
		{
			$table->foreign('id_producto')->references('id_producto')->on('producto');
			$table->foreign('id_cliente')->references('id_cliente')->on('cliente');
			$table->foreign('id_medio_pago')->references('id_medio_pago')->on('medio_pago');
			$table->foreign('numero_despacho')->references('numero_despacho')->on('orden_despacho');

		});

		Schema::table('orden_despacho', function($table)
		{
			$table->foreign('rut_empresa')->references('rut_empresa')->on('empresa');
		});

		Schema::table('imagen', function($table)
		{
			$table->foreign('id_producto')->references('id_producto')->on('producto');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}


