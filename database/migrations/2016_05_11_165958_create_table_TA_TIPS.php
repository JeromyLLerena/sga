<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTATIPS extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_TIPS', function(Blueprint $table) {
			$table->increments('IN_ID_TIPS');
			$table->string('VC_DESCRIPCION', 500);
			$table->string('VC_RUTA_IMAGEN', 300)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_TIPS');
	}
}
