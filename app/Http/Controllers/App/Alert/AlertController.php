<?php

namespace App\Http\Controllers\App\Alert;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\App\AlertManagementService;

class AlertController extends Controller
{
	protected $alert_management_service;

	public function __construct(
		AlertManagementService $alert_management_service
	)
	{
		$this->alert_management_service = $alert_management_service;
	}

	public function showMap($alert_id)
	{
		$alert = $this->alert_management_service->find($alert_id);

		$coords = explode(",", $alert->VC_COORDENADA);
		$view = view('main.map')->with('coords', $coords)->render();
		//return $view;
		return response()->json(["success" => true, "html" => $view]);
		//return response()->view('main.map', ['coords' => $coords]);
	}
}