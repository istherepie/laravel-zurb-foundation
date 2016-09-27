<?php

namespace App\Helpers;

class SoHelpful
{
	public function checkid($id)
	{
		// Is $id numeric ?
		$checkid = is_numeric($id);
		$response = ['value' => $id, 'numeric' => $checkid];
		return $response;
	}
}