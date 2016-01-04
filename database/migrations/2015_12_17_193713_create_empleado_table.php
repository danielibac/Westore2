<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('empleado', function(Blueprint $table)
		{
			$table->integer('rut_empleado');
			$table->primary('rut_empleado');
			$table->integer('id_direccion');
			//$table->foreign('id_direccion')->references('id_direccion')->on('direccion');
			$table->integer('rut_empresa');
			//$table->foreign('rut_empresa')->references('rut_empresa')->on('empresa');
			$table->string('nombre_empleado',20);
			$table->string('apellido_p',20);
			$table->string('apellido_m',20);
			$table->string('email')->unique();
			$table->string('contrasena_empleado',20);
			$table->integer('telefono_empleado');
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
		Schema::drop('empleado');
	}

}
