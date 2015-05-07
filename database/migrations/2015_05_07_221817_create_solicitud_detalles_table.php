<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('solicitud_detalles', function(Blueprint $table)
		{
			$table->increments('IdDetalle');
			$table->string('descripcion');
			$table->enum('prioridad',['1','2']);
			$table->string('solicitud_folio');
			$table->timestamps();

			$table->foreign('solicitud_folio')
				->references('folio')->on('solicituds')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('solicitud_detalles');
	}

}
