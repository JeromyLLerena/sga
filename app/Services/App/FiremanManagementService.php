<?php

namespace App\Services\App;

use App\Repositories\FiremanRepository;

class FiremanManagementService
{
	protected $fireman_rep;

	public function __construct(FiremanRepository $fireman_rep)
	{
		$this->fireman_rep = $fireman_rep;
	}

	public function save($data)
	{
		return $this->fireman_rep->save((object) $data);
	}

	public function all()
	{
		return $this->fireman_rep->all();
	}
}