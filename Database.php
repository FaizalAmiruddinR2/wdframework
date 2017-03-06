<?php

/**
* library database
*/
class Database
{
	// pengaturan
	private $host = 'localhost';
	private $username = 'root';
	private $password = 'root';
	private $database = 'dbmahasiswa';
	//selesai pengaturan

	private $conn;
	private $table;
	private $where = '';

	function __construct($table)
	{
		// koneksi
		$this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);

		// setting tabel yg dipakai
		$this->table = $table;
	}

	/**
	 * tambah where ke query
	 * @param  string $column  kolom untuk dibandingkan
	 * @param  string $compare tanda baca pembanding (=, <>, <, >)
	 * @param  string $value   isi yang dibandingkan
	 */
	public function where($column, $compare, $value)
	{
		$this->where .= ' WHERE '.$column.' '.$compare.' '.$value;
	}

	/**
	 * tambah and where ke query
	 * @param  string $column  kolom untuk dibandingkan
	 * @param  string $compare tanda baca pembanding (=, <>, <, >)
	 * @param  string $value   isi yang dibandingkan
	 */
	public function andWhere($column, $compare, $value)
	{
		$this->where .= ' AND '.$column.' '.$compare.' '.$value;
	}

	/**
	 * tambah or where ke query
	 * @param  string $column  kolom untuk dibandingkan
	 * @param  string $compare tanda baca pembanding (=, <>, <, >)
	 * @param  string $value   isi yang dibandingkan
	 */
	public function orWhere($column, $compare, $value)
	{
		$this->where .= ' OR '.$column.' '.$compare.' '.$value;
	}

	/**
	 * insert data ke database
	 * @param  array $data data untuk dimasukkan ke tabel dg format ['kolom1' => 'data1', 'kolom2' => 'data2'[, ...] ]
	 */
	public function insert($data)
	{
		$columns = array_keys($data);
		$values = array_values($data);

		$column = implode(', ', $columns);
		$value = implode(', ', $values);
		$this->query = 'INSERT INTO '.$this->table.'('.$column.') VALUES('.$value.')';
		mysqli_query($this->query);
	}

	/**
	 * update data
	 * @param  array $data data untuk dimasukkan ke tabel dg format ['kolom1' => 'data1', 'kolom2' => 'data2'[, ...] ]
	 */
	public function update($data)
	{
		$updates = [];
		foreach ($data as $key => $value) {
			array_push($updates, $key.' = '.$value);
		}
		$update = implode(', ', $updates);

		$this->query = 'UPDATE '.$this->table.' SET '.$update.$this->where;
		mysqli_query($this->query);
	}

	/**
	 * ambil semua data pada tabel
	 * @return array
	 */
	public function get()
	{
		$result = [];
		$query = mysqli_query($this->conn, 'SELECT * FROM '.$this->table.$this->where);
		while ($obj = mysqli_fetch_object($query)) {
	        array_push($result, $obj);
	    }

	    return $result;
	}

	/**
	 * ambil satu data pertama
	 * @return array
	 */
	public function first()
	{
		$query = mysqli_query($this->conn, 'SELECT * FROM '.$this->table.$this->where.' LIMIT 1');
		$result = mysqli_fetch_object($query);

	    return $result;
	}
}