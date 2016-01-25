<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ProyectoCurso</title>
</head>
<body>
	<h1>Index</h1>
	{if isset($error)}
	{$error}
	{/if}
	<form action="index.php?modo=login" method="POST">
		<label>User: </label><input type="text" name="user"><br><br>
		<label>Password: </label><input type="password" name="pass"><br><br>
		<input type="hidden" name="login" value="1">
		<a href="index.php?modo=registro">Registrarme</a><br><br>
		<a href="index.php?modo=claveperdida">Recuperar Contraseña</a><br><br>
		<input type="submit" value="Iniciar Sesion"><br><br>
	</form>
</body>
</html>
