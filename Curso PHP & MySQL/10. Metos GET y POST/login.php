<?php 

# Usuario: Felix
# Contraseña: 12345

$_POST['user'];
$_POST['pass'];

# empty verifica si una variable esta vacia o no tru si esta vacia y false si no lo esta
if (empty($_POST['user']) or  empty($_POST['pass'])) {
	echo 'Los dos campos tiene que estar llenos.';
}elseif ($_POST['user'] == 'Felix' and  $_POST['pass'] == '12345') {
	echo 'El usuario y la contraseña fueron correctos <br/>';
}else{
	echo 'O el usuario o la contraseña fueron incorrectos <br/>';
}


?>