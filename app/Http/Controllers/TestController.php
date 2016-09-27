<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Helpers\Hello;

class TestController extends Controller
{
	// Boilerplate, just to confirm that foundation is loaded
	public function hello(Hello $hello)
	{
		return view('welcome')->with('hello', $hello->message());
	}

	// Boilerplate helper sample, check if $id is numeric
	public function checkid($id)
	{
		$checkid = helpful($id);
		return $checkid;
	}
}
