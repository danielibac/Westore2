<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenDespachoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orden_despacho', function(Blueprint $table)
		{
			$table->integer('numero_despacho');
			$table->primary('numero_despacho');
			$table->integer('rut_empresa');
			$table->dateTime('fecha_emision_despacho');
			$table->float('monto_total');
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
		Schema::drop('orden_despacho');
	}

}
