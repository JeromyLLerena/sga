<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAGRUPO extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_GRUPO', function(Blueprint $table){
			$table->increments('IN_ID_GRUPO');
			$table->string('VC_HORARIO', 20)->nullable();
			$table->integer('IN_ID_ESTACION')->unsigned();
			$table->integer('IN_ID_UNIDAD')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_GRUPO');
	}
}
