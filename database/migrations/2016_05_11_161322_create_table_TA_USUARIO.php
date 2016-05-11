<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAUSUARIO extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_USUARIO', function(Blueprint $table){
			$table->string('VC_ID_USUARIO', 30);
			$table->string('VC_CONTRASENIA', 30);
			$table->char('estado', 1);
			$table->integer('IN_ID_ROL')->unsigned();
			$table->primary('VC_ID_USUARIO');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_USUARIO');
	}
}
