<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedioPagoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medio_pago', function(Blueprint $table)
		{
			$table->integer('id_medio_pago');
			$table->primary('id_medio_pago');
			$table->string('descripcion_medio_pago');
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
		Schema::drop('medio_pago');
	}

}
