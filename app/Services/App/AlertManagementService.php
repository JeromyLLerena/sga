<?php

namespace App\Services\App;

use App\Repositories\AlertRepository;

class AlertManagementService
{
	protected $alert_rep;

	public function __construct(AlertRepository $alert_rep)
	{
		$this->alert_rep = $alert_rep;
	}

	public function save($data)
	{
		return $this->alert_rep->save((object) $data);
	}

	public function all()
	{
		return $this->alert_rep->all();
	}
}