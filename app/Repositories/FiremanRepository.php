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
		if (property_exists($input, 'id')) {
			$user = $this->model->find($input->id);
		} else {
			$user = $this->model;
		}

		if (property_exists($input, 'name')) {
			$user->name = $input->name;
		}

		if (property_exists($input, 'last_name')) {
			$user->last_name = $input->last_name;
		}

		if (property_exists($input, 'email')) {
			$user->email = $input->email;
		}

		if (property_exists($input, 'password')) {
			$user->password = $input->password;
		}

		$user->save();

		return (object) $user->toArray();
	}
}