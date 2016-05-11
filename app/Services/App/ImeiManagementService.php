<?php

namespace App\Services\App;

use App\Repositories\ImeiRepository;

class ImeiManagementService
{
	protected $imei_rep;

	public function __construct(ImeiRepository $imei_rep)
	{
		$this->imei_rep = $imei_rep;
	}

	public function find($id)
	{
		return $this->imei_rep->find($id);
	}

	public function all()
	{
		return $this->imei_rep->all();
	}

	public function save($data)
	{
		return $this->imei_rep->save((object) $data);
	}
}