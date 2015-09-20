<?php 

include 'includes/comunes.php';
require 'includes/class.Conexion.php';

$db = new Conexion();

$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';
	
switch ($modo) {
	case 'login':
		if (isset($_POST['login'])) {
			if (!empty($_POST['user']) and !empty($_POST['pass'])) {
				include 'includes/class.Acceso.php';
				$login = new Acceso($_POST['user'], $_POST['pass']);
				$login->Login();
			} else {
				header('location: index.php');
			}
		} else {
			header('location: index.php');
		}
		break;
	case 'registro':
		echo 'Registro';
		break;
	case 'claveperdida':
		echo 'Clave Perdida';
		break;
	default:
		$template = new Smarty(0);
		$template->display('public/index.tpl');
		break;
}


 ?>