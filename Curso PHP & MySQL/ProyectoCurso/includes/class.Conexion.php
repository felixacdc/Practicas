<?php 

class Conexion extends mysqli 
{

	private $servidor = 'localhost';
	private $db = 'Felix';
	private $user = 'root';
	private $password = '';

	public function __construct() 
	{
		//acceder al constructor de mysqli
		parent::__construct($this->servidor, $this->user, $this->password, $this->db);
		// definir el cotejamiento
		$this->query("SET NAME 'utf8';");
		// connect_errno devuelve verdadero si hay error en la conexion
		$this->connect_errno ? die('Error con la conexion') : $x = 'Conectado';
		# echo $x;
		unset($x);
	}

}


 ?>