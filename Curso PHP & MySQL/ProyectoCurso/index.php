<?php 

include 'includes/comunes.php';
require 'includes/class.Conexion.php';


$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';
	
switch ($modo) {
	case 'login':
		if (isset($_POST['login'])) {
			if (!empty($_POST['user']) and !empty($_POST['pass'])) {
				include 'includes/class.Acceso.php';
				$login = new Acceso($_POST['user'], $_POST['pass']);
				$login->login();
			} else {
				header('location: index.php?error=campos_vacios');
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
		if (isset($_GET['error']) and $_GET['error'] == 'campos_vacios') {		
			$template->assign(array('error' => 'ERROR: Debes llenar los campos.'));
			$template->display('public/index.tpl');
		} elseif (isset($_GET['error']) and $_GET['error'] == 'datos_incorrectos') {
			$template->assign(array('error' => 'ERROR: Datos Incorrectos.'));
			$template->display('public/index.tpl');
		}elseif (isset($_GET['error']) and $_GET['error'] == 'acceso') {
			$template->assign(array('error' => 'ERROR: La sesion ha caducado o no has iniciado secion.'));
			$template->display('public/index.tpl');
		}else {
			$template->display('public/index.tpl');
		}
		break;
}


 ?>