<?php

namespace App\Http\Controllers\App\Firemans;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Services\App\UserManagementService;
use App\Services\App\ChargeManagementService;
use App\Services\App\FiremanManagementService;

class FiremanController extends Controller
{
	protected $user_management_service;
	protected $charge_management_service;
	protected $fireman_management_service;

	public function __construct(
		UserManagementService $user_management_service,
		ChargeManagementService $charge_management_service,
		FiremanManagementService $fireman_management_service
	)
	{
		$this->user_management_service = $user_management_service;
		$this->charge_management_service = $charge_management_service;
		$this->fireman_management_service = $fireman_management_service;
	}

	public function showCreate()
	{
		$data = [
			'charges' => $this->charge_management_service->all()
		];

		return view('firemans.create', $data);
	}

	public function create(Request $request)
	{
		$user = [
			'VC_ID_USUARIO' => $request->get('id'),
			'VC_CONTRASENIA' => $request->get('password'),
			'IN_ID_ROL' => 1,
			'estado' => 1
		];

		$fireman = [
			'VC_NOMBRE' => $request->get('name'),
			'VC_APELLIDO' => $request->get('last_name'),
			'VC_TELEFONO' => $request->get('phone'),
			'VC_DIRECCION' => $request->get('direction'),
			'VC_CORREO' => $request->get('email'),
			'VC_ID_USUARIO' => $request->get('id'),
			'IN_DNI' => $request->get('dni'),
			'DT_FECHA_NACIMIENTO' => '',
			'CH_ESTADO' => 1,
			'IN_ID_CARGO' => $request->get('charge')
		];

		$this->user_management_service->save($user);
		$this->fireman_management_service->save($fireman);

		return redirect()->route('app.firemans.index');
	}

	public function index()
	{
		$data = [
			'users' => $this->user_management_service->all()
		];

		return view('firemans.index', $data);
	}
}
