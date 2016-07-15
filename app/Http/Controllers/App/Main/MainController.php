<?php

namespace App\Http\Controllers\App\Main;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\App\AlertManagementService;

class MainController extends Controller
{
	protected $alert_management_service;

	public function __construct(
		AlertManagementService $alert_management_service
	)
	{
		$this->alert_management_service = $alert_management_service;
	}
	public function dashboard()
	{
		return view('main.dashboard');
	}

	public function basicTables()
	{
		return view('alerts.index')->with('alerts', $this->alert_management_service->all());
	}

	public function formComponent()
	{
		return view('main.form_component');
	}

	public function gallery()
	{
		return view('main.gallery');
	}
}
