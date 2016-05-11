<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAESTACION extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_ESTACION', function(Blueprint $table) {
			$table->increments('IN_ID_ESTACION');
			$table->string('VC_NOMBRE', 50);
			$table->string('VC_DIRECCION', 60);
			$table->string('VC_DISTRITO', 35);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_ESTACION');
	}
}
