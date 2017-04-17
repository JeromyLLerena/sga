<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablesAddForeigns extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('TA_ALERTA', function(Blueprint $table) {
			$table->foreign('IN_ID_TIPO')
			      ->references('IN_ID_TIPO')
			      ->on('TA_TIPO');
		});

		Schema::table('TA_GRUPO_BOMBERO', function(Blueprint $table) {
			$table->foreign('IN_ID_BOMBERO')
			      ->references('IN_ID_BOMBERO')
			      ->on('TA_BOMBERO');
		});

		Schema::table('TA_TIP_TIPO', function(Blueprint $table) {
			$table->foreign('IN_ID_TIPS')
			      ->references('IN_ID_TIPS')
			      ->on('TA_TIPS');
		});

		Schema::table('TA_ALERTA_EMERGENCIA', function(Blueprint $table) {
			$table->foreign('IN_ID_ESTACION')
			      ->references('IN_ID_ESTACION')
			      ->on('TA_ESTACION');
		});

		Schema::table('TA_GRUPO_EMERGENCIA', function(Blueprint $table) {
			$table->foreign('IN_ID_EMERGENCIA')
			      ->references('IN_ID_EMERGENCIA')
			      ->on('TA_EMERGENCIA');
		});

		Schema::table('TA_EMERGENCIA', function(Blueprint $table) {
			$table->foreign('IN_ID_ESTADO_EMERGENCIA')
			      ->references('IN_ID_ESTADO_EMERGENCIA')
			      ->on('TA_ESTADO_EMERGENCIA');
		});

		Schema::table('TA_GRUPO_EMERGENCIA', function(Blueprint $table) {
			$table->foreign('IN_ID_GRUPO')
			      ->references('IN_ID_GRUPO')
			      ->on('TA_GRUPO');
		});

		Schema::table('TA_TIP_TIPO', function(Blueprint $table) {
			$table->foreign('IN_ID_TIPO')
			      ->references('IN_ID_TIPO')
			      ->on('TA_TIPO');
		});

		Schema::table('TA_GRUPO_BOMBERO', function(Blueprint $table) {
			$table->foreign('IN_ID_GRUPO')
			      ->references('IN_ID_GRUPO')
			      ->on('TA_GRUPO');
		});

		Schema::table('TA_ALERTA', function(Blueprint $table) {
			$table->foreign('VC_IMEI')
			      ->references('VC_IMEI')
			      ->on('TA_IMEI');
		});

		Schema::table('TA_PERSONAS_AFECTADAS', function(Blueprint $table) {
			$table->foreign('IN_ID_EMERGENCIA')
			      ->references('IN_ID_EMERGENCIA')
			      ->on('TA_EMERGENCIA');
		});

		Schema::table('TA_GRUPO', function(Blueprint $table) {
			$table->foreign('IN_ID_UNIDAD')
			      ->references('IN_ID_UNIDAD')
			      ->on('TA_UNIDAD');
		});

		Schema::table('TA_GRUPO', function(Blueprint $table) {
			$table->foreign('IN_ID_ESTACION')
			      ->references('IN_ID_ESTACION')
			      ->on('TA_ESTACION');
		});

		Schema::table('TA_ALERTA_EMERGENCIA', function(Blueprint $table) {
			$table->foreign('IN_ID_ALERTA')
			      ->references('IN_ID_ALERTA')
			      ->on('TA_ALERTA');
		});

		Schema::table('TA_BOMBERO', function(Blueprint $table) {
			$table->foreign('VC_ID_USUARIO')
			      ->references('VC_ID_USUARIO')
			      ->on('TA_USUARIO');
		});

		Schema::table('TA_USUARIO', function(Blueprint $table) {
			$table->foreign('IN_ID_ROL')
			      ->references('IN_ID_ROL')
			      ->on('TA_ROL');
		});

		Schema::table('TA_BOMBERO', function(Blueprint $table) {
			$table->foreign('IN_ID_CARGO')
			      ->references('IN_ID_CARGO')
			      ->on('TA_CARGO');
		});

		Schema::table('TA_ALERTA_EMERGENCIA', function(Blueprint $table) {
			$table->foreign('IN_ID_EMERGENCIA')
			      ->references('IN_ID_EMERGENCIA')
			      ->on('TA_EMERGENCIA');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('TA_ALERTA', function(Blueprint $table){
			$table->dropForeign('ta_alerta_in_id_tipo_foreign');
			$table->dropForeign('ta_alerta_vc_imei_foreign');
		});

		Schema::table('TA_ALERTA_EMERGENCIA', function(Blueprint $table){
			$table->dropForeign('ta_alerta_emergencia_in_id_alerta_foreign');
			$table->dropForeign('ta_alerta_emergencia_in_id_emergencia_foreign');
			$table->dropForeign('ta_alerta_emergencia_in_id_estacion_foreign');
		});

		Schema::table('TA_BOMBERO', function(Blueprint $table){
			$table->dropForeign('ta_bombero_in_id_cargo_foreign');
			$table->dropForeign('ta_bombero_vc_id_usuario_foreign');
		});

		Schema::table('TA_EMERGENCIA', function(Blueprint $table){
			$table->dropForeign('ta_emergencia_in_id_estado_emergencia_foreign');
		});

		Schema::table('TA_GRUPO', function(Blueprint $table){
			$table->dropForeign('ta_grupo_in_id_estacion_foreign');
			$table->dropForeign('ta_grupo_in_id_unidad_foreign');
		});

		Schema::table('TA_GRUPO_BOMBERO', function(Blueprint $table){
			$table->dropForeign('ta_grupo_bombero_in_id_bombero_foreign');
			$table->dropForeign('ta_grupo_bombero_in_id_grupo_foreign');
		});

		Schema::table('TA_GRUPO_EMERGENCIA', function(Blueprint $table){
			$table->dropForeign('ta_grupo_emergencia_in_id_emergencia_foreign');
			$table->dropForeign('ta_grupo_emergencia_in_id_grupo_foreign');
		});

		Schema::table('TA_PERSONAS_AFECTADAS', function(Blueprint $table){
			$table->dropForeign('ta_personas_afectadas_in_id_emergencia_foreign');
		});

		Schema::table('TA_TIP_TIPO', function(Blueprint $table){
			$table->dropForeign('ta_tip_tipo_in_id_tipo_foreign');
			$table->dropForeign('ta_tip_tipo_in_id_tips_foreign');
		});

		Schema::table('TA_USUARIO', function(Blueprint $table){
			$table->dropForeign('ta_usuario_in_id_rol_foreign');
		});
	}
}
