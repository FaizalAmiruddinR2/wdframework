<?php

/**
* 
*/
class App
{
	private $controller = 'WelcomeController';
	private $controllerMethod = 'index';
	private $controllerMethodArgs = [];

	function __construct()
	{
		if (isset($_GET['url'])) {
			$url = explode('/', $_GET['url']);

			$this->controller = ucfirst(array_shift($url)).'Controller';
			$this->controllerMethod = array_shift($url);
			$this->controllerMethodArgs = $url;
		}

		require_once 'controller/'.$this->controller.'.php';
		$obj = new $this->controller;
		return call_user_func_array([$obj, $this->controllerMethod], $this->controllerMethodArgs);
	}
}