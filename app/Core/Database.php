<?php

Class Database {

	private static $_instance = null;
	private $mysqli;


	function __construct()
	{
		$this->mysqli = new mysqli("localhost","root","","kodingpedia");
	}

	public static function getInstance()
	{
		if(!isset(self::$_instance))
			{
				self::$_instance = new Database();
			}
		return self::$_instance;	
	}


	public function index($tableName) 
	{
		$reply =[];
		$sql = "SELECT * FROM $tableName";

		$result = $this->mysqli->query($sql);

		while($row = $result->fetch_assoc())
			$reply[] = $row;
		
		return $reply;
	}
}