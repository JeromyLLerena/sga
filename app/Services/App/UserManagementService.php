<?php

namespace App\Services\App;

use App\Repositories\UserRepository;

class UserManagementService
{
	protected $user_rep;

	public function __construct(UserRepository $user_rep)
	{
		$this->user_rep = $user_rep;
	}

	public function save($data)
	{
		return $this->user_rep->save((object) $data);
	}

	public function all()
	{
		return $this->user_rep->all();
	}

	public function find($id)
	{
		return $this->user_rep->find($id);
	}
}