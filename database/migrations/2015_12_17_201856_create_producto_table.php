<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('producto', function(Blueprint $table)
		{
			$table->integer('id_producto');
			$table->primary('id_producto');
			$table->integer('id_categoria');
			//$table->foreign('id_categoria')->references('id_categoria')->on('categoria');
			$table->string('descripcion_producto',256);
			$table->float('precio');
			$table->integer('cantidad_producto');
			$table->integer('variable_holgura');
			$table->integer('cantidad_ficticia_compra');
			$table->string('marca',30);
			$table->string('modelo',30);
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
		Schema::drop('producto');
	}

}
