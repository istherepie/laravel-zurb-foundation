<?php

function helpful($id)
{
	$helpful = app('App\Helpers\SoHelpful');
	return $helpful->checkid($id);
}