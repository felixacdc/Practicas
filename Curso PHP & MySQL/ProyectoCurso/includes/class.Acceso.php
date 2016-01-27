<?php

class Acceso
{
	protected $user;
	protected $pass;
	protected $email;

	public function __construct($users, $passw, $emaill)
	{
		$this->user = htmlspecialchars($users);
		$this->pass = htmlspecialchars($passw);
		$this->email = htmlspecialchars($emaill);
	}

	public function login()
	{
		$db = new Conexion();

		$user = $db->real_escape_string($this->user);
		$pass = $db->real_escape_string($this->pass);

		$sql = $db->query("SELECT nombre, password FROM usuarios
					WHERE nombre='$user' AND password='$pass'");

		if ( $db->rows($sql) > 0 ) {
			session_start();
			$_SESSION['user'] = $this->user;
			header('location: acceso.php');
		} else {
			header('location: index.php?error=datos_incorrectos');
		}

	}

	public function registro()
	{
		$db = new Conexion();

		$user = $db->real_escape_string($this->user);
		$pass = $db->real_escape_string($this->pass);
		$email = $db->real_escape_string($this->email);

		$sql = $db->query("SELECT nombre, email FROM usuarios
					WHERE nombre='$user' OR email='$email'");
		$datos = $db->recorrer($sql);

		if ( $db->rows($sql) == 0 ) {
			$sql = $db->query("INSERT INTO usuarios (nombre, password, email) VALUES ('$user','$pass','$email');");
			session_start();
			$_SESSION['user'] = $this->user;
			header('location: acceso.php');
		} elseif (strtolower($datos['nombre']) == strtolower($this->user) and strtolower($datos['email']) == strtolower($this->email)) {
			header('location: index.php?modo=registro&error=usuarioyemail_usados');
		} elseif (strtolower($datos['nombre']) == strtolower($this->user)) {
			header('location: index.php?modo=registro&error=usuario_usado');
		} elseif (strtolower($datos['email']) == strtolower($this->email)) {
			header('location: index.php?modo=registro&error=email_usado');
		}
	}

	public function clavePerdida()
	{
		$db = new Conexion();

		$email = $db->real_escape_string($this->email);

		$sql = $db->query("SELECT email FROM usuarios
					WHERE email='$email'");

		if ( $db->rows($sql) > 0 ) {
			#Generamos la contraseña y la enviamos al correo del usuario
			include('includes/class.GenerarPass.php');

			$password = new GenerarPass();
			$passwordFinal = $password->NuevoPassword(11);

			$sql = $db->query("UPDATE usuarios
												SET password = '$passwordFinal'
												WHERE email='$email'");

			mail($this->email, 'Cambio de contraseña', "Estimado Usuario tu nueva contraseña es: $passwordFinal");

			header('location: index.php?modo=claveperdida&success=ok');

		} else {
				header('location: index.php?modo=claveperdida&error=email_inexistente');
		}

	}

}
