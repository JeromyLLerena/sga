<?php

namespace App\Services\App;

use App\Repositories\UserRepository;
use Auth;
use Session;
class AuthService
{
	protected $user_rep;

	public function __construct(UserRepository $user_rep)
	{
		$this->user_rep = $user_rep;
	}

	public function Authenticate($user_id)
	{
		$user = $this->user_rep->getModel($user_id);
		Auth::login($user);
		$user_obj = $this->user_rep->find($user_id);
		Session::put('user', $user_obj);
		return $user;
	}

	public function verifyCredentials($user_id, $password)
	{
		return $this->user_rep->verifyCredentials($user_id, $password);
	}

	public function logout()
	{
		Session::flush();
		return Auth::logout();
	}
}