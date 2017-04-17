<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAESTADOEMERGENCIA extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_ESTADO_EMERGENCIA', function(Blueprint $table) {
			$table->increments('IN_ID_ESTADO_EMERGENCIA');
			$table->string('VC_NOMBRE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_ESTADO_EMERGENCIA');
	}
}
