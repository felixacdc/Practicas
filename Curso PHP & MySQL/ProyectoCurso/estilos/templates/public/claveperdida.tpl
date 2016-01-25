<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ProyectoCurso</title>
</head>
<body>
	<h1>Recuperar Contraseña</h1>
	{if isset($error)}
	{$error}
	{/if}
	<form action="index.php?modo=claveperdida" method="POST">
		<label>Email: </label><input type="email" name="email"><br><br>
		<input type="submit" value="Recuperar Contraseña"><br><br>
	</form>
</body>
</html>
