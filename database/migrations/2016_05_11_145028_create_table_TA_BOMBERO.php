<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTABOMBERO extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_BOMBERO', function(Blueprint $table) {
			$table->increments('IN_ID_BOMBERO');
			$table->string('VC_NOMBRE', 40);
			$table->string('VC_APELLIDO', 60);
			$table->string('VC_TELEFONO', 15)->nullable();
			$table->string('VC_DIRECCION', 50)->nullable();
			$table->string('VC_CORREO', 50)->nullable();
			$table->string('VC_ID_USUARIO', 30)->nullable();
			$table->integer('IN_DNI')->nullable();
			$table->date('DT_FECHA_NACIMIENTO')->nullable();
			$table->char('CH_ESTADO', 1);
			$table->integer('IN_ID_CARGO')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_BOMBERO');
	}
}
