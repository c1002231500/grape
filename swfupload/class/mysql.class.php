<?php
//数据库操作类，简版
class class_mysql{
	private $db = null;
	private $dbconf = array();
	private $result = null;
	public function __construct($config)
	{
		$this->dbconf = $config;
	}

	public function connect()
	{
		if(!is_object($this->db)){
			$this->connect_db();
		}
		return $this;
	}

	private function connect_db()
	{
		$this->db = mysql_connect($this->dbconf['host'],$this->dbconf['user'],$this->dbconf['pwd']);
		if(!$this->db){
			exit('Can not connect to mysql!');
		}
		mysql_select_db($this->dbconf['db'],$this->db);
		$this->query("set names '{$this->dbconf['charset']}'");
		return $this;
	}

	public function query($sql)
	{
		$this->result = mysql_query($sql,$this->db);
		return $this;
	}

	public function asArray()
	{
		$arr = array();
		while($row = mysql_fetch_array($this->result,MYSQL_ASSOC)){
			$arr[] = $row;
		}
		return $arr;
	}

	public function getOne()
	{
		$arr = mysql_fetch_array($this->result,MYSQL_ASSOC);
		return $arr;
	}

	public function get_insert_id()
	{
	    return mysql_insert_id($this->db);
	}

	public function getError()
	{
	    return mysql_error($this->db);
	}
}