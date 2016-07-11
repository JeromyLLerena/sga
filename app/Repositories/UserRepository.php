<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
	protected $model;

	public function __construct()
	{
		$this->model = new User();
	}

	public function all()
	{
		$users = $this->model->all()->transform(function($item, $key){
			return (object) $item->toArray();
		});

		return $users;
	}

	public function save(\stdClass $input)
	{
		$alert = null;
		if (property_exists($input, 'VC_ID_USUARIO')) {
			$alert = $this->model->find($input->VC_ID_USUARIO);
		} else {
			$alert = $this->model;
		}

		if (property_exists($input, 'VC_CONTRASENIA')) {
			$alert->VC_CONTRASENIA = $input->VC_CONTRASENIA;
		}

		if (property_exists($input, 'estado')) {
			$alert->estado = $input->estado;
		}

		if (property_exists($input, 'IN_ID_ROL')) {
			$alert->IN_ID_ROL = $input->IN_ID_ROL;
		}

		$alert->save();

		return (object) $alert->toArray();
	}

	public function find($id)
	{
		$res = $this->model->where('VC_ID_USUARIO', $id);
		return $res->count() > 0 ? (object) $res->first()->toArray() : null;
	}

	public function getModel($id)
	{
		$res = $this->model->where('VC_ID_USUARIO', $id);
		return $res->count() > 0 ? $res->first() : null;
	}

	public function verifyCredentials($id, $password)
	{
		$res = $this->model
		            ->where('VC_ID_USUARIO', $id)
		            ->where('VC_CONTRASENIA', $password);
		return $res->count() > 0;
	}
}