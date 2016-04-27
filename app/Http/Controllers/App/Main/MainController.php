<?php

namespace App\Http\Controllers\App\Main;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use URL;
class MainController extends Controller
{
	public function dashboard()
	{
		return view('main.dashboard');
		
	}

	public function basicTables()
	{
		return view('main.basic_tables');
	}

		public function formComponent()
	{
		return view('main.form_component');
	}

		public function gallery()
	{
		return view('main.gallery');
	}

		public function login()
	{
		return view('main.login');
	}
}
