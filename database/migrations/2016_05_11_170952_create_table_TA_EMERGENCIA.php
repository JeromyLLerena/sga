<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAEMERGENCIA extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_EMERGENCIA', function(Blueprint $table) {
			$table->increments('IN_ID_EMERGENCIA');
			$table->string('VC_DIRECCION', 150)->nullable();
			$table->string('VC_DISTRITO', 35)->nullable();
			$table->string('VC_REFERENCIA', 300)->nullable();
			$table->string('VC_OTRAS_INSTITUCIONES', 200)->nullable();
			$table->string('VC_DANIOS', 300)->nullable();
			$table->integer('IN_ID_ESTADO_EMERGENCIA')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_EMERGENCIA');
	}
}
