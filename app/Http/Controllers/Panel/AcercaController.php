<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AcercaController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('role:6');
	// }

	public function index()
	{
		return view('/layouts/acercade');
	}


}
