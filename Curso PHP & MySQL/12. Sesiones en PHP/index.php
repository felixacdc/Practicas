<?php 
	
	if(isset($_GET['error']))
	{
		 if ($_GET['error'] == 1) {
		 	echo 'ERROR: Debes llenar todos los datos';
		 } elseif ($_GET['error'] == 2) {
		 	echo 'ERROR: Los datos que has ingresado no son los correctos.';
		 } elseif ($_GET['error'] == 3) {
		 	echo 'ERROR: No intentes saltarte el formulario';
		 } elseif ($_GET['error'] == 4) {
		 	echo 'ERROR: No intentes acceder sin iniciar sesion.';
		 }
		 
		 unset($_GET['error']);
	}

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acceso de usuario</title>
</head> 
<body>
	<form action="login.php" method="POST">
		<label for="">Usuario:</label>
		<input type="text" name="user"><br/>
		<label for="">Contraseña</label>
		<input type="text" name="pass"><br/>
		<label for=""><input type="checkbox" name="sesion" value="1"></label>
		<input type="submit" value="Clickame aqui Felix">
	</form>
</body>
</html>