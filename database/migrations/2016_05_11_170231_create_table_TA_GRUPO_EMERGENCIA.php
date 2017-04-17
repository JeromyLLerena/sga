<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAGRUPOEMERGENCIA extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_GRUPO_EMERGENCIA', function(Blueprint $table) {
			$table->integer('IN_ID_EMERGENCIA')->unsigned();
			$table->integer('IN_ID_GRUPO')->unsigned();
			$table->primary(['IN_ID_EMERGENCIA', 'IN_ID_GRUPO']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_GRUPO_EMERGENCIA');
	}
}
