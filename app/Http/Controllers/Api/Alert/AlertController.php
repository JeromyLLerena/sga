<?php

namespace App\Http\Controllers\Api\Alert;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon as Carbon;

use App\Services\App\AlertManagementService;
use App\Services\App\ImeiManagementService;

class AlertController extends Controller
{
	protected $alert_management_service;
	protected $imei_management_service;

	public function __construct(
		AlertManagementService $alert_management_service,
		ImeiManagementService $imei_management_service
	)
	{
		$this->alert_management_service = $alert_management_service;
		$this->imei_management_service  = $imei_management_service;
	}
	public function create(Request $request)
	{
		$data = [
			'VC_IMEI' => $request->get('imei'),
			'IN_ID_TIPO' => $request->get('type'),
			'VC_NUM_HERIDOS' => $request->get('affected_persons_range'),
			'VC_COORDENADA' => $request->get('coord_x') . ',' . $request->get('coord_y'),
			'DT_FECHA' => Carbon::now()->toDateString()
		];
		if(!$this->imei_management_service->find($request->get('imei'))) {
			$this->imei_management_service->save(['VC_IMEI' => $request->get('imei'), 'CH_ESTADO' => 1]);
		}

		if ($this->alert_management_service->save($data)) {
			return response()->json(['success' => ['message' => 'La alerta ha sido enviada satisfactoriamente.']], 201);
		} else {
			return response()->json(['success' => ['message' => 'Ha ocurrido un error.']], 500);
		}
	}
}
