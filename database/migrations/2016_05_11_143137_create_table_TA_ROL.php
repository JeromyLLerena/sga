<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAROL extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_ROL', function(Blueprint $table) {
			$table->increments('IN_ID_ROL');
			$table->string('VC_NOMBRE', 20);
			$table->char('CH_ESTADO', 1);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_ROL');
	}
}
