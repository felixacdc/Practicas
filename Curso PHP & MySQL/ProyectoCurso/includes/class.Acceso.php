<?php 

class Acceso 
{
	protected $user;
	protected $pass;
	protected $email;
	
	public function __construct($users, $passw, $emaill)
	{
		$this->user = $users;
		$this->pass = $passw;
		$this->email = $emaill;
	}

	public function login() 
	{
		$db = new Conexion();
		$sql = $db->query("SELECT nombre, password FROM usuarios 
					WHERE nombre='$this->user' OR password='$this->pass'");
		$datos = $db->recorrer($sql);

		// strtolower combierte el contenido de una variable string a minusculas
		if (strtolower($datos['nombre']) == strtolower($this->user) and $datos['password'] == $this->pass ) {
			session_start();
			$_SESSION['user'] = $datos['nombre'];
			header('location: acceso.php');
		} else {
			header('location: index.php?error=datos_incorrectos');
		}

	}

	public function registro()
	{

	}

	public function clavePerdida()
	{

	}
}

 ?>