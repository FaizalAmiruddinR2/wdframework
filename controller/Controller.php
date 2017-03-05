<?php

/**
* 
*/
abstract class Controller
{
	
	function __construct($method, $args)
	{
		$this->call($method, $args);
	}

	public function call($method, $args)
	{
		call_user_func_array([$this, $method], $args);
	}

	public function model($name)
	{
		require_once '../model/'.ucfirst($name).'Model.php';
		return new {ucfirst($name).'Model'};
	}

	public function view($name, $data=[])
	{
		include '../view/'.$name.'.php';
	}
}