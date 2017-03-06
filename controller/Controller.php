<?php

/**
* buat base controller
*/
abstract class Controller
{

	public function model($name)
	{
		require_once 'model/'.ucfirst($name).'Model.php';
		$modelName = ucfirst($name).'Model';
		$model = new $modelName;
		return $model;
	}

	public function view($name, $data=[])
	{
		include 'view/'.$name.'.php';
	}
}