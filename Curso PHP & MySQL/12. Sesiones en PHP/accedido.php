<?php 

session_start();

if (isset($_SESSION['usuario'])) {
	echo 'Bienvenido seas ' , $_SESSION['usuario'] , ' a esta nueva sesion';	
} elseif (!isset($_SESSION['usuario'])) {
	session_start();
	session_destroy();
	header('location: index.php?error=4');
}

 ?>