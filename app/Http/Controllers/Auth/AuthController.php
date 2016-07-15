<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

use App\Services\App\UserManagementService;
use App\Services\App\AuthService;

class AuthController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers, ThrottlesLogins;

	/**
	 * Where to redirect users after login / registration.
	 *
	 * @var string
	 */
	protected $redirectTo = 'app';
	protected $user_management_service;
	protected $auth_service;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @return void
	 */
	public function __construct
	(
		UserManagementService $user_management_service,
		AuthService $auth_service
	)
	{
		$this->middleware($this->guestMiddleware(), ['except' => 'logout']);
		$this->user_management_service = $user_management_service;
		$this->auth_service = $auth_service;
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:6|confirmed',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	protected function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

	public function getLogin()
	{
		return view('main.login');
	}

	public function postLogin(Request $request)
	{
		if ($this->auth_service->verifyCredentials($request->get('user_id'), $request->get('password'))) {
			$this->auth_service->authenticate($request->get('user_id'));
			return redirect()->route('app.main');
		} else {
			return redirect()->back();
		}
	}

	public function logout()
	{
		$this->auth_service->logout();

		return redirect()->route('login');
	}
}
