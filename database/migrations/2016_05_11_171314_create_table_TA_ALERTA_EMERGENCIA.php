<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAALERTAEMERGENCIA extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_ALERTA_EMERGENCIA', function(Blueprint $table) {
			$table->integer('IN_ID_ALERTA')->unsigned();
			$table->integer('IN_ID_EMERGENCIA')->unsigned();
			$table->integer('IN_ID_ESTACION')->unsigned();
			$table->primary(['IN_ID_ALERTA', 'IN_ID_EMERGENCIA']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_ALERTA_EMERGENCIA');
	}
}
