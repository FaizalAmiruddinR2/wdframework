<?php
require_once 'Controller.php';

/**
* CRUD mahasiswa
*/
class MahasiswaController extends Controller
{
	/**
	 * halaman utama
	 */
	public function index()
	{
		$mahasiswa = $this->model('mahasiswa');
		$data = $mahasiswa->get();
		$this->view('mahasiswa', $data);
	}

	/**
	 * detail mahasiswa
	 * @param  integer $id id mahasiswa
	 */
	public function detail($id)
	{
		$mahasiswa = $this->model('mahasiswa');
		$data = $mahasiswa->where('id', '=', $id)->first();
		$this->view('detail', $data);
	}

	/**
	 * tampil form tambah data
	 */
	public function add()
	{
		$this->view('formadd');
	}

	/**
	 * simpan data baru
	 */
	public function store()
	{
		$data = $_POST;
		$mahasiswa = $this->model('mahasiswa');
		if($mahasiswa->insert($data)) {
			header('Location: index');
		}
	}

	/**
	 * tampil form edit
	 * @param  integer $id id mahasiswa
	 */
	public function edit($id)
	{
		$mahasiswa = $this->model('mahasiswa');
		$data = $mahasiswa->where('id', '=', $id)->first();
		$this->view('formedit', $data);
	}

	/**
	 * simpan data edit
	 * @param  integer $id id mahasiswa
	 */
	public function save($id)
	{
		$data = $_POST;
		$mahasiswa = $this->model('mahasiswa');
		if($mahasiswa->where('id', '=', $id)->update($data)) {
			header('Location: ../index');
		}
	}

	/**
	 * hapus data
	 * @param  integer $id id mahasiswa
	 */
	public function delete($id)
	{
		$data = $_POST;
		$mahasiswa = $this->model('mahasiswa');
		if($mahasiswa->where('id', '=', $id)->delete()) {
			header('Location: ../index');
		}
	}
}