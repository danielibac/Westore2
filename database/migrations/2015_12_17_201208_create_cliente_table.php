<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cliente', function(Blueprint $table)
		{
			$table->integer('id_cliente');
			$table->primary('id_cliente');
			$table->integer('id_direccion');
			//$table->foreign('id_direccion')->references('id_direccion')->on('direccion');
			$table->string('nombre_cliente',20);
			$table->string('apellido_p',20);
			$table->string('apellido_m',20);
			$table->string('contrasena_cliente',20);
			$table->string('email_cliente')->unique();
			$table->integer('telefono_cliente');
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
		Schema::drop('cliente');
	}

}
