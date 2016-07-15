<?php

namespace App\Repositories;

use App\Models\Fireman;

class FiremanRepository
{
	protected $model;

	public function __construct()
	{
		$this->model = new Fireman();
	}

	public function all()
	{
		$firemans = $this->model->all()->transform(function($item, $key){
			return (object) $item->toArray();
		});

		return $firemans;
	}

	public function save(\stdClass $input)
	{
		$user = null;
		if (property_exists($input, 'IN_ID_BOMBERO')) {
			$user = $this->model->find($input->id);
		} else {
			$user = $this->model;
		}

		if (property_exists($input, 'VC_NOMBRE')) {
			$user->VC_NOMBRE = $input->VC_NOMBRE;
		}

		if (property_exists($input, 'VC_APELLIDO')) {
			$user->VC_APELLIDO = $input->VC_APELLIDO;
		}

		if (property_exists($input, 'VC_DIRECCION')) {
			$user->VC_DIRECCION = $input->VC_DIRECCION;
		}

		if (property_exists($input, 'VC_CORREO')) {
			$user->VC_CORREO = $input->VC_CORREO;
		}

		if (property_exists($input, 'VC_TELEFONO')) {
			$user->VC_TELEFONO = $input->VC_TELEFONO;
		}

		if (property_exists($input, 'VC_ID_USUARIO')) {
			$user->VC_ID_USUARIO = $input->VC_ID_USUARIO;
		}

		if (property_exists($input, 'IN_DNI')) {
			$user->IN_DNI = $input->IN_DNI;
		}

		if (property_exists($input, 'DT_FECHA_NACIMIENTO')) {
			$user->DT_FECHA_NACIMIENTO = $input->DT_FECHA_NACIMIENTO;
		}

		if (property_exists($input, 'CH_ESTADO')) {
			$user->CH_ESTADO = $input->CH_ESTADO;
		}

		if (property_exists($input, 'IN_ID_CARGO')) {
			$user->IN_ID_CARGO = $input->IN_ID_CARGO;
		}

		$user->save();

		return (object) $user->toArray();
	}
}