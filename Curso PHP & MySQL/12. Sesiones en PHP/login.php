<?php 

# Usuario: Felix
# Contraseña: 12345

// $_POST['user'];
// $_POST['pass'];
// $_POST['sesion'];

if (isset($_POST['user']) and isset($_POST['pass'])) {
	
	# empty verifica si una variable esta vacia o no tru si esta vacia y false si no lo esta
	if (empty($_POST['user']) or  empty($_POST['pass'])) {
		# si estan vacias
		header('location: index.php?error=1');
	}elseif ($_POST['user'] == 'Felix' and  $_POST['pass'] == '12345') {
		# algo si son correctos los datos
		session_start();
		$_SESSION['usuario'] = $_POST['user'];
		header('location: accedido.php');
	}else{
		# hara otra cosa
		header('location: index.php?error=2');
	}

}else{
	# no estan definidas
	header('location: index.php?error=3');
}
?>