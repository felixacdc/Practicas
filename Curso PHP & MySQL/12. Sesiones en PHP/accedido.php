<?php 

if (isset($_SESSION['usuario'])) {
	echo 'Bienvenido seas ' , $_SESSION['usuario'] , ' a esta nueva sesion';	
} elseif (!isset($_SESSION['usuario'])) {
	header('location: index.php?error=4');
}

 ?>