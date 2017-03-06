<?php

/**
* 
*/
class Database
{
	private $host = 'localhost';
	private $username = 'root';
	private $password = 'root';
	private $database = 'dbmahasiswa';

	private $conn;
	private $table;
	private $where = '';

	function __construct($table)
	{
		$this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		$this->table = $table;
	}

	public function where($column, $compare, $value)
	{
		$this->where = ' WHERE '.$column.' '.$compare.' '.$value;
	}

	public function insert($data)
	{
		$columns = array_keys($data);
		$values = array_values($data);

		$column = implode(', ', $columns);
		$value = implode(', ', $values);
		$this->query = 'INSERT INTO '.$this->table.'('.$column.') VALUES('.$value.')';
		mysqli_query($this->query);
	}

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

	public function get()
	{
		$result = [];
		$query = mysqli_query($this->conn, 'SELECT * FROM '.$this->table.$this->where);
		while ($obj = mysqli_fetch_object($query)) {
	        array_push($result, $obj);
	    }

	    return $result;
	}

	public function first()
	{
		$query = mysqli_query($this->conn, 'SELECT * FROM '.$this->table.$this->where.' LIMIT 1');
		$result = mysqli_fetch_object($query);

	    return $result;
	}
}