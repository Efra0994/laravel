<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('solicituds', function(Blueprint $table)
		{
			$table->string('folio', 50)->unique();
			$table->enum('departamento',['Produccion', 'Laboratorio']);
			$table->string('cliente', 50);
			$table->string('domicilio');
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
		Schema::drop('solicituds');
	}

}
