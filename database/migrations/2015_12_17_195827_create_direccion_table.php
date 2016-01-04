<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('direccion', function(Blueprint $table)
		{
			$table->integer('id_direccion');
			$table->primary('id_direccion');
			//$table->integer('rut_empresa');
			//$table->foreign('rut_empresa')->references('rut_empresa')->on('empresa');
			//$table->integer('id_cliente');
			//$table->foreign('id_cliente')->references('id_cliente')->on('cliente');
			$table->string('calle',20);
			$table->integer('numero');
			$table->string('ciudad',20);
			$table->string('region',20);
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
		Schema::drop('direccion');
	}

}
