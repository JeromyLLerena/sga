<?php

namespace App\Http\Controllers\App\Firemans;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Services\App\FiremanManagementService;

class FiremanController extends Controller
{
	protected $fireman_management_service;

	public function __construct(FiremanManagementService $fireman_management_service)
	{
		$this->fireman_management_service = $fireman_management_service;
	}

	public function showCreate()
	{
		return view('firemans.create');
	}

	public function create(Request $request)
	{

		$data = [
			'name' => $request->get('name'),
			'email' => $request->get('email'),
			'password' => bcrypt($request->get('password')),
			'last_name' => $request->get('last_name')
		];

		$this->fireman_management_service->save($data);

		return redirect()->route('app.firemans.overview');
	}

	public function showOverview()
	{
		$data = [
			'users' => $this->fireman_management_service->all()
		];

		return view('firemans.overview', $data);
	}
}
