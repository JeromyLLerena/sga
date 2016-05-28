<?php

namespace App\Repositories;

use App\Models\Alert;

class AlertRepository
{
	protected $model;

	public function __construct()
	{
		$this->model = new Alert();
	}

	public function all()
	{
		$alerts = $this->model->all()->transform(function($item, $key){
			return (object) $item->toArray();
		});

		return $alerts;
	}

	public function save(\stdClass $input)
	{
		$alert = null;
		if (property_exists($input, 'IN_ID_ALERTA')) {
			$alert = $this->model->find($input->IN_ID_ALERTA);
		} else {
			$alert = $this->model;
		}

		if (property_exists($input, 'DT_FECHA')) {
			$alert->DT_FECHA = $input->DT_FECHA;
		}

		if (property_exists($input, 'VC_RUTA_FOTO')) {
			$alert->VC_RUTA_FOTO = $input->VC_RUTA_FOTO;
		}

		if (property_exists($input, 'VC_COORDENADA')) {
			$alert->VC_COORDENADA = $input->VC_COORDENADA;
		}

		if (property_exists($input, 'VC_NUM_HERIDOS')) {
			$alert->VC_NUM_HERIDOS = $input->VC_NUM_HERIDOS;
		}

		if (property_exists($input, 'VC_COMENTARIO')) {
			$alert->VC_COMENTARIO = $input->VC_COMENTARIO;
		}

		if (property_exists($input, 'VC_IMEI')) {
			$alert->VC_IMEI = $input->VC_IMEI;
		}

		if (property_exists($input, 'CH_VISTO')) {
			$alert->CH_VISTO = $input->CH_VISTO;
		}

		if (property_exists($input, 'IN_ID_TIPO')) {
			$alert->IN_ID_TIPO = $input->IN_ID_TIPO;
		}

		$alert->save();

		return (object) $alert->toArray();
	}

	public function find($id)
	{
		return (object) $this->model->where('IN_ID_ALERTA', $id)->first()->toArray();
	}
}