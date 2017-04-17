<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAUNIDAD extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_UNIDAD', function(Blueprint $table) {
			$table->increments('IN_ID_UNIDAD');
			$table->string('VC_PLACA', 10);
			$table->string('VC_MODELO', 15);
			$table->string('VC_MARCA', 20)->nullable();
			$table->string('VC_TIPO', 20)->nullable();
			$table->string('VC_MATERIAL', 50)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_UNIDAD');
	}
}
