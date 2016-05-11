<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAALERTA extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_ALERTA', function(Blueprint $table){
			$table->increments('IN_ID_ALERTA');
			$table->date('DT_FECHA');
			$table->string('VC_RUTA_FOTO', 300)->nullable();
			$table->string('VC_COORDENADA', 30);
			$table->integer('IN_NUM_HERIDOS');
			$table->string('VC_IMEI', 35);
			$table->char('CH_VISTO', 1)->nullable();
			$table->integer('IN_ID_TIPO')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_ALERTA');
	}
}
