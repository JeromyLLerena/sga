<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAIMEI extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_IMEI', function(Blueprint $table) {
			$table->string('VC_IMEI', 35);
			$table->char('CH_ESTADO', 1);
			$table->primary('VC_IMEI');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_IMEI');
	}
}
