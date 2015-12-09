<?php 

include 'includes/comunes.php';
require 'includes/class.Conexion.php';


$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';
	
switch ($modo) {
	case 'login':
		if (isset($_POST['login'])) {
			if (!empty($_POST['user']) and !empty($_POST['pass'])) {
				include 'includes/class.Acceso.php';
				$login = new Acceso($_POST['user'], $_POST['pass'], '');
				$login->login();
			} else {
				header('location: index.php?error=campos_vacios');
			}
		} else {
			header('location: index.php');
		}
		break;
	case 'registro':
		if (isset($_POST['Registro'])) {
			if (!empty($_POST['user']) and !empty($_POST['email']) and !empty($_POST['pass'])) {
				include 'includes/class.Acceso.php';
				$registro = new Acceso($_POST['user'], $_POST['pass'], $_POST['email']);
				$registro->registro();
			} else {
				header('location: index.php?modo=registro&error=campos_vacios');
			}
		} elseif (isset($_GET['error']) and $_GET['error'] == 'campos_vacios') {
			$template = new Smarty(0);
			$template->assign(array('error' => 'ERROR: Debes llenar los campos.'));
			$template->display('public/registro.tpl');
		} elseif (isset($_GET['error']) and $_GET['error'] == 'usuarioyemail_usados') {
			$template = new Smarty(0);
			$template->assign(array('error' => 'ERROR: El usuario y el email ya existen.'));
			$template->display('public/registro.tpl');
		} elseif (isset($_GET['error']) and $_GET['error'] == 'usuario_usado') {
			$template = new Smarty(0);
			$template->assign(array('error' => 'ERROR: El usuario ya existe.'));
			$template->display('public/registro.tpl');
		} elseif (isset($_GET['error']) and $_GET['error'] == 'email_usado') {
			$template = new Smarty(0);
			$template->assign(array('error' => 'ERROR: El email ya existe.'));
			$template->display('public/registro.tpl');
		} else {
			$template = new Smarty(0);
			$template->display('public/registro.tpl');
		}
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