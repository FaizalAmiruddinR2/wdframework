<?php

require_once 'Database.php';

/**
* buat main model
*/
abstract class Model
{
	protected $table;
	protected $db;

	/**
	 * panggil objek library database
	 */
	function __construct()
	{
		$this->db = new Database($this->table);
	}

	/**
	 * tambah where ke query
	 * @param  string $column  kolom untuk dibandingkan
	 * @param  string $compare tanda baca pembanding (=, <>, <, >)
	 * @param  string $value   isi yang dibandingkan
	 */
	public function where($column, $compare, $value)
	{
		$this->db->where($column, $compare, $value);
		return $this;
	}

	/**
	 * tambah and where ke query
	 * @param  string $column  kolom untuk dibandingkan
	 * @param  string $compare tanda baca pembanding (=, <>, <, >)
	 * @param  string $value   isi yang dibandingkan
	 */
	public function andWhere($column, $compare, $value)
	{
		$this->db->andWhere($column, $compare, $value);
		return $this;
	}

	/**
	 * tambah or where ke query
	 * @param  string $column  kolom untuk dibandingkan
	 * @param  string $compare tanda baca pembanding (=, <>, <, >)
	 * @param  string $value   isi yang dibandingkan
	 */
	public function orWhere($column, $compare, $value)
	{
		$this->db->orWhere($column, $compare, $value);
		return $this;
	}

	/**
	 * insert data ke database
	 * @param  array $data data untuk dimasukkan ke tabel dg format ['kolom1' => 'data1', 'kolom2' => 'data2'[, ...] ]
	 */
	public function insert($data)
	{
		return $this->db->insert($data);
	}

	/**
	 * update data
	 * @param  array $data data untuk dimasukkan ke tabel dg format ['kolom1' => 'data1', 'kolom2' => 'data2'[, ...] ]
	 */
	public function update($data)
	{
		return $this->db->update($data);
	}

	/**
	 * hapus data
	 */
	public function delete()
	{
		return $this->db->delete();
	}

	/**
	 * ambil semua data pada tabel
	 * @return array
	 */
	public function get()
	{
		return $this->db->get();
	}

	/**
	 * ambil satu data pertama
	 * @return array
	 */
	public function first()
	{
		return $this->db->first();
	}
}