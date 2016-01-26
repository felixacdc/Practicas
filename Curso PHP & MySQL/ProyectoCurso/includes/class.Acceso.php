<?php

class Acceso
{
	protected $user;
	protected $pass;
	protected $email;

	public function __construct($users, $passw, $emaill)
	{
		$this->user = mysqli_real_escape_string(htmlspecialchars($users));
		$this->pass = mysqli_real_escape_string(htmlspecialchars($passw));
		$this->email = mysqli_real_escape_string(htmlspecialchars($emaill));
	}

	public function login()
	{
		$db = new Conexion();
		$sql = $db->query("SELECT nombre, password FROM usuarios
					WHERE nombre='$this->user' AND password='$this->pass'");

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
		$sql = $db->query("SELECT nombre, email FROM usuarios
					WHERE nombre='$this->user' OR email='$this->email'");
		$datos = $db->recorrer($sql);

		if ( $db->rows($sql) == 0 ) {
			$sql = $db->query("INSERT INTO usuarios (nombre, password, email) VALUES ('$this->user','$this->pass','$this->email');");
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

		$sql = $db->query("SELECT email FROM usuarios
					WHERE email='$this->email'");

		if ( $db->rows($sql) > 0 ) {
			#Generamos la contraseña y la enviamos al correo del usuario
			include('includes/class.GenerarPass.php');

			$password = new GenerarPass();
			$passwordFinal = $password->NuevoPassword(11);

			$sql = $db->query("UPDATE usuarios
												SET password = '$passwordFinal'
												WHERE email='$this->email'");

			mail($this->email, 'Cambio de contraseña', "Estimado Usuario tu nueva contraseña es: $passwordFinal");

			header('location: index.php?modo=claveperdida&success=ok');

		} else {
				header('location: index.php?modo=claveperdida&error=email_inexistente');
		}

	}

}
