<?php
require_once 'Controller.php';

/**
* CRUD mahasiswa
*/
class MahasiswaController extends Controller
{
	public function index()
	{
		$mahasiswa = $this->model('mahasiswa');
		$data = $mahasiswa->get();
		$this->view('mahasiswa', $data);
	}

	public function detail($id)
	{
		$mahasiswa = $this->model('mahasiswa');
		$data = $mahasiswa->where('id', '=', $id)->first();
		$this->view('detail', $data);
	}

	public function add()
	{
		$this->view('formadd');
	}

	public function store()
	{
		$data = $_POST;
		$mahasiswa = $this->model('mahasiswa');
		if($mahasiswa->insert($data)) {
			header('Location: index');
		}
	}

	public function edit($id)
	{
		$mahasiswa = $this->model('mahasiswa');
		$data = $mahasiswa->where('id', '=', $id)->first();
		$this->view('formedit', $data);
	}

	public function save($id)
	{
		$data = $_POST;
		$mahasiswa = $this->model('mahasiswa');
		if($mahasiswa->where('id', '=', $id)->update($data)) {
			header('Location: ../index');
		}
	}

	public function delete($id)
	{
		$data = $_POST;
		$mahasiswa = $this->model('mahasiswa');
		if($mahasiswa->where('id', '=', $id)->delete()) {
			header('Location: ../index');
		}
	}
}