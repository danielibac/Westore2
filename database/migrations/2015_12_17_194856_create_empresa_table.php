<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresa', function(Blueprint $table)
		{
			$table->integer('rut_empresa');
			$table->primary('rut_empresa');
			//$table->integer('numero_despacho');
			//$table->foreign('numero_despacho')->references('numero_despacho')->on('orden_despacho');
			$table->integer('id_direccion');
			//$table->foreign('id_direccion')->references('id_direccion')->on('direccion');
			$table->string('nombre_empresa',20);
			$table->string('email')->unique();
			$table->integer('telefono_empresa');
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
		Schema::drop('empresa');
	}

}
