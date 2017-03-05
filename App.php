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
			# code...
		}
		else {
			
		}
	}
}