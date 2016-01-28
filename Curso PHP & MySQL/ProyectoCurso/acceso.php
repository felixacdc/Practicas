<?php

session_start();

if (isset($_SESSION['user'])) {

	include('includes/libs/Smarty.class.php');
	$template = new Smarty(0);
	$template->assign(array(
		'user' => $_SESSION['user']
	));
	$template->display('acceso.tpl');

} else {
	session_start();
	session_destroy();
	header('location: index.php?error=acceso');
}

 ?>
