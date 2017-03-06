<?php
require_once 'Controller.php';

/**
* 
*/
class MahasiswaController extends Controller
{
	public function index()
	{
		$mahasiswa = $this->model('mahasiswa');
		$data = $mahasiswa->get();
		$this->view('mahasiswa', $data);
	}
}