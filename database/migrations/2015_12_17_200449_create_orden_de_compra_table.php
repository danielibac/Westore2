<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenDeCompraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orden_de_compra', function(Blueprint $table)
		{
			$table->integer('id_orden');
			$table->primary('id_orden');
			$table->integer('id_producto');
			//$table->foreign('id_producto')->references('id_producto')->on('producto');
			$table->integer('rut_empresa');
			//$table->foreign('rut_empresa')->references('rut_empresa')->on('empresa');
			$table->integer('rut_proveedores');
			//$table->foreign('rut_proveedores')->references('rut_proveedores')->on('proveedores');
			$table->dateTime('fecha_orden');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orden_de_compra');
	}

}
