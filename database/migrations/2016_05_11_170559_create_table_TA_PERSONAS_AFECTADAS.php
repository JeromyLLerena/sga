<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAPERSONASAFECTADAS extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_PERSONAS_AFECTADAS', function(Blueprint $table) {
			$table->increments('IN_ID_PERSONA');
			$table->integer('IN_DNI');
			$table->string('VC_NOMBRE', 40);
			$table->string('VC_APELLIDO', 50);
			$table->integer('IN_EDAD')->nullable();
			$table->string('VC_DESCRIPCION', 300)->nullable();
			$table->integer('IN_ID_EMERGENCIA')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_PERSONAS_AFECTADAS');
	}
}
