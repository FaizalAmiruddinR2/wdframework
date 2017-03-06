<?php
require_once 'Controller.php';

/**
* 
*/
class WelcomeController extends Controller
{
	public function index()
	{
		$this->view('welcome', $data);
	}
}