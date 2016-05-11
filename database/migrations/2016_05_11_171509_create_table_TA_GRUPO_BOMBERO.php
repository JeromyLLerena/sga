<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTAGRUPOBOMBERO extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TA_GRUPO_BOMBERO', function(Blueprint $table) {
			$table->char('CH_RESPONSABLE', 5)->nullable();
			$table->integer('IN_ID_GRUPO')->unsigned();
			$table->integer('IN_ID_BOMBERO')->unsigned();
			$table->primary(['IN_ID_GRUPO', 'IN_ID_BOMBERO']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TA_GRUPO_BOMBERO');
	}
}
