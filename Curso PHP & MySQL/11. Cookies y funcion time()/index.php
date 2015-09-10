<?php 
$color = '';

if (!empty($_COOKIE['color'])) {
	$color=$_COOKIE['color'];
}

# isset verifica si una variable esta definida o no true si esta definida y false si no lo esta
# request es una variable que me permite recoger datos de post, get y cookie
if (isset($_REQUEST['miradio'])) {

	if ($_REQUEST['miradio'] == 1) {
		
		# setcookie() sirve para crear una cookie
		# primer parametro el nombre
		# segundo parametro el valor
		# tercer parametro tiempo que durara la cookie activa
		# cuarto parametro indica el lugar o el ambito donde podra ser utilizada la cookie si colocamos / significa que podra ser usada en la carpeta actual
		setcookie('color','red',time() + (60 * 60),'/');
		#redirecciona a una url indicada
		header('location: index.php');
	} elseif($_REQUEST['miradio'] == 2) {
		setcookie('color','blue',time() + (60 * 60),'/');
		header('location: index.php');
	}
	
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Mis cookies</title>
 </head>
 <body style="background-color: <?php echo $color; ?>">
 	<form action="index.php" method="POST">
 		<label for=""><input type="radio" name="miradio" value="1">Elegi color rojo</label><br>
 		<label for=""><input type="radio" name="miradio" value="2">Elegi color azul</label><br>
 		<input type="submit" value="Elegir color de fondo">
 	</form>
 </body>
 </html>