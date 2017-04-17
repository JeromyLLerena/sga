<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTATIPTIPO extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_TIP_TIPO', function(Blueprint $table){
			$table->integer('IN_ID_TIPS')->unsigned();
			$table->integer('IN_ID_TIPO')->unsigned();
			$table->primary(['IN_ID_TIPS', 'IN_ID_TIPO']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_TIP_TIPO');
	}
}
