<?php

/**
 * Clase Conexion
 */
 class connection extends mysqli
 {

 	private $servidor = 'localhost';
 	private $db = 'test';
 	private $user = 'root';
 	private $password = '';

 	public function __construct()
 	{
 		//acceder al constructor de mysqli
 		parent::__construct($this->servidor, $this->user, $this->password, $this->db);

 		$this->query("SET NAME 'utf8';");
 	}
 }
