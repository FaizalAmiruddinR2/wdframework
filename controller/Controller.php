<?php

/**
* buat base controller
*/
abstract class Controller
{
	/**
	 * untuk memanggil model
	 * @param  string $name nama model
	 * @return object       model yang di cari
	 */
	public function model($name)
	{
		require_once 'model/'.ucfirst($name).'Model.php';
		$modelName = ucfirst($name).'Model';
		$model = new $modelName;
		return $model;
	}

	/**
	 * untuk memanggil view
	 * @param  string $name nama view
	 * @param  array  $data data yang dikirim ke view
	 */
	public function view($name, $data=[])
	{
		include 'view/'.$name.'.php';
	}
}