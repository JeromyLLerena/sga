<?php

namespace App\Services\App;

use App\Repositories\ChargeRepository;

class ChargeManagementService
{
	protected $charge_rep;

	public function __construct(ChargeRepository $charge_rep)
	{
		$this->charge_rep = $charge_rep;
	}

	public function save($data)
	{
		return $this->charge_rep->save((object) $data);
	}

	public function all()
	{
		return $this->charge_rep->all();
	}
}