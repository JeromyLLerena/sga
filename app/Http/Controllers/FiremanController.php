<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class FiremanController extends Controller
{
	public function showCreate()
	{
		return view('firemans.create');
	}

	public function create(Request $request)
	{
		$user = new User;

		$data = [
			'name' => $request->get('name'),
			'email' => $request->get('email'),
			'password' => bcrypt($request->get('password')),
			'last_name' => $request->get('last_name')
		];

		$user->create($data);

		return redirect()->route('overview');
	}

	public function showOverview()
	{
		$user = new User;

		$data = [
			'users' => $user->all()
		];

		return view('firemans.overview', $data);
	}
}
