<?php

/**
* 
*/
abstract class Controller
{

	public function model($name)
	{
		require_once 'model/'.ucfirst($name).'Model.php';
		return call_user_func(ucfirst($name).'Model', '__construct');
	}

	public function view($name, $data=[])
	{
		include 'view/'.$name.'.php';
	}
}