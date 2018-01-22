<?php

Class User{

	private $db;
	public function __construct()
	{
		$this->db = Database::getInstance();
	}

	function index()
	{
		return $this->db->index('category');
	}

	
}
