<?php

namespace App\Repositories;

use App\Models\Charge;

class ChargeRepository
{
	protected $model;

	public function __construct()
	{
		$this->model = new Charge();
	}

	public function all()
	{
		$charges = $this->model->all()->transform(function($item, $key){
			return (object) $item->toArray();
		});

		return $charges;
	}

	public function save(\stdClass $input)
	{
	}
}