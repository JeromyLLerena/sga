<?php

namespace App\Repositories;

use App\Models\Imei;

class ImeiRepository
{
	protected $model;

	public function __construct()
	{
		$this->model = new Imei();
	}

	public function all()
	{
		$imeis = $this->model->all()->transform(function($item, $key){
			return (object) $item->toArray();
		});

		return $imeis;
	}

	public function find($id)
	{
		$imei = $this->model->where('VC_IMEI', $id)->first();

		return $imei ? (object) $imei->toArray() : null;
	}

	public function save(\stdClass $input)
	{
		$imei = $this->model;

		if (property_exists($input, 'VC_IMEI')) {
			$imei->VC_IMEI = $input->VC_IMEI;
		}
		if (property_exists($input, 'CH_ESTADO')) {
			$imei->CH_ESTADO = $input->CH_ESTADO;
		}

		$imei->save();

		return (object) $imei->toArray();
	}
}