<?php

require_once 'Database.php';

/**
* 
*/
abstract class Model
{
	protected $table;
	protected $db;

	function __construct()
	{
		$this->db = new Database($this->table);
	}

	public function where($column, $compare, $value)
	{
		$this->db->where($column, $compare, $value);
	}

	public function insert($data)
	{
		$this->db->insert($data);
	}

	public function update($data)
	{
		$this->db->update($data);
	}

	public function get()
	{
		return $this->db->get();
	}

	public function first()
	{
		return $this->db->first();
	}
}